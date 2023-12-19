@extends('layout')

@section('body')

<div id="OtherService">
    <div class="swiper" id="support_header_swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide" onclick="location.href='/EnvEngineer'">
                <div class="content d-flex justify-content-center align-items-center" id="content_1">

                </div>
            </div>
        </div>
    </div>

    <div class="support_page" id="envEngineer">

        <div id="aboutMeContent">
            @include('SupportSideBar')
            <div class="content ">
                <div class="d-flex justify-content-start pt-10" id="homePage_header">
                    <div>
                        <h2>客製設備及經銷服務​</h2>

                    </div>
                </div>
                <div>
                    <div class="main-title">
                        <h2>服務項目</h2>
                        <div class="dir_companyGreen"></div>
                    </div>
                    <div class="d-flex flex-wrap">
                        <div class="content-text">
                            <h4>焚化系統設備</h4>
                            <h4>空氣污染防制設備​</h4>
                            <h4>廢水處理防治設備​</h4>
                            <h4>物理破碎分選設備​</h4>
                            <h4>陶瓷纖維觸媒濾管​</h4>
                            <h4>日本設備經銷​</h4>
                        </div>
                        <div class="swiper autoSwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="swiper-content">
                                        <img src="{{ asset('/images/sell_1.jpg') }}" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper-content">
                                        <img src="{{ asset('/images/sell_2.jpg') }}" />
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="swiper-content">
                                        <img src="{{ asset('/images/sell_3.jpg') }}" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper-content">
                                        <img src="{{ asset('/images/sell_4.jpg') }}" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper-content">
                                        <img src="{{ asset('/images/sell_5.jpg') }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
@endsection

@section('script')


@endsection