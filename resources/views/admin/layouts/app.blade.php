<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Dashboard</title>
    <!-- Favicon -->
    @section('styles')
        <link rel="icon" href="" type="image/png">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
        <!-- Icons -->
        <link rel="stylesheet" href="{{asset('assets/vendor/nucleo/css/nucleo.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">
        <!-- Page plugins -->
        <!-- Argon CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/argon.css')}}" type="text/css">
        </head>
    @endsection
    @yield('styles')
    

{{-- @can('admin-rights') --}}


    <body>
        <div id="app">
            <!-- Sidenav -->
                @include('admin.layouts.partials.sidenav')
            <!-- Main content -->
            <div class="main-content" id="panel">
                <!-- Topnav -->
                @include('admin.layouts.partials.nav')
                @include('admin.layouts.partials.breadcrumb')
                <!-- Page content -->
                @yield('content')
            </div>
            
                
        </div>
    <!-- Argon Scripts -->
            <!-- Core -->
            <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
            <style>
                #ofBar {
                    background: #1A1E21;
                    z-index: 999999999;
                    font-size: 16px;
                    color: #fff;
                    padding: 16px;
                    font-weight: 400;
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    position: fixed;
                    bottom: 20px;
                    width: 80%;
                    border-radius: 5px;
                    left: 0;
                    right: 0;
                    margin-left: auto;
                    margin-right: auto;
                    box-shadow: 0 13px 27px -5px rgba(50, 50, 93, 0.25), 0 8px 16px -8px rgba(0, 0, 0, 0.3), 0 -6px 16px -6px rgba(0, 0, 0, 0.025);
                }

                #ofBar-logo img {
                    height: 50px;
                }

                #ofBar-content {
                    display: inline;
                    padding: 0 15px;
                }

                #ofBar-right {
                    display: flex;
                    align-items: center;
                }

                #ofBar b {
                    font-size: 15px !important;
                }

                #count-down {
                    display: initial;
                    padding-left: 10px;
                    font-weight: bold;
                    font-size: 20px;
                }

                #close-bar {
                    font-size: 17px;
                    opacity: 0.5;
                    cursor: pointer;
                }

                #close-bar:hover {
                    opacity: 1;
                }

                #btn-bar {
                    background-color: #fff;
                    color: #40312d;
                    border-radius: 4px;
                    padding: 10px 20px;
                    font-weight: bold;
                    text-transform: uppercase;
                    text-align: center;
                    font-size: 12px;
                    opacity: .95;
                    margin-right: 20px;
                    box-shadow: 0 5px 10px -3px rgba(0, 0, 0, .23), 0 6px 10px -5px rgba(0, 0, 0, .25);
                }

                #btn-bar:hover {
                    opacity: 0.9;
                }

                #btn-bar {
                    opacity: 1;
                }

                #btn-bar span,
                #ofBar-content span {
                    color: red;
                    font-weight: 700;
                }

                #oldPriceBar {
                    text-decoration: line-through;
                    font-size: 16px;
                    color: #fff;
                    font-weight: 400;
                    top: 2px;
                    position: relative;
                }

                #newPrice {
                    color: #fff;
                    font-size: 19px;
                    font-weight: 700;
                    top: 2px;
                    position: relative;
                    margin-left: 7px;
                }

                #fromText {
                    font-size: 15px;
                    color: #fff;
                    font-weight: 400;
                    margin-right: 3px;
                    top: 0px;
                    position: relative;
                }

                @media(max-width: 991px) {
                    #count-down {
                        display: block;
                        margin-top: 15px;
                        text-align: center;
                        font-size: 19px;
                    }
                }

                @media (max-width: 768px) {

                    #ofBar {
                        flex-direction: column;
                        align-items: normal;
                    }

                    #ofBar-content {
                        margin: 15px 0;
                        text-align: center;
                        font-size: 18px;
                    }

                    #ofBar-right {
                        justify-content: flex-end;
                    }
                }
            </style>

            

            <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
            <script src="assets/vendor/js-cookie/js.cookie.js"></script>
            <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
            <script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
            <!-- Optional JS -->
            <script src="assets/vendor/chart.js/dist/Chart.min.js"></script>
            <script src="assets/vendor/chart.js/dist/Chart.extension.js"></script>
            <!-- Argon JS -->
            <script src="assets/js/argon.min.js"></script>
            <div class="backdrop d-xl-none" data-action="sidenav-unpin" data-target="undefined"></div>
            <div
                style="left: -1000px; overflow: scroll; position: absolute; top: -1000px; border: medium none; box-sizing: content-box; height: 200px; margin: 0px; padding: 0px; width: 200px;">
                <div
                    style="border: medium none; box-sizing: content-box; height: 200px; margin: 0px; padding: 0px; width: 200px;">
                </div>
            </div>


            <noscript>
                <img height="1" width="1" style="display:none"
                    src="https://www.facebook.com/tr?id=111649226022273&ev=PageView&noscript=1" />
            </noscript>



            <iframe
                style="display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;"
                name="_hjRemoteVarsFrame" title="_hjRemoteVarsFrame" id="_hjRemoteVarsFrame"
                src="https://vars.hotjar.com/box-469cf41adb11dc78be68c1ae7f9457a4.html"></iframe>


    </body>

{{-- @endcan --}}

</html>


