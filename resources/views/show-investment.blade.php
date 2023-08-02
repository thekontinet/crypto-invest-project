<x-app-layout>
    <div class="card card-bordered">
        <div class="card-aside-wrap">
            <div class="card-content">
                <div class="card-inner">
                    <div class="nk-block">
                        <div class="nk-block-head nk-block-head-sm nk-block-between">
                            <h5 class="title">Investment Details</h5>
                        </div><!-- .nk-block-head -->
                        <div class="row gy-5">
                            <div class="col-md-3 col-lg-2 col-6">
                                <div class="profile-stats">
                                    <span class="profile-ud-label">Capital</span>
                                    <span> {{$investment->amount->format()}} </span>
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-2 col-6">
                                <div class="profile-stats">
                                    <span class="profile-ud-label">Capital Worth</span>
                                    <span>{{$investment->amount->currencyFormat()}}</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-2  col-6">
                                <div class="profile-stats">
                                    <span class="profile-ud-label">Plan</span>
                                    <span>{{$investment->plan?->title}}</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-2  col-6">
                                <div class="profile-stats">
                                    <span class="profile-ud-label">Start Date</span>
                                    <span>{{$investment->created_at->format('jS M Y')}}</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-2  col-6">
                                <div class="profile-stats">
                                    <span class="profile-ud-label">End Date</span>
                                    <span>{{$investment->end_date->format('jS M Y')}}</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- .nk-block -->
                    <div class="nk-divider divider md"></div>
                    <div class="nk-block">
                        <div class="nk-block-head nk-block-head-sm nk-block-between">
                            <h5 class="title">Outcome Details</h5>
                        </div><!-- .nk-block-head -->
                        <div class="row gy-5">
                            <div class="col-md-2 col-sm-4 col-6">
                                <div class="profile-stats">
                                    <span class="profile-ud-label">Total Profit</span>
                                    <span class="amount text-primary">{{$investment->profit->format()}}</span>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-6">
                                <div class="profile-stats">
                                    <span class="profile-ud-label">Profit Worth</span>
                                    <span class="amount text-success">{{$investment->profit->currencyFormat()}}</span>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-12">
                                <div class="profile-stats">
                                    <abbr data-bs-toggle="tooltip" data-bs-placement="top" title="Last Profit Percentage" class="profile-ud-label">Profit %</abbr>
                                    <span class="amount {{$investment->rate >= 0 ? 'text-success' : 'text-danger'}}">
                                        {{floatval($investment->rate)}}%
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-12">
                                <div class="profile-stats">
                                    <span class="profile-ud-label">Total Return</span>
                                    <span class="amount">{{$investment->total->format()}}</span>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-12">
                                <div class="profile-stats">
                                    <span class="profile-ud-label">Status</span>
                                    @if ($investment->status->isOpen())
                                        <span class="badge bg-success">{{__('OPEN')}}</span>
                                    @endif
                                    @if ($investment->status->isClosed())
                                        <span class="badge bg-warning">{{__('CLOSED')}}</span>
                                    @endif
                                    @if ($investment->status->isWithdrawn())
                                        <span class="badge bg-danger">{{__('WITHDRAWN')}}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div><!-- .nk-block -->


                    <!--TODO: profit area -->
                    {{-- <div class="nk-divider divider md"></div>
                    <div class="nk-block">
                        <div class="nk-block-head nk-block-head-sm nk-block-between">
                            <h5 class="title">Loan Status</h5>
                        </div><!-- .nk-block-head -->
                        <div class="row gy-5">
                            <div class="col-12 col-md-10 col-lg-8">
                                <div class="profile-stats">
                                    <div class="progress progress-lg">
                                        <div class="progress-bar progress-bar-striped bg-success" data-progress="75" style="width: 75%;">75%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .nk-block --> --}}


                    <div class="nk-divider divider md"></div>
                    <div class="nk-block">
                        <div class="nk-block-head nk-block-head-sm nk-block-between">
                            <h5 class="title"><code>Action Area</code></h5>
                        </div><!-- .nk-block-head -->
                        <div class="row gy-5">
                            {{-- Withdraw form --}}
                            <div class="col-12 col-md-6">
                                <h4 class="h6">Withdraw Investment</h4>
                                <form action="{{route('invest.update', $investment)}}" method="post">
                                    @csrf
                                    @method('put')
                                    <button class="btn btn-primary" name="withdraw">Withdraw</button>
                                </form>
                            </div>

                            {{-- manage profit form --}}
                            @if (auth()->user()->isAdmin())
                            <div class="col-12 col-md-6">
                                <h4 class="h6">Manage Profit</h4>
                                @foreach ($errors->all() as $error)
                                    <p class="text-danger">{{$error}}</p>
                                @endforeach
                                <form action="{{route('admin.investments.update', $investment)}}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="input-group">
                                        <select name="type" class="form-control">
                                            <option value="credit" selected>Credit</option>
                                            <option value="debit">Debit</option>
                                        </select>
                                        <input type="text" name="amount" class="form-control" placeholder="$0.00">
                                        <button class="btn btn-primary">Proceed</button>
                                    </div>
                                </form>
                            </div>
                            @endif

                            {{-- Delete Investment --}}
                            @if (auth()->user()->isAdmin())
                            <div class="col-12 col-md-6">
                                <h4 class="h6">Delete Investment</h4>
                                <form action="{{route('admin.investments.destroy', $investment)}}" method="post" onsubmit="return confirm('Are you sure of this action ?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">DELETE</button>
                                </form>
                            </div>
                            @endif

                            {{-- Change Status --}}
                            @if (auth()->user()->isAdmin())
                            <div class="col-12 col-md-6">
                                <h4 class="h6">Investment Status</h4>
                                <form action="{{route('admin.investments.update', $investment)}}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <select name="status" class="form-control">
                                            <option value="{{App\Enums\Status::OPEN}}" {{$investment->status === App\Enums\Status::OPEN ? 'selected' : ''}}>OPEN</option>
                                            <option value="{{App\Enums\Status::CLOSED}}" {{$investment->status === App\Enums\Status::CLOSED ? 'selected' : ''}}>CLOSED</option>
                                        </select>
                                    </div>
                                    <button class="btn btn-primary">Update</button>
                                </form>
                            </div>
                            @endif
                        </div>
                    </div><!-- .nk-block -->
                </div><!-- .card-inner -->
            </div><!-- .card-content -->
        </div><!-- .card-aside-wrap -->
    </div>
</x-app-layout>
