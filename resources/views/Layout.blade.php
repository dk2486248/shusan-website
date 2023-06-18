<!DOCTYPE html>
<html id="html">

</html>

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   
    <link rel="stylesheet" href="{{ asset('/css/swiper.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

</head>

<body>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light" id="header">
            <img src="{{ asset('/images/logo2.jpg') }}" />
            <div class="" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <button class="btn btn-outline-success">
                        <span>公司簡介</span>
                    </button>
                    <button class="btn btn-outline-success">
                        <span>歷年實績</span>
                    </button>
                    <button class="btn btn-outline-success">
                        <span>相關連結</span>
                    </button>
                    <button class="btn btn-outline-success">
                        <span>聯絡我們</span>
                    </button>
                </div>
            </div>
        </nav>

        <div id="homePageBody">
            @yield('body')
        </div>
        <!-- <script src="{{ asset('/js/bootstrap/bootstrap.min.js') }}"></script> -->
        <script src="{{ asset('/js/app.js') }}"></script>
        <script src="{{ asset('/js/jquery-3.5.1.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
        @yield('script')
    </div>
</body>