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
                <h1 class="content-title">再利用機構</h1>
                <div class="flex justify-content-center">
                    <div class="flex">
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_112.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">更新環保科技股份有限公司</h6>
                                <h4 class="support_item_text">預拌混凝土工廠申請設立及再利用身份檢核作業</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_35.jpg') }}" />
                            </div>
                            <h6 class="support_item_subtitle">金碩實業股份有限公司</h6>
                            <h4 class="support_item_text">非金屬礦物製造業工廠污染防治計畫許可申請變更及廢棄物再利用身份檢核作業</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_101.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">永道營造有限公司</h6>
                            <h4 class="support_item_text">非都市土地丁種建築用地申請混凝土廠及再利用資格環保許可文件申辦技術服務作業</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_73.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">台螢實業股份有限公司</h6>
                                <h4 class="support_item_text">經濟部事業廢棄物通案再利用展延申請作業</h4>
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