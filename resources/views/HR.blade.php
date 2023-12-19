@extends('layout')

@section('body')
<div id="hR">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="content" id="aboutMe_content_swiper">
                    <h5>
                        永續經營
                    </h5>
                    <h6>
                        只需相信&thinsp;我們一定存在
                    </h6>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center pt-10" id="homePage_header">
        <div>
            <h2>人力資源</h2>
        </div>

    </div>

    <div class="d-flex justify-content-start">
        <div id="company-organization-content">

            @include('AboutMeSideBar')
            <div id="hr">
                <div>
                    <h4 class="content-title">&thinsp;&thinsp;&thinsp;人員專業證照</h4>
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
                <div id="chartBox" style="width: 30vw;">
                    <div id="chart"></div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

@endsection