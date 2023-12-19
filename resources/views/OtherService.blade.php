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
                        <h2>其他技術服務工作</h2>

                    </div>
                </div>
                <div>
                    <div class="main-title">
                        <h2>服務項目</h2>
                        <div class="dir_companyGreen"></div>
                    </div>
                    <div class="d-flex flex-wrap">
                        <div class="content-text">
                            <h4>非都市土地開發申請</h4>
                            <h4>工業區報編開發申請</h4>
                            <h4>土資場開發申請</h4>
                            <h4>促參案投資計畫製作</h4>
                            <h4>環境影響評估作業</h4>
                            <h4>寺廟及特定設施申請</h4>
                        </div>
                        <div class="swiper autoSwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="swiper-content">
                                        <img src="{{ asset('/images/envService_1.jpg') }}" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper-content">
                                        <img src="{{ asset('/images/envService_2.jpg') }}" />
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="swiper-content">
                                        <img src="{{ asset('/images/envService_3.jpg') }}" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper-content">
                                        <img src="{{ asset('/images/envService_4.jpg') }}" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper-content">
                                        <img src="{{ asset('/images/envService_5.jpg') }}" />
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