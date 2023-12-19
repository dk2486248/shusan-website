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
        <h2>證照及專利</h2>
    </div>
</div>

<div id="license">
    <div class="d-flex justify-content-start">
        @include('AboutMeSideBar')
        <div class="content">
            <div class="course-content">
                <h4 class="content-title">公司證照</h4>

                <div class="d-flex flex-wrap justify-content-center">
                    <img id="" src="{{ asset('/images/license_1.png') }}" />
                    <img id="" src="{{ asset('/images/license_2.png') }}" />
                </div>

            </div>
            <div class="course-content">
                <h4 class="content-title">公司專利</h4>
                <div class="d-flex flex-wrap justify-content-center">
                    <img id="" src="{{ asset('/images/license_3.png') }}" />
                    <img id="" src="{{ asset('/images/license_4.png') }}" />
                </div>
                <div class="d-flex flex-wrap justify-content-center">
                    <img id="" src="{{ asset('/images/license_5.png') }}" />
                    <img id="" src="{{ asset('/images/license_6.png') }}" />
                </div>
                <div class="d-flex flex-wrap justify-content-center">
                    <img id="" src="{{ asset('/images/license_7.png') }}" />
                </div>
            </div>
        </div>
    </div>
</div>


@endsection