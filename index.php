<?php
if(!isset($_COOKIE["user_id"])){
$user_id=generateRandomString();

setcookie("user_id", $user_id, time() + (86400 * 700), "/"); 
}
//setcookie("user", "", time() - (86400 * 700));

function generateRandomString($length = 6) {
    $characters = '0123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from emobile.orinostudio.com/preview/page-welcome-classic.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Apr 2021 21:27:11 GMT -->
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

<body>
    <!-- Start em_loading -->
    <section class="em_loading" id="loaderPage">
        <div class="spinner_flash"></div>
    </section>
    <!-- End. em_loading -->
    <div id="wrapper">
        <div id="content">
            <!-- Start main_haeder -->
            <!-- End.main_haeder -->

            <!-- Start em_introPage -->
            <section class="em_welcomeClassic">
                <div class="cover_image">
                    <img src="assets/img/back1.png" alt="">
                    
                    <div class="em_dataAccount absolute bottom-0 w-100 padding-l-20 padding-r-20 margin-b-20">
                        <a href="home.php"
                            class="btn bg-red h-55 w-100 rounded-8 size-16 d-flex align-items-center justify-content-center color-white hover:color-white">
                            اضغط للمتابعه
                        </a>
                        
                    </div>
                </div>
            </section>
            <!-- End. em_introPage -->

        </div>

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


<!-- Mirrored from emobile.orinostudio.com/preview/page-welcome-classic.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Apr 2021 21:27:11 GMT -->
</html>