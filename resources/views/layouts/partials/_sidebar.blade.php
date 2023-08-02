<!-- sidebar @s -->
<div class="nk-sidebar nk-sidebar-fixed " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <x-application-logo/>
        </div>
        <div class="nk-menu-trigger me-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
        </div>
    </div><!-- .nk-sidebar-element -->
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-body" data-simplebar>
            <div class="nk-sidebar-content">
                <div class="nk-sidebar-widget d-none d-xl-block">
                    <div class="user-account-info between-center">
                        <div class="user-account-main">
                            <h6 class="overline-title-alt">Available Balance</h6>
                            <div class="user-balance">{{auth()->user()->balance}}</div>
                        </div>
                        <a href="{{route('admin.investments.index')}}" class="btn btn-white btn-icon btn-light"><em class="icon ni ni-line-chart"></em></a>
                    </div>
                    <div class="user-account-actions">
                        <ul class="g-3">
                            <li><a href="{{route('transact', 'recieve')}}" class="btn btn-lg btn-primary"><span>Deposit</span></a></li>
                            <li><a href="{{route('transact', 'send')}}" class="btn btn-lg btn-warning"><span>Withdraw</span></a></li>
                        </ul>
                    </div>
                </div><!-- .nk-sidebar-widget -->
                <div class="nk-sidebar-widget nk-sidebar-widget-full d-xl-none pt-0">
                    <a class="nk-profile-toggle toggle-expand" data-target="sidebarProfile" href="#">
                        <div class="user-card-wrap">
                            <div class="user-card">
                                <div class="user-avatar">
                                    <span>AB</span>
                                </div>
                                <div class="user-info">
                                    <span class="lead-text">Abu Bin Ishtiyak</span>
                                    <span class="sub-text">info@softnio.com</span>
                                </div>
                                <div class="user-action">
                                    <em class="icon ni ni-chevron-down"></em>
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="nk-profile-content toggle-expand-content" data-content="sidebarProfile">
                        <div class="user-account-info between-center">
                            <div class="user-account-main">
                                <h6 class="overline-title-alt">Available Balance</h6>
                                <div class="user-balance">2.014095 <small class="currency currency-btc">BTC</small></div>
                                <div class="user-balance-alt">18,934.84 <span class="currency currency-btc">BTC</span></div>
                            </div>
                            <a href="#" class="btn btn-icon btn-light"><em class="icon ni ni-line-chart"></em></a>
                        </div>
                        <ul class="user-account-data">
                            <li>
                                <div class="user-account-label">
                                    <span class="sub-text">Profits (7d)</span>
                                </div>
                                <div class="user-account-value">
                                    <span class="lead-text">+ 0.0526 <span class="currency currency-btc">BTC</span></span>
                                    <span class="text-success ms-2">3.1% <em class="icon ni ni-arrow-long-up"></em></span>
                                </div>
                            </li>
                            <li>
                                <div class="user-account-label">
                                    <span class="sub-text">Deposit in orders</span>
                                </div>
                                <div class="user-account-value">
                                    <span class="sub-text text-base">0.005400 <span class="currency currency-btc">BTC</span></span>
                                </div>
                            </li>
                        </ul>
                        <ul class="user-account-links">
                            <li><a href="#" class="link"><span>Withdraw Funds</span> <em class="icon ni ni-wallet-out"></em></a></li>
                            <li><a href="#" class="link"><span>Deposit Funds</span> <em class="icon ni ni-wallet-in"></em></a></li>
                        </ul>
                        <ul class="link-list">
                            <li><a href="html/crypto/profile.html"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                            <li><a href="html/crypto/profile-security.html"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                            <li><a href="html/crypto/profile-activity.html"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li>
                        </ul>
                        <ul class="link-list">
                            <li><a href="#"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                        </ul>
                    </div>
                </div><!-- .nk-sidebar-widget -->
                <div class="nk-sidebar-menu">
                    <!-- Menu -->
                    <ul class="nk-menu">
                        <li class="nk-menu-heading">
                            <h6 class="overline-title">Menu</h6>
                        </li>
                        <li class="nk-menu-item">
                            <a href="{{route('dashboard')}}" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                <span class="nk-menu-text">Dashboard</span>
                            </a>
                        </li>
                        <li class="nk-menu-item">
                            <a href="{{route('transactions.index')}}" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-repeat"></em></span>
                                <span class="nk-menu-text">Transactions</span>
                            </a>
                        </li>
                        <li class="nk-menu-item has-sub">
                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                <span class="nk-menu-icon"><em class="icon ni ni-growth"></em></span>
                                <span class="nk-menu-text">Investments</span>
                            </a>
                            <ul class="nk-menu-sub">
                                <li class="nk-menu-item">
                                    <a href="{{route('invest.create')}}" class="nk-menu-link">
                                        <span class="nk-menu-text">New Investment</span>
                                    </a>
                                    <a href="{{route('invest.index')}}" class="nk-menu-link">
                                        <span class="nk-menu-text">My Investments</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nk-menu-item">
                            <a href="/wallets" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-wallet-alt"></em></span>
                                <span class="nk-menu-text">Wallets</span>
                            </a>
                        </li>
                        <li class="nk-menu-item">
                            <a href="/profile" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-user-c"></em></span>
                                <span class="nk-menu-text">My Account</span>
                            </a>
                        </li>
                        @if (auth()->user()->isAdmin())
                        <li class="nk-menu-heading">
                            <h6 class="overline-title">Admin Area</h6>
                        </li>
                        <li class="nk-menu-item">
                            <a href="{{route('admin.users.index')}}" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
                                <span class="nk-menu-text">All Users</span>
                            </a>
                        </li>
                        <li class="nk-menu-item">
                            <a href="{{route('admin.assets.index')}}" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
                                <span class="nk-menu-text">All Assets</span>
                            </a>
                        </li>
                        <li class="nk-menu-item">
                            <a href="{{route('admin.transactions.index')}}" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
                                <span class="nk-menu-text">User Transactions</span>
                            </a>
                        </li>
                        <li class="nk-menu-item">
                            <a href="{{route('admin.investments.index')}}" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
                                <span class="nk-menu-text">User Investments</span>
                            </a>
                        </li>
                        <li class="nk-menu-item">
                            <a href="{{route('admin.plans.index')}}" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
                                <span class="nk-menu-text">Investment Plans</span>
                            </a>
                        </li>
                        @endif
                    </ul><!-- .nk-menu -->
                </div><!-- .nk-sidebar-menu -->
            </div><!-- .nk-sidebar-content -->
        </div><!-- .nk-sidebar-body -->
    </div><!-- .nk-sidebar-element -->
</div>
<!-- sidebar @e -->
