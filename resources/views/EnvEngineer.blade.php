@extends('layout')

@section('body')

<div id="EnvEngineer">
    
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
                        <h2>環保專業營照工程</h2>
                        
                    </div>
                </div>
                <div>
                    <div class="main-title">
                        <h2>服務項目</h2>
                        <div class="dir_companyGreen"></div>
                    </div>
                    <div class="d-flex flex-wrap">
                        <div class="content-text">
                            <h4>廢棄物焚化系統工程</h4>
                            <h4>空氣污染防制工程</h4>
                            <h4>事業廢水處理工程</h4>
                            <h4>土壤及地下水整治工程</h4>
                            <h4>廢棄物清理工程</h4>
                            <h4>噪音防制工程</h4>
                        </div>
                        <div class="swiper autoSwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="swiper-content">
                                        <img src="{{ asset('/images/envEngineer_1.jpg') }}" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper-content">
                                        <img src="{{ asset('/images/envEngineer_2.jpg') }}" />
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="swiper-content">
                                        <img src="{{ asset('/images/envEngineer_3.jpg') }}" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper-content">
                                        <img src="{{ asset('/images/envEngineer_4.png') }}" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper-content">
                                        <img src="{{ asset('/images/envEngineer_5.jpg') }}" />
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