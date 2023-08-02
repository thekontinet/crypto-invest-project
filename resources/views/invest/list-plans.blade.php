<x-app-layout>
    <div class="nk-block nk-block-sm">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h6 class="nk-block-title">All Investment Plans</h6>
                </div>
                @if (auth()->user()->isAdmin())
                <div class="nk-block-head-content">
                    <a class="btn btn-primary" href="{{route('admin.plans.create')}}">Create</a>
                </div>
                @endif
            </div>
        </div>

        <div class="nk-block-body">
            <div class="row g-2">
                @foreach ($plans as $plan)
                <div class="col-sm-4">
                    <div class="card card-bordered pricing text-center">
                        <div class="pricing-body">
                            <div class="pricing-media"> <img src="/images/plan-icon.svg" alt="">
                            </div>
                            <div class="pricing-title w-220px mx-auto">
                                <h5 class="title">{{$plan->title}}</h5>
                                <span class="sub-text">{{$plan->description}}</span>
                            </div>
                            <div class="pricing-amount">
                                <small><strong>Investment Duration: </strong>{{now()->addSeconds($plan->duration)->fromNow()}}</small>
                                <div class="amount">${{$plan->price}}</div>
                                @foreach ($plan->data as $description)
                                <span class="bill d-block">{{$description}}</span>
                                @endforeach
                            </div>
                            <div class="pricing-action">
                                <a href="{{route('invest.edit', $plan->id)}}" class="btn btn-block mb-1 btn-primary">Select Plan</a>
                                @if (auth()->user()->isAdmin())
                                <a href="{{route('admin.plans.edit', $plan)}}" class="btn btn-block mb-1 btn-info">Edit Plan</a>
                                <form action="{{route('admin.plans.destroy', $plan)}}" method="post" onsubmit="return confirm('Are you sure of this action ?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-block btn-danger">Delete</button>
                                </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="my-4">
                {{$plans->links()}}
            </div>
        </div>
    </div>
</x-app-layout>
