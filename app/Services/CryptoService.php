<?php

namespace App\Services;

use Exception;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\Http;

class CryptoService extends Facade
{
    const COIN_INFO_ENDPOINT = 'v2/cryptocurrency/info';

    const LATEST_QUOTE_ENDPOINT = 'v2/cryptocurrency/quotes/latest';

    protected int $cache = 60 * 60; // 30 minutes

    protected $client;

    public function __construct(){
        $this->client = Http::withHeaders([
            'X-CMC_PRO_API_KEY' => config('api.coinmarket')
        ])->baseUrl('https://pro-api.coinmarketcap.com/');
    }

    public function withCache($seconds)
    {
        $this->cache = $seconds;
        return $this;
    }

    public function request($url, $method = 'get')
    {
        try{
            $method = strtolower($method);

            if(!$this->cache){
                return $this->client->{$method}($url)->throw()->json('data');
            }

            return Cache::remember($url, now()->addSeconds($this->cache), function() use($method, $url){
                return (new self)->client->{$method}($url)->throw()->json('data');
            });
        }
        catch(Exception $ex)
        {
            logger("Crypto service has failed: " . $ex->getMessage());
            throw new Exception($ex);
        }
    }

    public function getLatestQuotes(array $assets, $key = 'symbol')
    {
        $params = '?' . http_build_query([$key => implode(',', $assets)]);
        $url = self::LATEST_QUOTE_ENDPOINT . $params;
        return $this->request($url);
    }

    public function getLatestQuote(string $asset, string $key = 'symbol')
    {
        return (object) $this->getLatestQuotes([$asset], $key)[strtoupper($asset)][0];
    }

    public function getAssets(array $assets, $key = 'symbol')
    {
        $params = '?' . http_build_query([$key => implode(',', $assets)]);
        $url = self::COIN_INFO_ENDPOINT . $params;
        return $this->request($url);
    }

    public function getAsset(string $asset, $key = 'symbol')
    {
        return (object) $this->getAssets([$asset], $key)[strtoupper($asset)][0];
    }
}
