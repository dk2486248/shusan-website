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
            @include('/Sidebar/EnvEngineerSideBar')
            <div class="content">
                <h1 class="content-title">空汙防制系統</h1>
                <div class="flex justify-content-center">
                    <div class="flex">
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_1.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">燁民實業股份有限公司</h6>
                                <h4 class="support_item_text">乙級廢棄物處理廠空氣污染防制功能提昇工程</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_95.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">義鼎盛科技股份有限公司</h6>
                            <h4 class="support_item_text">固體再生燃料(SRF)燃燒鍋爐暨污染防治系統EPC統包工程</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_96.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">新創環保科技股份有限公司</h6>
                            <h4 class="support_item_text">甲級事業廢棄物焚化暨污染防治系統工程EPC作業</h4>
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