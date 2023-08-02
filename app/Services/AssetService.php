<?php

namespace App\Services;

use App\Models\Asset;

class AssetService
{
    public function __construct(private CryptoService $cryptoService){}

    /**
     * Create a new Asset instance using data retrieved from a crypto service.
     *
     * @param  string  $symbol  The symbol of the asset used to retrieve information from the crypto service.
     * @return \App\Models\Asset
     */
    public function make(string $symbol): Asset
    {
        $result = $this->cryptoService->getAsset($symbol);
        $asset = new Asset;

        $asset->fill([
            'category' => 'crypto',
            'name' => $result->name,
            'symbol' => $result->symbol,
            'price' => 0,
            'logo' => $result->logo,
            'data' => $result
        ]);

        return $asset;
    }

    public function create(string $symbol): Asset
    {
        $asset = $this->make($symbol);
        $asset->save();
        return $asset;
    }

    public function update(Asset $asset): Asset
    {
        $result = $this->cryptoService->getLatestQuote($asset->symbol)->quote['USD'];

        $asset->fill([
            'price' => $result['price'],
            'data' => $result
        ]);
        $asset->save();

        return $asset;
    }
}
