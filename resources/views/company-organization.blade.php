@extends('layout')

@section('body')

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
        <h2>公司組織</h2>
    </div>
</div>

<div class="d-flex justify-content-start">

    <div id="company-organization-content">

        @include('AboutMeSideBar')
        <div id="organiztion">
            <div id="myholder"></div>

            <div class="content">
                <h4 class="content-title">&thinsp;&thinsp;&thinsp;總經理、副總經理、各部門協理等主管資料：</h4>
                <div class="organization-content">
                    <h5>總經理</h5>
                    <ul>
                        <li>姓名-莊豐卿</li>
                        <li>主要經(學)歷-成功大學環境工程學系</li>
                        <li>專長-建廠及環保工程實務</li>
                    </ul>
                </div>
                <div class="organization-content">
                    <h5>副總經理</h5>
                    <ul>
                        <li>姓名-蘇聖文</li>
                        <li>主要經(學)歷-輔英大學環境工程學系</li>
                        <li>專長-甲級廢棄物處理技術人員；熱處理及空氣污染防制技術</li>
                    </ul>
                </div>
                <div class="organization-content">
                    <h5>副總經理</h5>
                    <ul>
                        <li>姓名-蘇揚根</li>
                        <li>主要經(學)歷-交通大學環境工程學系</li>
                        <li>專長-環境工程技師；環境規劃及土壤地下水整治</li>
                    </ul>
                </div>
                <div class="organization-content">
                    <h5>技術部協理兼經理</h5>
                    <ul>
                        <li>姓名-翁莊</li>
                        <li>主要經(學)歷-</li>
                        <li>專長-設備儀電控設計技術</li>
                    </ul>
                </div>
                <div class="organization-content">
                    <h5>環保專案部經理</h5>
                    <ul>
                        <li>姓名-李玉萍</li>
                        <li>主要經(學)歷-中山大學</li>
                        <li>專長-土地開發評估；環保相關許可申請</li>
                    </ul>
                </div>
                <div class="organization-content">
                    <h5>工程專案部經理</h5>
                    <ul>
                        <li>姓名-劉峰榮</li>
                        <li>主要經(學)歷-台灣師範大學地球科學系</li>
                        <li>專長-工程進度管理；土資場許可申請</li>
                    </ul>
                </div>
            </div>
            <!-- <div id="chartBox">
            <div id="chart"></div>
        </div> -->
        </div>

    </div>
</div>

@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.21/lodash.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.4.1/backbone.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jointjs/3.7.4/joint.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    GetOrganizationChart();


    function GetOrganizationChart() {

        var namespace = joint.shapes;

        var graph = new joint.dia.Graph({}, {
            cellNamespace: namespace
        });

        var paper = new joint.dia.Paper({
            el: document.getElementById('myholder'),
            model: graph,
            width: "1200px",
            height: "1000px",
            gridSize: 1,
            cellViewNamespace: namespace
        });



        var rect = new joint.shapes.standard.Rectangle();
        rect.position(300, 30);
        rect.resize(150, 40);
        rect.attr({
            body: {
                fill: '#00800C'
            },
            label: {
                text: '董事會',
                fill: 'white'
            }
        });
        rect.addTo(graph);

        var rect2 = rect.clone();
        // rect2.translate(0, 100);
        rect2.attr('label/text', '董事長');
        rect2.position(300, 100);
        // rect2.resize(100,40);
        rect2.addTo(graph);

        var link = new joint.shapes.standard.Link();

        link.connector('normal', {
            cornerType: 'cubic',
            precision: 0,
            cornerRadius: 20
        });
        link.source(rect);
        link.target(rect2);
        link.addTo(graph);


        var rect3 = rect.clone();

        rect3.attr('label/text', '總經理');
        rect3.position(300, 200);
        rect3.addTo(graph);

        var link2 = new joint.shapes.standard.Link();
        link2.source(rect2);
        link2.target(rect3);
        link2.addTo(graph);


        var rect4 = rect.clone();

        rect4.attr('label/text', '技術顧問團');
        rect4.position(100, 200);
        rect4.addTo(graph);

        var link = new joint.shapes.standard.Link();
        link.source(rect3);
        link.target(rect4);
        link.addTo(graph);

        var rect6 = rect.clone();

        rect6.attr('label/text', '副總經理');
        rect6.position(100, 400);
        rect6.addTo(graph);

        rect6.attr({
            body: {
                fill: '#006400'
            }
        });

        var link = new joint.shapes.standard.Link();
        link.source(rect3);
        link.target(rect6);
        link.addTo(graph);

        var rect7 = rect.clone();

        rect7.attr('label/text', '副總經理');
        rect7.position(400, 400);
        rect7.addTo(graph);

        rect7.attr({
            body: {
                fill: '#006400'
            }
        });

        var link = new joint.shapes.standard.Link();

        link.source(rect3);
        link.target(rect7);
        link.addTo(graph);


        var rect8 = rect.clone();

        rect8.attr('label/text', '行政管理部');
        rect8.position(750, 500);
        rect8.addTo(graph);

        rect8.attr({
            body: {
                fill: '#A6A600'
            }
        });

        var link = new joint.shapes.standard.Link();

        link.source(rect3);
        link.target(rect8);
        link.addTo(graph);


        var rect9 = rect8.clone();

        rect9.attr('label/text', '技術開發部\n(協理)');
        rect9.position(100, 500);
        rect9.addTo(graph);



        var link = new joint.shapes.standard.Link();
        link.source(rect9);
        link.target(rect6);
        link.addTo(graph);

        var rect10 = rect8.clone();

        rect10.attr('label/text', '焚化系統設計組');
        rect10.position(200, 600);
        rect10.addTo(graph);

        var link = new joint.shapes.standard.Link();
        link.router('orthogonal', {
            padding: 10
        });
        link.source(rect10);
        link.target(rect9);
        link.addTo(graph);

        var rect11 = rect8.clone();

        rect11.attr('label/text', '空汙防制設計組');
        rect11.position(200, 680);
        rect11.addTo(graph);

        var link = new joint.shapes.standard.Link();
        link.router('orthogonal', {
            padding: 10
        });
        link.source(rect11);
        link.target(rect9);
        link.addTo(graph);

        var rect12 = rect8.clone();

        rect12.attr('label/text', '防水設計組');
        rect12.position(200, 760);
        rect12.addTo(graph);

        var link = new joint.shapes.standard.Link();
        link.router('orthogonal', {
            padding: 10
        });
        link.source(rect12);
        link.target(rect9);
        link.addTo(graph);



        var rect13 = rect8.clone();

        rect13.attr('label/text', '環保專案部');
        rect13.position(300, 500);

        rect13.addTo(graph);

        var link = new joint.shapes.standard.Link();
        link.router('orthogonal', {
            padding: 10
        });
        link.source(rect13);
        link.target(rect7);
        link.addTo(graph);

        var rect14 = rect8.clone();

        rect14.attr('label/text', '工程專案部');
        rect14.position(500, 500);

        rect14.addTo(graph);

        var link = new joint.shapes.standard.Link();
        link.router('orthogonal', {
            padding: 10
        });
        link.source(rect14);
        link.target(rect7);
        link.addTo(graph);


        var rect15 = rect8.clone();

        rect15.attr('label/text', '環境工程師');
        rect15.position(400, 600);

        rect15.addTo(graph);

        var link = new joint.shapes.standard.Link();
        link.router('orthogonal', {
            padding: 10
        });
        link.source(rect15);
        link.target(rect13);
        link.addTo(graph);


        var rect16 = rect8.clone();

        rect16.attr('label/text', '景觀工程師');
        rect16.position(400, 680);

        rect16.addTo(graph);

        var link = new joint.shapes.standard.Link();
        link.router('orthogonal', {
            padding: 10
        });
        link.source(rect16);
        link.target(rect13);
        link.addTo(graph);


        var rect17 = rect8.clone();

        rect17.attr('label/text', '土地開發評估工程師');
        rect17.position(400, 760);

        rect17.addTo(graph);

        var link = new joint.shapes.standard.Link();
        link.router('orthogonal', {
            padding: 10
        });
        link.source(rect17);
        link.target(rect13);
        link.addTo(graph);


        var rect18 = rect8.clone();

        rect18.attr('label/text', '現場工務工程師');
        rect18.position(650, 600);

        rect18.addTo(graph);

        var link = new joint.shapes.standard.Link();
        link.router('orthogonal', {
            padding: 10
        });
        link.source(rect18);
        link.target(rect14);
        link.addTo(graph);


        var rect18 = rect8.clone();

        rect18.attr('label/text', '水利工程師');
        rect18.position(650, 680);

        rect18.addTo(graph);

        var link = new joint.shapes.standard.Link();
        link.router('orthogonal', {
            padding: 10
        });
        link.source(rect18);
        link.target(rect14);
        link.addTo(graph);

        var rect19 = rect8.clone();

        rect19.attr('label/text', '土木工程師');
        rect19.position(650, 760);

        rect19.addTo(graph);

        var link = new joint.shapes.standard.Link();
        link.router('orthogonal', {
            padding: 10
        });
        link.source(rect19);
        link.target(rect14);
        link.addTo(graph);


        var rect20 = rect8.clone();

        rect20.attr('label/text', '機電工程師');
        rect20.position(650, 840);

        rect20.addTo(graph);

        var link = new joint.shapes.standard.Link();
        link.router('orthogonal', {
            padding: 10
        });
        link.source(rect20);
        link.target(rect14);
        link.addTo(graph);

        var rect21 = rect8.clone();

        rect21.attr('label/text', '會計');
        rect21.position(850, 580);

        rect21.addTo(graph);

        var link = new joint.shapes.standard.Link();
        link.router('orthogonal', {
            padding: 10
        });
        link.source(rect21);
        link.target(rect8);
        link.addTo(graph);


        var rect22 = rect8.clone();

        rect22.attr('label/text', '出納');
        rect22.position(850, 660);

        rect22.addTo(graph);

        var link = new joint.shapes.standard.Link();
        link.router('orthogonal', {
            padding: 10
        });
        link.source(rect22);
        link.target(rect8);
        link.addTo(graph);

        var rect23 = rect8.clone();

        rect23.attr('label/text', '人事');
        rect23.position(850, 740);

        rect23.addTo(graph);

        var link = new joint.shapes.standard.Link();
        link.router('orthogonal', {
            padding: 10
        });
        link.source(rect23);
        link.target(rect8);
        link.addTo(graph);


        var rect24 = rect8.clone();

        rect24.attr('label/text', '採購');
        rect24.position(850, 820);

        rect24.addTo(graph);

        var link = new joint.shapes.standard.Link();
        link.router('orthogonal', {
            padding: 10
        });
        link.source(rect24);
        link.target(rect8);
        link.addTo(graph);

        paper.on({
            'cell:pointermove': function(evt, x, y) {
                return false;
            },
            'link:pointermove': function(evt, x, y) {
                return false;
            },
            'element:pointermove': function(evt, x, y) {
                return false;
            },
            'blank:pointermove': function(evt, x, y) {
                return false;
            },
            'element:pointerdown': function(evt, x, y) {
                return false;
            },
        });

        paper.options.clickThreshold = 0;

        $('#myholder').find('path').removeAttr('marker-end');
    }






    // $('#myholder').bind('mousemove', 'g', function () {
    //     return false;
    // })

    // $('#myholder').bind('mousemove', 'rect', function () {
    //     return false;
    // })

    // $('#myholder').bind('mousemove', 'text', function () {
    //     return false;
    // })

    // $('#myholder').bind('clcik', 'text', function () {
    //     return false;
    // })


    // $('#myholder').bind('mousemove', 'tspan', function () {
    //     return false;
    // })
    // $('#myholder').bind('mousemove', 'svg', function () {
    //     return false;
    // })
    // $('#myholder').bind('mousemove', 'marker', function () {
    //     return false;
    // })
    // $('#myholder').bind('mousemove', 'defs', function () {
    //     return false;
    // })

    // $('#myholder').bind('mousemove', 'path', function () {
    //     return false;
    // })
</script>
@endsection