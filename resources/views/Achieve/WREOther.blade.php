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
                <h1 class="content-title">水利及其他工程</h1>
                <div class="flex justify-content-center">
                    <div class="flex">
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_62.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">台南縣官田鄉公所</h6>
                                <h4 class="support_item_text">台南縣官田鄉垃圾衛生掩埋場進場道路災修工程委設監造</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_34.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">金門縣自來水廠</h6>
                            <h4 class="support_item_text">金門地區污水下水道污水處理廠改善工程設計間監造</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_70.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">台南縣政府</h6>
                            <h4 class="support_item_text">台灣蘭花生物科技園區第一期公共工程規劃設計及監造(含污水下水道工程)</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_36.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">經濟部標準檢驗局</h6>
                                <h4 class="support_item_text">汐止公教住宅污水處理設備整修工程之設計及監造</h4>
                            </div>
                        </div>

                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_25.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">佳里鎮公所</h6>
                            <h4 class="support_item_text">佳里鎮處理場聯外道路改善工程</h4>
                        </div>

                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_63.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">台南縣環境保護局</h6>
                            <h4 class="support_item_text">官田鄉新營生活圈南62、南111及南113道路改善工程</h4>
                        </div>

                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_60.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">官田鄉公所</h6>
                                <h4 class="support_item_text">台南縣永康市大橋地區區段徵收範圍內廢棄物分類清除工程監造案</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_21.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">後壁鄉公所</h6>
                            <h4 class="support_item_text">後壁鄉第七公墓更新改善及整地工程</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_8.jpg') }}" />
                            </div>
                            <h6 class="support_item_subtitle">東山鄉公所</h6>
                            <h4 class="support_item_text">93年東山鄉垃圾衛生掩埋場道路改善工程</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_86.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">永安鄉公所</h6>
                                <h4 class="support_item_text">高雄縣永安鄉永華排水整治後續工程設計</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_45.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">林邊鄉公所</h6>
                            <h4 class="support_item_text">屏東縣林邊鄉雨水下水道A幹線抽水站抽水機組汰換工程</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_86.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">永安鄉公所</h6>
                            <h4 class="support_item_text">永安鄉阿公店溪旁防汛道路植樹工程設計監造案</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_60.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">官田鄉公所</h6>
                                <h4 class="support_item_text">官田鄉垃圾掩埋場分隔土堤工程</h4>
                            </div>
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
                                <img src="{{ asset('/images/logo/logo_54.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">山上鄉公所</h6>
                            <h4 class="support_item_text">台南縣山上鄉公所三港翠排水護岸崩塌復建工程委託規劃設計監造</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_32.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">嘉義縣政府</h6>
                                <h4 class="support_item_text">龍宮溪排水系統（溪墘排水）菜埔里無名橋改善應急工程委託勘測設計及監造</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_80.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">新竹縣政府</h6>
                            <h4 class="support_item_text">新竹華興社區區段徵收公共設施委託專案管理技術服務</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_24.jpg') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">基隆市政府</h6>
                                <h4 class="support_item_text">「友蚋溪、瑪陵坑溪及石厝坑溪排水系統規劃委託技術服務」</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_108.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">屏東縣東港鎮東新自辦市地重劃區重劃會</h6>
                            <h4 class="support_item_text">屏東縣東港鎮東新自辦市地重劃區工程設計監造</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_86.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">永安鄉公所</h6>
                            <h4 class="support_item_text">永安鄉中華街戰車壕溝排水改善工程設計監造案</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_18.jpg') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">古坑花卉生產合作社</h6>
                                <h4 class="support_item_text">雲林縣崁腳設施園藝專區-古坑花卉生產合作社溫室設備設施新建工程委託監造服務</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_39.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">經濟部水利署第七河川局</h6>
                            <h4 class="support_item_text">大武丁排水出口閘門及抽水站工程委託設計監造技術服務</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_39.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">經濟部水利署第七河川局</h6>
                                <h4 class="support_item_text">烏龍排水幹線改善第二期及抽水站新建工程委託設計監造技術服務</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_94.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">左鎮鄉公所</h6>
                            <h4 class="support_item_text">光山道路復建工程(2)等二十七件工程之委託測量設計與監造</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_94.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">左鎮鄉公所</h6>
                            <h4 class="support_item_text">王萊宅農路支線復建工程等九件工程之委託測量設計與監造</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_79.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">新化鎮公所</h6>
                                <h4 class="support_item_text">台南縣新化鎮公所99年度第一期農水路 水土保持工程委託設計監造服務開口合約</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_79.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">新化鎮公所</h6>
                            <h4 class="support_item_text">台南縣新化鎮公所99年度第一期農水路與 排水工程委託設計監造服務開口合約</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_33.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">嘉義縣政府交通局</h6>
                                <h4 class="support_item_text">嘉義縣阿里山鄉豐山村聯絡道路復建工程委託規劃設計監造技術服務</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_94.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">左鎮鄉公所</h6>
                            <h4 class="support_item_text">後坑農路復建工程等十三件工程</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_42.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">空軍戰術管制聯隊</h6>
                            <h4 class="support_item_text">一中隊大漢山邊坡整治工程規劃設計及監造委託技術服務</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_38.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">經濟部水利署第六河川局</h6>
                                <h4 class="support_item_text">新化區虎頭溪排水等兩件改善工程測設暨監造委託技術服務</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_49.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">屏東縣政府</h6>
                            <h4 class="support_item_text">塭子一號排水應急工程等2件委託測量設計及監造技術服務</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_39.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">經濟部水利署第七河川局</h6>
                                <h4 class="support_item_text">隘寮溪新南堤防(後壁溪橋)防災減災、隘寮及鹽埔堤防河川環境改善等2件工程委託設計監造技術服務</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_39.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">經濟部水利署第七河川局</h6>
                            <h4 class="support_item_text">溪州溪閘門及抽水站新建工程委託設計監造技術服務</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_39.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">經濟部水利署第七河川局</h6>
                            <h4 class="support_item_text">東港溪龍頸溪河段河川環境改善工程委託設計監造技術服務</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_39.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">經濟部水利署第七河川局</h6>
                                <h4 class="support_item_text">第七河川局轄區水門更新改善工作委託設計監造技術服務</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_49.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">屏東縣政府</h6>
                            <h4 class="support_item_text">武洛溪支線崇蘭舊圳高速公路旁溼地新建工程委託測量設計及監造技術服務</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_72.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">台灣糖業股份有限公司畜殖事業部</h6>
                                <h4 class="support_item_text">屏東地區3處畜殖場沼氣聚氣發電工程委託監造服務</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_39.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">經濟部水利署第七河川局</h6>
                            <h4 class="support_item_text">轄區水門更新維修改善工程委託設計監造技術服務</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_49.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">屏東縣政府</h6>
                            <h4 class="support_item_text">屏東縣崇蘭舊圳旁景觀綠美化工程(第二期)委託測量設計及監造服務</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_63.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">臺南市政府環境保護局</h6>
                                <h4 class="support_item_text">臺南市焚化廠回饋休閒設施設備修繕工程設計監造</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_63.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">臺南市政府環境保護局</h6>
                            <h4 class="support_item_text">105年度臺南市廚餘堆肥廠修復工程設計監造案</h4>
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