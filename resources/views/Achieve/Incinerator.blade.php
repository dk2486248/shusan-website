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
                <h1 class="content-title">廢棄物焚化系統</h1>
                <div class="flex justify-content-center">
                    <div class="flex">
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/engineer/Incinerator_1.png') }}" />
                            </div>
                            <div>
                                <h6 class="support_item_subtitle">利百景環保科技股份有限公司</h6>
                                <h4 class="support_item_text">乙級廢棄物處理廠空氣污染防制功能提昇工程</h4>
                            </div>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_95.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">義鼎盛科技股份有限公司</h6>
                            <h4 class="support_item_text">固體再生燃料(SRF)燃燒鍋爐暨污染防治系統EPC統包工程</h4>
                        </div>
                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_96.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">新創環保科技股份有限公司</h6>
                            <h4 class="support_item_text">甲級事業廢棄物焚化暨污染防治系統工程EPC作業</h4>
                        </div>

                        <div class="support_item">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/images/logo/logo_95.png') }}" />
                            </div>
                            <h6 class="support_item_subtitle">義鼎盛科技股份有限公司</h6>
                            <h4 class="support_item_text">SRF燃料鍋爐蒸汽熱能回收利用系統工程</h4>
                        </div>
                    </div>
                </div>
                @include('Page')

                <!-- <nav class="page_nav justify-content-end d-flex" aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item page-no"><a class="page-link" href="#">1</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav> -->
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')

<script>
    (function($) {
       
        // addPageNo();
    })(jQuery);


    function addPageNo(){

        let itemNum = $('#Incinerator').find('#envEngineer').find('.support_item').length;
       
        if (itemNum > 12) {

            let quotient = Math.floor(itemNum / 12);

            var html = '';

            for (let i = 1; i < quotient; i++) {
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



</script>

@endsection