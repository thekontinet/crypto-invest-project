<div>
    <div class="card card-bordered">
        <div class="card-inner">
            <div class="card-title-group mb-1">
                <div class="card-title">
                    <h6 class="title">Investment Overview</h6>
                    <p>The investment overview of your platform. <a href="{{route('invest.index')}}">All Investment</a></p>
                </div>
            </div>
            <div class="card-content mt-0">
                <div class="tab-pane" id="overview">
                    <div class="invest-ov gy-2">
                        <div class="subtitle">Currently Actived Investment</div>
                        <div class="invest-ov-details">
                            <div class="invest-ov-info">
                                <div class="amount">{{$investment->amount->format()}}</div>
                                <div class="title">Amount</div>
                            </div>
                            <div class="invest-ov-stats">
                                <div>
                                    @if ($investment->rate >= 0)
                                    <span class="change up text-success">
                                        <em class="icon ni ni-arrow-long-up"></em>
                                        {{floatval(abs($investment->rate))}}%
                                    </span>
                                    @elseif ($investment->rate < 0)
                                    <span class="change down text-danger">
                                        <em class="icon ni ni-arrow-long-down"></em>
                                        {{floatval(abs($investment->rate))}}%
                                    </span>
                                    @endif
                                </div>
                                <div class="title">{{$investment->plan->title}}</div>
                            </div>
                        </div>
                        <div class="invest-ov-details">
                            <div class="invest-ov-info">
                                <div class="amount">{{$investment->profit->format()}}</div>
                                <div class="title">Paid Profit</div>
                            </div>
                        </div>
                    </div>
                    <div class="invest-ov gy-2">
                        <div class="subtitle">Investment in this Month</div>
                        <div class="invest-ov-details">
                            <div class="invest-ov-info">
                                <div class="amount">49,395.395  <span class="currency currency-usd">USD</span></div>
                                <div class="title">Amount</div>
                            </div>
                            <div class="invest-ov-stats">
                                <div><span class="amount">23</span><span class="change down text-danger"><em class="icon ni ni-arrow-long-down"></em>1.93%</span></div>
                                <div class="title">Plans</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
