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
                <h1 class="content-title">汙水防治系統</h1>
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
                                <img src="{{ asset('/images/logo/logo_27.jpg') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">嘉義縣大林鎮公所</h6>
                                <h4 class="support_item_text">嘉義縣大林鎮應急垃圾衛生掩埋場工程規劃、設計監造工作</h4>
                            </div>
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
                                <img src="{{ asset('/images/logo/logo_75.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">台南縣新營市公所</h6>
                            <h4 class="support_item_text">台南縣新營市第五期垃圾衛生掩埋場工程規劃工作</h4>
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
                                <img src="{{ asset('/images/logo/logo_97.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">悅瑋企業有限公司</h6>
                            <h4 class="support_item_text">悅瑋企業有限公司第一類乙級廢棄物處理場第一期及第二期開發作業</h4>
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
                            <div>
                                <h6 class="support_item_subtitle">永揚環保事業有限公司</h6>
                                <h4 class="support_item_text">永揚環保事業有限公司第一類乙級廢棄物處理場開發作業</h4>
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
                                <img src="{{ asset('/images/logo/logo_34.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">金門縣自來水廠</h6>
                            <h4 class="support_item_text">金門縣自來水廠「金門地區污水處理廠功能提昇及管線工程」委託規劃設計監造服務案</h4>
                        </div>



                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_107.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">王家莊牧場</h6>
                                <h4 class="support_item_text">畜牧業廢水處理廠改善工程</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_3.jpg') }}" />
                            </div>
                            <h6 class="support_item_subtitle">長山育樂股份有限公司</h6>
                            <h4 class="support_item_text">大崗山花園新城污水處理廠新建工程(社區污水下水道)</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_142.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">利百景環保科技股份有限公司</h6>
                            <h4 class="support_item_text">利百景環保科技股份有限公司甲級廢棄物處理廠廢水處理設備(廢棄物處理廠/工業區)</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_51.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">碁富食品股份有限公司</h6>
                                <h4 class="support_item_text">碁富食品股份有限公司台南廠廢水處理廠新建工程(食品加工業)</h4>
                            </div>
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
                                <img src="{{ asset('/images/logo/logo_9.jpg') }}" />
                            </div>
                            <h6 class="support_item_subtitle">蜂勝股份有限公司</h6>
                            <h4 class="support_item_text">金豐盛股份有限公司台南肉品廠廢水處理廠安裝測試工程(屠宰業)</h4>
                        </div>


                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_95.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">義鼎盛科技股份有限公司</h6>
                                <h4 class="support_item_text">固體再生燃料燃燒鍋爐暨污染防治系統EPC統包工程(廢棄物處理廠/工業區)(食品加工業)</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_100.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">凱鼎土地開發建設股份有限公司</h6>
                            <h4 class="support_item_text">台南市安南區土城工業區(工8)開發計畫污水處理廠工程</h4>
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