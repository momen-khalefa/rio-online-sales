<?php
    session_start();

if(!isset($_COOKIE["user_id"])){
  header("Location:index.php");
}

    
    $c_id=$_GET['c_id'];
    $p_id=$_GET['p_id'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "fuel_rio";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    if($c_id==0){
        $sql="select * from hot_drink where id=".$p_id;
    }
    elseif($c_id==1){
        $sql="select * from cold_drink where id=".$p_id;  
    }
    elseif($c_id==2){
        $sql="select * from ice_cream where id=".$p_id;  
    }
    else{
        $sql="select * from snakes where id=".$p_id;  
    }
    $result = $conn->query($sql);
    $allRecords = $result->fetch_all(MYSQLI_ASSOC);


?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from emobile.orinostudio.com/preview/page-product-simple-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Apr 2021 21:27:19 GMT -->
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
        var siz=0;
        var c_id=<?php echo $_GET['c_id'];?>;
        var p_id=<?php echo $_GET['p_id'];?>;
        (function (h, o, t, j, a, r) {
            h.hj = h.hj || function () { (h.hj.q = h.hj.q || []).push(arguments) };
            h._hjSettings = { hjid: 2340091, hjsv: 6 };
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script'); r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');

        function myFunction() {
  var divs = document.getElementById("divs");
  var divl = document.getElementById("divl");
  if (divs.style.display === "none") {
    divs.style.display = "block";
    divl.style.display = "none";
    siz=0;
  } 

 

}
function myFunction1() {
    var divs = document.getElementById("divs");
    var divl = document.getElementById("divl");
    if (divl.style.display === "none") {
    divs.style.display = "none";
    divl.style.display = "block";
    siz=1;
  } 
}
function SubmitFormData(id) {
              $.post("insert.php", { id_p:p_id , cat:c_id , cus_id:id , size:siz});
}
function SubmitFormData2(id) {
              $.post("insert.php", { id_p:p_id , cat:c_id , cus_id:id , size:siz});
              window.location = 'my_cart.php';
}

    </script>
</head>

<body  style="background-image: url('assets/img/back.png') ;  background-attachment: fixed;  
            background-size: cover;">
    <!-- Start em_loading -->
    <section class="em_loading" id="loaderPage">
        <div class="spinner_flash"></div>
    </section>
    <!-- End. em_loading -->
    <div id="wrapper">
        <div id="content">
            <!-- Start main_haeder -->
            <header class="main_haeder header-sticky bg-transparent multi_item">
                <div class="em_side_right">
                    <a class="btn btn__back rounded-circle bg-secondary" href="home.php">
                        <i class="tio-chevron_left"></i>
                    </a>
                </div>
                </div>
            </header>
            <!-- End.main_haeder -->

            <!-- Start swiperProducts  -->
            <section class="banner_sliderFull swiperProducts margin-b-20" >
                <!-- Swiper -->
                <div class="swiper-container em-swiperProduct">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="--item-inside">
                                <div class="cover_img">
                                    <img src="assets/img/<?php echo $allRecords[0]['photo'];?> " alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </section>
            <!-- End. swiperProducts -->

            <!-- Start pt_simpleDetails -->
            <section class="pt_simpleDetails"  style="background-image: url('assets/img/back.png') ;  background-attachment: fixed;  
            background-size: cover;">
                <div class="em_headinner">
                    <div class="title_head">
                        <div class="">
                        <div class="priceem"><?php echo $allRecords[0]['name'];?> </div>
                        </div>
                        <?php
                        if($allRecords[0]['small']==0){
                           echo '<h1 id="divl" >'.$allRecords[0]['large'].'₪</h1>';
                        }
                        else{
                         echo '<h1 id="divs">'.$allRecords[0]['small'].'₪</h1>';
                         echo ' <h1 id="divl" style="display: none;">'.$allRecords[0]['large'].'₪</h1>';
                        }
                        ?>
                       

                    </div>
                </div>
                <div class="em_bodyinner">
                    <div class="d-flex align-items-center justify-content-between margin-t-30">
                        <div class="swiper-container emPatternColors swiper-PatternColors">
                        </div>
                        <div class="emPatternSizes">
                            <h3 class="priceem" style="text-align: right;">الحجم</h3>
                            <div class="box_sizes">
                                <?php
                                  if($allRecords[0]['small']==0){
                                   print' <script> siz=1;
                                    </script>';
                                }
                                else{
                                 echo '<div class="item" onclick="myFunction()">S</div>';
                                }
                                ?>
                                <div class="item" onclick="myFunction1()">L</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="padding-t-100">
                    <div class="em_footerinner">
                        <div class="emfo_button">
                            <button type="button" class="btn btn_addCart border-snow border-solid" id="addCart" onclick="SubmitFormData(<?php echo $_COOKIE['user_id']; ?>);">
                                <span class="textCart color-secondary d-inline-block">إضافة الى السلة</span>
                            </button>
                            <button href="my_cart.php" class="btn bg-primary color-white" onclick="SubmitFormData2(<?php echo $_COOKIE['user_id']; ?>);">شراء مباشرة</button>
                        </div>
                    </div>
                </div>
            </section>


        </div>

        <!-- Start searchMenu__hdr -->
        <section class="searchMenu__hdr">
            <form>
                <div class="form-group">
                    <div class="input_group">
                        <input type="search" class="form-control" placeholder="type something here...">
                        <svg class="icon_serach" id="Iconly_Two-tone_Search" data-name="Iconly/Two-tone/Search"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <g id="Search" transform="translate(2 2)">
                                <circle id="Ellipse_739" cx="8.989" cy="8.989" r="8.989"
                                    transform="translate(0.778 0.778)" fill="none" stroke="#200e32"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                    stroke-width="1.5" />
                                <path id="Line_181" d="M0,0,3.524,3.515" transform="translate(16.018 16.485)"
                                    fill="none" stroke="#200e32" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-miterlimit="10" stroke-width="1.5" opacity="0.4" />
                            </g>
                        </svg>
                    </div>
                </div>
            </form>
            <button type="button" class="btn btn_meunSearch -close __removeMenu">
                <i class="tio-clear"></i>
            </button>
        </section>
        <!-- End. searchMenu__hdr -->

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


<!-- Mirrored from emobile.orinostudio.com/preview/page-product-simple-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Apr 2021 21:27:20 GMT -->
</html>