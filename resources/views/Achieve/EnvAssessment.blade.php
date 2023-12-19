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
                <h1 class="content-title">環境影響評估</h1>
                <div class="flex justify-content-center">
                    <div class="flex">
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_75.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">新營市公所</h6>
                                <h4 class="support_item_text">台南縣新營市第五期垃圾衛生掩埋場環境影響評估工作</h4>
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
                                <img src="{{ asset('/images/logo/logo_70.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">台南縣政府</h6>
                            <h4 class="support_item_text">台南縣安定區域性第二期衛生掩埋場環境影響評估作業</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_143.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">財團法人天主教會高雄教區</h6>
                                <h4 class="support_item_text">真福山修道院與安養院環境評估工作委託技術服務</h4>
                            </div>
                        </div>
                       
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_70.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">台南縣政府</h6>
                            <h4 class="support_item_text">台灣蘭花生物科技園區開發計畫環境影響評估</h4>
                        </div>

                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_130.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">三采工程</h6>
                            <h4 class="support_item_text">燕巢天主教教會申請開發作業委託辦理環境影響評估</h4>
                        </div>

                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_28.jpg') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">嘉義縣政府環境保護局</h6>
                                <h4 class="support_item_text">嘉義縣水上鹿草區域性垃圾(含灰渣)衛生掩埋場後續開發計畫環境影響評估工作技術服務案</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_11.jpg') }}" />
                            </div>
                            <h6 class="support_item_subtitle">富台工程股份有限公司</h6>
                            <h4 class="support_item_text">高雄生物園區委託辦理環境影響評估工作技術服務</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_47.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">南總建築師事務所</h6>
                            <h4 class="support_item_text">左鎮佛頂山朝聖寺開發案環境影響評估</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_23.jpg') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">基隆市環境保護局</h6>
                                <h4 class="support_item_text">「基隆月眉都市計畫道路改善拓寬計畫委託規劃設計」環境影響評估</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_131.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">尊弘環保股份有限公司</h6>
                            <h4 class="support_item_text">基隆市信義區營建廢棄物處理廠設置計畫委託辦理環境影響評估工作技術服務</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_138.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">大坑休閒農場</h6>
                            <h4 class="support_item_text">大坑休閒農場公害防治計畫與水土保持計畫委託技術服務</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo.jpg') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">十山管理顧問有限公司</h6>
                                <h4 class="support_item_text">高雄縣田寮鄉天一聖道院寺廟開發環境影響評估作業</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo.jpg') }}" />
                            </div>
                            <h6 class="support_item_subtitle">十山管理顧問有限公司</h6>
                            <h4 class="support_item_text">高雄市永安區誠毅紙器工業區開發案環境影響評估</h4>
                        </div>
                       
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_37.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">經濟部工業局永康工業區</h6>
                                <h4 class="support_item_text">台南縣機能強化工程(官田、永康工業區)委託設計監造技術服務案</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_132.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">神威天台山天臺聖宮</h6>
                            <h4 class="support_item_text">天臺聖宮擴大開發環境影響評估</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo.jpg') }}" />
                            </div>
                            <h6 class="support_item_subtitle">十山管理顧問有限公司</h6>
                            <h4 class="support_item_text">高雄市燕巢區安南段正隆紙器工業區開發計畫環境影響評估</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_91.jpg') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">正隆股份有限公司</h6>
                                <h4 class="support_item_text">燕巢工業區開發案委託辦理環境影響評估工作</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_133.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">勗維企業有限公司</h6>
                            <h4 class="support_item_text">台南市將軍區馬沙溝漁船加油站增設油槽環境影響評估</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_134.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">奕豪企業有限公司</h6>
                            <h4 class="support_item_text">台南市將軍區將軍港漁船加油站增設油槽環境影響評估</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_26.jpg') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">嘉義市政府</h6>
                                <h4 class="support_item_text">嘉義市湖子區段徵收環保用地環境影響評估</h4>
                            </div>
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
                                <img src="{{ asset('/images/logo/logo_81.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">旭紘環保科技股份有限公司</h6>
                                <h4 class="support_item_text">旭紘環保科技股份有限公司甲級廢棄物處理廠設置環境影響評估作業工作</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_80.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">新竹縣政府</h6>
                            <h4 class="support_item_text">新竹115線20k+016~25k+950段拓寬工程規劃及環境影響說明書</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_26.jpg') }}" />
                            </div>
                            <h6 class="support_item_subtitle">嘉義市環保局</h6>
                            <h4 class="support_item_text">嘉義市湖子內區段徵收環保用地(含焚化灰渣掩埋場)環境影響評估</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_80.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">新竹縣政府</h6>
                                <h4 class="support_item_text">台1線替代道路(新豐~新竹公道三、四)工程環境影響說明書</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_132.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">神威天臺山天臺聖宮</h6>
                            <h4 class="support_item_text">天臺聖宮擴大工程環境影響差異分析(天皇學院)委託技術服務工作</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_140.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">誠毅紙器股份有限公司</h6>
                                <h4 class="support_item_text">高雄市永安區誠毅紙器工業區報編開發案產業園區環境影響差異性分析</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_14.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">高雄市梓官區農會</h6>
                            <h4 class="support_item_text">高雄市梓官區農會申請家禽屠宰場暨家禽批發市場支援營運之環境影響評估作業</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_135.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">弘強工程顧問企業有限公司</h6>
                            <h4 class="support_item_text">財團法人玉山寶光聖堂擴建計畫環境影響說明書之環境現況差異分析及對策檢討報告暨環境影響差異性分析報告(含變更對照表製作)作業委託技術服務工作</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_136.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">映誠股份有限公司</h6>
                                <h4 class="support_item_text">映誠股份有限公司乙級廢棄物處理廠(一般廢棄物)環境影響差異性分析暨污染防治措施計畫許可變更作業委託技術服務工作</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_113.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">龍益開發企業有限公司</h6>
                            <h4 class="support_item_text">台南市新化區唪口段747、748、749、788號等非都市土地特定農業區經辦竣重劃之農牧用地申請變更為特定目的事業用地之專案核准設置農產食品加工設施委託技術服務工作</h4>
                        </div>




                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_5.jpg') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">稻江科技暨管理學院</h6>
                                <h4 class="support_item_text">稻江科技暨管理學院校區用地非都市土地開發許可及環境影響說明書變更作業之委託技術服務工作</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_41.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">空軍第四五五戰術戰鬥機聯隊</h6>
                            <h4 class="support_item_text">水溪靶場營舍先期規劃及環境影響評估委託技術服務</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_140.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">誠毅紙器股份有限公司</h6>
                            <h4 class="support_item_text">高雄市永安區誠毅紙器工業區開發案環境影響差異性分析報告書委託技術服務工作</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_20.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">光宇材料股份有限公司</h6>
                                <h4 class="support_item_text">環保科技園區產業用地及建物協助移轉委託技術服務案</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_91.jpg') }}" />
                            </div>
                            <h6 class="support_item_subtitle">正隆股份有限公司</h6>
                            <h4 class="support_item_text">台糖10.3公頃租地委託辦理環評及開發計劃第2次變更作業</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_10.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">佛頂山朝聖寺</h6>
                                <h4 class="support_item_text">108年度「臺南市左鎮區佛頂山朝聖寺申請開發」委託技術服務工作</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_114.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">欣農好肥料有限公司</h6>
                            <h4 class="support_item_text">欣農好肥料有限公司柳營廠入區申請及環保文件申請委託技術服務案</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_91.jpg') }}" />
                            </div>
                            <h6 class="support_item_subtitle">正隆股份有限公司</h6>
                            <h4 class="support_item_text">燕巢新廠辦理整地排水計畫變更作業</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_2.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">安鼎農牧企業有限公司</h6>
                                <h4 class="support_item_text">高雄市梓官區梓義段566、567、568、569地號土地申請非都市土地變更作畜牧事業設施（飼料工廠）用地開發技術服務作業</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_6.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">德揚科技股份有限公司</h6>
                            <h4 class="support_item_text">台南市柳營科技園區入區申請</h4>
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