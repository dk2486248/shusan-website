@extends('layout')

@section('body')
<div>
    <div class="swiper mySwiper" id="index_swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="content" id="content_1">
                    
                    <h5>
                        專業設計
                    </h5>
                    <h6>
                        了解需求&thinsp;提供客製化服務 </br>切合真實所需
                    </h6>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="content" id="content_2">
                    <h5>
                        研發創新
                    </h5>
                    <h6>
                        從基礎到應用技術&thinsp;<br>緊扣產業發展趨勢
                    </h6>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="content" id="content_3">
                    <h5>
                        專案服務
                    </h5>
                    <h6>
                        設計&thinsp;施工&thinsp;許可申請</br>
                        核准營運&thinsp;專案專職負責
                    </h6>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="content" id="content_4">
                    <h5>
                        永續經營
                    </h5>
                    <h6>
                        只需相信&thinsp;我們一定存在
                    </h6>
                </div>
            </div>

        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
</div>
@endsection

@section('script')
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        keyboard: {
            enabled: true,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>
@endsection