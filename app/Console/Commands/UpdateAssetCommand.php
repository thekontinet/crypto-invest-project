<?php

namespace App\Console\Commands;

use App\Models\Asset;
use App\Services\AssetService;
use Illuminate\Console\Command;

class UpdateAssetCommand extends Command
{
    public function __construct(private AssetService $assetService)
    {
        parent::__construct();
    }
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update-asset';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update all assets data';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        foreach(Asset::all() as $asset){
            $this->assetService->update($asset);
        }
    }
}
