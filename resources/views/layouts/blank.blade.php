<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="{{url('/')}}">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>Crypto Dashboard | DashLite Admin Template</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="./assets/css/dashlite.css?ver=3.2.0">
    <link id="skin-default" rel="stylesheet" href="./assets/css/theme.css?ver=3.2.0">
    @vite('resources/js/app.js')
    @livewireStyles
    <style>
        [x-cloak]{
            display: none
        }
    </style>
</head>

<body class="nk-body npc-crypto bg-white has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- content @s -->
                <div class="nk-content nk-content-fluid">
                    {{$slot}}
                </div>
                <!-- content @e -->
                <div class="nk-footer">
                    <div class="container-fluid">
                        <div class="nk-footer-wrap">
                            <div class="nk-footer-copyright">
                                &copy; 2023 {{config('app.name')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    @livewireScripts
    <script src="./assets/js/bundle.js?ver=3.2.0"></script>
    <script src="./assets/js/scripts.js?ver=3.2.0"></script>
    <script src="./assets/js/charts/chart-crypto.js?ver=3.2.0"></script>
    <script>
        window.addEventListener('alert', function(e){
            toastr.clear();
            NioApp.Toast(e.detail.message, 'info', {
                ui: 'is-dark',
                position: 'top-right',
                timeOut:10000
            });
        })
    </script>
    @if (session()->has('message'))
    <script>
        toastr.clear();
            NioApp.Toast("{{session()->get('message')}}", 'success', {
                ui: 'is-dark',
                position: 'top-right',
                timeOut:10000
            });
    </script>
    @endif
    @if (session()->get('error'))
    <script>
    NioApp.Toast("{{session()->get('error')}}", 'error', {
        ui: 'is-dark',
        position: 'top-right',
        timeOut:10000
    });
    </script>
    @endif
    @stack('scripts')
</body>

</html>
