<x-app-layout>
    <h4>Modify Asset</h4>

    <div class="my-4">
        <form action="{{route('admin.assets.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="address">Enter Asset Symbol</label>
                <input type="text" name="symbol" class="form-control" placeholder="BTC"/>
                <span class="text-danger">{{$errors->first('symbol')}}</span>
            </div>

            <button class="btn btn-primary">Create</button>
        </form>
    </div>
</x-app-layout>
