<?php
    session_start();

if(isset($_SESSION["user"])){
    header("Location:home.php");
  }
        if(isset($_POST["submit"])) { 
             
             
            $servername = "localhost";
            $username = "root";
            $passwordDB = "";
            $dbname = "fuel_rio";

            $conn = new mysqli($servername, $username, $passwordDB, $dbname);

            $email = $_POST['email'];            
          
            $sqlInsert = "INSERT INTO 
            `forget_password`(`email`)
             VALUES ('$email')";
            $sqlmail = "SELECT id FROM users WHERE email = '$email'";
            $mailExists = mysqli_query($conn,$sqlmail);

            echo mysqli_num_rows($conn->query($sqlmail));
          
              if(mysqli_num_rows($conn->query($sqlmail)) != 0)
              {
                $result = mysqli_query($conn,$sqlInsert);
                  if($result)	
          		    {
          			     echo "<script>
                        alert('سوف نقوم بإرسال كلمة المرور الى بريدك ');
                         window.location.href='signin.php';
                        </script>";  
                       
          		    }
                  else{
                    echo $conn->error;
                  }
  		        }
              else
              {
                echo "<script>alert('ليس لديك حساب لدينا')</script>";
              }
               
            } 
   


        ?>


<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from emobile.orinostudio.com/preview/page-forgot-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Apr 2021 21:27:29 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="format-detection" content="telephone=no">

    <meta name="theme-color" content="#ff3f3f">
    <title>eMobile - Multipurpose HTML5 Template</title>
    <meta name="description" content="eMobile - Multipurpose HTML5 Template">
    <meta name="keywords"
        content="bootstrap 4, mobile template, 404, chat, about, cordova, phonegap, mobile, html, ecommerce, shopping, store, delivery, wallet, banking, education, jobs, careers, distance learning" />

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
            <header class="main_haeder bg-transparent justify-content-start">
                <div class="em_side_right">
                    <a class="btn btn__back rounded-circle" href="signin.php">
                        <i class="tio-chevron_left"></i>
                    </a>
                </div>
            </header>
            <!-- End.main_haeder -->

            <section class="em__signTypeOne">
                <div class="em_titleSign">
                    <h1>نسيت كلمة المرور</h1>
                    <p class="size-13 color-text">
                        قم بادخال بريدك الألكتروني وسوف نقوم بتزويدك بكلمة المرور
                    </p>
                </div>
                <div class="em__body" style="text-align: right;">
                    <form action="" method="post">
                        <div class="form-group with_icon">
                            <label>البريد الالكتروني</label>
                            <div class="input_group">
                                <input type="email" class="form-control" placeholder="example@mail.com" required style="text-align: right;" name="email">
                                <div class="icon" style="text-align: right;">
                                </div>
                                <svg id="Iconly_Two-tone_Message" data-name="Iconly/Two-tone/Message"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <g id="Message" transform="translate(2 3)">
                                    <path id="Path_445" d="M11.314,0,7.048,3.434a2.223,2.223,0,0,1-2.746,0L0,0"
                                        transform="translate(3.954 5.561)" fill="none" stroke="#200e32"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                        stroke-width="1.5" opacity="0.4" />
                                    <path id="Rectangle_511"
                                        d="M4.888,0h9.428A4.957,4.957,0,0,1,17.9,1.59a5.017,5.017,0,0,1,1.326,3.7v6.528a5.017,5.017,0,0,1-1.326,3.7,4.957,4.957,0,0,1-3.58,1.59H4.888C1.968,17.116,0,14.741,0,11.822V5.294C0,2.375,1.968,0,4.888,0Z"
                                        transform="translate(0 0)" fill="none" stroke="#200e32"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                        stroke-width="1.5" />
                                </g>
                            </svg>
                            </div>
                        </div>
                        <div class="em__footer">
                    <button href="index.html" class="btn bg-primary color-white justify-content-center" type="submit" name="submit" >استعادة كلمة المرور</button>
                    <a href="signin.php" class="btn hover:color-secondary justify-content-center">هل تذكرتها ؟ قم بالدخول الأن</a>
                </div>
                    </form>
                </div>
               
            </section>



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


<!-- Mirrored from emobile.orinostudio.com/preview/page-forgot-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Apr 2021 21:27:29 GMT -->
</html>