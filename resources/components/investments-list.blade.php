@props(['investments'])
<div>
    @foreach ($investments as $investment)
    @php
        $link = auth()
            ->user()
            ->isAdmin()
            ? route('admin.investments.show', $investment)
            : route('invest.show', $investment);
    @endphp
        <div class="tranx-item">
            <div class="tranx-col">
                <div class="tranx-info">
                    <div class="tranx-badge">
                        <span class="tranx-icon">
                            <img src="{{ $investment->asset->logo }}" alt="">
                        </span>
                    </div>
                    <div class="tranx-data">
                        <div class="tranx-label">{{ $investment->plan?->title }}</div>
                        <div class="tranx-date">{{ $investment->created_at->format('d m Y') }}</div>
                    </div>
                </div>
            </div>
            <div class="tranx-col">
                <div class="tranx-amount">
                    <div class="number">{{ $investment->amount->format() }}</div>
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
            <div class="tranx-col">
                <a class="btn btn-sm" href="{{$link}}">open</a>
            </div>
        </div>
    @endforeach
</div>
