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
        <h2>經營理念</h2>
    </div>
</div>

<div id="philosophy">
    @include('AboutMeSideBar')
    <div class="content">
        <div class="course-content">
            <h4 class="content-title">Quality Design</h4>
            <div class="d-flex flex-wrap">
                <div class="contentText">
                    <h6>
                        品質為專業技術或工程服務的先提條件
                    </h6>
                    <a>
                        十山工程科技公司集合工程專業人員，致力於工程技術開發及環境保護工作而成立發展，成員涵蓋土木、機械、環保、生態景觀等具專業素養工程師
                    </a>
                </div>
                <img id="coursePic_1" src="{{ asset('/images/course_1.png') }}" />
            </div>
        </div>
        <div class="course-content">
            <h4 class="content-title">Efficiency Ability</h4>
            <div class="d-flex flex-wrap">
                <div class="contentText">
                    <h6>
                        效率為人員素質及專業背景的充分表現

                    </h6>
                    <a>
                        更引進國內外先進之技術，為工程設計開發的技術與理念不斷地創新提昇。
                    </a>
                </div>
                <img id="coursePic_2" src="{{ asset('/images/course_2.png') }}" />
            </div>
        </div>
        <div class="course-content">
            <h4 class="content-title">Goal Reaching</h4>
            <div class="d-flex flex-wrap">
                <div class="contentText">
                    <h6>
                        目標達成為負責態度及公司誠信的驗證
                    </h6>
                    <a>
                        致力於工程的完善規劃設計外，更具施工實務，於工程施工時確實管制工程施工品質。
                    </a>
                </div>
                <img id="coursePic_3" src="{{ asset('/images/course_3.png') }}" />
            </div>
        </div>
    </div>
</div>

@endsection