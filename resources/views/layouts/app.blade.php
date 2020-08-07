<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/material.css') }}" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="apple-touch-icon" sizes="57x57" href="https://www.clientfunnels.io/img/icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="https://www.clientfunnels.io/img/icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="https://www.clientfunnels.io/img/icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="https://www.clientfunnels.io/img/icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="https://www.clientfunnels.io/img/icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="https://www.clientfunnels.io/img/icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="https://www.clientfunnels.io/img/icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="https://www.clientfunnels.io/img/icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="https://www.clientfunnels.io/img/icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"
          href="https://www.clientfunnels.io/img/icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://www.clientfunnels.io/img/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="https://www.clientfunnels.io/img/icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://www.clientfunnels.io/img/icons/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="https://www.clientfunnels.io/img/icons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">


    <!-- CSS Files -->
    <link href="https://www.clientfunnels.io/css/material-dashboard.min.css?v=2.0.2" rel="stylesheet">

    <link href="https://www.clientfunnels.io/css/custom.css?v=1.0.2" rel="stylesheet">


</head>

<script src="https://client.crisp.chat/l.js" async=""></script>
<link href="https://client.relay.crisp.chat" rel="dns-prefetch" crossorigin="">
<link href="https://settings.crisp.chat" rel="preconnect" crossorigin="">
<link href="https://client.crisp.chat" rel="preconnect" crossorigin="">
<link href="https://image.crisp.chat" rel="preconnect" crossorigin="">
<script src="https://client.crisp.chat/static/javascripts/client.js?ded7c14" type="text/javascript" async=""></script>

<body>
<div id="app">
    <div class="wrapper">
        <div id="sidebar" class="col-md-4">
            @include('includes.sidebar')
        </div>

        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if(Session::has('alert-' . $msg))
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-9" id="page_messages" style="">
                        <div class="alert alert-{{ $msg }} alert-dismissable" style="color: white">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            {{ Session::get('alert-' . $msg) }}
                        </div>
                    </div>
                </div>
            @endif
        @endforeach

        @yield('content')

    </div>
</div>
</body>
@section('scripts')
<script src="{{ asset('js/core/jquery.min.js') }}"></script>
<script src="{{ asset('js/core/popper.min.js') }}"></script>
<script src="{{ asset('js/core/bootstrap-material-design.min.js') }}"></script>
<script src="{{ asset('js/plugins/chartist.min.js') }}"></script>
<script src="{{ asset('js/plugins/jquery-jvectormap.js') }}"></script>
<script src="{{ asset('jquery.bootstrap-wizard.js') }}"></script>
<script src="{{ asset('js/plugins/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
<script src="{{ asset('/js/plugins/moment.min.js') }}"></script>
<script src="{{ asset('js/plugins/sweetalert2.js') }}"></script>
<script src="{{ asset('js/material.js') }}"></script>
<script src="{{ asset('js/home-login.js') }}"></script>
<script src="https://www.clientfunnels.io/js/plugins/Chart.min.js"></script>
<script src="https://www.clientfunnels.io/js/app-dashboard.js?v=1.1.0"></script>


<script>
    $(document).ready(function () {
        md.checkFullPageBackgroundImage();
        setTimeout(function () {
            // after 1000 ms we add the class animated to the login/register card
            $('.card').removeClass('card-hidden');
        }, 700);
    });
</script>

@stop
</html>

