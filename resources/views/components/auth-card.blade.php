@props(['title', 'description'])
<div class="nk-block nk-block-middle nk-auth-body  wide-xs">
    <div class="brand-logo pb-4 text-center">
        <x-application-logo/>
    </div>
    <div class="card card-bordered">
        <div class="card-inner card-inner-lg">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h4 class="nk-block-title">{{$title}}</h4>
                    <div class="nk-block-des">
                        <p>{{$description}}</p>
                    </div>
                </div>
            </div>
            {{$slot}}
        </div>
    </div>
</div>
