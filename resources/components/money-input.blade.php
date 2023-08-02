@props(['currency' => 'USD', 'rate' => null])
<div>
    <div class="form-control-group">
        <input type='text'
               {{$attributes->merge(['class' => 'form-control form-control-lg form-control-number'])}}>
        @if ($currency !== 'USD')
            <div class="form-dropdown">
                <div class="text">USD<span>/</span>{{strtoupper($currency)}}</div>
            </div>
        @endif
    </div>
    <div class="form-note-group">
        <span class="buysell-min form-note-alt">Min: {{$attributes->get('min') ?? 10}} USD</span>
        @if ($currency !== 'USD' && $rate)
         <span class="buysell-rate form-note-alt">1 {{strtoupper($currency)}} = {{printf('%.1f', $rate)}} USD</span>
        @endif
    </div>
</div>
