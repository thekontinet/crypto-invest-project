@props(['transactions'])
<div>
    @foreach ($transactions as $transaction)
        <div class="tranx-item">
            <div class="tranx-col">
                <div class="tranx-info">
                    <div class="tranx-badge">
                        <span class="tranx-icon">
                            <img src="{{ $transaction->wallet->asset->logo }}" alt="">
                        </span>
                    </div>
                    <div class="tranx-data">
                        <div class="tranx-label">{{ $transaction->description }}</div>
                        <div class="tranx-date">{{ $transaction->created_at->diffForHumans() }}</div>
                    </div>
                </div>
            </div>
            <div class="tranx-col">
                <div class="tranx-amount">
                    <div class="number">{{ $transaction->amount->format() }}</div>
                    @if ($transaction->status->isSuccess())
                        <span class="badge bg-success">{{ __('completed') }}</span>
                    @endif
                    @if ($transaction->status->isPending())
                        <span class="badge bg-warning">{{ __('pending') }}</span>
                    @endif
                    @if ($transaction->status->isFailed())
                        <span class="badge bg-danger">{{ __('failed') }}</span>
                    @endif
                </div>
            </div>
            @if (auth()->user()->isAdmin())
            <div class="tranx-col">
                <div class="dropdown">
                    <button class="btn dropdown-toggle" href="#" type="button"
                        data-bs-toggle="dropdown">D</button>
                    <div class="dropdown-menu">
                        <div class="dropdown-item">
                            <form action="{{route('admin.transactions.destroy', $transaction)}}" method="post" onsubmit="return confirm('Are you sure you want to delete this transaction ?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn text-danger">Remove</button>
                            </form>
                        </div>
                        <div class="dropdown-item">
                            <form action="{{route('admin.transactions.update', $transaction)}}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="btn-group">
                                    @if (!$transaction->status->isSuccess())
                                    <button class="btn text-success" name="status" value="{{App\Enums\Status::SUCCESS->value}}">Approve</button>
                                    @endif
                                    @if(!$transaction->status->ispending())
                                    <button class="btn text-warning" name="status" value="{{App\Enums\Status::PENDING->value}}">Pend</button>
                                    @endif
                                    @if(!$transaction->status->isFailed())
                                    <button class="btn text-danger" name="status" value="{{App\Enums\Status::FAILED->value}}">Cancel</button>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    @endforeach
</div>
