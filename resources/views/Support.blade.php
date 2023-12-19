@extends('layout')

@section('body')
<div>
    <div class="swiper autoSwiper" id="support_swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide" onclick="location.href='/EnvEngineer'">
                <div class="content" id="content_1">
                    <h4>
                        環保專業營造工程
                    </h4>
                </div>
            </div>
            <div class="swiper-slide" onclick="location.href='/EnvService#homePage_header'">
                <div class="content" id="content_2">
                    <h4>
                        環保技術服務工作
                    </h4>
                </div>
            </div>

            <div class="swiper-slide" onclick="location.href='/OtherService#homePage_header'">
                <div class="content" id="content_3">
                    <h4>
                        其他技術服務工作
                    </h4>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>
@endsection