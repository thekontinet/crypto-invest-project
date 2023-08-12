<div>
    @php
        $id = 'id' . rand(1000, 10000);
    @endphp
    <div id="{{$id}}" style="height: 400px"></div>
    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function(){
                new TradingView.widget( {
                    "autosize": true,
                    "symbol": "BINANCE:BTCUSDT",
                    "interval": "D",
                    "timezone": "Etc/UTC",
                    "theme": "dark",
                    "style": "1",
                    "locale": "en",
                    "enable_publishing": true,
                    "allow_symbol_change": true,
                    "container_id": "{{$id}}"
                })
            })
        </script>
    @endpush
</div>
