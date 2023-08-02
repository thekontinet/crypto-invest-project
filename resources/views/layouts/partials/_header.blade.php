<!-- main header @s -->
<div class="nk-header nk-header-fluid nk-header-fixed is-light">
    <div class="container-fluid">
        <div class="nk-header-wrap">
            <div class="nk-menu-trigger d-xl-none ms-n1">
                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
            </div>
            <div class="nk-header-brand d-xl-none">
                <a href="html/crypto/index.html" class="logo-link">
                    <x-application-logo/>
                    <span class="nio-version">{{config('app.name')}}</span>
                </a>
            </div>
            {{-- <div class="nk-header-news d-none d-xl-block">
                <div class="nk-news-list">
                    <a class="nk-news-item" href="#">
                        <div class="nk-news-icon">
                            <em class="icon ni ni-card-view"></em>
                        </div>
                        <div class="nk-news-text">
                            <p>Do you know the latest update of 2022? <span> A overview of our is now available on YouTube</span></p>
                            <em class="icon ni ni-external"></em>
                        </div>
                    </a>
                </div>
            </div> --}}
            <div class="nk-header-tools">
                <ul class="nk-quick-nav">
                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                            <div class="user-toggle">
                                <div class="user-avatar sm">
                                    <em class="icon ni ni-user-alt"></em>
                                </div>
                                <div class="user-info d-none d-md-block">
                                    <div class="user-name dropdown-indicator">{{auth()->user()->name}}</div>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end dropdown-menu-s1">
                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                <div class="user-card">
                                    <div class="user-avatar">
                                        <span>{{substr( auth()->user()->name,0,2)}}</span>
                                    </div>
                                    <div class="user-info">
                                        <span class="lead-text">{{auth()->user()->name}}</span>
                                        <span class="sub-text">{{auth()->user()->email}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-inner user-account-info">
                                <h6 class="overline-title-alt">Wallet Balance</h6>
                                <div class="user-balance">{{auth()->user()->balance}}</div>
                                <a href="{{route('transact', 'send')}}" class="link">
                                    <span>Withdraw Funds</span>
                                    <em class="icon ni ni-wallet-out"></em>
                                </a>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li><a href="{{route('profile.edit')}}"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                    <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a></li>
                                </ul>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li><button class="btn" form="logout-form"><em class="icon ni ni-signout"></em><span>Sign out</span></button></li>
                                    <form id="logout-form" action="{{route('logout')}}" method="post">@csrf</form>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- main header @e -->
