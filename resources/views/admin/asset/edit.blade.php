<x-app-layout>
    <h4>Modify Management</h4>

    <div class="my-4">
        <form action="{{route('admin.assets.update', $asset)}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <x-asset-list-input :asset="$asset" name="asset"/>
                <span class="text-danger">{{$errors->first('asset')}}</span>
            </div>

            <div class="form-group">
                <label for="address">Enter Wallet Address</label>
                <input type="text" name="address" class="form-control" value="{{old('address', $asset->address)}}" placeholder="Wallet address here"/>
                <span class="text-danger">{{$errors->first('address')}}</span>
            </div>

            <button class="btn btn-primary">Update</button>
        </form>
    </div>
</x-app-layout>
