@props(['wallet'])
<div class="card bg-light">
    <div class="nk-wgw sm">
        <a class="nk-wgw-inner" href="javascript:void">
            <div class="nk-wgw-name">
                <div class="nk-wgw-icon">
                    <img src="{{$wallet->asset->logo}}" alt="{{$wallet->currency}}" width='30px'>
                </div>
                <h5 class="nk-wgw-title title">{{$wallet->asset->name}}</h5>
            </div>
            <div class="nk-wgw-balance">
                <div class="amount">{{$wallet->balance->format()}}</div>
                <div class="text-sm" style="font-size: 12px">{{$wallet->balance->toCurrency()}}<span class="currency currency-nio">{{$wallet->currency}}</span></div>
            </div>
        </a>
    </div>
</div>
