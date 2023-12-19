@extends('layout')

@section('body')
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="content" id="aboutMe_content_swiper">
                <h5>
                    永續經營
                </h5>
                <h6>
                    只需相信&thinsp;我們一定存在
                </h6>
            </div>
        </div>
    </div>
</div>

<div class="d-flex justify-content-center pt-10" id="homePage_header">
    <div>
        <h2>公司簡介</h2>
    </div>
</div>

<div id="aboutMe">
    <div id="aboutMeContent">
        @include('AboutMeSideBar')
        <div class="content">
            <div class="course-content">
                <h4 class="content-title">十山工程</h4>
                <div class="d-flex flex-wrap">
                    <div class="contentText">
                        <a>
                            十山工程科技股份有限公司成立於1996年，早期為一環境工程專業顧問機構，從事台灣地區各縣市及鄉鎮市的垃圾衛生掩埋場、與廢（污）水處理廠設計、環境影響評估作業等，並以公共工程的專業技術服務為主。但隨著國內垃圾處理政策的變遷，開始轉型為協助政府公部門環境保護計畫的執行、
                            非都市土地與民營廢棄物處理廠（場）的開發
                        </a>
                        <br>
                        <a>
                            包括公民營廢棄物處理機構的規劃設計與許可申請等技術服務，同時也轉型為環保專業營造機構，以事業廢棄物焚化設施、空氣污染防制設施、事業廢水處理設施工程承攬為主要業務等。公司亦投資協助興建營運國內頗具盛名的甲級廢棄物（廢溶劑）處理（焚化及蒸餾）廠，累積充沛的環保工程經驗。
                        </a>
                    </div>
                    <img id="aboutMePic" src="{{ asset('/images/aboutMe_pic.png') }}" />
                </div>
            </div>
            <div class="course-content">
                <h4 class="content-title">1996-2003</h4>
                <div class="d-flex flex-wrap">
                    <div class="contentText">
                        <a>
                            垃圾衛生衛掩埋場、廢水處理工程、環境影響評估、土木排水工程、非都市土地及山坡地開發等規劃設計監造技術服務。
                        </a>
                    </div>
                    <img id="coursePic_1" src="{{ asset('/images/course_1.png') }}" />
                </div>
            </div>
            <div class="course-content">
                <h4 class="content-title">2003-2012</h4>
                <div class="d-flex flex-wrap">
                    <div class="contentText">
                        <a>
                            廢棄物處理調查規劃、民營事業廢棄物衛生掩埋場、環境保護執行計畫、環境影響評估、公民營廢棄物處理廠（場）規劃設計及許可申請等技術服務。
                        </a>
                    </div>
                    <img id="coursePic_2" src="{{ asset('/images/course_2.png') }}" />
                </div>
            </div>
            <div class="course-content">
                <h4 class="content-title">2012-2017</h4>
                <div class="d-flex flex-wrap">
                    <div class="contentText">
                        <a>
                            提昇為專業營造機構兼工程專業技術顧問機構，承攬廢水處理及空氣污染防制等環境工程。除環境影響評估作業外，亦辦理產業創新條例之大面積工業區報編工作，同時維持辦理公民營廢棄物處理機構規劃設計及許可申請，並以熱處理為主。
                        </a>
                    </div>
                    <img id="coursePic_3" src="{{ asset('/images/course_3.png') }}" />
                </div>
            </div>
            <div class="course-content">
                <h4 class="content-title">2017-2022</h4>
                <div class="d-flex flex-wrap">
                    <div class="contentText">
                        <a>
                            以環境工程專業營造為主，成立十山環境工程技師事務所持續技術服務工作，並以承攬廢水處理廠、空氣污染防制工程、廢棄物熱處理工程、SRF燃料鍋爐（含污染防制）系統或為主。
                            投資興建營運一甲級廢棄物處理（廢溶劑回收處理）廠
                        </a>
                    </div>
                    <img id="coursePic_4" src="{{ asset('/images/course_4.png') }}" />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')


@endsection