@props(['assets', 'selected'])

<div class="dropdown buysell-cc-dropdown">
    <a href="#" class="buysell-cc-choosen dropdown-indicator" data-bs-toggle="dropdown">
        <div class="coin-item coin-btc">
            <div class="coin-icon">
                <img src="{{$selected->logo}}" alt="logo" width="30px">
            </div>
            <div class="coin-info">
                <span class="coin-name">{{$selected->name}} ({{$selected->symbol}})</span>
                {{-- <span class="coin-text">Last Order: Nov 23, 2019</span> --}}
            </div>
        </div>
    </a>
    <div class="dropdown-menu dropdown-menu-auto dropdown-menu-mxh">
        <ul class="buysell-cc-list">
            @foreach ($assets as $asset)
            <li class="buysell-cc-item selected">
                <a wire:click.prevent="updateAsset({{$asset}})" href="#" class="buysell-cc-opt" data-currency="btc">
                    <div class="coin-item coin-btc">
                        <div class="coin-icon">
                            <img src="{{$asset->logo}}" alt="logo" width="30px">
                        </div>
                        <div class="coin-info">
                            <span class="coin-name">{{$asset->name}} ({{$asset->symbol}})</span>
                            {{-- <span class="coin-text">Last Order: Nov 23, 2019</span> --}}
                        </div>
                    </div>
                </a>
            </li>
            @endforeach
        </ul>
    </div><!-- .dropdown-menu -->
</div><!-- .dropdown -->
