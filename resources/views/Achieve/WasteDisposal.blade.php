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
                <h1 class="content-title">廢棄物處理機構</h1>
                <div class="flex justify-content-center">
                    <div class="flex">
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_97.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">悅瑋企業有限公司</h6>
                                <h4 class="support_item_text">悅瑋企業有限公司第一類乙級廢棄物處理場第一期及第二期開發作業</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_98.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">普捷企業股份有限公司</h6>
                            <h4 class="support_item_text">普捷企業股份有限公司第一類乙級廢棄物處理場開發作業</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_99.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">永揚環保事業有限公司</h6>
                            <h4 class="support_item_text">永揚環保事業有限公司第一類乙級廢棄物處理場開發作業</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_144.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">光洋應用材料科技股份有限公司</h6>
                                <h4 class="support_item_text">光洋應用材料科技股份有限公司甲級廢棄物處理機構同意設置文件變更申請書規劃暨諮詢顧問委託工作</h4>
                            </div>
                        </div>
                       
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_119.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">崴光環保股份有限公司</h6>
                            <h4 class="support_item_text">台南縣後壁鄉嘉安段乙級廢棄物處理場申請開發案</h4>
                        </div>

                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_99.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">永揚環保事業股份有限公司</h6>
                            <h4 class="support_item_text">永揚環保事業股份有限公司乙級廢棄物處理場 環境影響調查及變更同意設置增列事項委託技術服務</h4>
                        </div>

                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_97.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">悅瑋企業股份有限公司</h6>
                                <h4 class="support_item_text">悅瑋企業股份有限公司乙級廢棄物處理場封場復育計畫申請作業委託技術服務</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_27.jpg') }}" />
                            </div>
                            <h6 class="support_item_subtitle">嘉義縣大林鎮公所</h6>
                            <h4 class="support_item_text">嘉義縣大林鎮應急垃圾衛生掩埋場工程規劃、設計監造工作</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_81.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">旭紘環保科技股份有限公司</h6>
                            <h4 class="support_item_text">旭紘環保科技股份有限公司甲級廢棄物處理廠設置環境影響評估作業工作</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_145.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">欣瀛科技股份有限公司</h6>
                                <h4 class="support_item_text">乙級廢棄物處理廠同意設置文件暨處理許可申請變更技術服務作業</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_30.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">嘉義縣水上鄉公所</h6>
                            <h4 class="support_item_text">嘉義縣水上鄉應急垃圾衛生掩埋場工程勘測設計監造工作</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_56.webp') }}" />
                            </div>
                            <h6 class="support_item_subtitle">識昌實業有限公司</h6>
                            <h4 class="support_item_text">乙級廢棄物處理廠(場)申請許可委託技術服務作業</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_120.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">大登環保科技有限公司</h6>
                                <h4 class="support_item_text">乙級廢棄物處理機構操作許可申請技術服務作業</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_17.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">高雄縣梓官鄉公所</h6>
                            <h4 class="support_item_text">高雄縣梓官鄉垃圾衛生掩埋場工程規劃、設計監造工作</h4>
                        </div>
                       
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_121.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">金士盛股份有限公司</h6>
                                <h4 class="support_item_text">甲級廢棄物處理機構申請同意設置、處理許可工作及污染防治計劃許可委託技術服務</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_120.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">大登環保科技有限公司</h6>
                            <h4 class="support_item_text">乙級廢棄物處理廠同意設置文件變更暨試運轉計畫申辦作業</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_43.jpg') }}" />
                            </div>
                            <h6 class="support_item_subtitle">廉捷科技股份有限公司</h6>
                            <h4 class="support_item_text">廉捷科技股份有限公司甲級廢棄物處理廠(既有處理設施)申請試運轉計畫暨廢棄物處理許可證作業委託技術服務工作</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_71.jpg') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">台灣瑞環股份有限公司</h6>
                                <h4 class="support_item_text">台灣瑞環(股)公司申請甲級廢棄物處理廠試運轉計畫暨處理許可證技術服務作業委託技術服務工作</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_120.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">大登環保科技有限公司</h6>
                            <h4 class="support_item_text">乙級廢棄物處理廠同意設置文件變更暨試運轉計畫申辦作業(柳營環保科技園區)</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_122.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">遠見綠能科技有限公司</h6>
                            <h4 class="support_item_text">甲級廢棄物處理廠同意設置文件暨處理許可證申請變更技術服務作業(修正後)</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_145.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">欣瀛科技股份有限公司</h6>
                                <h4 class="support_item_text">103年欣瀛科技公司乙級廢棄物處理廠處理許可展延暨許可變更委託技術服務工作</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_123.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">萬嘉環保工業股份有限公司</h6>
                            <h4 class="support_item_text">萬嘉環保實業股份有限公司乙級廢棄物處理廠申請同意設置文件、試運轉作業暨處理許可證文件委託技術服務工作</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_1.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">燁民實業股份有限公司</h6>
                                <h4 class="support_item_text">燁民實業股份有限公司乙級廢棄物處理廠申請同意設置文件、試運轉作業暨處理許可證文件委託技術服務工作</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_46.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">綠塑資源再生有限公司 </h6>
                            <h4 class="support_item_text">既有工廠申請乙級廢棄物處理廠同意設置文件、試運轉計畫暨處理許可證技術服務作業</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_120.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">大登環保科技有限公司</h6>
                            <h4 class="support_item_text">乙級廢棄物處理廠處理許可展延暨許可變更技術服務案</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_145.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">欣瀛科技股份有限公司</h6>
                                <h4 class="support_item_text">104年欣瀛科技公司乙級廢棄物處理廠處理許可展延暨許可變更委託技術服務工作</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_142.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">利百景環保科技股份有限公司</h6>
                            <h4 class="support_item_text">利百景環保科技股份有限公司甲級廢棄物處理廠申請同意設置文件、試運轉作業暨處理許可證文件委託技術服務工作</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_71.jpg') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">台灣瑞環股份有限公司</h6>
                                <h4 class="support_item_text">台灣瑞環(股)公司申請甲級廢棄物處理廠同意設置暨處理許可文件變更技術服務作業(貯槽部分)委託技術服務工作</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_121.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">金士盛股份有限公司</h6>
                            <h4 class="support_item_text">104年甲級廢棄物處理廠同意設置文件變更技術服務</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_145.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">欣瀛科技股份有限公司</h6>
                            <h4 class="support_item_text">105年欣瀛科技公司乙級廢棄物處理廠固定污染源操作許可變更或異動申請作業委託技術服務工作</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_124.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">國中企業行</h6>
                                <h4 class="support_item_text">國中企業行乙級廢棄物處理廠申請同意設置文件(含非都市土地一般農業區農牧用地變更編定作業)、試運轉作業暨處理許可證文件委託技術服務工作</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_122.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">遠見綠能科技有限公司</h6>
                            <h4 class="support_item_text">甲級廢棄物處理廠處理許可展延技術服務案</h4>
                        </div>




                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_71.jpg') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">台灣瑞環股份有限公司</h6>
                                <h4 class="support_item_text">台灣瑞環(股)公司申請甲級廢棄物處理廠同意設置文件變更、試運轉計畫暨處理許可文件變更技術服務作業委託技術服務工作</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_125.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">奇新瑞環保科技股份有限公司</h6>
                            <h4 class="support_item_text">奇新瑞環保科技股份有限公司乙級廢棄物處理廠申請變更同意設置文件、試運轉作業、處理許可證文件暨其他相關環保文件許可申請委託技術服務工作</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_120.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">大登環保科技股份有限公司</h6>
                            <h4 class="support_item_text">乙級廢棄物處理廠處理許可變更技術服務案</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_58.jpg') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">台境企業股份有限公司</h6>
                                <h4 class="support_item_text">台境企業股份有限公司乙級廢棄物處理機構(廢塑膠混合物一般事業廢棄物處理廠)申請同意設置文件(含非都市土地一般農業區農牧用地變更編定作業)、試運轉作業暨處理許可證文件委託技術服務工作</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_82.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">揚達實業有限公司台南分公司</h6>
                            <h4 class="support_item_text">甲級廢棄物處理廠處理許可展延技術服務案</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_20.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">光宇材料股份有限公司</h6>
                                <h4 class="support_item_text">光宇材料股份有限公司甲級廢棄物處理機構（包括但不限於熱處理、化學處理方式）申請同意設置文件、試運轉作業暨處理許可證文件委託技術服務工作</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_93.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">致圓方正科技股份有限公司</h6>
                            <h4 class="support_item_text">致圓方正科技股份有限公司申請乙級廢棄物處理機構同意設置文件、試運轉作業、處理許可證文件暨相關環保文件委託技術服務工作</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_126.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">閩揚環保股份有限公司</h6>
                            <h4 class="support_item_text">閩揚環保股份有限公司乙級廢棄物處理機構(物理處理-分選、壓縮)申請同意設置文件、試運轉作業暨處理許可證文件委託技術服務工作</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_127.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">德暉農牧科技有限公司</h6>
                                <h4 class="support_item_text">乙級廢棄物處理廠開發計畫、興辦事業計畫及復育計畫等書件編撰申請作業</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_103.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">三安環保科技有限公司</h6>
                            <h4 class="support_item_text">三安環保科技有限公司乙級廢棄物處理廠申請同意設置文件、試運轉作業暨處理許可證文件委託技術服務工作 調查規劃</h4>
                        </div>


                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_120.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">大登環保科技股份有限公司</h6>
                                <h4 class="support_item_text">乙級廢棄物處理廠處理許可證展延申請作業</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_71.jpg') }}" />
                            </div>
                            <h6 class="support_item_subtitle">台灣瑞環股份有限公司</h6>
                            <h4 class="support_item_text">甲級廢棄物處理廠處理許可證展延申請作業</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_1.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">燁民實業股份有限公司</h6>
                            <h4 class="support_item_text">乙級廢棄物處理廠處理許可證展延申請作業</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_105.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">旭優能源科技股份有限公司</h6>
                                <h4 class="support_item_text">旭優能源科技股份有限公司柳營環保科技園區入區申請及製程基本設計委託技術服務工作</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_105.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">旭優能源科技股份有限公司</h6>
                            <h4 class="support_item_text">旭優能源科技股份有限公司柳營環保科技園區廢棄物處理機構申請同意設置文件、試運轉作業暨處理許可證文件委託技術服務工作</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_104.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">九九峰企業有限公司</h6>
                                <h4 class="support_item_text">甲級廢棄物處理廠處理許可證變更申請作業</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_93.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">致圓方正科技股份有限公司</h6>
                            <h4 class="support_item_text">乙級廢棄物處理廠處理許可證展延申請</h4>
                        </div>
                        

                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_120.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">大登環保科技股份有限公司</h6>
                                <h4 class="support_item_text">乙級廢棄物處理廠同意設置文件暨處理許可證變更申請作業</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_121.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">金士盛股份有限公司</h6>
                            <h4 class="support_item_text">110年甲級廢棄物處理廠同意設置文件暨處理許可變更技術服務案</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_125.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">奇新瑞環保科技股份有限公司</h6>
                            <h4 class="support_item_text">奇新瑞環保科技股份有限公司乙級廢棄物處理廠處理許可證暨固定污染源操作許可文件之變更及展延申請委託技術服務工作-處理許可證申請</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_121.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">金士盛股份有限公司</h6>
                                <h4 class="support_item_text">金士盛股份有限公司甲級廢棄物處理廠處理許可證暨環保許可文件之展延申請委託技術服務工作-處理許可證申請</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_128.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">碩鼎資源再生股份有限公司</h6>
                            <h4 class="support_item_text">111年乙級廢棄物處理廠文件申請作業</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_120.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">大登環保科技股份有限公司</h6>
                                <h4 class="support_item_text">111年度大登環保科技股份有限公司乙級廢棄物處理廠處理許可暨環保許可文件之變更申請委託技術服務工作</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_129.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">望嶽有限公司</h6>
                            <h4 class="support_item_text">111年度望嶽有限公司乙級廢棄物處理廠申設暨環保許可申請作業委託技術服務工作</h4>
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