<!DOCTYPE html>
<html id="html">



<head>
    <title>@yield('title')</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="keywords" content="十山‧工程科技股份有限公司 - SHUSAN Engineering & Technology Co.,Ltd." />
    <meta name="description" content="十山‧工程科技股份有限公司 - SHUSAN Engineering & Technology Co.,Ltd." />
    <meta name="copyright" content="十山‧工程科技股份有限公司 - SHUSAN Engineering & Technology Co.,Ltd." />

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/orgchart/3.8.0/css/jquery.orgchart.min.css'>
    <link rel="stylesheet" href="{{ asset('/css/swiper.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('/css/webStyle.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <!-- jQuery -->
    <!-- <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script> -->
    <script src="{{ asset('/js/jquery.min.js') }}"></script>
</head>

<body>
    <div>
        <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark ">
            <img src="{{ asset('/images/logo2.jpg') }}" onclick="location.href='/Index'" style="cursor: pointer;" />
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            關於十山
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/AboutMe">公司簡介</a>
                            <a class="dropdown-item" href="/Philosophy">經營理念</a>
                            <a class="dropdown-item" href="/company-organization">公司組織</a>
                            <a class="dropdown-item" href="/License">證照及專利</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            業務服務
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" id="service_dropDown">
                            <a class="dropdown-item" href="/EnvEngineer">環保專業營造工程</a>
                            <a class="dropdown-item" href="/EnvService">環保技術服務工程</a>
                            <a class="dropdown-item" href="/OtherService">其他技術服務工程</a>
                            <a class="dropdown-item" href="/Sell">客製設備及經銷服務</a>
                        </div>

                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            專業營造工程實蹟
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" id="service_dropDown">
                            <a class="dropdown-item" href="/Incinerator">廢棄物焚化系統</a>
                            <a class="dropdown-item" href="/AirPollution">空汚防制系統</a>
                            <a class="dropdown-item" href="/Sewage">汙水防治系統</a>
                            <a class="dropdown-item" href="/EnvEngineering">環保工程</a>
                            <a class="dropdown-item" href="/WREOther">水利及其他工程</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        環保技術申辦實蹟
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" id="service_dropDown">
                            <a class="dropdown-item" href="/Landfill">廢棄物掩埋場</a>
                            <a class="dropdown-item" href="/WasteDisposal">廢棄物處理機構</a>
                            <a class="dropdown-item" href="/WasteRemoval">廢棄物清除機構</a>
                            <a class="dropdown-item" href="/Reuse">再利用機構</a>
                            <a class="dropdown-item" href="/EnvDocument">環保文件</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        其他技術申辦實蹟
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" id="service_dropDown">
                            <a class="dropdown-item" href="/EnvAssessment">環境影響評估</a>
                            <a class="dropdown-item" href="/PromoteCase">促參案</a>
                            <a class="dropdown-item" href="/LandDevCase">土地開發案</a>
                            <a class="dropdown-item" href="/ECDP">土石方資源堆置處理場</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">人才招募</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/Atmosphere">公司文化及人力資源</a>
                            <a class="dropdown-item" href="/Boon">員工福利</a>
                            <a class="dropdown-item" href="https://www.104.com.tw/company/18pzhy14?jobsource=n_my104_search" target="_blank">加入我們</a>
                        </div>
                    </li>
                    <li class="nav-item" onclick="location.href='/Contact_us'">
                        <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">聯絡我們</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div id="homePageBody">
            @yield('body')
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
        @yield('script')
        <script src="{{ asset('/js/start.js') }}"></script>
    </div>
</body>

</html>