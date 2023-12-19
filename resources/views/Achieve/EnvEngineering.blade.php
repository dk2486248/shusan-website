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
                <h1 class="content-title">環保工程</h1>
                <div class="flex justify-content-center">
                    <div class="flex">
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_30.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">嘉義縣水上鄉公所</h6>
                                <h4 class="support_item_text">嘉義縣水上上八掌溪垃圾行水區棄置場垃圾移除工程規劃設計監造工作</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_75.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">台南縣新營市公所</h6>
                            <h4 class="support_item_text">台南縣新營市垃圾資源回收及壓縮廠興建計畫</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_7.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">德眾工程股份有限公司</h6>
                            <h4 class="support_item_text">德眾工程股份有限公司一般事業廢棄物(含垃圾焚化灰渣)最終處置場申請前置開發作業</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_63.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">台南縣環境保護局</h6>
                                <h4 class="support_item_text">台南縣廢棄物處理場環境監測計畫及地下水水質監測井工程規劃設計</h4>
                            </div>
                        </div>
                       
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_63.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">台南縣環境保護局</h6>
                            <h4 class="support_item_text">台南縣安定區域性滲出水集中處理廠委託操作營運監督與清運滲出水作業</h4>
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
                                <img src="{{ asset('/images/logo/logo_70.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">台南縣政府</h6>
                                <h4 class="support_item_text">台南縣永康市大橋地區區段徵收範圍內廢棄物分類清除工程監造案</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_63.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">台南縣環境保護局</h6>
                            <h4 class="support_item_text">安定區域性聯合滲出水集中處理增設水肥前處理工程規劃設計及監造</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_63.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">台南縣環境保護局</h6>
                            <h4 class="support_item_text">台南縣安定聯合滲出水集中處理廠增設水肥前處理工程後續品質監造計畫</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_75.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">新營市公所</h6>
                                <h4 class="support_item_text">新營市垃圾轉運平台興建工程委託設計監造</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_50.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">屏東縣政府環境保護局</h6>
                            <h4 class="support_item_text">「高高屏地區有機廢棄物生質能源示範計畫—應用六塊厝污水處理廠污泥消化系統」新建工程委託專案管理技術服務暨3年有機廢棄物處理潛能分析</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_26.jpg') }}" />
                            </div>
                            <h6 class="support_item_subtitle">嘉義市政府</h6>
                            <h4 class="support_item_text">嘉義市-資源回收場生態公園化設計及監造計畫</h4>
                        </div>



                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_92.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">正修科技大學</h6>
                                <h4 class="support_item_text">高雄市不明廢棄物場址空污潛釋調查及污染源追蹤管制計畫協力技術服務</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_57.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">台東縣環境保護局</h6>
                            <h4 class="support_item_text">102年度臺東縣環境教育中心設置計畫</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_77.jpg') }}" />
                            </div>
                            <h6 class="support_item_subtitle">統一企業股份有限公司</h6>
                            <h4 class="support_item_text">永康新市總廠環保證照辦理作業</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_87.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">永耀環保科技有限公司</h6>
                                <h4 class="support_item_text">污染防治工程規劃</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_96.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">新創環保科技股份有限公司</h6>
                            <h4 class="support_item_text">C03廢液貯槽工程</h4>
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