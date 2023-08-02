<x-app-layout>
    <div class="container-fluid">
        <header class="d-flex justify-content-between align-items-center">
            <h4>Asset Management</h4>
            <a href="{{route('admin.assets.create')}}" class="btn btn-primary">Create</a>
        </header>

        <div class="my-4">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <th>Name</th>
                        <th>Symbol</th>
                        <th>Type</th>
                        <th>Wallet Address</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($assets as $asset)
                            <tr>
                                <td>
                                    <span class="d-flex align-items-center">
                                        <img class="me-1" src="{{$asset->logo}}" alt="Logo" width="30px">
                                        {{$asset->name}}
                                    </span>
                                </td>
                                <td>{{$asset->symbol}}</td>
                                <td>{{$asset->category}}</td>
                                <td>{{$asset->address}}</td>
                                <td>
                                    <form class="btn-group" action="{{route('admin.assets.destroy', $asset)}}" method="post" onsubmit="return confirm('Are you sure you want to clear this wallet address ?')">
                                        @csrf
                                        @method('DELETE')
                                        <a class="btn btn-light" href="{{route('admin.assets.edit', $asset)}}">Modify</a>
                                        <button class="btn btn-danger">Clear</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        {{$assets->links()}}
    </div>
</x-app-layout>
