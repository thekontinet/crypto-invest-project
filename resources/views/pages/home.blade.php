<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <title>{{ config('app.name') }} - Professional Forex, and Stocks Trading Platform </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Sites meta Data -->
    <meta name="application-name" content="{{ config('app.name') }} - Professional Forex, and Stocks Trading Platform">
    <meta name="author" content="{{ config('app.name') }}">
    <meta name="keywords" content="Bitrader, Crypto, Forex, and Stocks Trading Business">
    <meta name="description" content="Professional Forex, and Stocks Trading Platform">

    <!-- OG meta data -->
    <meta property="og:title" content="{{ config('app.name') }} - Professional Forex, and Stocks Trading Platform">
    <meta property="og:site_name" content="{{ config('app.name') }}">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:description" content="Welcome to {{ config('app.name') }}">
    <meta property="og:type" content="website">
    <meta property="og:image" content="/favicon./apple-touch-icon.png">



    <link rel="apple-touch-icon" sizes="180x180" href="/favicon./apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon./favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon./favicon-16x16.png">
    <link rel="manifest" href="/favicon./site.webmanifest">

    <link rel="stylesheet" href="/ui_assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/ui_assets/css/aos.css">
    <link rel="stylesheet" href="/ui_assets/css/all.min.css">

    <link rel="stylesheet" href="/ui_assets/css/swiper-bundle.min.css">



    <!-- main css for template -->
    <link rel="stylesheet" href="/ui_assets/css/style.css">
</head>

<body>

    <!-- ===============>> Preloader start here <<================= -->
    <div class="preloader">
        <img src="/images/logo.png" alt="preloader icon">
    </div>
    <!-- ===============>> Preloader end here <<================= -->



    <!-- ===============>> light&dark switch start here <<================= -->
    <div class="lightdark-switch">
        <span class="dark-btn" id="btnSwitch"><img src="/ui_assets/images/icon/moon.svg" alt="light-dark-switchbtn"
                class="swtich-icon"></span>
    </div>
    <!-- ===============>> light&dark switch start here <<================= -->





    <!-- ===============>> Header section start here <<================= -->
    <header class="header-section header-section--style2">
        <div class="header-bottom">
            <div class="container">
                <div class="header-wrapper">
                    <div class="logo">
                        <x-application-logo/>
                    </div>
                    <div class="menu-area">
                        <ul class="menu menu--style1">
                            {{-- <li>
                <a href="/">Home</a>
              </li>
              <li>
                <a href="#0">Services</a>
              </li> --}}
                        </ul>

                    </div>
                    <div class="header-action">
                        <div class="menu-area">
                            <div class="header-btn">
                                <a href="{{route('register')}}" class="trk-btn trk-btn--border trk-btn--primary">
                                    <span>Join Now</span>
                                </a>
                                <a href="{{route('login')}}" class="trk-btn trk-btn--border trk-btn--secondary">
                                    <span>Login</span>
                                </a>
                            </div>

                            <!-- toggle icons -->
                            <div class="header-bar d-lg-none header-bar--style1">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ===============>> Header section end here <<================= -->





    <!-- ===============>> Banner section start here <<================= -->
    <section class="banner banner--style1">
        <div class="banner__bg">
            <div class="banner__bg-element">
                <img src="/ui_assets/images/banner/home1/bg.png" alt="section-bg-element"
                    class="dark d-none d-lg-block">
                <span class="bg-color d-lg-none"></span>
            </div>
        </div>
        <div class="container">
            <div class="banner__wrapper">
                <div class="row gy-5 gx-4">
                    <div class="col-lg-6 col-md-7">
                        <div class="banner__content" data-aos="fade-right" data-aos-duration="1000">
                            <div class="banner__content-coin">
                                <img src="/ui_assets/images/banner/home1/3.png" alt="coin icon">
                            </div>
                            <h1 class="banner__content-heading">
                                We Invest Solely
                                in <span>Disruptive Innovations</span>
                            </h1>
                            <p class="banner__content-moto">For investors seeking long-term growth.</p>
                            <div class="banner__btn-group btn-group">
                                <a href="{{ route('register') }}" class="trk-btn trk-btn--primary trk-btn--arrow">
                                    GetStarted
                                    <span><i class="fa-solid fa-arrow-right"></i></span>
                                </a>
                                <a href="{{ route('login') }}" class="trk-btn trk-btn--secondary trk-btn--arrow">
                                    Login
                                    <span><i class="fa-solid fa-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="banner__thumb" data-aos="fade-left" data-aos-duration="1000">
                            <img src="/ui_assets/images/banner/home1/1.png" alt="banner-thumb" class="dark">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner__shape">
            <span class="banner__shape-item banner__shape-item--1">
                <img src="/ui_assets/images/banner/home1/4.png" alt="shape icon">
            </span>
        </div>

    </section>
    <!-- ===============>> Banner section end here <<================= -->


    <!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container">
        <div class="tradingview-widget-container__widget"></div>
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
            {
                "symbols": [{
                        "proName": "FOREXCOM:SPXUSD",
                        "title": "S&P 500"
                    },
                    {
                        "proName": "FOREXCOM:NSXUSD",
                        "title": "US 100"
                    },
                    {
                        "proName": "FX_IDC:EURUSD",
                        "title": "EUR to USD"
                    },
                    {
                        "proName": "BITSTAMP:BTCUSD",
                        "title": "Bitcoin"
                    },
                    {
                        "proName": "BITSTAMP:ETHUSD",
                        "title": "Ethereum"
                    }
                ],
                "showSymbolLogo": true,
                "colorTheme": "light",
                "isTransparent": true,
                "displayMode": "adaptive",
                "locale": "en"
            }
        </script>
    </div>
    <!-- TradingView Widget END -->



    <!-- ===============>> About section start here <<================= -->
    <section class="about about--style1 ">
        <div class="container">
            <div class="about__wrapper">
                <div class="row gx-5  gy-4 gy-sm-0  align-items-center">
                    <div class="col-lg-6">
                        <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                            <div class="about__thumb-inner">
                                <div class="about__thumb-image floating-content">
                                    <img class="dark" src="/ui_assets/images/about/1.png" alt="about-image">
                                    <div class="floating-content__top-left">
                                        <div class="floating-content__item">
                                            <h3> <span class="purecounter" data-purecounter-start="0"
                                                    data-purecounter-end="10">30</span>
                                                Years
                                            </h3>
                                            <p>Consulting Experience</p>
                                        </div>
                                    </div>
                                    <div class="floating-content__bottom-right">
                                        <div class="floating-content__item">
                                            <h3> <span class="purecounter" data-purecounter-start="0"
                                                    data-purecounter-end="25">25K</span>K+
                                            </h3>
                                            <p>Satisfied Customers</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about__content" data-aos="fade-left" data-aos-duration="800">
                            <div class="about__content-inner">
                                <h2>Why <span>{{ config('app.name') }}</span></h2>

                                <p class="mb-0">
                                    {{config('app.name')}} identifies more innovation evolving today than ever before. We believe it is
                                    changing lives and businesses across the globe dramatically, creating opportunities
                                    to own the next big thing by investing in the future today.
                                </p>
                                <a href="{{ route('register') }}" class="trk-btn trk-btn--border trk-btn--primary">
                                    Join us Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===============>> About section start here <<================= -->




    <!-- ===============>> feature section start here <<================= -->
    <section class="feature feature--style1 padding-bottom padding-top bg-color">
        <div class="container">
            <div class="feature__wrapper">
                <div class="row g-5 align-items-center justify-content-between">
                    <div class="col-md-6 col-lg-5">
                        <div class="feature__content" data-aos="fade-right" data-aos-duration="800">
                            <div class="feature__content-inner">
                                <div class="section-header">
                                    <h2 class="mb-15 mt-minus-5"> <span>benefits </span>We offer</h2>
                                    <p class="mb-0">
                                        Unlock the full potential of our platform with our top notch features
                                    </p>
                                </div>

                                <div class="feature__nav">
                                    <div class="nav nav--feature flex-column nav-pills" id="feat-pills-tab"
                                        role="tablist" aria-orientation="vertical">
                                        <div class="nav-link active" id="feat-pills-one-tab" data-bs-toggle="pill"
                                            data-bs-target="#feat-pills-one" role="tab"
                                            aria-controls="feat-pills-one" aria-selected="true">
                                            <div class="feature__item">
                                                <div class="feature__item-inner">
                                                    <div class="feature__item-content">
                                                        <h6>Profitable Investment Solution</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nav-link" id="feat-pills-two-tab" data-bs-toggle="pill"
                                            data-bs-target="#feat-pills-two" role="tab"
                                            aria-controls="feat-pills-two" aria-selected="false">
                                            <div class="feature__item">
                                                <div class="feature__item-inner">
                                                    <div class="feature__item-content">
                                                        <h6>more Security and control over money from the rest</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="nav-link" id="feat-pills-three-tab" data-bs-toggle="pill"
                                            data-bs-target="#feat-pills-three" role="tab"
                                            aria-controls="feat-pills-three" aria-selected="false">
                                            <div class="feature__item">
                                                <div class="feature__item-inner">
                                                    <div class="feature__item-content">
                                                        <h6>Mobile payment is more flexible and easy for all investors
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nav-link" id="feat-pills-four-tab" data-bs-toggle="pill"
                                            data-bs-target="#feat-pills-four" role="tab"
                                            aria-controls="feat-pills-four" aria-selected="false">
                                            <div class="feature__item">
                                                <div class="feature__item-inner">
                                                    <div class="feature__item-content">
                                                        <h6>all transactions is kept free for all investors
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="feature__thumb pt-5 pt-md-0" data-aos="fade-left" data-aos-duration="800">
                            <div class="feature__thumb-inner">
                                <div class="tab-content" id="feat-pills-tabContent">
                                    <div class="tab-pane fade show active" id="feat-pills-one" role="tabpanel"
                                        aria-labelledby="feat-pills-one-tab" tabindex="0">
                                        <div class="feature__image floating-content">
                                            <img src="/ui_assets/images/feature/1.png" alt="Feature image">
                                            <div class="floating-content__top-right floating-content__top-right--style2"
                                                data-aos="fade-left" data-aos-duration="1000">
                                                <div
                                                    class="floating-content__item floating-content__item--style2 text-center">
                                                    <img src="/ui_assets/images/feature/5.png" alt="rating">
                                                    <p class="style2">Interest Rate For Loan</p>
                                                </div>
                                            </div>
                                            <div class="floating-content__bottom-left floating-content__bottom-left--style2"
                                                data-aos="fade-left" data-aos-duration="1000">
                                                <div
                                                    class="floating-content__item floating-content__item--style3  d-flex align-items-center">
                                                    <h3 class="style2"> <span class="purecounter"
                                                            data-purecounter-start="0"
                                                            data-purecounter-end="10">10M</span>M
                                                    </h3>
                                                    <p class="ms-3 style2">Available for loan</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="feat-pills-two" role="tabpanel"
                                        aria-labelledby="feat-pills-two-tab" tabindex="0">
                                        <div class="feature__image floating-content">
                                            <img src="/ui_assets/images/feature/2.png" alt="Feature image">
                                            <div class="floating-content__top-right floating-content__top-right--style2"
                                                data-aos="fade-left" data-aos-duration="1000">
                                                <div
                                                    class="floating-content__item floating-content__item--style2 text-center">
                                                    <img src="/ui_assets/images/feature/6.png" alt="rating">
                                                    <p class="style2">Interest Rate For Loan</p>
                                                </div>
                                            </div>
                                            <div class="floating-content__bottom-left floating-content__bottom-left--style2"
                                                data-aos="fade-left" data-aos-duration="1000">
                                                <div
                                                    class="floating-content__item floating-content__item--style3  d-flex align-items-center">
                                                    <h3 class="style2"> <span class="purecounter"
                                                            data-purecounter-start="0"
                                                            data-purecounter-end="18">10M</span>M
                                                    </h3>
                                                    <p class="ms-3 style2">Available for loan</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="feat-pills-three" role="tabpanel"
                                        aria-labelledby="feat-pills-three-tab" tabindex="0">
                                        <div class="feature__image floating-content">
                                            <img src="/ui_assets/images/feature/1.png" alt="Feature image">
                                            <div class="floating-content__top-right floating-content__top-right--style2"
                                                data-aos="fade-left" data-aos-duration="1000">
                                                <div
                                                    class="floating-content__item floating-content__item--style2 text-center">
                                                    <img src="/ui_assets/images/feature/7.png" alt="rating">
                                                    <p class="style2">Interest Rate For Loan</p>
                                                </div>
                                            </div>
                                            <div class="floating-content__bottom-left floating-content__bottom-left--style2"
                                                data-aos="fade-left" data-aos-duration="1000">
                                                <div
                                                    class="floating-content__item floating-content__item--style3  d-flex align-items-center">
                                                    <h3 class="style2"> <span class="purecounter"
                                                            data-purecounter-start="0"
                                                            data-purecounter-end="30">10M</span>M
                                                    </h3>
                                                    <p class="ms-3 style2">Available for loan</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="feat-pills-four" role="tabpanel"
                                        aria-labelledby="feat-pills-four-tab" tabindex="0">
                                        <div class="feature__image floating-content">
                                            <img src="/ui_assets/images/feature/2.png" alt="Feature image">
                                            <div class="floating-content__top-right floating-content__top-right--style2"
                                                data-aos="fade-left" data-aos-duration="1000">
                                                <div
                                                    class="floating-content__item floating-content__item--style2 text-center">
                                                    <img src="/ui_assets/images/feature/8.png" alt="rating">
                                                    <p class="style2">Interest Rate For Loan</p>
                                                </div>
                                            </div>
                                            <div class="floating-content__bottom-left floating-content__bottom-left--style2"
                                                data-aos="fade-left" data-aos-duration="1000">
                                                <div
                                                    class="floating-content__item floating-content__item--style3  d-flex align-items-center">
                                                    <h3 class="style2"> <span class="purecounter"
                                                            data-purecounter-start="0"
                                                            data-purecounter-end="28">10M</span>M
                                                    </h3>
                                                    <p class="ms-3 style2">Available for loan</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="feature__shape">
            <span class="feature__shape-item feature__shape-item--1"><img src="/ui_assets/images/feature/shape/1.png"
                    alt="shape-icon"></span>
            <span class="feature__shape-item feature__shape-item--2"> <span></span> </span>
        </div>
    </section>
    <!-- ===============>> feature section end here <<================= -->




    <!-- ===============>> Service section start here <<================= -->
    <section class="service padding-top padding-bottom">
        <div class="section-header section-header--max50">
            <h2 class="mb-15 mt-minus-5"><span>services </span>We offer</h2>
            <p>We offer the best services</p>
        </div>
        <div class="container">
            <div class="service__wrapper">
                <div class="row g-4 align-items-center">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="service__item" data-aos="fade-up" data-aos-duration="800">
                            <div class="service__item-inner text-center">
                                <div class="service__thumb mb-30">
                                    <div class="service__thumb-inner">
                                        <img class="dark" src="/ui_assets/images/service/1.png" alt="service-icon">
                                    </div>
                                </div>
                                <div class="service__content">
                                    <h5 class="mb-15"> <a class="stretched-link" href="#">Tailored Investment
                                            Solutions</a> </h5>
                                    <p class="mb-0">We understand that each investor has unique goals and risk
                                        tolerance. That's why {{ config('app.name') }} provides personalized investment
                                        solutions that align with your preferences. Whether you're seeking long-term
                                        growth or short-term gains, our platform offers diverse investment strategies to
                                        suit your needs.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="service__item" data-aos="fade-up" data-aos-duration="1000">
                            <div class="service__item-inner text-center">
                                <div class="service__thumb mb-30">
                                    <div class="service__thumb-inner">
                                        <img class="dark" src="/ui_assets/images/service/2.png" alt="service-icon">
                                    </div>
                                </div>
                                <div class="service__content">
                                    <h5 class="mb-15"> <a class="stretched-link"
                                            href="service-details.html">Managing a diversified portfolio</a> </h5>
                                    <p class="mb-0">Managing your crypto portfolio has never been easier.
                                        {{ config('app.name') }}'s cutting-edge algorithms automate the portfolio
                                        management process, continuously analyzing market trends and rebalancing your
                                        investments to maximize potential returns. Sit back and let our technology do
                                        the work for you.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="service__item" data-aos="fade-up" data-aos-duration="1200">
                            <div class="service__item-inner text-center">
                                <div class="service__thumb mb-30">
                                    <div class="service__thumb-inner">
                                        <img class="dark" src="/ui_assets/images/service/3.png" alt="service-icon">
                                    </div>
                                </div>
                                <div class="service__content">
                                    <h5 class="mb-15"> <a class="stretched-link" href="#">Access to Leading
                                            Assets</a> </h5>
                                    <p class="mb-0">Diversification is the key to successful investing. With
                                        {{ config('app.name') }}, you have access to a wide array Of leading investment markets be it cryptocurrencies, agriculture, foreign exchange, medicine, robotics and other prominent investment markets. Explore new investment opportunities and build a diversified portfolio tailored
                                        to your risk appetite.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="service__item" data-aos="fade-up" data-aos-duration="800">
                            <div class="service__item-inner text-center">
                                <div class="service__thumb mb-30">
                                    <div class="service__thumb-inner">
                                        <img class="dark" src="/ui_assets/images/service/4.png" alt="service-icon">
                                    </div>
                                </div>
                                <div class="service__content">
                                    <h5 class="mb-15"> <a class="stretched-link" href="#">Transparent
                                            Investment Tracking</a>
                                    </h5>
                                    <p class="mb-0">Stay on top of your investments with our real-time tracking and
                                        reporting tools. Monitor the performance of your portfolio, track historical
                                        gains, and get a clear overview of your investment journey. Our transparent
                                        approach ensures you always have a clear picture of your investment progress.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="service__item" data-aos="fade-up" data-aos-duration="1000">
                            <div class="service__item-inner text-center">
                                <div class="service__thumb mb-30">
                                    <div class="service__thumb-inner">
                                        <img class="dark" src="/ui_assets/images/service/5.png" alt="service-icon">
                                    </div>
                                </div>
                                <div class="service__content">
                                    <h5 class="mb-15"> <a class="stretched-link" href="#">Dedicated
                                            Support</a> </h5>
                                    <p class="mb-0">We value our users and are committed to providing exceptional
                                        customer support. Our knowledgeable team is available round-the-clock to assist
                                        you with any questions or concerns you may have. Be it technical
                                        assistance or investment guidance, we're here to support you every step of the
                                        way.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="service__item" data-aos="fade-up" data-aos-duration="1200">
                            <div class="service__item-inner text-center">
                                <div class="service__thumb mb-30">
                                    <div class="service__thumb-inner">
                                        <img class="dark" src="/ui_assets/images/service/6.png" alt="service-icon">
                                    </div>
                                </div>
                                <div class="service__content">
                                    <h5 class="mb-15"> <a class="stretched-link" href="#">Regualr Market
                                            Development</a>
                                    </h5>
                                    <p class="mb-0">Stay ahead of the game with our regular market insights and
                                        analysis. Receive updates on the latest trends, news, and developments in the
                                        crypto & forex market space. Our expertly curated market reports help you make
                                        well-informed investment choices.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===============>> Service section start here <<================= -->



    <!-- ===============>> Pricing section start here <<================= -->
    <section class="pricing padding-top padding-bottom">
        <div class="section-header section-header--max50">
            <h2 class="mb-15 mt-minus-5">Our <span>pricing </span>plans</h2>
            <p>We offer the best investment plans</p>
        </div>
        <div class="container">
            <div class="pricing__wrapper">
                <div class="row g-4 align-items-center">
                    @foreach ($plans as $plan)
                    <div class="col-md-6 col-lg-4">
                        <div class="pricing__item" data-aos="fade-right" data-aos-duration="1000">
                            <div class="pricing__item-inner">
                                <div class="pricing__item-content">

                                    <!-- pricing top part -->
                                    <div class="pricing__item-top">
                                        <h6 class="mb-15">{{$plan->title}}</h6>
                                        <h3 class="mb-25">{{$plan->price->format()}}</h3>
                                        <p class="mb-15">{{$plan->description}}</p>
                                    </div>

                                    <!-- pricing middle part -->
                                    <div class="pricing__item-middle">
                                        <ul class="pricing__list">
                                            @foreach ($plan->data as $feature)
                                            <li class="pricing__list-item">
                                                <span>
                                                    <img src="/ui_assets/images/icon/check.svg" alt="check" class="dark">
                                                </span>
                                                {{$feature}}
                                            </li>
                                            @endforeach
                                        </ul>

                                    </div>

                                    <!-- pricing bottom part -->
                                    <div class="pricing__item-bottom">
                                        <a href="{{route('invest.edit', $plan->id)}}" class="trk-btn trk-btn--outline">Choose Plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="pricing__shape">
            <span class="pricing__shape-item pricing__shape-item--1"> <span></span> </span>
            <span class="pricing__shape-item pricing__shape-item--2"> <img src="/ui_assets/images/icon/1.png"
                    alt="shape-icon">
            </span>
        </div>
    </section>
    <!-- ===============>> Pricing section start here <<================= -->





    <!-- ===============>> Team section start here <<================= -->
    <section class="team padding-top padding-bottom bg-color">
        <div class="section-header section-header--max50">
            <h2 class="mb-15 mt-minus-5">Meet our <span>advisers</span></h2>
            <p>Hey everyone, meet our amazing advisers! They're here to help and guide you through anything.</p>
        </div>
        <div class="container">
            <div class="team__wrapper">
                <div class="row g-4 align-items-center">
                    <div class="col-sm-6 col-lg-3">
                        <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="800">
                            <div class="team__item-inner team__item-inner--shape">
                                <div class="team__item-thumb team__item-thumb--style1">
                                    <img src="/ui_assets/images/team/1.png" alt="Team Image" class="dark">
                                </div>
                                <div class="team__item-content team__item-content--style1">
                                    <div class="team__item-author team__item-author--style1">
                                        <div class="team__item-authorinfo">
                                            <h6 class="mb-1"><a href="team-details.html"
                                                    class="stretched-link">Dianne Russell</a> </h6>
                                            <p class="mb-0">Trade Captain</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="900">
                            <div class="team__item-inner team__item-inner--shape">
                                <div class="team__item-thumb team__item-thumb--style1">
                                    <img src="/ui_assets/images/team/2.png" alt="Team Image" class="dark">
                                </div>
                                <div class="team__item-content team__item-content--style1">
                                    <div class="team__item-author team__item-author--style1">
                                        <div class="team__item-authorinfo">
                                            <h6 class="mb-1"><a href="team-details.html"
                                                    class="stretched-link">Andrew Porzio</a> </h6>
                                            <p class="mb-0">Strategic Advisor</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="1000">
                            <div class="team__item-inner team__item-inner--shape">
                                <div class="team__item-thumb team__item-thumb--style1">
                                    <img src="/ui_assets/images/team/3.png" alt="Team Image" class="dark">
                                </div>
                                <div class="team__item-content team__item-content--style1">
                                    <div class="team__item-author team__item-author--style1">
                                        <div class="team__item-authorinfo">
                                            <h6 class="mb-1"><a href="team-details.html"
                                                    class="stretched-link">Courtney Henry</a> </h6>
                                            <p class="mb-0">Management Consultant</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="1100">
                            <div class="team__item-inner team__item-inner--shape">
                                <div class="team__item-thumb team__item-thumb--style1">
                                    <img src="/ui_assets/images/team/4.png" alt="Team Image" class="dark">
                                </div>
                                <div class="team__item-content team__item-content--style1">
                                    <div class="team__item-author team__item-author--style1">
                                        <div class="team__item-authorinfo">
                                            <h6 class="mb-1"><a href="team-details.html"
                                                    class="stretched-link">Albert Flores</a> </h6>
                                            <p class="mb-0">Development Specialist</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="800">
                            <div class="team__item-inner team__item-inner--shape">
                                <div class="team__item-thumb team__item-thumb--style1">
                                    <img src="/ui_assets/images/team/5.png" alt="Team Image" class="dark">
                                </div>
                                <div class="team__item-content team__item-content--style1">
                                    <div class="team__item-author team__item-author--style1">
                                        <div class="team__item-authorinfo">
                                            <h6 class="mb-1"><a href="team-details.html"
                                                    class="stretched-link">Darrell Steward</a> </h6>
                                            <p class="mb-0">Growth Strategist</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="900">
                            <div class="team__item-inner team__item-inner--shape">
                                <div class="team__item-thumb team__item-thumb--style1">
                                    <img src="/ui_assets/images/team/6.png" alt="Team Image" class="dark">
                                </div>
                                <div class="team__item-content team__item-content--style1">
                                    <div class="team__item-author team__item-author--style1">
                                        <div class="team__item-authorinfo">
                                            <h6 class="mb-1"><a href="team-details.html"
                                                    class="stretched-link">Wade Warren</a> </h6>
                                            <p class="mb-0">Trade Consultant</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="1000">
                            <div class="team__item-inner team__item-inner--shape">
                                <div class="team__item-thumb team__item-thumb--style1">
                                    <img src="/ui_assets/images/team/7.png" alt="Team Image" class="dark">
                                </div>
                                <div class="team__item-content team__item-content--style1">
                                    <div class="team__item-author team__item-author--style1">
                                        <div class="team__item-authorinfo">
                                            <h6 class="mb-1"><a href="team-details.html"
                                                    class="stretched-link">Cody Fisher</a> </h6>
                                            <p class="mb-0">HR Consultant</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="1100">
                            <div class="team__item-inner team__item-inner--shape">
                                <div class="team__item-thumb team__item-thumb--style1">
                                    <img src="/ui_assets/images/team/8.png" alt="Team Image" class="dark">
                                </div>
                                <div class="team__item-content team__item-content--style1">
                                    <div class="team__item-author team__item-author--style1">
                                        <div class="team__item-authorinfo">
                                            <h6 class="mb-1"><a href="team-details.html"
                                                    class="stretched-link">Bessie Cooper</a> </h6>
                                            <p class="mb-0">Financial Advisor</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="team.html" class="trk-btn trk-btn--border trk-btn--primary mt-25">View more </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===============>> Team section start here <<================= -->


    <!-- ===============>> Testimonial section start here <<================= -->
    <section class="testimonial padding-top padding-bottom-style2 bg-color">
        <div class="container">
            <div class="section-header d-md-flex align-items-center justify-content-between">
                <div class="section-header__content">
                    <h2 class="mb-15">connect with <span>our Clients </span></h2>
                    <p class="mb-0">We love connecting with our clients to hear about their experiences and how we
                        can improve.
                    </p>
                </div>
                <div class="section-header__action">
                    <div class="swiper-nav">
                        <button class="swiper-nav__btn testimonial__slider-prev"><i
                                class="fa-solid fa-angle-left"></i></button>
                        <button class="swiper-nav__btn testimonial__slider-next active"><i
                                class="fa-solid fa-angle-right"></i></button>
                    </div>
                </div>
            </div>
            <div class="testimonial__wrapper" data-aos="fade-up" data-aos-duration="1000">
                <div class="testimonial__slider swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial__item testimonial__item--style1">
                                <div class="testimonial__item-inner">
                                    <div class="testimonial__item-content">
                                        <p class="mb-0">
                                            "I've been a part of the {{ config('app.name') }} community for over a year
                                            now, and I must say, it's been an incredible journey. As someone new to the
                                            world of cryptocurrencies, I was initially hesitant about investing.
                                            However, {{ config('app.name') }}'s educational resources and personalized
                                            investment recommendations helped me gain the confidence I needed. Their
                                            user-friendly platform made it easy for me to diversify my portfolio, and
                                            the results have been fantastic! Thanks to {{ config('app.name') }}, I've
                                            seen significant growth in my investments and look forward to a bright
                                            financial future."
                                        </p>
                                        <div class="testimonial__footer">
                                            <div class="testimonial__author">
                                                <div class="testimonial__author-thumb">
                                                    <img src="/ui_assets/images/testimonial/1.png" alt="author">
                                                </div>
                                                <div class="testimonial__author-designation">
                                                    <h6>John D</h6>
                                                    <span>Successful Investor</span>
                                                </div>
                                            </div>
                                            <div class="testimonial__quote">
                                                <span><i class="fa-solid fa-quote-right"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial__item testimonial__item--style1">
                                <div class="testimonial__item-inner">
                                    <div class="testimonial__item-content">
                                        <p class="mb-0">
                                            "I cannot emphasize enough how impressed I am with
                                            {{ config('app.name') }}'s commitment to security. With so many horror
                                            stories about hacks and scams in the crypto world, I was hesitant to invest.
                                            But {{ config('app.name') }}'s advanced security features and transparent
                                            approach put my worries to rest. I feel confident knowing that my
                                            investments are safe with {{ config('app.name') }}, and their responsive
                                            customer support team has been a great help whenever I had any questions."
                                        </p>
                                        <div class="testimonial__footer">
                                            <div class="testimonial__author">
                                                <div class="testimonial__author-thumb">
                                                    <img src="/ui_assets/images/testimonial/2.png" alt="author">
                                                </div>
                                                <div class="testimonial__author-designation">
                                                    <h6>Travis L.</h6>
                                                    <span>Manager</span>
                                                </div>
                                            </div>
                                            <div class="testimonial__quote">
                                                <span><i class="fa-solid fa-quote-right"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial__item testimonial__item--style1">
                                <div class="testimonial__item-inner">
                                    <div class="testimonial__item-content">
                                        <p class="mb-0">
                                            "{{ config('app.name') }} has truly made crypto investing a breeze. I'm a
                                            busy professional with limited time to manage my investments actively.
                                            {{ config('app.name') }}'s automated portfolio management has been a
                                            game-changer for me. It continuously adjusts my portfolio based on market
                                            trends, ensuring I stay on track with my financial goals. The platform's
                                            user interface is intuitive, and the overall experience has been smooth and
                                            hassle-free. I recommend {{ config('app.name') }} to anyone looking for a
                                            stress-free way to invest in cryptocurrencies."
                                        </p>
                                        <div class="testimonial__footer">
                                            <div class="testimonial__author">
                                                <div class="testimonial__author-thumb">
                                                    <img src="/ui_assets/images/testimonial/6.png" alt="author">
                                                </div>
                                                <div class="testimonial__author-designation">
                                                    <h6>Michael S</h6>
                                                    <span>Developer</span>
                                                </div>
                                            </div>
                                            <div class="testimonial__quote">
                                                <span><i class="fa-solid fa-quote-right"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===============>> Testimonial section start here <<================= -->




    <!-- ===============>> FAQ section start here <<================= -->
    <section class="faq padding-top padding-bottom of-hidden">
        <div class="section-header section-header--max65">
            <h2 class="mb-15 mt-minus-5"><span>Frequently</span> Asked questions</h2>
            <p>Hey there! Got questions? We've got answers. Check out our FAQ page for all the deets. Still not
                satisfied? Hit
                us up.</p>
        </div>
        <div class="container">
            <div class="faq__wrapper">
                <div class="row g-5 align-items-center justify-content-between">
                    <div class="col-lg-6">
                        <div class="accordion accordion--style1" id="faqAccordion1" data-aos="fade-right"
                            data-aos-duration="1000">
                            <div class="row">
                                <div class="col-12">
                                    <div class="accordion__item ">
                                        <div class="accordion__header" id="faq1">
                                            <button class="accordion__button" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faqBody1"
                                                aria-expanded="false" aria-controls="faqBody1">
                                                <span class="accordion__button-content">What is
                                                    {{ config('app.name') }}?</span>
                                                <span class="accordion__button-plusicon"></span>
                                            </button>
                                        </div>
                                        <div id="faqBody1" class="accordion-collapse collapse show"
                                            aria-labelledby="faq1" data-bs-parent="#faqAccordion1">
                                            <div class="accordion__body">
                                                <p class="mb-15">
                                                    {{ config('app.name') }} is an online crypto investment platform
                                                    that provides users with the tools and resources to invest in
                                                    cryptocurrencies. We offer a user-friendly interface, diversified
                                                    investment options, and automated portfolio management to help you
                                                    achieve your financial goals in the dynamic world of
                                                    cryptocurrencies.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="accordion__item ">
                                        <div class="accordion__header" id="faq2">
                                            <button class="accordion__button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faqBody2"
                                                aria-expanded="true" aria-controls="faqBody2">
                                                <span class="accordion__button-content">Is {{ config('app.name') }}
                                                    secured ?</span>
                                                <span class="accordion__button-plusicon"></span>
                                            </button>
                                        </div>
                                        <div id="faqBody2" class="accordion-collapse collapse"
                                            aria-labelledby="faq2" data-bs-parent="#faqAccordion1">
                                            <div class="accordion__body">
                                                <p class="mb-15">
                                                    Yes, security is our top priority. {{ config('app.name') }} employs
                                                    advanced encryption, multi-factor authentication, and secure storage
                                                    to safeguard your funds and personal information. We are committed
                                                    to maintaining a secure and trusted platform for all our users.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="accordion__item ">
                                        <div class="accordion__header" id="faq3">
                                            <button class="accordion__button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faqBody3"
                                                aria-expanded="false" aria-controls="faqBody3">
                                                <span class="accordion__button-content"> How does
                                                    {{ config('app.name') }}'s automated portfolio management
                                                    work?</span>
                                                <span class="accordion__button-plusicon"></span>
                                            </button>
                                        </div>
                                        <div id="faqBody3" class="accordion-collapse collapse"
                                            aria-labelledby="faq3" data-bs-parent="#faqAccordion1">
                                            <div class="accordion__body">
                                                <p class="mb-15"> Our automated portfolio management uses
                                                    sophisticated algorithms to analyze market trends and historical
                                                    data. It then rebalances your investments to optimize potential
                                                    returns. This ensures that your portfolio stays on track with your
                                                    investment objectives..</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="accordion__item ">
                                        <div class="accordion__header" id="faq4">
                                            <button class="accordion__button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faqBody4"
                                                aria-expanded="false" aria-controls="faqBody4">
                                                <span class="accordion__button-content">Can I withdraw my profits at
                                                    any time?</span>
                                                <span class="accordion__button-plusicon"></span>
                                            </button>
                                        </div>
                                        <div id="faqBody4" class="accordion-collapse collapse"
                                            aria-labelledby="faq4" data-bs-parent="#faqAccordion1">
                                            <div class="accordion__body">
                                                <p class="mb-15">Yes, you can withdraw your profits at any time.
                                                    {{ config('app.name') }} offers a seamless and straightforward
                                                    withdrawal process to ensure you can access your funds whenever you
                                                    need them.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="accordion__item ">
                                        <div class="accordion__header" id="faq5">
                                            <button class="accordion__button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faqBody5"
                                                aria-expanded="false" aria-controls="faqBody5">
                                                <span class="accordion__button-content"> How do I get started with
                                                    {{ config('app.name') }}?</span>
                                                <span class="accordion__button-plusicon"></span>
                                            </button>
                                        </div>
                                        <div id="faqBody5" class="accordion-collapse collapse"
                                            aria-labelledby="faq5" data-bs-parent="#faqAccordion1">
                                            <div class="accordion__body">
                                                <p class="mb-15"> Getting started with {{ config('app.name') }} is
                                                    easy! Simply sign up for an account, complete the verification
                                                    process, and make your first deposit. From there, you can explore
                                                    investment options, set your preferences, and start building your
                                                    crypto portfolio.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="accordion__item border-0">
                                        <div class="accordion__header" id="faq6">
                                            <button class="accordion__button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faqBody6"
                                                aria-expanded="false" aria-controls="faqBody6">
                                                <span class="accordion__button-content">Can I track the performance of
                                                    my Investment ?</span>
                                                <span class="accordion__button-plusicon"></span>
                                            </button>
                                        </div>
                                        <div id="faqBody6" class="accordion-collapse collapse"
                                            aria-labelledby="faq6" data-bs-parent="#faqAccordion1">
                                            <div class="accordion__body">
                                                <p class="mb-15"> Absolutely! {{ config('app.name') }} provides
                                                    real-time tracking and reporting tools to help you monitor the
                                                    performance of your portfolio. You can track historical gains, view
                                                    market insights, and get a clear overview of your investment
                                                    progress.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="faq__thumb faq__thumb--style1" data-aos="fade-left" data-aos-duration="1000">
                            <img class="dark" src="/ui_assets/images/others/1.png" alt="faq-thumb">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="faq__shape faq__shape--style1">
            <span class="faq__shape-item faq__shape-item--1"><img src="/ui_assets/images/others/2.png"
                    alt="shpae-icon"></span>
        </div>
    </section>
    <!-- ===============>> FAQ section start here <<================= -->





    <!-- ===============>> cta section start here <<================= -->
    <section class="cta padding-top padding-bottom  bg-color">
        <div class="container">
            <div class="cta__wrapper">
                <div class="cta__newsletter justify-content-center">
                    <div class="cta__newsletter-inner" data-aos="fade-up" data-aos-duration="1000">
                        <div class="cta__thumb">
                            <img src="/ui_assets/images/cta/3.png" alt="cta-thumb">
                        </div>
                        <div class="cta__subscribe">
                            <h2> <span>Subscribe</span> to our news</h2>
                            <p>Hey! Are you tired of missing out on our updates? Subscribe to our news now and stay in
                                the loop!</p>
                            <form class="cta-form cta-form--style2 form-subscribe" action="#">
                                <div class="cta-form__inner d-sm-flex align-items-center">
                                    <input type="email" class="form-control form-control--style2 mb-3 mb-sm-0"
                                        placeholder="Email Address">
                                    <button class="trk-btn  trk-btn--large trk-btn--secondary2"
                                        type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="cta__shape">
                    <span class="cta__shape-item cta__shape-item--1"><img src="/ui_assets/images/cta/2.png"
                            alt="shape icon"></span>
                    <span class="cta__shape-item cta__shape-item--2"><img src="/ui_assets/images/cta/4.png"
                            alt="shape icon"></span>
                    <span class="cta__shape-item cta__shape-item--3"><img src="/ui_assets/images/cta/5.png"
                            alt="shape icon"></span>
                </div>
            </div>
        </div>
    </section>
    <!-- ===============>> cta section start here <<================= -->





    <!-- ===============>> footer start here <<================= -->
    <footer class="footer brand-1">
        <div class="container">
            <div class="footer__wrapper">
                <div class="footer__top footer__top--style1">
                    <div class="row gy-5 gx-4">
                        <div class="col-md-6">
                            <div class="footer__about">
                                <h1 class="text-white">{{config('app.name')}}</h1>
                                <p class="footer__about-moto">Welcome to {{ config('app.name') }} - Your Gateway to a diversified investment portfolio success. We provide a secure and user- friendly platform to invest in diverse financial market opportunities. Our automated portfolio management and expert insights help you
                                    achieve your financial goals.</p>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-6">
                            <div class="footer__links">
                                <div class="footer__links-tittle">
                                    <h6>Quick links</h6>
                                </div>
                                <div class="footer__links-content">
                                    <ul class="footer__linklist">
                                        <li class="footer__linklist-item"> <a href="about.html">About Us</a>
                                        </li>
                                        <li class="footer__linklist-item"> <a href="team.html">Teams</a>
                                        </li>
                                        <li class="footer__linklist-item"> <a href="service.html">Services</a> </li>
                                        <li class="footer__linklist-item"> <a href="#">Features</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-6">
                            <div class="footer__links">
                                <div class="footer__links-tittle">
                                    <h6>Support</h6>
                                </div>
                                <div class="footer__links-content">
                                    <ul class="footer__linklist">
                                        <li class="footer__linklist-item"> <a href="#">Terms & Conditions</a>
                                        </li>
                                        <li class="footer__linklist-item"> <a href="#">Privacy Policy</a>
                                        </li>
                                        <li class="footer__linklist-item"> <a href="#">FAQs</a></li>
                                        <li class="footer__linklist-item"> <a href="#">Support Center</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4">
                            <div class="footer__links">
                                <div class="footer__links-tittle">
                                    <h6>Company</h6>
                                </div>
                                <div class="footer__links-content">
                                    <ul class="footer__linklist">
                                        <li class="footer__linklist-item"> <a href="#">Careers</a>
                                        </li>
                                        <li class="footer__linklist-item"> <a href="#">Updates</a>
                                        </li>
                                        <li class="footer__linklist-item"> <a href="#">Job</a> </li>
                                        <li class="footer__linklist-item"> <a href="#">Announce</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer__bottom">
                    <div class="footer__end">
                        <div class="footer__end-copyright">
                            <p class="mb-0">© 2023 All Rights Reserved By <a href="/"
                                    target="_blank">{{ config('app.name') }}</a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__shape">
            <span class="footer__shape-item footer__shape-item--1"><img src="/ui_assets/images/footer/1.png"
                    alt="shape icon"></span>
            <span class="footer__shape-item footer__shape-item--2"> <span></span> </span>
        </div>
    </footer>
    <!-- ===============>> footer end here <<================= -->



    <!-- ===============>> scrollToTop start here <<================= -->
    <a href="#" class="scrollToTop scrollToTop--home1"><i class="fa-solid fa-arrow-up-from-bracket"></i></a>
    <!-- ===============>> scrollToTop ending here <<================= -->


    <!-- vendor plugins -->

    <script src="/ui_assets/js/bootstrap.bundle.min.js"></script>
    <script src="/ui_assets/js/all.min.js"></script>
    <script src="/ui_assets/js/swiper-bundle.min.js"></script>
    <script src="/ui_assets/js/aos.js"></script>
    <script src="/ui_assets/js/fslightbox.js"></script>
    <script src="/ui_assets/js/purecounter_vanilla.js"></script>
    <script src="{{env('APP_LIVE_CHAT_URL')}}" async></script>



    <script src="/ui_assets/js/custom.js"></script>


</body>

</html>
