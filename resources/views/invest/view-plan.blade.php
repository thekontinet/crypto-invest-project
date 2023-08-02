<x-app-layout>
    <h1>{{$plan->title}}</h1>
    <p>{{$plan->description}}</p>

    <form action="{{route('invest.store')}}" method="post">
        @csrf
        <input type="hidden" name="plan_id" value="{{$plan->id}}">
        <div class="form-group">
            <label for="asset_id">Wallet</label>
            <x-app::asset-list-input name="wallet" key='symbol'/>
            <span class="text-danger">{{$errors->first('wallet')}}</span>
        </div>

        <div class="form-group">
            <label for="amount">Amount</label>
            <x-app::money-input min="{{$plan->price}}" name="amount"/>
            <span class="text-danger">{{$errors->first('amount')}}</span>
        </div>


        <div class="form-group">
            <button class="btn btn-primary">Invest</button>
        </div>
    </form>
</x-app-layout>
