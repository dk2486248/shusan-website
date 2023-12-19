@extends('layout')

@section('body')
<div class="section1">
    <!-- <div class="bg"></div> -->
    <div class="pic" id="boon_bg"></div>
    <div class="word">
        <h1>員工福利</h1>
    </div>
</div>


<!-- <div class="swiper mySwiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="content" id="boon_swiper">
                <h5>
                    員工福利
                </h5>
            </div>
        </div>
    </div>
</div> -->

<div class="d-flex justify-content-center pt-10" id="homePage_header" style="background-color: #f5f5f5;">
    <div>
        <h2>員工福利</h2>
    </div>
</div>

<div id="boon">
    <div id="aboutMeContent">
        <div class="content">

            <div>
                <div class="main-title">
                    <h2>員工福利措施、進修、訓練及各項員工權益</h2>
                    <div class="dir_companyGreen"></div>
                </div>
                <h4 class="content-title">員工為公司最重要的資產，我們致力於人才的培育及員工身心健康的維護，並為強化員工對公司的認同感<br>與參與度，研擬本公司的員工福利措施如下：</h4>
                <div class="content-text">
                    <h6>獎金福利：年終獎金、生日禮金、三節禮金、紅利分紅</h6>
                    <h6>休假福利：週休二日</h6>
                    <h6>保險福利：勞保、健保、團保</h6>
                    <h6>衣著福利：提供制服申請</h6>
                    <h6>娛樂福利：定期活動聚餐、不定期海內外旅遊</h6>
                    <h6>補助福利：婚喪補助、生育補助、子女教育獎學金、員工體檢</h6>
                    <h6>進修福利：員工在職教育訓練</h6>

                </div>
                <div>
                    <div class="main-title">
                        <h2>員工活動照片</h2>
                        <div class="dir_companyGreen"></div>

                    </div>

                    <div class="d-flex justify-content-start pt-5">
                        <div class="cursor-pointer">
                            <img class="folderPic" src="{{ asset('/images/folder.png') }}" onclick="window.open('/TravPic_1','_blank')" />
                            <h4>2023九州員工旅遊</h4>
                        </div>
                        <div class="cursor-pointer">
                            <img class="folderPic" src="{{ asset('/images/folder.png') }}" onclick="window.open('/TravPic_2','_blank')" />
                            <h4>2018尾牙</h4>
                        </div>
                        <div class="cursor-pointer">
                            <img class="folderPic" src="{{ asset('/images/folder.png') }}" onclick="window.open('/TravPic_3','_blank')" />
                            <h4>2018沖繩員工旅遊</h4>
                        </div>
                        <div class="cursor-pointer">
                            <img class="folderPic" src="{{ asset('/images/folder.png') }}" onclick="window.open('/TravPic_4','_blank')" />
                            <h4>2017尾牙</h4>
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