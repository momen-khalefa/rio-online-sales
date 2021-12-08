<?php
       session_start();

    if(!isset($_COOKIE["user_id"])){
      header("Location:index.php");
    }
  
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "fuel_rio";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    $sql="select * from users where id=".$_SESSION['user']['id'];  
    $result = $conn->query($sql);
    $allRecords = $result->fetch_all(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">


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

<body >
    <!-- Start em_loading -->
    <section class="em_loading" id="loaderPage">
        <div class="spinner_flash"></div>
    </section>
    <!-- End. em_loading -->
    <div id="wrapper">
        <div id="content">
            <!-- Start main_haeder -->
            <header class="main_haeder bg-transparent header-sticky header-white">
                <div class="em_menu_sidebar">
                    <button type="button" class="btn btn_menuSidebar item-show" data-toggle="modal"
                        data-target="#mdllSidebarMenu-background">
                        <i class="tio-menu_hamburger"></i>
                    </button>
                </div>
                <div class="title_page">
                    <span class="page_name">حسابي</span>
                </div>
                <form method="post">
                <div class="em_side_right">
                <button  type="submit" name="log_out" class="btn btn_logOut">  الخروج</button>
                      
                        <div class="ml-1 d-inline-block">
                            <svg id="Iconly_Two-tone_Logout" data-name="Iconly/Two-tone/Logout"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <g id="Logout" transform="translate(2 2)">
                                    <path id="Stroke_1" data-name="Stroke 1"
                                        d="M12.244,4.618V3.685A3.685,3.685,0,0,0,8.559,0H3.684A3.685,3.685,0,0,0,0,3.685v11.13A3.685,3.685,0,0,0,3.684,18.5H8.569a3.675,3.675,0,0,0,3.675-3.674v-.943"
                                        transform="translate(0.772 0.771)" fill="none" stroke="#fff"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                        stroke-width="1.5" opacity="0.4" />
                                    <path id="Stroke_3" data-name="Stroke 3" d="M12.041.5H0"
                                        transform="translate(7.768 9.521)" fill="none" stroke="#fff"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                        stroke-width="1.5" />
                                    <path id="Stroke_5" data-name="Stroke 5" d="M0,0,2.928,2.915,0,5.831"
                                        transform="translate(16.881 7.106)" fill="none" stroke="#fff"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                        stroke-width="1.5" />
                                </g>
                            </svg>
                        </div>

                    </a>
    </form>
                </div>
            </header>
            <!-- End.main_haeder -->

            <!-- Start emPage___profile with__background -->
            <section class=" emPage___profile with__background">
                <div class="emPersonal__data">
                    <div class="name">
                        <h2><?php echo $allRecords[0]['name'];?></h2>
                        <p><?php echo $allRecords[0]['email'];?></p>
                    </div>
                </div>
                <div class="emBody__navLink padding-t-30 padding-b-20">
                    <ul>
                        <li class="item">
                            <a href="my_account.php" class="nav-link">
                                <div class="media align-items-center">
                                    <div class="ico">
                                        <svg id="Iconly_Two-tone_Profile" data-name="Iconly/Two-tone/Profile"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24">
                                            <g id="Profile" transform="translate(4 2)">
                                                <circle id="Ellipse_736" cx="4.778" cy="4.778" r="4.778"
                                                    transform="translate(2.801 0)" fill="none" stroke="#292e34"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="10" stroke-width="1.5" opacity="0.4" />
                                                <path id="Path_33945"
                                                    d="M0,3.016a2.215,2.215,0,0,1,.22-.97A4.042,4.042,0,0,1,3.039.426,16.787,16.787,0,0,1,5.382.1,25.053,25.053,0,0,1,9.767.1a16.979,16.979,0,0,1,2.343.33c1.071.22,2.362.659,2.819,1.62a2.27,2.27,0,0,1,0,1.95c-.458.961-1.748,1.4-2.819,1.611a15.716,15.716,0,0,1-2.343.339A25.822,25.822,0,0,1,6.2,6a4.066,4.066,0,0,1-.815-.055,15.423,15.423,0,0,1-2.334-.339C1.968,5.4.687,4.957.22,4A2.279,2.279,0,0,1,0,3.016Z"
                                                    transform="translate(0 13.185)" fill="none" stroke="#292e34"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="10" stroke-width="1.5" />
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="media-body">
                                        <div class="txt">
                                            <h3>حسابي</h3>
                                            <p>تعديل المعلومات الشخصية</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="side_right">
                                    <i class="tio-chevron_right"></i>
                                </div>
                            </a>
                        </li>
                    
                        <li class="item">
                            <a href="orders.php" class="nav-link">
                                <div class="media align-items-center">
                                    <div class="ico">
                                        <svg id="Iconly_Two-tone_Bookmark" data-name="Iconly/Two-tone/Bookmark"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24">
                                            <g id="Bookmark" transform="translate(3.5 2)">
                                                <path id="Path_33968"
                                                    d="M7.368,15.854,1.437,19.1a.989.989,0,0,1-1.318-.394h0A1.043,1.043,0,0,1,0,18.243V3.844C0,1.1,1.876,0,4.577,0H10.92C13.538,0,15.5,1.025,15.5,3.661V18.243a.979.979,0,0,1-.979.979,1.08,1.08,0,0,1-.476-.119L8.073,15.854A.741.741,0,0,0,7.368,15.854Z"
                                                    transform="translate(0.796 0.778)" fill="none" stroke="#292e34"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="10" stroke-width="1.5" />
                                                <path id="Line_209" d="M0,.458H7.3" transform="translate(4.87 6.865)"
                                                    fill="none" stroke="#292e34" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"
                                                    opacity="0.4" />
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="media-body">
                                        <div class="txt">
                                            <h3>قائمة طلباتي</h3>
                                            <p>شاهد جميع طلباتك الحالية</p>
                                        </div>
                                    </div>
                                </div>
                                <?php 
                                $sql2="select * from orders where cust_id=1";  
                                $result2 = $conn->query($sql2);
                                $allRecords2 = $result2->fetch_all(MYSQLI_ASSOC);
                                ?>
                                <div class="side_right">
                                    <span class="number_item"><?php echo  count($allRecords2); ?></span>
                                    <i class="tio-chevron_right"></i>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </section>
            <!-- End. emPage___profile with__background -->

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
                                 $sqll="select * from cart where cust_id=".$_SESSION['user']['id'];
                                 $resultl = $conn->query($sqll);
                                 $allRecordsl = $resultl->fetch_all(MYSQLI_ASSOC);
                                 if(count($allRecordsl)>0){
                                   echo '<div class="items_basket">'.count($allRecordsl).' items</div>';
                                 }
                        ?>
                    </a>
                </div>
                <div class="item_link">
                    <a href="profile.php" class="btn btn_navLink btn_profile">
                        <div class="img_profile">
                            <img src="assets/img/f7-icon.png" alt="">
                        </div>
                    </a>
                </div>
            </div>
        </footer>
        <!-- End. em_main_footer -->

        <!-- Modal Sidebar Menu (withBackground) -->
        <div class="modal sidebarMenu -left -withBackground fade" id="mdllSidebarMenu-background" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="em_profile_user">
                            <div class="media">
                                <div class="media-body">
                                    <div class="txt">
                                    <?php
                                 $sqlu="select * from users where id=".$_SESSION['user']['id'];
                                 $resultu = $conn->query($sqlu);
                                 $allRecordsu = $resultu->fetch_all(MYSQLI_ASSOC);
                                 echo' <h3>'.$allRecordsu[0]['name'].'</h3>';
                                 echo '<p>'.$allRecordsu[0]['email'].'</p>';
                        ?>
 <form method="post">
                                        <button  type="submit" name="log_out" class="btn btn_logOut">تسجيل الخروج</button>
                                </form>                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="tio-clear"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <ul class="nav flex-column -active-links">
                            <li class="nav-item">
                                <a class="nav-link" href="home.php">
                                    <div class="">
                                        <div class="icon_current">
                                            <svg id="Iconly_Two-tone_Home" data-name="Iconly/Two-tone/Home"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <g id="Home" transform="translate(2.5 2)">
                                                    <path id="Home-2" data-name="Home"
                                                        d="M6.657,18.771V15.7a1.426,1.426,0,0,1,1.424-1.419h2.886A1.426,1.426,0,0,1,12.4,15.7h0v3.076A1.225,1.225,0,0,0,13.6,20h1.924A3.456,3.456,0,0,0,19,16.562h0V7.838a2.439,2.439,0,0,0-.962-1.9L11.458.685a3.18,3.18,0,0,0-3.944,0L.962,5.943A2.42,2.42,0,0,0,0,7.847v8.714A3.456,3.456,0,0,0,3.473,20H5.4a1.235,1.235,0,0,0,1.241-1.229h0"
                                                        fill="none" stroke="#293343" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-width="1.5">
                                                    </path>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="icon_active">
                                            <svg id="Iconly_Bulk_Home" data-name="Iconly/Bulk/Home"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <g id="Home" transform="translate(2.5 2)">
                                                    <path id="Home-2" data-name="Home"
                                                        d="M6.644,18.782V15.715A1.418,1.418,0,0,1,8.058,14.3h2.874a1.419,1.419,0,0,1,1.424,1.413h0v3.058A1.231,1.231,0,0,0,13.583,20h1.961a3.46,3.46,0,0,0,2.443-1A3.41,3.41,0,0,0,19,16.578V7.866a2.473,2.473,0,0,0-.9-1.9L11.443.674A3.115,3.115,0,0,0,7.485.745L.967,5.964A2.474,2.474,0,0,0,0,7.866v8.7A3.444,3.444,0,0,0,3.456,20H5.372a1.231,1.231,0,0,0,.873-.354,1.213,1.213,0,0,0,.362-.864Z"
                                                        fill="#293343"></path>
                                                </g>
                                            </svg>

                                        </div>
                                        <span class="title_link">الرئيسية</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="location.php">
                                    <div class="">
                                        <div class="icon_current">
                                            <svg id="Iconly_Two-tone_Document" data-name="Iconly/Two-tone/Document"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <g id="Document" transform="translate(3 2)">
                                                    <path id="Stroke_1" data-name="Stroke 1" d="M7.22.5H0"
                                                        transform="translate(5.496 13.723)" fill="none" stroke="#200e32"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-miterlimit="10" stroke-width="1.5" opacity="0.4" />
                                                    <path id="Stroke_2" data-name="Stroke 2" d="M7.22.5H0"
                                                        transform="translate(5.496 9.537)" fill="none" stroke="#200e32"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-miterlimit="10" stroke-width="1.5" opacity="0.4" />
                                                    <path id="Stroke_3" data-name="Stroke 3" d="M2.755.5H0"
                                                        transform="translate(5.496 5.36)" fill="none" stroke="#200e32"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-miterlimit="10" stroke-width="1.5" opacity="0.4" />
                                                    <path id="Stroke_4" data-name="Stroke 4"
                                                        d="M12.158,0,4.469,0A4.251,4.251,0,0,0,0,4.607v9.2A4.254,4.254,0,0,0,4.506,18.41l7.689,0a4.252,4.252,0,0,0,4.47-4.6v-9.2A4.255,4.255,0,0,0,12.158,0Z"
                                                        transform="translate(0.751 0.75)" fill="none" stroke="#200e32"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-miterlimit="10" stroke-width="1.5" />
                                                </g>
                                            </svg>

                                        </div>
                                        <div class="icon_active">
                                            <svg id="Iconly_Bulk_Document" data-name="Iconly/Bulk/Document"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
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
                                        <span class="title_link">مواقع الريو كافيه</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="hot_page.php">
                                    <div class="">
                                        <div class="icon_current">
                                            <svg id="Iconly_Two-tone_Category" data-name="Iconly/Two-tone/Category"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <g id="Category" transform="translate(2 2)">
                                                    <path id="Stroke_1" data-name="Stroke 1"
                                                        d="M2.449,0H5.716A2.459,2.459,0,0,1,8.163,2.47V5.764a2.46,2.46,0,0,1-2.448,2.47H2.449A2.46,2.46,0,0,1,0,5.764V2.47A2.46,2.46,0,0,1,2.449,0Z"
                                                        transform="translate(11.837 0)" fill="none" stroke="#200e32"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-miterlimit="10" stroke-width="1.5" opacity="0.4" />
                                                    <path id="Stroke_3" data-name="Stroke 3"
                                                        d="M2.449,0H5.714A2.46,2.46,0,0,1,8.163,2.47V5.764a2.46,2.46,0,0,1-2.449,2.47H2.449A2.46,2.46,0,0,1,0,5.764V2.47A2.46,2.46,0,0,1,2.449,0Z"
                                                        transform="translate(0 0)" fill="none" stroke="#200e32"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-miterlimit="10" stroke-width="1.5" />
                                                    <path id="Stroke_5" data-name="Stroke 5"
                                                        d="M2.449,0H5.714A2.46,2.46,0,0,1,8.163,2.471V5.764a2.46,2.46,0,0,1-2.449,2.47H2.449A2.46,2.46,0,0,1,0,5.764V2.471A2.46,2.46,0,0,1,2.449,0Z"
                                                        transform="translate(0 11.766)" fill="none" stroke="#200e32"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-miterlimit="10" stroke-width="1.5" />
                                                    <path id="Stroke_7" data-name="Stroke 7"
                                                        d="M2.449,0H5.716A2.46,2.46,0,0,1,8.163,2.471V5.764a2.459,2.459,0,0,1-2.448,2.47H2.449A2.46,2.46,0,0,1,0,5.764V2.471A2.46,2.46,0,0,1,2.449,0Z"
                                                        transform="translate(11.837 11.766)" fill="none"
                                                        stroke="#200e32" stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-miterlimit="10" stroke-width="1.5" />
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="icon_active">
                                            <svg id="Iconly_Bulk_Category" data-name="Iconly/Bulk/Category"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
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
                                        <span class="title_link">جميع المنتجات</span>
                                    </div>

                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="my_cart.php">
                                    <div class="">
                                        <div class="icon_current">
                                            <svg id="Iconly_Two-tone_Bag" data-name="Iconly/Two-tone/Bag"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <g id="Bag" transform="translate(2.5 1.5)">
                                                    <path id="Path_33955"
                                                        d="M13.213,14.682H4.865C1.8,14.682-.554,13.574.114,9.117L.892,3.076C1.3.851,2.723,0,3.968,0H14.146c1.263,0,2.6.915,3.076,3.076L18,9.117C18.567,13.071,16.279,14.682,13.213,14.682Z"
                                                        transform="translate(0.801 5.318)" fill="none" stroke="#200e32"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-miterlimit="10" stroke-width="1.5" />
                                                    <path id="Path_33956"
                                                        d="M8.659,4.32A4.32,4.32,0,0,0,4.339,0h0A4.32,4.32,0,0,0,0,4.32H0"
                                                        transform="translate(5.492 0.778)" fill="none" stroke="#200e32"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-miterlimit="10" stroke-width="1.5" opacity="0.4" />
                                                    <path id="Line_192" d="M.481.458H.435"
                                                        transform="translate(12.316 9.144)" fill="none" stroke="#200e32"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-miterlimit="10" stroke-width="1.5" />
                                                    <path id="Line_193" d="M.481.458H.435"
                                                        transform="translate(6.485 9.144)" fill="none" stroke="#200e32"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-miterlimit="10" stroke-width="1.5" />
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="icon_active">
                                            <svg id="Iconly_Bulk_Bag" data-name="Iconly/Bulk/Bag"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
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
                                        <span class="title_link">سلة الشراء</span>
                                    </div>
                                    <div class="em_pulp">
                                        <span class="number_item"><?php echo count($allRecordsl);?></span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
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
    <!-- main.js -->
    <script src="assets/js/main.js" defer></script>
    <!-- PWA app service registration and works js -->
    <script src="assets/js/pwa-services.js"></script>
</body>


</html>