@extends('layout')
@section('body')
<div id="Incinerator">
    <div class="swiper" id="support_header_swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide" onclick="location.href='/EnvEngineer'">
                <div class="content d-flex justify-content-center align-items-center" id="content_2">

                </div>
            </div>
        </div>
    </div>
    <div class="support_page" id="envEngineer">
        <div id="aboutMeContent">
            @include('/Sidebar/OtherServiceSideBar')
            <div class="content">
                <h1 class="content-title">土地開發案</h1>
                <div class="flex justify-content-center">
                    <div class="flex">
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_138.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">大坑休閒農場</h6>
                                <h4 class="support_item_text">大坑休閒農場公害防治計畫與水土保持計畫委託技術服務</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_37.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">經濟部工業局永康工業區</h6>
                            <h4 class="support_item_text">台南縣機能強化工程(官田、永康工業區)委託設計監造技術服務案</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_139.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">財團法人台北市TVBS關懷台灣文教基金會</h6>
                            <h4 class="support_item_text">高雄縣甲仙鄉小林國小興辦事業計畫暨水土保持計畫委託技術服務工作</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_137.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">龍益開發企業有限公司</h6>
                                <h4 class="support_item_text">台南市新化區唪口段747、748、749、788號等非都市土地特定農業區經辦竣重劃之農牧用地申請變更為特定目的事業用地之專案核准設置農產食品加工設施委託技術服務工作</h4>
                            </div>
                        </div>
                       
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_20.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">光宇材料股份有限公司 </h6>
                            <h4 class="support_item_text">環保科技園區產業用地及建物協助移轉委託技術服務案</h4>
                        </div>

                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_10.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">佛頂山朝聖寺</h6>
                            <h4 class="support_item_text">108年度「臺南市左鎮區佛頂山朝聖寺申請開發」委託技術服務工作</h4>
                        </div>

                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_114.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">欣農好肥料有限公司</h6>
                                <h4 class="support_item_text">欣農好肥料有限公司柳營廠入區申請及環保文件申請委託技術服務案</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_91.jpg') }}" />
                            </div>
                            <h6 class="support_item_subtitle">正隆股份有限公司 </h6>
                            <h4 class="support_item_text">燕巢新廠辦理整地排水計畫變更作業</h4>
                        </div>

                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_2.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">安鼎農牧企業有限公司</h6>
                            <h4 class="support_item_text">高雄市梓官區梓義段566、567、568、569地號土地申請非都市土地變更作畜牧事業設施（飼料工廠）用地開發技術服務作業</h4>
                        </div>

                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_6.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">德揚科技股份有限公司</h6>
                                <h4 class="support_item_text">台南市柳營科技園區入區申請</h4>
                            </div>
                        </div>
                    </div>
                </div>
                @include('Page')
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')


@endsection