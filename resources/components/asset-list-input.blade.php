@props(['key' => 'id', 'asset' => null, 'assets' => null])

@php
    $assets = $assets ?? App\Models\Asset::all();
@endphp

<div class="card card-bordered card-full">
    @isset ($title)
    <div class="card-inner border-bottom">
        <div class="card-title-group">
            <div class="card-title">
                <h6 class="title">{{$title}}</h6>
            </div>
        </div>
    </div>
    @endisset
    <div class="nk-activity" x-data="{value:{{json_encode($asset?->$key ?? '')}}}">
        @foreach ($assets as $_asset)
        <label x-show="value == '' || value == '{{$_asset->$key}}'" class="nk-activity-item border-y-0">
            <div class="nk-activity-media user-avatar bg-secondary">
                <x-asset-image :asset="$_asset"/>
            </div>
            <div class="nk-activity-data">
                <div class="label">{{$_asset->name}}</div>
                <span class="time">{{$_asset->price}}</span>
            </div>
            <div class="ms-auto">-</div>
            <input type="radio" value="{{$_asset->$key}}" {{$attributes}} x-model='value' hidden>
        </label>
        @endforeach
        <div class="p-1" x-cloak x-show="value != ''">
            <label type="button" role="button" class="btn btn-sm btn-light d-block">
                Cancel
                <input type="radio" value="" {{$attributes}} x-model='value' hidden>
            </label>
        </div>
    </div>
</div>
