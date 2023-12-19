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
                <h1 class="content-title">土石方資源堆置處理場</h1>
                <div class="flex justify-content-center">
                    <div class="flex">
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_75.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">台南縣新營市公所</h6>
                                <h4 class="support_item_text">台南縣新營市土石方處理及資源堆置場工程規劃、設計監造工作</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_19.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">官輝工程有限公司</h6>
                            <h4 class="support_item_text">臺南市麻豆區大山腳段1-13、2-8號等２筆土資場土地申請變更設置許可暨申請變更為土石堆置、儲運及加工場之礦業用地委託技術服務工作</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_115.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">博全工程開發有限公司</h6>
                            <h4 class="support_item_text">臺南市安南區城西段0585、0586號等２筆土地申請設置土石方資源堆置處理場委託技術服務工作</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_116.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">楠大工程有限公司</h6>
                                <h4 class="support_item_text">臺南市七股區篤加段151-144、151-149號等2筆土地申請設置土石方資源堆置處理場委託技術服務工作</h4>
                            </div>
                        </div>
                       
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_58.jpg') }}" />
                            </div>
                            <h6 class="support_item_subtitle">台境企業股份有限公司 </h6>
                            <h4 class="support_item_text">台境企業股份有限公司乙級廢棄物處理機構(廢塑膠混合物一般事業廢棄物處理廠)申請同意設置文件(含非都市土地一般農業區農牧用地變更編定作業)、試運轉作業暨處理許可證文件委託技術服務工作</h4>
                        </div>

                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_58.jpg') }}" />
                            </div>
                            <h6 class="support_item_subtitle">台境企業股份有限公司</h6>
                            <h4 class="support_item_text">台境企業股份有限公司土石方資源堆置處理場營運許可展延計畫申請書</h4>
                        </div>

                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_116.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">楠大工程有限公司</h6>
                                <h4 class="support_item_text">臺南市七股區篤加段151-144、151-149號等２筆土地設置土石方資源堆置處理場委託技術服務工作</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_106.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">弘城營造股份有限公司 </h6>
                            <h4 class="support_item_text">台中市豐洲堤防公有土石方資源堆置處理廠OT案投資計畫書製作之技術服務作業</h4>
                        </div>

                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_115.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">博全工程開發有限公司</h6>
                            <h4 class="support_item_text">博全工程開發有限公司土石方資源堆置處理場營運許可展延計畫申請書</h4>
                        </div>

                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_117.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">大楹工程有限公司</h6>
                                <h4 class="support_item_text">臺南市七股區新篤加段1024、1025地號2筆土地設置土石方資源堆置處理場委託技術服務工作</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_118.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">祥龍開發建設股份有限公司</h6>
                            <h4 class="support_item_text">台南市麻豆區真理段土資場申設委託技術服務工作</h4>
                        </div>

                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_52.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">勤豐環保有限公司</h6>
                                <h4 class="support_item_text">嘉義縣義竹鄉義竹新段土資場申設委託技術服務工作</h4>
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