(function ($) {
    var uri = window.location.href;
    var lastUri = uri.split('/')[uri.split('/').length - 1];
    lastUri = lastUri.split('#').length > 1 ?
        lastUri.split('#')[0] :
        lastUri
    $('#sideBar').find(`#${lastUri}`).addClass('active');

    autoSwiper();
    console.log(lastUri);
    if(lastUri=='Atmosphere'||lastUri=='HR'){
        chart();
    }
    mouseNav();
    addPageNo();
    
})(jQuery);

function mouseNav(){
    $('.nav-item').on('mouseover',function(){
        $(this).addClass('open')
    });
    $('.nav-item').on('mouseleave',function(){
        $(this).removeClass('open')
    })

}



function autoSwiper() {

    var swiper = new Swiper(".autoSwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
}

function chart() {
    var count = 0;
    var options = {
        chart: {
            type: 'line',
            height:'500px',
            width:'100%',
            zoom: { enabled: false }, 
            pan: { enabled: false },
            toolbar: {
                show: false
            }
        },
        title: {
            text: '同仁於本公司工作年資統計圖',
            align: 'center',
            style: {
                fontSize: '30px',
                color: '#1f4c78',
            }
        },
        subtitle: {
            text: '人數與百分比',
            align: 'center',
            margin: 30,
            style: {
                fontSize: '18px',
                color: '#3a72ab'
            }
        },
        series: [{
            type: 'line',
            name: '累積百分比',
            data: [25, 60, 65, 90, 100],
            color: '#708c69'
        }, {
            type: 'bar',
            name: '人數',
            data: [4, 6, 1, 4, 2],
            color: '#3a72ab',
            border: false
        }],
        dataLabels: {
            enabled: true,
            formatter: function (val) {
                count++;
                if (count <= 7) {
                    return val;
                }
                else {
                    return val + '%';
                }

            },
            textAnchor: 'middle',
            offsetY: -10,
            style: {
                colors: ['#828282', '#ffffff'],
                fontSize: '18px'
            },
            background: {
                enabled: false
            }
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    position: 'bottom', // top, center, bottom,
                },
            }
        },
        xaxis: {
            type: 'category',
            categories: ['1年以下', '1~3年', '3~5年', '6~10年', '10年以上'],
        },
        yaxis: [{
            seriesName: '累積百分比',
            max:100,
            min:0,
            title: {
                text: '',
                rotate: 0,
                offsetX: -15,
                offsetY: -260,
                style: {
                    color: '#708c69',
                    fontSize: '16px'
                },
            },
            labels: {
                formatter: function (val) {
                    return val + '%';
                },
                style: {
                    colors: '#708c69',
                    fontSize: '16px'
                }
            }
        }, {
            seriesName: '人數',
            opposite: true,
            title: {
                text: '',
                rotate: 0,
                offsetX: 0,
                offsetY: -260,
                style: {
                    color: '#3a72ab',
                    fontSize: '16px'
                }
            },
            labels: {
                formatter: function (val) {
                    return val + '人';
                },
                style: {
                    colors: '#3a72ab',
                    fontSize: '16px'
                }
            }
        },
        ],
        markers: {
            size: 5
        },
        stroke: {
            curve: "smooth",
            width: [2, 0]
        }
    }

    var chart = new ApexCharts(document.querySelector("#chart"), options);

    chart.render();
}


function addPageNo(){

    let itemNum = $('#Incinerator').find('#envEngineer').find('.support_item').length;
    console.log(`總數量${itemNum}`);
    if (itemNum > 12) {

        let quotient = Math.floor(itemNum / 12);
        console.log(quotient);
        var html = '';

        for (let i = 1; i < quotient+1; i++) {
            html += ` <li class="page-item page-no"><a class="page-link" href="#">${1+i}</a></li>`
        }

        let firstPage = $('.page_nav').find('.pagination').children('.page-item').eq(1);

        firstPage.after(html);
    }
    $('.page_nav').find('.page-item').eq(1).addClass('active');
    checkActive();

}


$('.page_nav').on('click', '.page-item', function() {
    var aria = $(this).find('.page-link').attr('aria-label');
    var activeDom = $('.pagination').find('.active');

    if (aria == 'Next') {
       
        if (activeDom.next().hasClass('page-no')) {
            activeDom.next().addClass('active');
            activeDom.removeClass('active');
        }
    }else if(aria == 'Previous'){
        if(activeDom.prev().hasClass('page-no')){
            activeDom.prev().addClass('active');
            activeDom.removeClass('active');
        }
    }else{
        activeDom.removeClass('active');
        $(this).addClass('active');
    }

    checkActive();
})


function checkActive(){
 
    let activeNo=$('.pagination').find('.active').find('.page-link').html();
    let minNo=(activeNo-1)*12+1;
    let maxNo=activeNo*12;

    $('#Incinerator').find('.support_item').addClass('d-none');

    for(minNo;minNo<(maxNo+1);minNo++){
        $('#Incinerator').find('.support_item').eq(minNo-1).removeClass('d-none');
    }

}
