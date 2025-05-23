<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- حط دا في <head> -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <title>EmaxIT International Inc.</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-seo-dream.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/animated.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.css')}}">




    <style>
    .feature_area {
        padding-top: 70px;
    }

    .feature_item {
        text-align: center;
        padding: 40px 0px 60px 0px;
        -webkit-transition: all 400ms linear 0s;
        -o-transition: all 400ms linear 0s;
        transition: all 400ms linear 0s;
    }

    .feature_item .f_icon {
        min-height: 91px;
        position: relative;
    }

    .feature_item .f_icon img {
        position: absolute;
        bottom: 0px;
        left: 50%;
        -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
        transform: translateX(-50%);
    }

    .feature_item h4 {
        color: #0b1033;
        font-family: "Roboto", sans-serif;
        font-weight: bold;
        font-size: 24px;
        padding: 45px 0px 20px 0px;
    }

    .feature_item p {
        font-size: 15px;
        line-height: 28px;
        font-family: "Roboto", sans-serif;
        color: #7c8d93;
        font-weight: 500;
        max-width: 290px;
        margin: auto;
        padding-bottom: 60px;
    }

    .feature_item .more_btn {
        opacity: 0;
    }

    .feature_item:hover {
        -webkit-box-shadow: 0px 14px 38px 0px rgba(0, 0, 0, 0.11);
        box-shadow: 0px 14px 38px 0px rgba(0, 0, 0, 0.11);
    }

    .feature_item:hover .more_btn {
        opacity: 1;
    }

    /* start */
    .service_feature {
        border-bottom: 1px solid #bbbec1;
        padding-top: 100px;
        overflow: hidden;
    }

    .service_feature .feature_inner {
        margin-bottom: -50px;
    }

    .service_feature .feature_inner .feature_item {
        margin-bottom: 50px;
    }

    .service_feature .feature_inner .feature_item .more_btn {
        opacity: 1;
        background: transparent;
        border-color: transparent;
        background-image: -webkit-gradient(linear, left top, right top, from(#e6ac6e), to(#ea9d31));
        background-image: -webkit-linear-gradient(left, #e6ac6e, #ea9d31);
        background-image: -o-linear-gradient(left, #e6ac6e, #ea9d31);
        background-image: linear-gradient(left, #e6ac6e, #ea9d31);
        color: transparent;
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-transition: all 400ms linear 0s;
        -o-transition: all 400ms linear 0s;
        transition: all 400ms linear 0s;
        background-size: 200% auto;
    }

    .service_feature .feature_inner .feature_item:hover .more_btn {
        color: #fff;
        background-image: -webkit-gradient(linear, left top, right top, from(#e6ac6e), color-stop(51%, #998dff), to(#e6ac6e));
        background-image: -webkit-linear-gradient(left, #e6ac6e 0%, #ea9d31 51%, #e6ac6e 100%);
        background-image: -o-linear-gradient(left, #e6ac6e 0%, #ea9d31 51%, #e6ac6e 100%);
        background-image: linear-gradient(to right, #e6ac6e 0%, #ea9d31 51%, #e6ac6e 100%);
        border-color: rgba(204, 241, 255, 0.5);
        background-clip: inherit;
    }

    .more_btn {
        padding: 0px 46px;
        background-image: -webkit-gradient(linear, left top, right top, from(#6fbcfe), color-stop(51%, #ea9d31), to(#ea9d31));
        background-image: -webkit-linear-gradient(left, #ea9d31 0%, #ea9d31 51%, #ea9d31 100%);
        background-image: -o-linear-gradient(left, #ea9d31 0%, #ea9d31 51%, #ea9d31 100%);
        background-image: linear-gradient(to right, #ea9d31 0%, #ea9d31 51%, #ea9d31 100%);
        background-size: 200% auto;
        z-index: 2;
        display: inline-block;
        -webkit-transition: all 400ms ease-out;
        -o-transition: all 400ms ease-out;
        transition: all 400ms ease-out;
        text-align: center;
        color: #fff;
        font-size: 15px;
        font-family: "Roboto", sans-serif;
        line-height: 55px;
        border: 6px solid rgba(204, 241, 255, 0.5);
        border-radius: 33px;
    }

    .more_btn:hover {
        background-position: right center;
        color: #fff;
    }

    /* Banner Area css
============================================================================================ */
    .banner_area {
        position: relative;
        z-index: 3;
        overflow: hidden;
    }

    .banner_area:before {
        content: "";
        background: url(../img/banner/banner-bg.png) no-repeat scroll center right;
        position: absolute;
        right: 0px;
        top: 0px;
        height: 100%;
        max-width: 1233px;
        width: 100%;
    }

    .banner_inner_text {
        padding-top: 200px;
        position: relative;
        padding-bottom: 95px;
    }

    .banner_inner_text:before {
        content: "";
        width: 213px;
        height: 1px;
        position: absolute;
        background: #ced0e0;
        left: 0px;
        bottom: 0px;
    }

    .banner_inner_text h2 {
        font-size: 72px;
        color: #0b1033;
        font-family: "Roboto", sans-serif;
        font-weight: normal;
    }

    .banner_inner_text p {
        font-size: 24px;
        color: #6b7d8e;
        font-family: "Roboto", sans-serif;
        font-weight: normal;
        padding-top: 15px;
    }

    /* End Banner Area css
============================================================================================ */
    .slider {
        display: flex;
        overflow-x: auto;
        overflow-y: hidden;
        scroll-snap-type: x mandatory;
        scroll-behavior: smooth;
        scrollbar-width: none;
        /* لإخفاء شريط التمرير في المتصفحات المدعومة */
        width: 100%;
        height: 85vh;
        padding: 2rem;
        margin: 0 auto;
        background-image: url("{{asset('assets/images/world-map.png')}}");
        background-size: 55%;
        background-position: right;
        background-repeat: no-repeat;
        background-attachment: fixed;
        position: relative;
        z-index: 1;
        margin-top: 50px;
        margin-bottom: 50px;
        padding: 2rem;
        background-color: rgba(226, 238, 221, 0.17);
        backdrop-filter: blur(20px);
    }

    .slider-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex: 0 0 100%;
        /* هذا يحدد أن كل شريحة تأخذ عرض 100% */
        scroll-snap-align: start;
        padding: 0 5%;
        box-sizing: border-box;
    }

    .slider-text {
        flex: 1;
        color: #fff;
        max-width: 50%;
        /* تخصيص المساحة للنص */
        position: relative;
        z-index: 2;
        margin-top: 30px;
        margin-left: 100px;

    }

    .slider-text h2 {
        font-size: 50px;
        font-weight: 700;
        color: #ff8700;
        line-height: 72px;
    }

    .slider-text h2 span {
        color: #ff8700;
        font-weight: 700;
        text-transform: uppercase;
    }


    .slider-text p {
        font-size: 1.5rem;
        margin-top: 50px;
        margin-bottom: 1.5rem;
        color: #000;
        font-weight: 400;


        line-height: 1.5;
        max-width: 80%;
        margin-left: -15px;
        margin-right: 0;
        margin-top: 20px;
        margin-bottom: 20px;
        padding: 0 20px;

    }

    #p1,
    #p2,
    #p3 {
        font-size: 2rem;
        margin-top: 20px;
        margin-bottom: 1.5rem;
        color: #000;
        font-weight: bold;
        margin-left: -15px;


        border-radius: 0px;
        box-shadow: none;
    }

    .slider-btn {
        display: inline-block;
        padding: 0.75rem 1.5rem;
        background-color: #ff8700;
        color: #fff;
        text-decoration: none;
        border-radius: 0.5rem;
        transition: background-color 0.3s ease;
        margin-top: 10px;
    }

    .slider-btn:hover {
        background-color: #fff;
    }

    .slider-item img {
        max-width: 39%;
        height: 700px;
        object-fit: contain;
        border-radius: 1rem;
        position: relative;
        z-index: 1;
        /* التأكد أن الصورة خلف النص */

        bottom: -50px;
    }

    .slider-nav {
        display: flex;
        justify-content: center;
        gap: 0.5rem;
        margin-top: 1rem;
    }

    .dot {
        width: 14px;
        height: 14px;
        border-radius: 50%;
        background-color: #000;
        /* تغيير اللون إلى الأسود */
        opacity: 1;
        /* جعل النقاط واضحة دائمًا */
        transition: opacity 0.3s ease, transform 0.3s ease;
    }

    .dot:hover,
    .dot.active {
        opacity: 1;
        transform: scale(1.2);
    }

    /* إضافة تفعيل النقاط */
    .slider-item:target .dot {
        background-color: #ff6f61;
        /* تغيير لون النقطة عند التفعيل */
    }

    .slider-nav .dot {
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .dot.active {
        background-color: #ff6f61;
        transform: scale(1.2);
    }

    /* تخصيص الكود لتغيير النقاط بشكل تلقائي */
    @keyframes slideShow {
        0% {
            transform: translateX(0);
        }

        33% {
            transform: translateX(-100%);
        }

        66% {
            transform: translateX(-200%);
        }

        100% {
            transform: translateX(0);
        }
    }


    .slider-item {
        animation: slideUp 3s ease-out forwards;
    }

    @keyframes slideUp {
        from {
            transform: translateY(100px);
            opacity: 0;
        }

        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    @media (max-width: 992px) {
        .slider-item {
            flex-direction: column;
            text-align: center;
        }

        .slider-text {
            max-width: 100%;
            margin-top: 20px;
        }

        .slider-text h2 {
            font-size: 40px;
            line-height: 1.2;
        }

        .slider-text p,
        #p1,
        #p2,
        #p3 {
            font-size: 1.2rem;
            max-width: 100%;
            padding: 0 10px;
        }

        .slider-btn {
            margin-top: 20px;
        }

        .slider-item img {
            max-width: 80%;
            height: auto;
            margin-top: 20px;
            bottom: 0;
        }

        .slider {
            padding: 1rem;
            height: auto;
            background-size: 100%;
        }
    }

    @media (max-width: 576px) {
        .slider-text h2 {
            font-size: 32px;
            margin-left: -50px !important;
        }

        .slider-text p,
        #p1,
        #p2,
        #p3 {
            font-size: 1rem;

        }

        .dot {
            width: 10px;
            height: 10px;
        }
    }

    /*** Service ***/
    /* Blog Main Area css
============================================================================================ */
    .blog_img {
        position: relative;
        max-height: 400px;
        overflow: hidden;
    }

    .blog_img .blog_date {
        position: absolute;
        left: 0px;
        top: 40px;
        max-width: 120px;
        width: 100%;
        background: #6fbcfe;
        /* Old browsers */
        background: -moz-linear-gradient(left, #6fbcfe 0%, #9b8aff 100%);
        /* FF3.6-15 */
        background: -webkit-linear-gradient(left, #6fbcfe 0%, #9b8aff 100%);
        /* Chrome10-25,Safari5.1-6 */
        background: -webkit-gradient(linear, left top, right top, from(#6fbcfe), to(#9b8aff));
        background: -o-linear-gradient(left, #6fbcfe 0%, #9b8aff 100%);
        background: linear-gradient(to right, #6fbcfe 0%, #9b8aff 100%);
        /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#6fbcfe', endColorstr='#9b8aff', GradientType=1);
        /* IE6-9 */
        text-align: center;
        color: #fff;
        padding: 18px 0px 16px 0px;
    }

    .blog_img .blog_date h4 {
        font-size: 36px;
        font-family: "Roboto", sans-serif;
        font-weight: bold;
        padding-bottom: 5px;
    }

    .blog_img .blog_date h5 {
        font-size: 12px;
        font-weight: 500;
        font-family: "Roboto", sans-serif;
    }

    .blog_text {
        padding: 40px 30px 65px 30px;
    }

    .blog_text h4 {
        font-size: 24px;
        font-family: "Roboto", sans-serif;
        font-weight: bold;
        color: #0b1033;
        padding-bottom: 5px;
        text-align:center;
        



    }

    .blog_text .blog_author {
        padding-bottom: 30px;
    }

    .blog_text .blog_author a {
        font-size: 12px;
        font-family: "Roboto", sans-serif;
        font-weight: 500;
        color: #7c8d93;
        margin-right: 20px;
        position: relative;
    }

    .blog_text .blog_author a:before {
        content: "|";
        position: absolute;
        right: -13px;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
        color: #7c8d93;
    }

    .blog_text .blog_author a:last-child {
        margin-right: 0px;
    }

    .blog_text .blog_author a:last-child:before {
        display: none;
    }

    .blog_text p {
        font-size: 15px;
        font-family: "Roboto", sans-serif;
        font-weight: 500;
        line-height: 28px;
        color:#000 !important;

    }

    .blog_text p+p {
        padding-top: 30px;
    }

    .blog_text .more_btn {
        margin-top: 45px;
    }

    .blog_main_item {
        -webkit-box-shadow: 0px 14px 38px 0px rgba(0, 0, 0, 0.11);
        box-shadow: 0px 14px 38px 0px rgba(0, 0, 0, 0.11);
        margin-bottom: 100px;
    }

    .blog_main_item:last-child {
        margin-bottom: 0px;
    }

    .pagination_area {
        padding-top: 100px;
    }

    .pagination_area .pagination li {
        margin-right: 10px;
    }

    .pagination_area .pagination li a {
        border-radius: 0px;
        border: none;
        background: transparent;
        font-size: 14px;
        font-family: "Roboto", sans-serif;
        font-weight: bold;
        color: #7c8d93;
        padding: 0px;
        -webkit-transition: all 400ms linear 0s;
        -o-transition: all 400ms linear 0s;
        transition: all 400ms linear 0s;
    }

    .pagination_area .pagination li:last-child {
        margin-right: 0px;
    }

    .pagination_area .pagination li:hover a,
    .pagination_area .pagination li.active a {
        color: #0b1033;
        background: transparent;
    }

    .r_widget {
        margin-bottom: 80px;
    }

    .r_widget:last-child {
        margin-bottom: 0px;
    }

    .r_w_title {
        padding-bottom: 25px;
    }

    .r_w_title h3 {
        font-size: 18px;
        font-weight: 500;
        font-family: "Roboto", sans-serif;
        color: #0b1033;
    }

    .search_widget .input-group {
        display: block;
        position: relative;
    }

    .search_widget .input-group input {
        width: 100%;
        display: block;
        border-radius: 0px;
        border-width: 1px;
        border-style: solid;
        border-image: -moz-linear-gradient(180deg, #9b8aff 0%, #6ebdfe 100%);
        -webkit-border-image: -webkit-linear-gradient(180deg, #9b8aff 0%, #6ebdfe 100%);
        border-image: -webkit-linear-gradient(180deg, #9b8aff 0%, #6ebdfe 100%);
        border-image: -ms-linear-gradient(180deg, #9b8aff 0%, #6ebdfe 100%);
        border-image-slice: 1;
        border-top: 0px;
        border-left: 0px;
        border-right: 0px;
        height: 36px;
        padding: 0px;
        line-height: 0px;
        padding-bottom: 24px;
        outline: none;
        -webkit-box-shadow: none;
        box-shadow: none;
        font-size: 12px;
        color: #acb6ba;
        font-family: "Roboto", sans-serif;
        font-style: italic;
    }

    .search_widget .input-group input.placeholder {
        font-size: 12px;
        color: #acb6ba;
        font-family: "Roboto", sans-serif;
        font-style: italic;
    }

    .search_widget .input-group input:-moz-placeholder {
        font-size: 12px;
        color: #acb6ba;
        font-family: "Roboto", sans-serif;
        font-style: italic;
    }

    .search_widget .input-group input::-moz-placeholder {
        font-size: 12px;
        color: #acb6ba;
        font-family: "Roboto", sans-serif;
        font-style: italic;
    }

    .search_widget .input-group input::-webkit-input-placeholder {
        font-size: 12px;
        color: #acb6ba;
        font-family: "Roboto", sans-serif;
        font-style: italic;
    }

    .search_widget .input-group .input-group-btn {
        position: absolute;
        right: 0px;
        top: 0px;
        z-index: 3;
    }

    .search_widget .input-group .input-group-btn .btn-secondary {
        background: transparent;
        border-radius: 0px;
        padding: 0px;
        border: none;
        -webkit-transition: all 400ms linear 0s;
        -o-transition: all 400ms linear 0s;
        transition: all 400ms linear 0s;
        margin: 0px;
        outline: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        color: #acb6ba;
        cursor: pointer;
    }

    .search_widget .input-group .input-group-btn .btn-secondary:hover {
        color: #0b1033;
    }

    .categories_widget ul li {
        margin-bottom: 10px;
    }

    .categories_widget ul li a {
        font-size: 15px;
        font-family: "Roboto", sans-serif;
        font-weight: 500;
        color: #7c8d93;
        -webkit-transition: all 400ms linear 0s;
        -o-transition: all 400ms linear 0s;
        transition: all 400ms linear 0s;
    }

    .categories_widget ul li:last-child {
        margin-bottom: 0px;
    }

    .categories_widget ul li:hover a {
        color: #70a7e4;
    }

    .insta_widget ul {
        overflow: hidden;
        margin: -3px;
    }

    .insta_widget ul li {
        width: calc(100% / 3);
        float: left;
        overflow: hidden;
    }

    .insta_widget ul li a {
        display: block;
        padding: 3px;
    }

    .tag_widget ul {
        margin-right: -8px;
        margin-bottom: -12px;
    }

    .tag_widget ul li {
        display: inline-block;
        margin-right: 8px;
        margin-bottom: 12px;
    }

    .tag_widget ul li a {
        display: inline-block;
        background: #f4f8fc;
        padding: 0px 25px;
        line-height: 40px;
        font-family: "Roboto", sans-serif;
        font-size: 15px;
        font-weight: 500;
        color: #7c8d93;
        -webkit-transition: all 400ms linear 0s;
        -o-transition: all 400ms linear 0s;
        transition: all 400ms linear 0s;
    }

    .tag_widget ul li:hover a {
        border-radius: 20px;
        background-image: -moz-linear-gradient(10deg, #6ebdfe 0%, #9b8aff 100%);
        background-image: -webkit-linear-gradient(10deg, #6ebdfe 0%, #9b8aff 100%);
        background-image: -ms-linear-gradient(10deg, #6ebdfe 0%, #9b8aff 100%);
        color: #fff;
    }

    .quote_widget p {
        font-family: "Roboto", sans-serif;
        font-weight: 500;
        font-style: italic;
        color: #7c8d93;
        line-height: 30px;
        font-size: 15px;
        padding-top: 25px;
    }

    .s_blog_social {
        padding-bottom: 80px;
        padding-left: 30px;
    }

    .s_blog_social h3 {
        font-size: 18px;
        color: #0b1033;
        font-family: "Roboto", sans-serif;
        font-weight: 500;
        display: inline-block;
    }

    .s_blog_social ul {
        display: inline-block;
    }

    .s_blog_social ul li {
        display: inline-block;
        margin-left: 30px;
    }

    .s_blog_social ul li a {
        font-size: 12px;
        color: #0b1033;
    }

    .s_blog_social ul li:first-child {
        margin-left: 40px;
    }

    .blog_author .media {
        vertical-align: middle;
    }

    .blog_author .media .d-flex {
        padding-right: 20px;
        -ms-flex-item-align: center;
        align-self: center;
    }

    .blog_author .media .media-body h4 {
        font-size: 18px;
        font-family: "Roboto", sans-serif;
        font-weight: 500;
        padding-bottom: 25px;
    }

    .blog_author .media .media-body h4 span {
        color: #7c8d93;
    }

    .blog_author .media .media-body p {
        font-size: 15px;
        line-height: 28px;
        color: #7c8d93;
        font-family: "Roboto", sans-serif;
        font-weight: 500;
    }

    .blog_comment h3 {
        font-size: 18px;
        font-family: "Roboto", sans-serif;
        font-weight: 500;
        color: #0b1033;
        padding-bottom: 80px;
        padding-top: 80px;
    }

    .blog_comment .media {
        margin-bottom: 35px;
    }

    .blog_comment .media .d-flex {
        display: block !important;
        padding: 0px 0px 0px 25px;
        max-width: 144px;
        width: 100%;
    }

    .blog_comment .media .d-flex h4 {
        color: #0b1033;
        font-family: "Roboto", sans-serif;
        font-weight: 500;
        font-size: 16px;
        display: block;
        padding-bottom: 6px;
    }

    .blog_comment .media .d-flex h5 {
        color: #7c8d93;
        font-family: "Roboto", sans-serif;
        font-weight: 500;
        font-size: 12px;
        display: block;
    }

    .blog_comment .media .media-body {
        padding-left: 20px;
    }

    .blog_comment .media .media-body p {
        color: #7c8d93;
        font-family: "Roboto", sans-serif;
        font-weight: 500;
        font-size: 15px;
        line-height: 28px;
        padding-bottom: 15px;
    }

    .blog_comment .media .media-body a {
        color: #0b1033;
        font-family: "Roboto", sans-serif;
        font-weight: 500;
        font-size: 12px;
    }

    .blog_comment .media:last-child {
        margin-bottom: 0px;
    }

    .blog_comment_form {
        max-width: 560px;
    }

    .blog_comment_form h3 {
        font-size: 18px;
        font-family: "Roboto", sans-serif;
        font-weight: 500;
        color: #0b1033;
        padding: 75px 0px 55px 0px;
    }

    .blog_comment_form .contact_us_form {
        margin-top: 0px;
    }

    .blog_comment_form .contact_us_form .form-group input {
        height: 55px;
    }

    .blog_comment_form .contact_us_form .form-group:last-child {
        margin-bottom: 0px;
    }

    /* End Blog Main Area css
============================================================================================ */
    </style>


</head>