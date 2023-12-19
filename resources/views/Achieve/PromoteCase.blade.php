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
                <h1 class="content-title">促參案</h1>
                <div class="flex justify-content-center">
                    <div class="flex">
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_70.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">台南縣政府</h6>
                                <h4 class="support_item_text">台南縣鼓勵公民營機構興建營運一般事業廢棄物(含垃圾焚化灰渣)最終處置場設置計畫總顧問工作</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_23.jpg') }}" />
                            </div>
                            <h6 class="support_item_subtitle">基隆市環境保護局</h6>
                            <h4 class="support_item_text">鼓勵公民營機構興建一般事業廢棄物（含垃圾焚化灰渣）最終處置場BOO設置計劃</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_59.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">台南區農業改良場</h6>
                            <h4 class="support_item_text">台南區農業改良場原新化分場轉型農業體驗園區之民間參與公共建設可行性評估研究計畫</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_24.jpg') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">基隆市政府</h6>
                                <h4 class="support_item_text">促進民間參與基降六堵污水下水道系統建設之擴建(整建)營運移轉(ROT)計畫</h4>
                            </div>
                        </div>
                       
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_83.jpg') }}" />
                            </div>
                            <h6 class="support_item_subtitle">義力營造股份有限公司 </h6>
                            <h4 class="support_item_text">彰濱工業區資源化處理中心BOT案投資計畫書製作之技術服務作業</h4>
                        </div>

                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_106.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">弘城營造股份有限公司</h6>
                            <h4 class="support_item_text">台中市豐洲堤防公有土石方資源堆置處理廠OT案投資計畫書製作之技術服務作業</h4>
                        </div>

                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_90.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">展立工程顧問股份有限公司</h6>
                                <h4 class="support_item_text">經濟部工業局彰濱工業區崙尾西二區環保用地資源化處理中心興辦事業能力計畫書編撰服務作業</h4>
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