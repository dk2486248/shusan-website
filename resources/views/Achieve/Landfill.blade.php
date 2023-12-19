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
                <h1 class="content-title">廢棄物掩埋場</h1>
                <div class="flex justify-content-center">
                    <div class="flex">
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_29.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">嘉義縣朴子市公所</h6>
                                <h4 class="support_item_text">嘉義縣朴子市垃圾衛生掩埋場工程規劃、設計監造工作</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_28.jpg') }}" />
                            </div>
                            <h6 class="support_item_subtitle">嘉義縣環境保護局</h6>
                            <h4 class="support_item_text">嘉義縣水上鄉鹿草鄉區域性垃圾衛生掩埋場工程規劃、設計監造工作</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_69.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">台南縣鹽水鎮公所</h6>
                            <h4 class="support_item_text">台南縣鹽水鎮垃圾衛生掩埋場工程規劃、設計監造工作</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_67.jpg') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">台南縣新營市公所</h6>
                                <h4 class="support_item_text">台南縣新營市第三期垃圾衛生掩埋場復育工程規劃、設計監造工作</h4>
                            </div>
                        </div>
                       
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_8.jpg') }}" />
                            </div>
                            <h6 class="support_item_subtitle">台南縣東山鄉公所</h6>
                            <h4 class="support_item_text">台南縣東山鄉第三期垃圾衛生掩埋場工程環境影響評估</h4>
                        </div>

                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_29.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">嘉義縣朴子市公所</h6>
                            <h4 class="support_item_text">嘉義縣朴子市應急垃圾衛生掩埋場工程規劃、設計監造工作</h4>
                        </div>

                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_60.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">台南縣安定鄉公所</h6>
                                <h4 class="support_item_text">台南縣安定鄉垃圾衛生掩埋場復育工程規劃、設計監造工作</h4>
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
                                <img src="{{ asset('/images/logo/logo_29.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">嘉義縣朴子市公所</h6>
                            <h4 class="support_item_text">嘉義縣朴子市佳禾里一期垃圾衛生掩埋場復育工程規劃、設計監造工作</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_27.jpg') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">嘉義縣大林鎮公所</h6>
                                <h4 class="support_item_text">嘉義縣大林鎮垃圾衛生掩埋場復育工程規劃、設計監造工作</h4>
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
                                <img src="{{ asset('/images/logo/logo_31.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">嘉義縣太保市公所</h6>
                            <h4 class="support_item_text">嘉義縣太保市垃圾衛生掩埋場工程規劃、設計監造工作</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_16.jpg') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">高雄縣桃源鄉公所</h6>
                                <h4 class="support_item_text">高雄縣桃源鄉垃圾衛生掩埋場工程監造工作</h4>
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
                                <img src="{{ asset('/images/logo/logo_67.jpg') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">台南縣新營市公所</h6>
                                <h4 class="support_item_text">台南縣新營市第五期垃圾衛生掩埋場工程規劃工作</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_30.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">水上鄉公所</h6>
                            <h4 class="support_item_text">嘉義縣水上鄉南和村舊有垃圾掩埋場復育計畫工程勘測設計工作</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_8.jpg') }}" />
                            </div>
                            <h6 class="support_item_subtitle">台南縣東山鄉公所</h6>
                            <h4 class="support_item_text">台南縣東山鄉大坑垃圾衛生掩埋場危險改善工程規劃、設計監造</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_88.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">雲林縣北港鎮公所</h6>
                                <h4 class="support_item_text">雲林縣北港鎮垃圾衛生掩埋場工程規劃、設計監造工作</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_74.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">台南縣白河鎮公所</h6>
                            <h4 class="support_item_text">台南縣白河鎮六溪垃圾衛生掩埋場危險改善工程規劃、設計監造工作</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_68.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">台南縣學甲鎮公所</h6>
                            <h4 class="support_item_text">台南縣學甲鎮第三期垃圾衛生掩埋場工程規劃、設計監造工作</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_8.jpg') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">台南縣東山鄉公所</h6>
                                <h4 class="support_item_text">台南縣東山鄉垃圾衛生掩埋場改善工程規劃、設計監造工作</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_65.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">台南縣下營鄉公所</h6>
                            <h4 class="support_item_text">台南縣下營鄉垃圾衛生掩埋場工程測設監造工作</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_64.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">台南縣佳里鎮公所</h6>
                                <h4 class="support_item_text">台南縣佳里鎮番子寮垃圾衛生掩埋場改善工程規劃、設計監造工作</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_66.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">台南縣新市鄉公所</h6>
                            <h4 class="support_item_text">台南縣新市鄉潭頂垃圾衛生掩埋場改善工程規劃、設計監造工作</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_8.jpg') }}" />
                            </div>
                            <h6 class="support_item_subtitle">台南縣東山鄉公所</h6>
                            <h4 class="support_item_text">台南縣東山鄉大坑垃圾衛生掩埋場改善計畫工程及監造工作</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_109.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">忠楊營造工程有限公司</h6>
                                <h4 class="support_item_text">台北縣八里下罟子區域性垃圾衛生掩埋場第三期後續興建統包工程設計工作</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_8.jpg') }}" />
                            </div>
                            <h6 class="support_item_subtitle">台南縣東山鄉公所</h6>
                            <h4 class="support_item_text">東山鄉第一期垃圾衛生掩埋場復育綠美化</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_64.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">台南縣佳里鎮公所</h6>
                                <h4 class="support_item_text">佳里鎮番子寮垃圾衛生掩埋場復育計畫</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_28.jpg') }}" />
                            </div>
                            <h6 class="support_item_subtitle">嘉義縣環境保護局</h6>
                            <h4 class="support_item_text">嘉義縣垃圾衛生掩埋場增設監測井工程</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_61.jpg') }}" />
                            </div>
                            <h6 class="support_item_subtitle">台南縣白河鄉公所</h6>
                            <h4 class="support_item_text">白河鎮垃圾衛生掩埋場進場道路維護工程設計監造</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_21.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">台南縣後壁鄉公所</h6>
                                <h4 class="support_item_text">後壁鄉一期垃圾衛生掩埋場復育綠美化工程</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_48.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">鳥松鄉公所</h6>
                            <h4 class="support_item_text">鳥松鄉垃圾衛生掩埋場封閉安全改善及復育工程委託規劃設計監造</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_78.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">溪口鄉公所</h6>
                                <h4 class="support_item_text">溪口鄉坪頂垃圾衛生掩埋場復育工程</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_141.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">大寮鄉公所</h6>
                            <h4 class="support_item_text">大寮鄉垃圾掩埋場滲出水處理改善工程</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_9.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">東石鄉公所</h6>
                            <h4 class="support_item_text">嘉義東石區域性垃圾衛生掩埋場復育工程</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_76.jpg') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">台中市環境保護局</h6>
                                <h4 class="support_item_text">台中市零期垃圾衛生掩埋場垃圾移除及再利用計畫</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_28.jpg') }}" />
                            </div>
                            <h6 class="support_item_subtitle">嘉義縣環境保護局</h6>
                            <h4 class="support_item_text">委託嘉義縣水上鄉鹿草區域性垃圾衛生掩埋場改善工程設計監造工作</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_28.jpg') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">嘉義縣環境保護局</h6>
                                <h4 class="support_item_text">委託嘉義縣朴子市等8鄉鎮舊垃圾掩埋場增設28口地下水監測井工程設計監造工作</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_55.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">善化鎮公所</h6>
                            <h4 class="support_item_text">善化鎮垃圾衛生掩埋場復育綠化工程委託設計及施工監造技術服務工作</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_79.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">新化鄉公所</h6>
                            <h4 class="support_item_text">新市鄉垃圾衛生掩埋場復育綠化工程委外測設、監造</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_4.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">大內鄉公所</h6>
                                <h4 class="support_item_text">大內鄉垃圾衛生掩埋場第ㄧ期後續綠美化復育工程委託設計及施工監造技術服務工作案</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_70.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">台南縣環保局</h6>
                            <h4 class="support_item_text">永康市王田大小垃圾掩埋場垃圾移除及再利用計畫委託專業服務廠商 調查規劃</h4>
                        </div>


                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_63.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">台南縣環境保護局</h6>
                                <h4 class="support_item_text">97年度台南縣垃圾衛生掩埋場滲出水清運暨監督查核計畫</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_63.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">台南縣環境保護局</h6>
                            <h4 class="support_item_text">98年度台南縣垃圾衛生掩埋場滲出水清運暨監督查核計畫</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_4.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">大內鄉公所</h6>
                            <h4 class="support_item_text">大內鄉二期廢棄物衛生掩埋場委託操作維護與營運作業服務</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_63.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">台南縣環境保護局</h6>
                                <h4 class="support_item_text">台南市委託辦理掩埋場一般垃圾採樣調查分析計畫</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_63.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">臺南市政府環境保護局</h6>
                            <h4 class="support_item_text">臺南市安定區域性垃圾衛生掩埋場及灣裡水肥場監督查核計畫</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_63.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">臺南市政府環境保護局</h6>
                                <h4 class="support_item_text">101年度臺南市委託辦理掩埋場一般垃圾採樣調查分析計畫</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_110.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">宏晟環保有限公司</h6>
                            <h4 class="support_item_text">乙級廢棄物掩埋場開發計畫技術服務工作</h4>
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