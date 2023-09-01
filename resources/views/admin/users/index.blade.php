<x-app-layout>
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Users Lists</h3>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="card card-bordered card-stretch">
                        <div class="card-inner-group">
                            <div class="card-inner p-0">
                                <div class="nk-tb-list nk-tb-ulist">
                                    <div class="nk-tb-item nk-tb-head">
                                        <div class="nk-tb-col"><span class="sub-text">User</span></div>
                                        <div class="nk-tb-col tb-col-mb"><span class="sub-text">Balance</span></div>
                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Phone</span></div>
                                        <div class="nk-tb-col tb-col-lg"><span class="sub-text">Verified</span></div>
                                        <div class="nk-tb-col tb-col-lg"><span class="sub-text">Last Login</span></div>
                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></div>
                                        <div class="nk-tb-col nk-tb-col-tools text-end">
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                    @foreach ($users as $user)
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col">
                                            <a href="#">
                                                <div class="user-card">
                                                    <div class="user-info">
                                                        <span class="tb-lead">{{$user->name}} <span class="dot dot-success d-md-none ms-1"></span></span>
                                                        <span>{{$user->email}}</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-mb">
                                            <span class="tb-amount">{{$user->balance}}</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>{{$user->phone}}</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <ul class="list-status">
                                                @if ($user->email_verified_at)
                                                <li><em class="icon text-success ni ni-check-circle"></em> <span>Email</span></li>
                                                @else
                                                <li><em class="icon text-danger ni ni-check-circle"></em> <span>Email</span></li>
                                                @endif
                                                {{-- <li><em class="icon ni ni-alert-circle"></em> <span>KYC</span></li> --}}
                                            </ul>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>{{$user->last_login_at}}</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            @if ($user->is_blocked)
                                                <span class="tb-status text-danger">Inactive</span>
                                            @else
                                                <span class="tb-status text-success">Active</span>
                                            @endif
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="{{route('admin.users.show', $user)}}"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                <li><a href="{{route('admin.transactions.index', ['user_id' => $user])}}"><em class="icon ni ni-repeat"></em><span>Transaction</span></a></li>
                                                                <li><a href="{{route('admin.investments.index', ['user_id' => $user])}}"><em class="icon ni ni-activity-round"></em><span>Investments</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                    @endforeach
                                </div><!-- .nk-tb-list -->
                            </div><!-- .card-inner -->
                            <div class="card-inner">
                                <div class="nk-block-between-md g-3">
                                    <div class="g">

                                    </div>
                                    <div class="g">
                                        <div class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">
                                            {{$users->links()}}
                                        </div>
                                    </div><!-- .pagination-goto -->
                                </div><!-- .nk-block-between -->
                            </div><!-- .card-inner -->
                        </div><!-- .card-inner-group -->
                    </div><!-- .card -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</x-app-layout>
