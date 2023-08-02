<?php

namespace App\Http\Livewire;

use App\Dtos\MoneyDto;
use App\Enums\TransactionType;
use App\Exceptions\CustomeException;
use App\Models\Asset;
use App\Models\Transaction;
use App\Models\User;
use App\Services\TransactionService;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Transact extends Component
{
    public string | null $currency = null;
    public string $type;
    public $address = '';
    public $amount = 1;

    public function getAssetProperty()
    {
        return Asset::where('symbol', $this->currency)->first();
    }

    protected function rules(): array
    {
        return [
            'amount' => ['required', 'numeric', 'min:10'],
            'currency' => ['required', 'exists:assets,symbol'],
            'type' => ['required', Rule::in(TransactionType::toArray())],
            'address' => ['required_if:type,' . TransactionType::SEND->value],
        ];;
    }

    protected $messages = [
        'amount.min' => 'Amount must be upto :min USD',
        'address.required_if' => 'Please provide a valid wallet address',
    ];

    public function mount(string $type)
    {
        $this->type = $type;
    }


    public function submit(TransactionService $transactionService)
    {
        $this->validate($this->rules(), $this->messages);

        $wallet = User::find(auth()->id())->walletByCurrency($this->currency);

        try{
            if($this->type === TransactionType::SEND->value){
                $wallet->update(['address' => $this->address]);
                $transaction = $transactionService->withdraw($wallet, MoneyDto::from($this->amount, $this->currency));
            }else{
                $transaction = $transactionService->deposit($wallet, MoneyDto::from($this->amount, $this->currency));
            }
        }
        catch(CustomeException $ex)
        {
            $this->dispatchBrowserEvent('alert', ['message' => $ex->getMessage()]);
            return to_route('dashboard')->with('error', $ex->getMessage());
        }


        $this->dispatchBrowserEvent('alert', ['message' => 'Transaction submitted.']);

        return $this->type === TransactionType::RECIEVE->value ? to_route('transactions.show', $transaction) : to_route('dashboard');
    }

    public function render()
    {
        $assets = $this->type == TransactionType::RECIEVE->value ?
            Asset::where('address', '<>', null)->get() :
            Asset::all();
        return view('livewire.transact', compact('assets'));
    }
}
