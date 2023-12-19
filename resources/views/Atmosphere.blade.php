@extends('layout')

@section('body')
<div class="section1">
    <!-- <div class="bg"></div> -->
    <div class="pic"></div>
    <div class="word">
        <h1>公司文化及氛圍</h1>
    </div>
</div>
<div id="atmosphere">
    <div class="support_page atmosphere_page" id="envEngineer">

        <div id="aboutMeContent">

            <div class="content">
                <div class="d-flex justify-content-start pt-10" id="homePage_header">
                    <div>
                        <h2>公司文化及人力資源</h2>

                    </div>
                </div>
                <div>
                    <div class="main-title">
                        <h2>公司文化</h2>
                        <div class="dir_companyGreen"></div>
                    </div>
                    <div class="d-flex flex-wrap">
                        <div class="content-text">
                            <h4>為使勞資關係長期維持，實施人性化管理，強調勞資雙方雙向溝通，公司致力提供舒適的工作環境及員工福利，員工盡情揮撒才能創造自我價值，共同創造美好將來。</h4>
                            <h4>工作場域特別規劃活潑輕鬆的設計，辦公期間撥放悠揚樂章，並提供零食櫃、咖啡機等，隨時補充身心靈所需能量，為夢想目標加把勁。</h4>
                            <h4>職工任務採明確分工、專案負責、專案管理，每個成員都有清楚的指標，並且透過專案執行奠基未來轉型基礎，以小實驗換取最終大成功，逐步實現自我成就與價值。</h4>

                        </div>
                        <div class="swiper autoSwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="swiper-content">
                                        <img src="{{ asset('/images/Atmosphere_3.jpg')}}">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper-content">
                                        <img src="{{ asset('/images/Atmosphere_2.jpg')}}">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="swiper-content">
                                        <img src="{{ asset('/images/Atmosphere_4.jpg')}}">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="swiper-content">
                                        <img src="{{ asset('/images/Atmosphere_6.jpg')}}">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="swiper-content">
                                        <img src="{{ asset('/images/Atmosphere_7.jpg')}}">
                                    </div>
                                </div>

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>



                <div>
                    <div class="main-title">
                        <h2>人員養成</h2>
                        <div class="dir_companyGreen"></div>
                    </div>
                    <div class="atmosphere_content">
                        <img src="{{ asset('/images/Atmosphere_5.png')}}">

                    </div>
                </div>

                <div>
                    <div class="main-title">
                        <h2>人力資源</h2>
                        <div class="dir_companyGreen"></div>
                    </div>
                    <div>
                        <div>
                            <h4 class="content-title text-center">&thinsp;&thinsp;&thinsp;人員專業證照</h4>
                            <div class="d-flex justify-content-center w-100">
                                <table class="tablePr">
                                    <tr class="title">
                                        <th>證照類別</th>
                                        <th>張數</th>
                                    </tr>
                                    <tr>
                                        <td> 環工技師</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>環境影響評估</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>空污專責</td>
                                        <td>6</td>
                                    </tr>
                                    <tr>
                                        <td>廢水專責</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <td>廢棄物專責</td>
                                        <td>7</td>
                                    </tr>
                                    <tr>
                                        <td>毒化物專責</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>土壤污染調查</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>室內空氣品質</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>工程品管(工程會)</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>碳排放管理</td>
                                        <td>5</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class=" d-flex justify-content-center w-100">
                            <div id="chartBox" style="width: 50vw; ">
                                <div id="chart"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>


<!-- <div class="section2" id="atmosphere">
    <div class="head2">

    </div>
    <div class="short">
        <div class="shortL">
            <h4>概述</h4>
            <hr class="align">
        </div>
        <div class="shortR">
            <h3>為使勞資關係長期維持，實施人性化管理，強調勞資雙方雙向溝通，公司致力提供舒適的工作環境及員工福利，員工盡情揮撒才能創造自我價值，共同創造美好將來。</h3>
            <h3>工作場域特別規劃活潑輕鬆的設計，辦公期間撥放悠揚樂章，並提供零食櫃、咖啡機等，隨時補充身心靈所需能量，為夢想目標加把勁。</h3>
            <h3>職工任務採明確分工、專案負責、專案管理，每個成員都有清楚的指標，並且透過專案執行奠基未來轉型基礎，以小實驗換取最終大成功，逐步實現自我成就與價值。</h3>
        </div>
    </div>

    <div class="short">
        <div class="shortL">
            <h4>教育</h4>
            <hr class="align">
        </div>
        <div class="shortR">
            <h3>利用教育訓練不斷提昇人員專業素質及迅速累積工程經驗，並建立品質優先的態度。</h3>
        </div>
    </div>
    <div class="short">
        <div class="shortL">
            <h4>提昇</h4>
            <hr class="align">
        </div>
        <div class="shortR">
            <h3>透過學術或政府機構辦理的研討會或活動，鼓勵人員參與，以達到專業知識、工作能力提昇，促成人員素質的提昇。</h3>
            <img src="{{ asset('/images/Atmosphere_2.jpg')}}" alt="">
            <hr>
        </div>
    </div>
    <div class="short">
        <div class="shortL">
            <h4>增强</h4>
            <hr class="align">
        </div>
        <div class="shortR">
            <h3>提供充分機會予人員考取相關專業證照，強化自身能力，具專業證照人員提供津貼。</h3>
            <img src="{{ asset('/images/Atmosphere_3.jpg')}}" alt="">
            <hr>
        </div>
    </div>
    <div class="short">
        <div class="shortL">
            <h4>鼓舞</h4>
            <hr class="align">
        </div>
        <div class="shortR">
            <h3>打造多層次激勵制度，提供員工認股機會，共同參與公司未來的發展，凝聚團隊合作精神，内部向心力，鼓勵人員積極性，達成共同經營的目標。</h3>

            <img src="{{ asset('/images/Atmosphere_4.jpg')}}" alt="">
            <hr>
        </div>
    </div>
</div> -->
@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

@endsection