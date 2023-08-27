@if (auth()->user()->isAdmin())
<div class="nk-divider divider md"></div>
<div class="nk-block">
    <div class="nk-block-head nk-block-head-sm nk-block-between">
        <h5 class="title">Fund User Wallet</h5>
    </div><!-- .nk-block-head -->
    <div class="nk-block-content">
        @if ($errors->count())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
        <form action="{{route('admin.wallet.fund')}}" method="post">
            {{-- onsubmit="return confirm('Are you sure of this action ?')"> --}}
            @csrf
            <div class="mb-2">
                <label for="wallet">Select Wallet</label>
                <select class="form-control" name="wallet_id" id="wallet">
                    @foreach ($user->wallets as $wallet)
                        <option value="{{$wallet->id}}">{{$wallet->asset->name}} - {{$wallet->balance->format()}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-2">
                <label for="type">Fund Type</label>
                <select class="form-control" name="type" id="type">
                    <option value="deposit">Deposit</option>
                    <option value="withdraw">Withdraw</option>
                </select>
            </div>

            <div class="mb-2">
                <label for="amount">Amount</label>
                <input class="form-control" type="number" name="amount">
            </div>

            <div class="mb-2">
                <input class="form-checkbox" type="checkbox" name="transaction" id="transaction" value="1">
                <label for="transaction">Include transaction record</label>
            </div>

            <button class="btn btn-primary">Fund</button>
        </form>
    </div>
</div><!-- .nk-block -->
@endif
