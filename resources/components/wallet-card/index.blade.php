@props(['wallet'])
<div class="card card-bordered">
    <div class="nk-wgw">
        <div class="nk-wgw-inner">
            <a class="nk-wgw-name" href="javascript:void">
                <div class="nk-wgw-icon">
                    <x-app::asset-image :asset="$wallet->asset"/>
                </div>
                <h5 class="nk-wgw-title title">{{$wallet->name}}</h5>
            </a>
            <div class="nk-wgw-balance">
                <div class="amount">{{$wallet->balance->format()}}</div>
                <div class="amount-sm">{{$wallet->balance->toCurrency()}}<span class="currency currency-usd">{{$wallet->currency}}</span></div>
            </div>
        </div>
        <div class="nk-wgw-actions">
            <ul>
                <li><a href="{{route('transact', 'send')}}"><em class="icon ni ni-arrow-up-right"></em> <span>Send</span></a></li>
                <li><a href="{{route('transact', 'recieve')}}"><em class="icon ni ni-arrow-down-left"></em><span>Receive</span></a></li>
            </ul>
        </div>
    </div>
</div>
