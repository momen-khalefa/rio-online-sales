<?php 
   session_start();
   if(!isset($_COOKIE["user_id"])){
     header("Location:signin.php");
   }
   
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from emobile.orinostudio.com/preview/component-cards.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Apr 2021 21:27:04 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="format-detection" content="telephone=no">

    <meta name="theme-color" content="#ff3f3f">
    <title>Rio Cafe</title>
    <meta name="description" content="Rio Cafe">
    <meta name="keywords"
        content="Rio cafe" />

    <!-- favicon -->
    <link rel="icon" type="image/png" href="assets/img/favicon/f7-icon3.png" sizes="32x32">
    <link rel="apple-touch-icon" href="assets/img/favicon/favicon192.png">

    <!-- CSS Libraries-->
    <!-- bootstrap v4.6.0 -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- 
        theiconof v3.0
        https://www.theiconof.com/search
     -->
    <link rel="stylesheet" href="assets/css/icons.css">
    <!-- Swiper 6.4.11 -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!-- Owl Carousel v2.3.4 -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- normalize.css v8.0.1 -->
    <link rel="stylesheet" href="assets/css/normalize.css">

    <!-- manifest meta -->
    <link rel="manifest" href="_manifest.json" />
    <!-- Hotjar Tracking Code for https://emobile.orinostudio.com/preview/index.html -->
    <script>
        (function (h, o, t, j, a, r) {
            h.hj = h.hj || function () { (h.hj.q = h.hj.q || []).push(arguments) };
            h._hjSettings = { hjid: 2340091, hjsv: 6 };
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script'); r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>
</head>

<body class="bg-snow" style="background-image: url('assets/img/back.png') ;  background-attachment: fixed;  
background-size: cover;">
    <!-- Start em_loading -->
    <section class="em_loading" id="loaderPage">
        <div class="spinner_flash"></div>
    </section>
    <!-- End. em_loading -->
    <div id="wrapper">
        <div id="content">
            <!-- Start main_haeder -->
            <header class="main_haeder header-sticky multi_item">
                <div class="em_side_right">
                    <a class="btn btn__back rounded-circle bg-snow" href="home.php">
                        <i class="tio-chevron_left"></i>
                    </a>
                </div>
                <div class="title_page">
                    <h1 class="page_name" style="color: white;">
                        الفروع
                    </h1>
                </div>
                <div class="em_side_right">
                    <!-- Can you add something here.. -->
                </div>
            </header>
            <!-- End.main_haeder -->

            <section class="padding-t-70 components_page padding-b-30">

                <!-- Start title -->
                <div class="emTitle_co padding-20" style="text-align: center;">
                    <h2 class="size-24 weight-500 color-secondary mb-1" >فروع الريو كافيه</h2>
                    <p class="size-12 color-text m-0">جميع فروع الريو كافيه في انحاء الوطن</p>
                </div>
                <!-- End. title -->



                <!-- Start emPage__blog -->
                <div class="emPage__blog" >
                    <a href="#" class="item__card layer-lg" style="width: 800px; " >
                        <div class="cover_img">
                            <img src="assets/img/Al-Musion.jpg" alt="">
                        </div>
                        <div class="card__body" style="text-align: right;">
                            <h2 class="card_title" >ريو المصيون</h2>
                            <p >
                                                       رام الله--- المصيون
                            </p>

                            <span class="padding-t-20 mb-0">هاتف : 0592978425</span>
                        </div>
                    </a>
                    
                </div>
                <div class="emPage__blog" >
                    <a href="#" class="item__card layer-lg" style="width: 800px; " >
                        <div class="cover_img">
                            <img src="assets/img/Alterah.jpg" alt="">
                        </div>
                        <div class="card__body" style="text-align: right;">
                            <h2 class="card_title" >ريو الطيرة</h2>
                            <p >
                                                       رام الله---الطيرة
                            </p>

                            <span class="padding-t-20 mb-0">هاتف : 0594302302</span>
                        </div>
                    </a>
                    
                </div>
                <div class="emPage__blog" >
                    <a href="#" class="item__card layer-lg" style="width: 800px; " >
                        <div class="cover_img">
                            <img src="assets/img/Tulkarem.jpg" alt="">
                        </div>
                        <div class="card__body" style="text-align: right;">
                            <h2 class="card_title" >ريو طولكرم</h2>
                            <p >
                                                    طولكرم---شارع نابلس
                            </p>

                            <span class="padding-t-20 mb-0">هاتف : 0599037799</span>
                        </div>
                    </a>
                    
                </div>
                <div class="emPage__blog" >
                    <a href="#" class="item__card layer-lg" style="width: 800px; " >
                        <div class="cover_img">
                            <img src="assets/img/Al-Balo3.jpg" alt="">
                        </div>
                        <div class="card__body" style="text-align: right;">
                            <h2 class="card_title" >ريو البالوع</h2>
                            <p >
                                                       رام الله--- البالوع
                            </p>

                            <span class="padding-t-20 mb-0">هاتف : 0594385555</span>
                        </div>
                    </a>
                    
                </div>
                <div class="emPage__blog" >
                    <a href="#" class="item__card layer-lg" style="width: 800px; " >
                        <div class="cover_img">
                            <img src="assets/img/bet-3ore.jpg" alt="">
                        </div>
                        <div class="card__body" style="text-align: right;">
                            <h2 class="card_title" >ريو بيت عور</h2>
                            <p >
                                                       رام الله--- بيت عور التحتا
                            </p>

                            <span class="padding-t-20 mb-0">هاتف : 0592978425</span>
                        </div>
                    </a>
                    
                </div>
                <div class="emPage__blog" >
                    <a href="#" class="item__card layer-lg" style="width: 800px; " >
                        <div class="cover_img">
                            <img src="assets/img/Jarico.jpg" alt="">
                        </div>
                        <div class="card__body" style="text-align: right;">
                            <h2 class="card_title" >ريو  أريحا</h2>
                            <p >
                                                       أريحا
                            </p>

                            <span class="padding-t-20 mb-0">هاتف : 0593111120</span>
                        </div>
                    </a>
                    
                </div>
                <div class="emPage__blog" >
                    <a href="#" class="item__card layer-lg" style="width: 800px; " >
                        <div class="cover_img">
                            <img src="assets/img/Nables-sara.jpg" alt="">
                        </div>
                        <div class="card__body" style="text-align: right;">
                            <h2 class="card_title" >ريو  صرة</h2>
                            <p >
                                                       نابلس ------- صرة
                            </p>

                            <span class="padding-t-20 mb-0">هاتف : 0598644644</span>
                        </div>
                    </a>
                    
                </div>
                <div class="emPage__blog" >
                    <a href="#" class="item__card layer-lg" style="width: 800px; " >
                        <div class="cover_img">
                            <img src="assets/img/qalandia.jpg" alt="">
                        </div>
                        <div class="card__body" style="text-align: right;">
                            <h2 class="card_title" >ريو  قلنديا</h2>
                            <p >
                                                       رام الله ------- قلنديا
                            </p>

                            <span class="padding-t-20 mb-0">هاتف : 0592030110</span>
                        </div>
                    </a>
                    
                </div>
                <div class="emPage__blog" >
                    <a href="#" class="item__card layer-lg" style="width: 800px; " >
                        <div class="cover_img">
                            <img src="assets/img/bdia.jpg" alt="">
                        </div>
                        <div class="card__body" style="text-align: right;">
                            <h2 class="card_title" >ريو  بديا</h2>
                            <p >
                                                        سلفيت ------- بديا
                            </p>

                            <span class="padding-t-20 mb-0">هاتف : 0568574264</span>
                        </div>
                    </a>
                    
                </div>
                <!-- End. emPage__blog -->



            </section>


        </div>

        <!-- Start em_main_footer -->
        <footer class="em_main_footer">
            <div class="em_body_navigation -active-links">
            <div class="item_link">
                    <a href="home.php" class="btn btn_navLink" >
                        <div class="icon_current">
                            <svg id="Iconly_Two-tone_Home" data-name="Iconly/Two-tone/Home"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <g id="Home" transform="translate(2.5 2)">
                                    <path id="Home-2" data-name="Home"
                                        d="M6.657,18.771V15.7a1.426,1.426,0,0,1,1.424-1.419h2.886A1.426,1.426,0,0,1,12.4,15.7h0v3.076A1.225,1.225,0,0,0,13.6,20h1.924A3.456,3.456,0,0,0,19,16.562h0V7.838a2.439,2.439,0,0,0-.962-1.9L11.458.685a3.18,3.18,0,0,0-3.944,0L.962,5.943A2.42,2.42,0,0,0,0,7.847v8.714A3.456,3.456,0,0,0,3.473,20H5.4a1.235,1.235,0,0,0,1.241-1.229h0"
                                        fill="none" stroke="#293343" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-miterlimit="10" stroke-width="1.5" />
                                </g>
                            </svg>
                        </div>
                        <div class="icon_active">
                            <svg id="Iconly_Bulk_Home" data-name="Iconly/Bulk/Home" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24">
                                <g id="Home" transform="translate(2.5 2)">
                                    <path id="Home-2" data-name="Home"
                                        d="M6.644,18.782V15.715A1.418,1.418,0,0,1,8.058,14.3h2.874a1.419,1.419,0,0,1,1.424,1.413h0v3.058A1.231,1.231,0,0,0,13.583,20h1.961a3.46,3.46,0,0,0,2.443-1A3.41,3.41,0,0,0,19,16.578V7.866a2.473,2.473,0,0,0-.9-1.9L11.443.674A3.115,3.115,0,0,0,7.485.745L.967,5.964A2.474,2.474,0,0,0,0,7.866v8.7A3.444,3.444,0,0,0,3.456,20H5.372a1.231,1.231,0,0,0,.873-.354,1.213,1.213,0,0,0,.362-.864Z"
                                        fill="#293343" />
                                </g>
                            </svg>

                        </div>
                    </a>
                </div>
                <div class="item_link">
                    <a href="location.php" class="btn btn_navLink">
                        <div class="icon_current">
                            <svg id="Iconly_Two-tone_Document" data-name="Iconly/Two-tone/Document"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <g id="Document" transform="translate(3 2)">
                                    <path id="Stroke_1" data-name="Stroke 1" d="M7.22.5H0"
                                        transform="translate(5.496 13.723)" fill="none" stroke="#200e32"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                        stroke-width="1.5" opacity="0.4" />
                                    <path id="Stroke_2" data-name="Stroke 2" d="M7.22.5H0"
                                        transform="translate(5.496 9.537)" fill="none" stroke="#200e32"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                        stroke-width="1.5" opacity="0.4" />
                                    <path id="Stroke_3" data-name="Stroke 3" d="M2.755.5H0"
                                        transform="translate(5.496 5.36)" fill="none" stroke="#200e32"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                        stroke-width="1.5" opacity="0.4" />
                                    <path id="Stroke_4" data-name="Stroke 4"
                                        d="M12.158,0,4.469,0A4.251,4.251,0,0,0,0,4.607v9.2A4.254,4.254,0,0,0,4.506,18.41l7.689,0a4.252,4.252,0,0,0,4.47-4.6v-9.2A4.255,4.255,0,0,0,12.158,0Z"
                                        transform="translate(0.751 0.75)" fill="none" stroke="#200e32"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                        stroke-width="1.5" />
                                </g>
                            </svg>

                        </div>
                        <div class="icon_active">
                            <svg id="Iconly_Bulk_Document" data-name="Iconly/Bulk/Document"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <g id="Document" transform="translate(3 2)">
                                    <path id="Path"
                                        d="M13.191,0H4.81C1.77,0,0,1.78,0,4.83V15.16C0,18.26,1.77,20,4.81,20h8.381C16.28,20,18,18.26,18,15.16V4.83C18,1.78,16.28,0,13.191,0"
                                        fill="#200e32" opacity="0.4" />
                                    <path id="Combined_Shape" data-name="Combined Shape"
                                        d="M.12,10.3a.8.8,0,0,1,0-.84A.785.785,0,0,1,.87,9.09H8.71a.79.79,0,0,1,0,1.57H.87a.732.732,0,0,1-.1.007A.783.783,0,0,1,.12,10.3ZM.87,6.09a.781.781,0,0,1,0-1.562H8.71a.781.781,0,0,1,0,1.562Zm0-4.521A.78.78,0,1,1,.87.01V0H3.859a.785.785,0,0,1,0,1.57Z"
                                        transform="translate(4.21 4.65)" fill="#200e32" />
                                </g>
                            </svg>

                        </div>
                    </a>
                </div>
                <div class="item_link">
                    <a href="hot_page.php" class="btn btn_navLink">
                        <div class="icon_current">
                            <svg id="Iconly_Two-tone_Category" data-name="Iconly/Two-tone/Category"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <g id="Category" transform="translate(2 2)">
                                    <path id="Stroke_1" data-name="Stroke 1"
                                        d="M2.449,0H5.716A2.459,2.459,0,0,1,8.163,2.47V5.764a2.46,2.46,0,0,1-2.448,2.47H2.449A2.46,2.46,0,0,1,0,5.764V2.47A2.46,2.46,0,0,1,2.449,0Z"
                                        transform="translate(11.837 0)" fill="none" stroke="#293343"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                        stroke-width="1.5" opacity="0.4" />
                                    <path id="Stroke_3" data-name="Stroke 3"
                                        d="M2.449,0H5.714A2.46,2.46,0,0,1,8.163,2.47V5.764a2.46,2.46,0,0,1-2.449,2.47H2.449A2.46,2.46,0,0,1,0,5.764V2.47A2.46,2.46,0,0,1,2.449,0Z"
                                        transform="translate(0 0)" fill="none" stroke="#293343" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" />
                                    <path id="Stroke_5" data-name="Stroke 5"
                                        d="M2.449,0H5.714A2.46,2.46,0,0,1,8.163,2.471V5.764a2.46,2.46,0,0,1-2.449,2.47H2.449A2.46,2.46,0,0,1,0,5.764V2.471A2.46,2.46,0,0,1,2.449,0Z"
                                        transform="translate(0 11.766)" fill="none" stroke="#293343"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                        stroke-width="1.5" />
                                    <path id="Stroke_7" data-name="Stroke 7"
                                        d="M2.449,0H5.716A2.46,2.46,0,0,1,8.163,2.471V5.764a2.459,2.459,0,0,1-2.448,2.47H2.449A2.46,2.46,0,0,1,0,5.764V2.471A2.46,2.46,0,0,1,2.449,0Z"
                                        transform="translate(11.837 11.766)" fill="none" stroke="#293343"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                        stroke-width="1.5" />
                                </g>
                            </svg>
                        </div>
                        <div class="icon_active">
                            <svg id="Iconly_Bulk_Category" data-name="Iconly/Bulk/Category"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <g id="Category" transform="translate(2 2)">
                                    <path id="Fill_1" data-name="Fill 1"
                                        d="M2.539,0H5.924A2.549,2.549,0,0,1,8.463,2.56V5.975a2.549,2.549,0,0,1-2.539,2.56H2.539A2.549,2.549,0,0,1,0,5.975V2.56A2.549,2.549,0,0,1,2.539,0"
                                        transform="translate(11.537 0)" fill="#200e32" opacity="0.4" />
                                    <path id="Combined_Shape" data-name="Combined Shape"
                                        d="M14.075,20a2.549,2.549,0,0,1-2.538-2.56V14.026a2.549,2.549,0,0,1,2.538-2.561h3.387A2.549,2.549,0,0,1,20,14.026V17.44A2.549,2.549,0,0,1,17.462,20ZM2.539,20A2.55,2.55,0,0,1,0,17.44V14.026a2.55,2.55,0,0,1,2.539-2.561H5.925a2.549,2.549,0,0,1,2.538,2.561V17.44A2.549,2.549,0,0,1,5.925,20Zm0-11.465A2.549,2.549,0,0,1,0,5.974V2.56A2.549,2.549,0,0,1,2.539,0H5.925A2.548,2.548,0,0,1,8.463,2.56V5.974A2.549,2.549,0,0,1,5.925,8.535Z"
                                        transform="translate(0 0)" fill="#200e32" />
                                </g>
                            </svg>

                        </div>
                    </a>
                </div>
                <div class="item_link">
                    <a href="my_cart.php" class="btn btn_navLink">
                        <div class="icon_current">
                            <svg id="Iconly_Two-tone_Bag" data-name="Iconly/Two-tone/Bag"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <g id="Bag" transform="translate(2.5 1.5)">
                                    <path id="Path_33955"
                                        d="M13.213,14.682H4.865C1.8,14.682-.554,13.574.114,9.117L.892,3.076C1.3.851,2.723,0,3.968,0H14.146c1.263,0,2.6.915,3.076,3.076L18,9.117C18.567,13.071,16.279,14.682,13.213,14.682Z"
                                        transform="translate(0.801 5.318)" fill="none" stroke="#293343"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                        stroke-width="1.5" />
                                    <path id="Path_33956"
                                        d="M8.659,4.32A4.32,4.32,0,0,0,4.339,0h0A4.32,4.32,0,0,0,0,4.32H0"
                                        transform="translate(5.492 0.778)" fill="none" stroke="#293343"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                        stroke-width="1.5" opacity="0.4" />
                                    <path id="Line_192" d="M.481.458H.435" transform="translate(12.316 9.144)"
                                        fill="none" stroke="#293343" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-miterlimit="10" stroke-width="1.5" />
                                    <path id="Line_193" d="M.481.458H.435" transform="translate(6.485 9.144)"
                                        fill="none" stroke="#293343" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-miterlimit="10" stroke-width="1.5" />
                                </g>
                            </svg>
                        </div>
                        <div class="icon_active">
                            <svg id="Iconly_Bulk_Bag" data-name="Iconly/Bulk/Bag" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24">
                                <g id="Bag" transform="translate(3 2)">
                                    <path id="Combined_Shape" data-name="Combined Shape"
                                        d="M13.159,15H4.868c-1.88,0-3.175-.438-3.958-1.339C.091,12.72-.172,11.3.105,9.315L.883,3.12A4.083,4.083,0,0,1,2.076.707,2.736,2.736,0,0,1,3.932,0H14.087a2.667,2.667,0,0,1,1.827.731,4.391,4.391,0,0,1,1.23,2.389l.769,6.195a5.132,5.132,0,0,1-.906,4.23A4.914,4.914,0,0,1,13.159,15ZM11.885,3.329a.91.91,0,1,0,.884.91A.9.9,0,0,0,11.885,3.329Zm-5.789,0a.91.91,0,1,0,.884.91A.9.9,0,0,0,6.1,3.329Z"
                                        transform="translate(0 5)" fill="#200e32" />
                                    <path id="Path_34167"
                                        d="M9.974,4.774A.5.5,0,0,1,9.93,5H8.493a.649.649,0,0,1-.044-.226,3.484,3.484,0,0,0-6.968,0,.649.649,0,0,1,0,.226H.01a.649.649,0,0,1,0-.226,5,5,0,0,1,9.99,0Z"
                                        transform="translate(4)" fill="#200e32" opacity="0.4" />
                                </g>
                            </svg>
                        </div>
                          <?php
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "fuel_rio";
                            $conn = new mysqli($servername, $username, $password, $dbname);
                            if ($conn->connect_error) {
                              die("Connection failed: " . $conn->connect_error);
                            }
                                 $sqll="select * from cart where cust_id=".$_COOKIE["user_id"];
                                 $resultl = $conn->query($sqll);
                                 $allRecords = $resultl->fetch_all(MYSQLI_ASSOC);
                                 if(count($allRecords)>0){
                                   echo '<div class="items_basket">'.count($allRecords).' items</div>';
                                 }
                        ?>
                    </a>
                </div>
                <div class="item_link">
                    <a href="orders.php" class="btn btn_navLink btn_profile">
                        <div class="img_profile">
                            <img src="assets/img/f7-icon.png" alt="">
                        </div>
                    </a>
                </div>
            </div>
        </footer>
        <!-- End. em_main_footer -->

    </div>

    <!-- jquery -->
    <script src="assets/js/jquery-3.6.0.js"></script>
    <!-- popper.min.js 1.16.1 -->
    <script src="assets/js/popper.min.js"></script>
    <!-- bootstrap.js v4.6.0 -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Owl Carousel v2.3.4 -->
    <script src="assets/js/vendor/owl.carousel.min.js"></script>
    <!-- Swiper 6.4.11 -->
    <script src="assets/js/vendor/swiper-bundle.min.js"></script>
    <!-- sharer 0.4.0 -->
    <script src="assets/js/vendor/sharer.js"></script>
    <!-- short-and-sweet v1.0.2 - Accessible character counter for input elements -->
    <script src="assets/js/vendor/short-and-sweet.min.js"></script>
    <!-- jquery knob -->
    <script src="assets/js/vendor/jquery.knob.min.js"></script>
    <!-- main.js -->
    <script src="assets/js/main.js" defer></script>
    <!-- PWA app service registration and works js -->
    <script src="assets/js/pwa-services.js"></script>
</body>


</html>