<!DOCTYPE html>
<html id="html">



<head>
    <title>活動相簿</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/orgchart/3.8.0/css/jquery.orgchart.min.css'>
    <link rel="stylesheet" href="{{ asset('/css/swiper.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('/css/webStyle.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <!-- jQuery -->
    <!-- <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script> -->
    <script src="{{ asset('/js/jquery.min.js') }}"></script>
</head>

<body style="padding:10;margin:0;">
    
        <div id="app" style="width:1920px"></div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/nanogallery2/3.0.5/jquery.nanogallery2.min.js"></script>
<script>
    let imgs = [
         "{{ asset('/images/trav_pic/trav_36.jpg') }}",
         "{{ asset('/images/trav_pic/trav_35.jpg') }}",
         
        
         "{{ asset('/images/trav_pic/trav_32.jpg') }}",
        
         "{{ asset('/images/trav_pic/trav_33.jpg') }}",
         "{{ asset('/images/trav_pic/trav_31.jpg') }}",
         "{{ asset('/images/trav_pic/trav_34.jpg') }}",
        
         "{{ asset('/images/trav_pic/trav_37.jpg') }}",
         "{{ asset('/images/trav_pic/trav_38.jpg') }}",
         "{{ asset('/images/trav_pic/trav_39.jpg') }}",
         
        
    ]

    //items, 轉為nanogallery2所需輸入item格式
    let items = imgs.map(function(src) {
        src = src.replace(/\\/g, '\\\\')
        let title = src.split('/').pop()
        return {
            src: src,
            srct: src,
            title: title
        }
    })

    //nColPic, 每列圖片數量
    let nColPic = 4

    //w, 取得body寬度
    let w = $('body').width()
    

    //tw, 計算圖片寬度
    let tw = Math.floor((w - (nColPic + 1) * 2 - nColPic * 3) / nColPic)
    console.log(w);
    $("#app").nanogallery2({
        "thumbnailWidth": tw,
        "thumbnailHeight": "auto",
        "thumbnailBorderVertical": 0,
        "thumbnailBorderHorizontal": 0,
        "colorScheme": {
            "thumbnail": {
                "background": "rgba(0,0,0,0)"
            }
        },
        "thumbnailDisplayTransition": "scaleDown",
        "thumbnailDisplayTransitionDuration": 300,
        "thumbnailDisplayInterval": 50,
        "thumbnailOpenInLightox":false,
        "thumbnailLabel": {
            "display": false
        },
        "thumbnailHoverEffect2": "scale120|borderLighter|labelOpacity50",
        "thumbnailAlignment": "center",
        "items": items,
    });

    $('.nGY2GallerySub').css('display','flex').css('flex-wrap','wrap');


    // (function($) {
    //     $("#my_nanogallery2").nanogallery2({
    //         items: [{
    //             src: "{{ asset('/images/index_1.png') }}",
    //             srct: "{{ asset('/images/index_1.png') }}",
    //             title: 'Berlin 1'
    //         }],
    //         thumbnailWidth: 5000,
    //         thumbnailHeight: 500,


    //     });

    // })(jQuery);
</script>

</body>


</html>