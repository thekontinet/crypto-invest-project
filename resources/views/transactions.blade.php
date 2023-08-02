<x-app-layout>
    <div class="container">
        <div class="nk-block nk-block-sm">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    <div class="nk-block-head-content">
                        <h6 class="nk-block-title">All Transaction</h6>
                    </div>
                    <ul class="nk-block-tools gx-3">
                        <li>
                            <div class="dropdown">
                                <a class="dropdown-toggle btn btn-icon btn-trigger mx-n2" data-bs-toggle="dropdown" data-offset="-8,0"><em class="icon ni ni-setting"></em></a>
                                <div class="dropdown-menu dropdown-menu-xs dropdown-menu-end">
                                    <ul class="link-check">
                                        <li><span>Show</span></li>
                                        <li class="{{request()->get('limit') == 15 ? 'active' : ''}}"><a href="{{route('transactions.index', ['limit' => 15])}}">15</a></li>
                                        <li><a class="{{request()->get('limit') == 25 ? 'active' : ''}}" href="{{route('transactions.index', ['limit' => 25])}}">25</a></li>
                                        <li><a class="{{request()->get('limit') == 50 ? 'active' : ''}}" href="{{route('transactions.index', ['limit' => 50])}}">50</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul><!-- .nk-block-tools -->
                </div>
            </div><!-- .nk-block-head -->
        @foreach ($transactions->groupBy('month') as $label => $_transactions)
            <h6 class="lead-text text-soft">{{now()->make($label)->format('M, Y')}}</h6>
            <x-app::transactions-list :transactions="$_transactions"/>
        @endforeach
        <div class="my-2">
            {{$transactions->links()}}
        </div>
    </div>
</x-app-layout>
