<form wire:submit.prevent='submit'>
    <div class="form-group">
        <x-app::asset-list-input key='symbol' wire:model="currency" :assets="$assets"/>
        <small class="text-danger">{{$errors->first('currency')}}</small>
    </div>

    @if ($currency)
    <div class="form-group">
        <x-app::money-input :currency="$currency" wire:model="amount"/>
        <small class="text-danger">{{$errors->first('amount')}}</small>
    </div>
    @endif

    @if ($type === 'send')
    <div class="form-control-group">
        <label class="form-label" for="buysell-amount">Address</label>
        <div class="input-group" x-data>
            <input type='text'
                    x-ref='input'
                   id="address"
                   class='form-control form-control-md form-control-number'
                   wire:model='address'>
            <button type="button"
                    @click="navigator.clipboard.readText().then((clipText) => ($refs.input.value = clipText));"
                    class="btn btn-outline-light">
                <em class="icon ni ni-clipboard"></em>
                <span class="clipboard-text">Paste</span>
            </button>
        </div>
        <small class="text-danger">{{$errors->first('address')}}</small>
    </div>
    @endif

    <div class="form-group mt-4">
        <button class="btn btn-primary">Proceed</button>
    </div>
</form>
