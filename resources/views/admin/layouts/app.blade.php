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
        {{-- <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/dist/css/bootstrap.min.css')}}" type="text/css"> --}}
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
            <script src="{{asset('assets/vendor/jquery/dist/jquery.min.js')}}"></script>
            <script src="{{asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
            <script src="{{asset('assets/vendor/js-cookie/js.cookie.js')}}"></script>
            <script src="{{asset('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
            <script src="{{asset('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>
            <!-- Optional JS -->
            <script src="{{asset('assets/vendor/chart.js/dist/Chart.min.js')}}"></script>
            <script src="{{asset('assets/vendor/chart.js/dist/Chart.extension.js')}}"></script>
            <!-- Argon JS -->
            <script src="{{asset('assets/js/argon.min.js')}}"></script>
            <script src="{{asset('assets/js/dashboard.js')}}"></script>
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


