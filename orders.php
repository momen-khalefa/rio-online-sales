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
      $sql="select * from orders where cust_id=".$_COOKIE["user_id"];
      $result = $conn->query($sql);
      $allRecords = $result->fetch_all(MYSQLI_ASSOC);
      $sql2="select * from names";
      $result2 = $conn->query($sql2);
      $allRecords2 = $result2->fetch_all(MYSQLI_ASSOC);

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
    <meta name="description" content="Rio cafe">
    <meta name="keywords"
        content="Rio Cafe" />

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

<body class="bg-snow">
    <!-- Start em_loading -->
    <section class="em_loading" id="loaderPage">
        <div class="spinner_flash"></div>
    </section>
    <!-- End. em_loading -->
    <div id="wrapper">
        <div id="content">
            <!-- Start main_haeder -->
            <header class="header_tab">
                <div class="main_haeder bg-white multi_item">
                    <div class="em_side_right">
                        <a class="btn btn__back rounded-circle bg-snow" href="home.php">
                            <i class="tio-chevron_left"></i>
                        </a>
                    </div>
                    <div class="title_page">
                        <div class="page_name">
                            طلباتك
                        </div>
                    </div>
                    
                </div>
                <div class="tab__line two_item">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="pills-Waiting-tab" data-toggle="pill" href="#pills-Waiting"
                                role="tab" aria-controls="pills-Waiting" aria-selected="true">قيد التجهيز</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-Paid-tab" data-toggle="pill" href="#pills-Paid" role="tab"
                                aria-controls="pills-Paid" aria-selected="false">طلبات سابقة</a>
                        </li>

                    </ul>
                </div>
            </header>
            <!-- End.main_haeder -->

            <section class="components_page paddingTab_header emPage__billsWallet">

                <div class="tab-content padding-20" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-Waiting" role="tabpanel"
                        aria-labelledby="pills-Waiting-tab">
                        <div class="emBk__bills">
                            <?php
                            for($i=0;$i<count($allRecords);$i++){
                                if($allRecords[$i]['status']==0){
                                    print '<div class="item">
                                    <div class="emhead_w">
                                        <div class="icon_img">
                                            <img src="assets/img/favicon/f7-icon3.png" alt="">
                                        </div>
                                        <a  class="btn btn_default bg-primary">قيد التجهيز</a>
                                    </div>
                                    <div class="embody_w">
                                        <div class="details_w">
                                            <h3>#Order '.$allRecords[$i]['id'].' / '.$allRecords2[$allRecords[$i]['location']]['name'].' </h3>
                                            <span>'.$allRecords[$i]['date'].'</span>
                                        </div>
                                        <div class="price">
                                            <p>'.$allRecords[$i]['total'].'<span>₪</span></p>
                                        </div>
                                    </div>
                                </div>';
                                }
                            }
                            ?> 
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-Paid" role="tabpanel" aria-labelledby="pills-Paid-tab">
                        <div class="emBk__bills">
                        <?php
                            for($i=0;$i<count($allRecords);$i++){
                                if($allRecords[$i]['status']==1){
                                    print '<div class="item">
                                    <div class="emhead_w">
                                        <div class="icon_img">
                                            <img src="assets/img/favicon/f7-icon3.png" alt="">
                                        </div>
                                        <a href="#" class="btn btn_default details">تم التسليم</a>
                                    </div>
                                    <div class="embody_w">
                                        <div class="details_w">
                                            <h3>#Order '.$allRecords[$i]['id'].' / '.$allRecords2[$allRecords[$i]['location']]['name'].' </h3>
                                            <span>'.$allRecords[$i]['date'].'</span>
                                        </div>
                                        <div class="price">
                                            <p>'.$allRecords[$i]['total'].' <span>₪</span></p>
                                        </div>
                                    </div>
                                </div>';
                                }
                            }
                            ?>  
                        </div>
                    </div>

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


</html>