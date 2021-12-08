<?php 
    session_start();

if(!isset($_SESSION["user"])){
  header("Location:signin.php");
}


      $ste="";
      $ac=0;
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "fuel_rio";
      $conn = new mysqli($servername, $username, $password, $dbname);
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      $sql="select * from users where id=".$_SESSION["user"]["id"];
      $result = $conn->query($sql);
      $allRecords = $result->fetch_all(MYSQLI_ASSOC);
      if(isset($_POST['info'])) {
          $name=$_POST['name'];
          $email=$_POST['email'];
          $lname=$allRecords[0]['name'];
          $lemail=$allRecords[0]['email'];
          if($name!=$lname ){
            $sql2="update users set name='".$name."' where id=".$_SESSION["user"]["id"];
            $result2 = $conn->query($sql2);
            $allRecords[0]['name']=$name;
          }
          
          if( $lemail!=$email){
            $sql2="update users set email='".$email."' where id=".$_SESSION["user"]["id"];
            $result2 = $conn->query($sql2);
            $allRecords[0]['email']= $email;
          }

      }
      if(isset($_POST['pass'])) {
        $l_pass=$_POST['last_pass'];
        $new_pass=$_POST['new_pass'];
        $con_pass=$_POST['con_pass'];
        $pas=$allRecords[0]['password'];
        if($pas==$l_pass && $new_pass==$con_pass){
          $sql3="update users set password=".$con_pass." where id=".$_SESSION["user"]["id"];
          $result3 = $conn->query($sql3);
          $ac=0;
        }
        else{
            $ste="يرجى التأكد من البيانات المدخلة";
            $ac=1;
        }
      
       
    }

?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from emobile.orinostudio.com/preview/page-my-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Apr 2021 21:27:12 GMT -->
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
    <link rel="apple-touch-icon" href="assets/img/favicon/f7-icon3.png">

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
            <header class="main_haeder header-sticky">
                <div class="em_side_right">
                    <a class="btn btn__back rounded-circle bg-snow" href="profile.php">
                        <i class="tio-chevron_left"></i>
                    </a>
                </div>
                <div class="title_page">
                    <span class="page_name" style="color: white;">حسابي</span>
                </div>
                <div class="em_side_right">
                </div>
            </header>
            <!-- End.main_haeder -->

            <!-- Start emPage___profile -->
            <section class="padding-t-80 padding-b-20 emPage__myAccount">
                <div class="item__tab lg_tab">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link <?php if($ac==0){echo ' active';}?>" id="pills-personal-tab" data-toggle="pill" href="#pills-personal"
                                role="tab" aria-controls="pills-personal" aria-selected="true">المعلومات الشخصية</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link <?php if($ac==1){echo ' active';}?>" id="pills-password-tab" data-toggle="pill" href="#pills-password"
                                role="tab" aria-controls="pills-password" aria-selected="false">كلمة المرور</a>
                        </li>
                        <span class="indicator__bg_active"></span>
                    </ul>
                </div>

                <div class="tab-content content__itemtab" id="pills-tabContent">
                    <div class="tab-pane fade <?php if($ac==0){echo ' show active';}?>" id="pills-personal" role="tabpanel"
                        aria-labelledby="pills-personal-tab">

                        <form method="post">
                            <div class="form-group with_icon" >
                                <label>الأسم الكامل</label>
                                <div class="input_group">
                                    <input type="text" class="form-control" value="<?php echo $allRecords[0]['name'];?>" name="name"
                                        placeholder="" required>
                                    <div class="icon">
                                        <svg id="Iconly_Two-tone_Profile" data-name="Iconly/Two-tone/Profile"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24">
                                            <g id="Profile" transform="translate(4 2)">
                                                <circle id="Ellipse_736" cx="4.778" cy="4.778" r="4.778"
                                                    transform="translate(2.801 0)" fill="none" stroke="#200e32"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="10" stroke-width="1.5" opacity="0.4" />
                                                <path id="Path_33945"
                                                    d="M0,3.016a2.215,2.215,0,0,1,.22-.97A4.042,4.042,0,0,1,3.039.426,16.787,16.787,0,0,1,5.382.1,25.053,25.053,0,0,1,9.767.1a16.979,16.979,0,0,1,2.343.33c1.071.22,2.362.659,2.819,1.62a2.27,2.27,0,0,1,0,1.95c-.458.961-1.748,1.4-2.819,1.611a15.716,15.716,0,0,1-2.343.339A25.822,25.822,0,0,1,6.2,6a4.066,4.066,0,0,1-.815-.055,15.423,15.423,0,0,1-2.334-.339C1.968,5.4.687,4.957.22,4A2.279,2.279,0,0,1,0,3.016Z"
                                                    transform="translate(0 13.185)" fill="none" stroke="#200e32"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="10" stroke-width="1.5" />
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group with_icon" >
                                <label>الإيميل</label>
                                <div class="input_group">
                                    <input type="email" class="form-control" value="<?php echo $allRecords[0]['email'];?>" name="email"
                                        placeholder="example@mail.com" required >
                                    <div class="icon">
                                        <svg id="Iconly_Two-tone_Message" data-name="Iconly/Two-tone/Message"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24">
                                            <g id="Message" transform="translate(2 3)">
                                                <path id="Path_445"
                                                    d="M11.314,0,7.048,3.434a2.223,2.223,0,0,1-2.746,0L0,0"
                                                    transform="translate(3.954 5.561)" fill="none" stroke="#200e32"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="10" stroke-width="1.5" opacity="0.4" />
                                                <path id="Rectangle_511"
                                                    d="M4.888,0h9.428A4.957,4.957,0,0,1,17.9,1.59a5.017,5.017,0,0,1,1.326,3.7v6.528a5.017,5.017,0,0,1-1.326,3.7,4.957,4.957,0,0,1-3.58,1.59H4.888C1.968,17.116,0,14.741,0,11.822V5.294C0,2.375,1.968,0,4.888,0Z"
                                                    transform="translate(0 0)" fill="none" stroke="#200e32"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="10" stroke-width="1.5" />
                                            </g>
                                        </svg>

                                    </div>
                                </div>
                            </div>
                            <section class="padding-t-90 footer__buttons" >
                                <div class="area__inside  bottom-0 w-100 bg-white">
                                    <button type="submit" name="info"
                                        class="btn btn__icon btn_default_lg bg-primary color-white text-left justify-content-center">
                                        حفظ التغيرات
                                    </button>
                                </div>
                            </section>
                        </form>

                    </div>
                    <div class="tab-pane fade <?php if($ac==1){echo 'show active';}?>" id="pills-password" role="tabpanel" aria-labelledby="pills-password-tab">
                        <form  method="post">
                            <div class="form-group with_icon">
                                <label>كلمة المرور الحالية</label>
                                <div class="input_group">
                                    <input type="password" class="form-control" name="last_pass"
                                        placeholder="enter your Current Password" required>
                                    <div class="icon">
                                        <svg id="Iconly_Two-tone_Password" data-name="Iconly/Two-tone/Password"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24">
                                            <g id="Password" transform="translate(2 2)">
                                                <path id="Stroke_1" data-name="Stroke 1"
                                                    d="M13.584,0H4.915C1.894,0,0,2.139,0,5.166v8.168C0,16.361,1.885,18.5,4.915,18.5h8.668c3.031,0,4.917-2.139,4.917-5.166V5.166C18.5,2.139,16.614,0,13.584,0Z"
                                                    transform="translate(0.75 0.75)" fill="none" stroke="#200e32"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="10" stroke-width="1.5" opacity="0.4" />
                                                <path id="Stroke_3" data-name="Stroke 3"
                                                    d="M3.7,1.852A1.852,1.852,0,1,1,1.851,0,1.852,1.852,0,0,1,3.7,1.852Z"
                                                    transform="translate(4.989 8.148)" fill="none" stroke="#200e32"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="10" stroke-width="1.5" />
                                                <path id="Stroke_5" data-name="Stroke 5" d="M0,0H6.318V1.852"
                                                    transform="translate(8.692 10)" fill="none" stroke="#200e32"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="10" stroke-width="1.5" />
                                                <path id="Stroke_7" data-name="Stroke 7" d="M.5,1.852V0"
                                                    transform="translate(11.682 10)" fill="none" stroke="#200e32"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="10" stroke-width="1.5" />
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group with_icon" id="show_hide_password">
                                <label>كلمة المرور الجديدة</label>
                                <div class="input_group">
                                    <input type="password" class="form-control" placeholder="enter your new password" name="new_pass"
                                        required>
                                    <div class="icon">
                                        <svg id="Iconly_Two-tone_Password" data-name="Iconly/Two-tone/Password"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24">
                                            <g id="Password" transform="translate(2 2)">
                                                <path id="Stroke_1" data-name="Stroke 1"
                                                    d="M13.584,0H4.915C1.894,0,0,2.139,0,5.166v8.168C0,16.361,1.885,18.5,4.915,18.5h8.668c3.031,0,4.917-2.139,4.917-5.166V5.166C18.5,2.139,16.614,0,13.584,0Z"
                                                    transform="translate(0.75 0.75)" fill="none" stroke="#200e32"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="10" stroke-width="1.5" opacity="0.4" />
                                                <path id="Stroke_3" data-name="Stroke 3"
                                                    d="M3.7,1.852A1.852,1.852,0,1,1,1.851,0,1.852,1.852,0,0,1,3.7,1.852Z"
                                                    transform="translate(4.989 8.148)" fill="none" stroke="#200e32"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="10" stroke-width="1.5" />
                                                <path id="Stroke_5" data-name="Stroke 5" d="M0,0H6.318V1.852"
                                                    transform="translate(8.692 10)" fill="none" stroke="#200e32"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="10" stroke-width="1.5" />
                                                <path id="Stroke_7" data-name="Stroke 7" d="M.5,1.852V0"
                                                    transform="translate(11.682 10)" fill="none" stroke="#200e32"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="10" stroke-width="1.5" />
                                            </g>
                                        </svg>
                                    </div>
                                    <button type="button" class="btn hide_show icon_password">
                                        <i class="tio-hidden_outlined"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="form-group with_icon">
                                <label>تأكيد كلمة المرور</label>
                                <div class="input_group">
                                    <input type="password" class="form-control" name="con_pass"
                                        placeholder="enter your Confirm New Password" required>
                                    <div class="icon">
                                        <svg id="Iconly_Two-tone_Password" data-name="Iconly/Two-tone/Password"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24">
                                            <g id="Password" transform="translate(2 2)">
                                                <path id="Stroke_1" data-name="Stroke 1"
                                                    d="M13.584,0H4.915C1.894,0,0,2.139,0,5.166v8.168C0,16.361,1.885,18.5,4.915,18.5h8.668c3.031,0,4.917-2.139,4.917-5.166V5.166C18.5,2.139,16.614,0,13.584,0Z"
                                                    transform="translate(0.75 0.75)" fill="none" stroke="#200e32"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="10" stroke-width="1.5" opacity="0.4" />
                                                <path id="Stroke_3" data-name="Stroke 3"
                                                    d="M3.7,1.852A1.852,1.852,0,1,1,1.851,0,1.852,1.852,0,0,1,3.7,1.852Z"
                                                    transform="translate(4.989 8.148)" fill="none" stroke="#200e32"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="10" stroke-width="1.5" />
                                                <path id="Stroke_5" data-name="Stroke 5" d="M0,0H6.318V1.852"
                                                    transform="translate(8.692 10)" fill="none" stroke="#200e32"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="10" stroke-width="1.5" />
                                                <path id="Stroke_7" data-name="Stroke 7" d="M.5,1.852V0"
                                                    transform="translate(11.682 10)" fill="none" stroke="#200e32"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="10" stroke-width="1.5" />
                                            </g>
                                        </svg>
                                    </div>
                                    
                                </div>
                                <label style="color: red;"><?php echo $ste ; ?></label>
                            </div>
                            <section class="padding-t-90 footer__buttons" >
                                <div class="area__inside  bottom-0 w-100 bg-white">
                                    <button type="submit" name="pass" 
                                        class="btn btn__icon btn_default_lg bg-primary color-white text-left justify-content-center">
                                        حفظ التغيرات
                                    </button>
                                </div>
                            </section>
                        </form>

                    </div>
                </div>

            </section>
            <!-- End. emPage___profile  -->

            <!-- Start footer__buttons -->
            
            <!-- End. footer__buttons -->

        </div>

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
    <!-- indicator tab -->
    <script src="assets/js/indicator-two.js"></script>
    <!-- main.js -->
    <script src="assets/js/main.js" defer></script>
    <!-- PWA app service registration and works js -->
    <script src="assets/js/pwa-services.js"></script>
</body>


<!-- Mirrored from emobile.orinostudio.com/preview/page-my-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Apr 2021 21:27:13 GMT -->
</html>