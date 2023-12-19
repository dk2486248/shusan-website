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
            @include('/Sidebar/EnvServiceSideBar')
            <div class="content">
                <h1 class="content-title">廢棄物清除機構</h1>
                <div class="flex justify-content-center">
                    <div class="flex">
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_63.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">台南縣環境保護局</h6>
                                <h4 class="support_item_text">臺南縣垃圾委託民間辦理清運規劃計畫</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_63.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">台南縣環境保護局</h6>
                            <h4 class="support_item_text">台南縣廢棄物處理場環境調查監測計劃</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_15.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">高雄縣環境保護局</h6>
                            <h4 class="support_item_text">九十四年度高雄縣廢棄物清理計畫書及公民營廢棄物清除處理機構管制計畫</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_111.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">悅裕銓營造工程有限公司</h6>
                                <h4 class="support_item_text">竹田鄉非法棄置場址廢棄物處置計畫書提送及清理作業</h4>
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