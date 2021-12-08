<?php
          session_start();
      if(!isset($_COOKIE["rio_id"])){
        header("Location:signin.php");
      }
      $total=0;
    

    
        

  ?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from emobile.orinostudio.com/preview/page-default-basket.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Apr 2021 21:26:35 GMT -->
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

<body style="background-image: url('assets/img/back.png') ;  background-attachment: fixed;  
background-size: cover;">
    <!-- Start em_loading -->
    <section class="em_loading" id="loaderPage">
        <div class="spinner_flash"></div>
    </section>
    <!-- End. em_loading -->
    <div id="wrapper">
        <div id="content">
            <!-- Start main_haeder -->
            <header class="main_haeder header-sticky" style="background-color: white;"> 
                <div class="em_menu_sidebar">
                <a  class="btn btn__back rounded-circle bg-snow" href="rio_orders.php">
                <i class="tio-chevron_left"></i>
    </a>
                </div>
                <div class="title_page">
                    <div class="page_name">الطلبات
                        <span class="size-13 color-text weight-400 noBasket"> </span>
                    </div>
                </div>
                <div class="em_side_right">
                    
                </div>
            </header>
            <!-- End.main_haeder -->

            <!-- Start emPage__basket -->
            <section class="emPage__basket default">
<?php
              $servername = "localhost";
              $username = "root";
              $password = "";
              $dbname = "fuel_rio";
              $conn = new mysqli($servername, $username, $password, $dbname);
              if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
              }
              $sql="select * from order_details where order_id=".$_GET["order_id"];
              $result = $conn->query($sql);
              $allRecords = $result->fetch_all(MYSQLI_ASSOC);
              $total=0;
              for($i=0;$i<count($allRecords);$i++){
                  $s;
                  if($allRecords[$i]['size']==0){
                      $s='small';
                  }
                  else{
                      $s='large';
                  }
                  $name;
                  if($allRecords[$i]['cat_id']==0){
                      $name="hot_drink";
                  }
                  elseif ($allRecords[$i]['cat_id']==1){
                    $name="cold_drink";
                  }
                  elseif ($allRecords[$i]['cat_id']==2){
                    $name="ice_cream";
                  }
                  else{
                    $name="snakes";
                  }
                  $sql1="select * from ".$name." where id=".$allRecords[$i]['product_id'];
                  $result1 = $conn->query($sql1);
                  $allRecords1 = $result1->fetch_all(MYSQLI_ASSOC);
                  $price= (int)$allRecords1[0][$s] * (int)$allRecords[$i]['quantity'];
                  $total =$total+$price;
                  $_SESSION["total"]=$total;
                  print  '<form method="post">';
                  print '<div class="item_to_product margin-b-20">';
                  print '   <div class="d-flex align-items-center">
                          <div class="emhead_product">
                              <div class="emCover_rpduct">
                                  <div class="bk_img">
                                      <img src="assets/img/'.$allRecords1[0]['photo'].'" alt="">
                                  </div>
                                  </button>
                              </div>
                          </div>
                          <div class="embody_product">
                              <h2 class="name__product">'.$allRecords1[0]['name'].'</h2>
                              <div class="pk_start">
                                  <span class="__quantity">'.$allRecords[$i]['quantity'].'x</span>
                                  <span class="__price">'.$allRecords1[0][$s].'</span>
                              </div>
                              <div class="pk_end">
                                  <span class="__color">'.$s.'</span>
                                  
                              </div>
                          </div>
                      </div>
                      
                  </div>
                  </form>' ;
              }
                ?>
                <div class="dividar_5"></div>
                <div class="detailsTotally">
                    <?php
                    print '
                    <ul>
                        <div class="dividar"></div>
                        <li>
                            
                            <span class="number_total size-16">'.$total.'₪</span>
                            <span class="size-16 text_total">السعر الكلي</span>
                        </li>
                    </ul>
                </div>';
                ?>
            </section>
            <!-- End. emPage__basket -->

        </div>
        <?php
         
        
        ?>

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


<!-- Mirrored from emobile.orinostudio.com/preview/page-default-basket.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Apr 2021 21:26:35 GMT -->
</html>