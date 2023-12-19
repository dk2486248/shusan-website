@extends('layout')

@section('body')

<div id="contact_us">
    <div>
        <div class="d-flex" id="contact_info">
            <div class="main-title col-6">
                <h2>聯絡我們</h2>
                <hr>
                <div class="content-text">
                    <h6>地址：701 台南市東區裕農路375號3樓之1</h6>
                    <h6>電話：06-2090303</h6>
                    <h6>傳真：06-2098877</h6>
                    <h6>營業時間：週一~週五8:30~17:30</h6>
                </div>
            </div>
            <div class="main-title col-6">
                <h2>交通資訊</h2>
                <hr>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3672.9836697953283!2d120.22756107698545!3d22.987627979198272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346e76bd09af6bfd%3A0x1afd584e077c6bcc!2zNzAx5Y-w5Y2X5biC5p2x5Y2A6KOV6L6y6LevMzc16Jmf!5e0!3m2!1szh-TW!2stw!4v1694341331946!5m2!1szh-TW!2stw" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="card">
            <h1 class="content-title">線上諮詢</h1>
            <hr>
            <h3 class="content-text">您可以透過Email或電話、傳真聯繫我們，也可以填寫下列的表單，以便讓我們了解您的需求與規劃報價。</h3>

            <form method="POST" action="/ContactUs_form" class="contactUs_form">
                @csrf
                <div class="flex">
                    <div class="col-12 content_box" id="ask">
                        <h4 class="content-title">意見類型&nbsp;<span>*</span></h4>
                        <select class="col-12" name="ask">
                            <option value="1">業務合作</option>
                            <option value="2">意見指教</option>
                            <option value="3">資訊分享</option>
                            <option value="4">其他</option>
                        </select>
                    </div>
                    <div class="col-6 content_box">
                        <h4 class="content-title">聯絡信箱&nbsp;<span>*</span></h4>
                        <input class="col-12" name="email" type="text">
                    </div>
                    <div class="col-6 content_box">
                        <h4 class="content-title">公司寶號</h4>
                        <input class="col-12" type="text" name="company">
                    </div>

                    <div class="col-6 content_box">
                        <h4 class="content-title">怎麼稱呼您</h4>
                        <input class="col-12" type="text" name="name">
                    </div>
                    <div class="col-12 content_box">
                        <div class="desWord d-flex justify-content-center">
                            <h4 class="content-title">內容(您可以把需要補充的資訊寫在這裡)&nbsp;<span>*</span></h4>
                        </div>
                        <textarea class="col-12" type="text" minlength="5" name="content"></textarea>
                    </div>
                    <div class="col-12 d-flex justify-content-end button">
                        <button class="btn btn-warning" class="form-send" id="loginBtn">送出</button>
                        <button class="btn btn-secondary" type="reset">取消</button>
                    </div>

                </div>
            </form>

        </div>


    </div>
</div>
@endsection

@section('script')
<script src="{{ asset('/js/scriptWeb3.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.all.min.js"></script>
<link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.min.css
" rel="stylesheet">


<script>
    // $('.form-send').click(function(e) {
    //     e.preventDefault();
    //     console.log('666');

    //     Swal.fire(
    //         'Good job!',
    //         'You clicked the button!',
    //         'success'
    //     )

    //     // $('.contactUs_form').submit();


    //     // callAjax('/ContactUs_form', "POST", defaultForm);
    // })

    $('#loginBtn').on('click', function(e) {
        e.preventDefault();
        console.log('666');

        Swal.fire(
            '寄信成功',
            '',
            'success'
        )
        $('.contactUs_form').submit();

    })



    // function callAjax(uri, method, data) {

    //     $.ajax({
    //         url: uri,
    //         method: method,
    //         data: data,
    //         contentType: false,
    //         cache: false,
    //         processData: false,
    //         success: function success(data) {

    //             if (data == 0) {
    //                 swal({
    //                     icon: 'success',
    //                     confirmButtonText: '確定',
    //                     confirmButtonColor: '#0092ff',
    //                     allowOutsideClick: false
    //                 })
    //             }
    //         },
    //         error: function error(err) {
    //             console.log(err);
    //             swal({
    //                 icon: 'error',
    //                 confirmButtonText: '確定',
    //                 confirmButtonColor: '#0092ff',
    //                 allowOutsideClick: false
    //             });
    //         }
    //     });
    // }
</script>

@endsection