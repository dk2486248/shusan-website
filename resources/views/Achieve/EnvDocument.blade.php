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
                <h1 class="content-title">環保文件</h1>
                <div class="flex justify-content-center">
                    <div class="flex">
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_85.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">英屬蓋曼群島商龍燈環球農業科技有限公司台灣分公司</h6>
                                <h4 class="support_item_text">評估工廠設立或變更申請汙染防治措施計畫(含土壤污染調查評估)或許可技術服務作業</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_102.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">勝利電鍍</h6>
                            <h4 class="support_item_text">土壤污染評估調查及檢測</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_84.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">溢豐綠能科技股份有限公司</h6>
                            <h4 class="support_item_text">其他製造業及蒸汽供應業環保許可文件變更申辦技術服務作業</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_40.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">敬昕工業有限公司</h6>
                                <h4 class="support_item_text">表面處理業環保許可文件申請作業</h4>
                            </div>
                        </div>
                       
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_103.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">三安環保科技有限公司</h6>
                            <h4 class="support_item_text">土污法第九條調查(事業新設立)</h4>
                        </div>

                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_104.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">九九峰企業有限公司</h6>
                            <h4 class="support_item_text">甲級廢棄物處理廠處理許可證展延申請作業</h4>
                        </div>

                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_44.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">聯聖工程顧問股份有限公司</h6>
                                <h4 class="support_item_text">利百景公司擴廠之土壤檢測及調查計畫技術服務作業(柳營區義士段82地號)</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_51.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">碁富食品股份有限公司</h6>
                            <h4 class="support_item_text">碁富食品股份有限公司乙種工業區(學甲工業區)申請食品加工廠登記之環保許可文件申辦技術服務作業</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_22.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">樺正實業股份有限公司</h6>
                            <h4 class="support_item_text">柳營廠固定污染源操作異動及燃料使用許可文件申請</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_53.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">日友環保科技股份有限公司</h6>
                                <h4 class="support_item_text">廢棄物處理業土壤污染評估調查作業</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_84.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">溢豐綠能科技股份有限公司</h6>
                            <h4 class="support_item_text">固定污染源設置變更、操作異動及燃料使用許可文件申請</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_12.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">富億康生物科技股份有限公司</h6>
                            <h4 class="support_item_text">富億康公司污水處理流程規劃及環保許可文件申請作業</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_96.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">新創環保科技股份有限公司</h6>
                                <h4 class="support_item_text">土壤污染評估調查作業</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_95.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">義鼎盛科技股份有限公司</h6>
                            <h4 class="support_item_text">屏南廠固體再生燃料(SRF)產汽鍋爐系統計畫初步規劃與固定污染源設置許可等環保許可申請案</h4>
                        </div>
                       
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_105.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">旭優能源科技股份有限公司</h6>
                                <h4 class="support_item_text">110年度旭優公司M01製程設立環保文件申請</h4>
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