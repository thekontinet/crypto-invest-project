<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Asset;
use App\Services\AssetService;
use Exception;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Request;

class AssetController extends Controller
{
    public function index()
    {
        $assets = Asset::paginate();
        return view('admin.asset.index', compact('assets'));
    }

    public function create()
    {
        return view('admin.asset.create');
    }

    public function store(Request $request, AssetService $assetService)
    {
        try{
            $request->validate(['symbol' => ['required', 'unique:assets']]);

            $assetService->create($request->symbol);

            return to_route('admin.assets.index')->with('message', 'New asset added');
        }
        catch(Exception $ex)
        {
            logger($ex);
            return to_route('admin.assets.index')->with('error', 'Crypto service could not fetch this asset. Asset symbol may be invalid or not available on our service');
        }
    }

    public function edit(Asset $asset)
    {
        return view('admin.asset.edit', compact('asset'));
    }

    public function update(Request $request, Asset $asset)
    {
        $data = $request->validate(
            [
                'asset' => ['required', 'exists:assets,id', 'exclude'],
                'address' => ['required']
            ]
        );

        $asset = Asset::find($request->asset);
        $asset->fill($data);
        $asset->save();

        return to_route('admin.assets.index')->with('message', 'wallet address updated. This asset can now be used for transaction');
    }

    public function destroy(Asset $asset)
    {
        $asset->fill(['address' => null]);
        $asset->save();
        return to_route('admin.assets.index')->with('message', 'This asset will no longer be used for transaction');
    }
}
