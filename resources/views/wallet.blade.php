<x-app-layout>
    <div class="nk-block nk-block-sm">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h6 class="nk-block-title">All Wallets</h6>
                </div>
            </div>
        </div>

        <div class="nk-block-body">
            <div class="row">
                @foreach (auth()->user()->wallets as $wallet)
                <div class="col-md-6">
                    <x-app::wallet-card :wallet="$wallet"/>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
