<?php
          session_start();
      if(!isset($_COOKIE["user_id"])){
        header("Location:index.php");
      }
      $total=0;
    
      if(isset($_POST['add'])) {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "fuel_rio";
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        $sql="select * from cart where id=".$_POST['add'];
        $result = $conn->query($sql);
        $allRecords = $result->fetch_all(MYSQLI_ASSOC);
        $num=$allRecords[0]['quantity'];
        $num=$num+1;
        $sql="update cart set quantity=".$num." where id=".$_POST['add'];
        $result = $conn->query($sql);
         
      }
      if(isset($_POST['dec'])) {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "fuel_rio";
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        $sql="select * from cart where id=".$_POST['dec'];
        $result = $conn->query($sql);
        $allRecords = $result->fetch_all(MYSQLI_ASSOC);
        $num=$allRecords[0]['quantity'];
        if($num>1){
        $num=$num-1;
        $sql="update cart set quantity=".$num." where id=".$_POST['dec'];
        $result = $conn->query($sql);
        }
        
      }
      if(isset($_POST['dell'])) {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "fuel_rio";
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        $sql="delete from cart where id=".$_POST['dell'];
        $result = $conn->query($sql);
    }
    if(isset($_POST['submit_fin'])) {
        $servername = "localhost";
              $username = "root";
              $password = "";
              $dbname = "fuel_rio";
              $conn = new mysqli($servername, $username, $password, $dbname);
              if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
              }
        $sql_insert="INSERT INTO orders (cust_id,status,location,total,name,phone)
        values (".$_COOKIE["user_id"].",0,".$_POST['loc'].",".$_SESSION["total"].",'".$_POST['name']."','".$_POST['phone']."')";
        $result_insert = $conn->query($sql_insert);
        $last_id = $conn->insert_id ;
        $sql_data="select * from cart where cust_id=".$_COOKIE["user_id"];
        $result_data = $conn->query($sql_data);
        $alldata = $result_data->fetch_all(MYSQLI_ASSOC);
        for($i=0 ; $i< count($alldata) ; $i++){
            $sql_add="INSERT INTO order_details (order_id,cat_id,product_id,size,quantity)
            values (".$last_id.",".$alldata[$i]["cat_id"].",".$alldata[$i]["product_id"].",".$alldata[$i]["size"].",".$alldata[$i]["quantity"].")";
            $result_add = $conn->query($sql_add);
            $sql_del="delete from cart where id=".$alldata[$i]["id"];
            $result_del = $conn->query($sql_del);
        }
    }
        

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
                    <button type="button" class="btn btn_menuSidebar item-show" data-toggle="modal"
                        data-target="#mdllSidebarMenu-background">
                        <i class="tio-menu_hamburger"></i>
                    </button>
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
              $sql="select * from cart where cust_id=".$_COOKIE["user_id"];
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
                                  <button type="submit" class="btn btn_remove circle_type" type="submit" name="dell"
                                  value="'.$allRecords[$i]['id'].'">
                                      <i class="tio-clear"></i>
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
                      <div class="emfooter_product">
                          <div class="itemCountr_manual vertical">
                              <button  class="btn btn_counter w-42 h-30 co_up" type="submit" name="add"
                              value="'.$allRecords[$i]['id'].'">
                                  <i class="tio-add"></i>
                              </button>
                              <input type="text" class="form-control input_no color-secondary" value="'.$allRecords[$i]['quantity'].'">
                              <button class="btn btn_counter co_down w-42 h-30" type="submit" name="dec"
                              value="'.$allRecords[$i]['id'].'">
                                  <i class="tio-remove"></i>
                              </button>
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
                <form method="post">
                <div class="form-group" style="text-align: right;">
                            <label>اختر الفرع </label>
                            <select class="form-control custom-select" name="loc">
                                <option value="1">ريو الطيرة</option>
                                <option value="2">ريو البالوع</option>
                                <option value="3">ريو طولكرم</option>
                                <option value="4">ريو سلفيت</option>
                                <option value="5">ريو نابلس</option>
                                <option value="6">ريو بيت عور</option>
                                <option value="5">ريو اريحا</option>
                                </select>
                 </div>
                 <div class="form-group with_icon" style="text-align: right;">
                            <label>الأسم الكامل</label>
                            <div class="input_group">
                                <input type="name" class="form-control" placeholder="الإسم الكامل" required style="text-align: right;" name="name" >
                                <div class="icon" style="text-align: right;">
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16pt" height="16pt" viewBox="0 0 16 16" version="1.1">
                                    <g id="surface1">
                                    <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 7.898438 7.972656 C 9.964844 7.972656 11.640625 6.296875 11.640625 4.226562 C 11.640625 2.160156 9.964844 0.484375 7.898438 0.484375 C 5.828125 0.484375 4.152344 2.160156 4.152344 4.226562 C 4.15625 6.296875 5.828125 7.972656 7.898438 7.972656 Z M 7.898438 1.117188 C 9.617188 1.117188 11.007812 2.511719 11.007812 4.226562 C 11.007812 5.945312 9.617188 7.339844 7.898438 7.339844 C 6.179688 7.339844 4.789062 5.945312 4.789062 4.226562 C 4.789062 2.511719 6.179688 1.121094 7.898438 1.117188 Z M 7.898438 1.117188 "/>
                                    <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 7.898438 8.910156 C 6.269531 8.910156 4.753906 9.539062 3.632812 10.691406 C 2.492188 11.855469 1.867188 13.445312 1.867188 15.171875 C 1.867188 15.34375 2.011719 15.488281 2.183594 15.488281 L 13.609375 15.488281 C 13.785156 15.488281 13.925781 15.34375 13.925781 15.171875 C 13.925781 13.449219 13.300781 11.855469 12.164062 10.691406 C 11.039062 9.542969 9.527344 8.910156 7.898438 8.910156 Z M 2.507812 14.851562 C 2.578125 13.417969 3.132812 12.109375 4.082031 11.136719 C 5.085938 10.113281 6.441406 9.546875 7.894531 9.546875 C 9.347656 9.546875 10.703125 10.113281 11.707031 11.136719 C 12.65625 12.109375 13.210938 13.417969 13.28125 14.851562 Z M 2.507812 14.851562 "/>
                                    </g>
                                    </svg>
                                    
                            </div>
                        </div>
                        <div class="form-group with_icon" style="text-align: right;">
                            <label>رقم الهاتف </label>
                            <div class="input_group">
                                <input type="phone" class="form-control" placeholder="05*******" required style="text-align: right;" name="phone">
                                <div class="icon" style="text-align: right;">
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16pt" height="16pt" viewBox="0 0 16 16" version="1.1">
                                    <g id="surface1">
                                    <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 13.652344 2.34375 C 12.140625 0.835938 10.132812 0 8 0 C 5.863281 0 3.855469 0.835938 2.34375 2.34375 C 0.832031 3.855469 0 5.863281 0 8 C 0 10.136719 0.832031 12.144531 2.34375 13.65625 C 3.855469 15.164062 5.863281 16 8 16 C 9.238281 16 10.371094 15.769531 11.269531 15.335938 C 12.121094 14.925781 12.742188 14.335938 13.015625 13.679688 C 13.339844 12.894531 13.15625 12.074219 12.511719 11.429688 L 12.488281 11.40625 C 12.496094 11.394531 12.511719 11.382812 12.519531 11.375 C 12.980469 10.890625 12.980469 10.253906 12.515625 9.789062 L 11.375 8.648438 C 11.152344 8.417969 10.882812 8.292969 10.59375 8.292969 C 10.308594 8.292969 10.035156 8.414062 9.804688 8.644531 L 9.214844 9.238281 C 9.183594 9.222656 9.15625 9.207031 9.128906 9.195312 C 9.054688 9.160156 8.988281 9.125 8.933594 9.089844 C 8.332031 8.707031 7.785156 8.207031 7.261719 7.566406 C 7.03125 7.277344 6.871094 7.027344 6.753906 6.785156 C 6.902344 6.648438 7.039062 6.503906 7.175781 6.367188 C 7.230469 6.308594 7.289062 6.253906 7.351562 6.191406 C 7.832031 5.710938 7.832031 5.082031 7.351562 4.601562 L 6.785156 4.035156 C 6.722656 3.972656 6.660156 3.910156 6.597656 3.84375 C 6.472656 3.714844 6.34375 3.582031 6.203125 3.453125 C 5.980469 3.234375 5.714844 3.117188 5.429688 3.117188 C 5.148438 3.117188 4.878906 3.234375 4.648438 3.453125 C 4.644531 3.457031 4.644531 3.457031 4.640625 3.460938 L 3.933594 4.167969 C 3.648438 4.453125 3.484375 4.800781 3.453125 5.203125 C 3.402344 5.828125 3.585938 6.40625 3.726562 6.785156 C 4.066406 7.699219 4.570312 8.550781 5.324219 9.457031 C 6.242188 10.550781 7.34375 11.417969 8.605469 12.027344 C 9.085938 12.257812 9.734375 12.527344 10.46875 12.574219 C 10.511719 12.578125 10.558594 12.578125 10.605469 12.578125 C 11.117188 12.578125 11.546875 12.394531 11.882812 12.027344 C 11.886719 12.027344 11.890625 12.019531 11.894531 12.015625 C 11.90625 12.003906 11.917969 11.988281 11.933594 11.976562 L 11.953125 11.996094 C 12.371094 12.417969 12.488281 12.898438 12.285156 13.386719 C 11.90625 14.285156 10.433594 15.207031 8 15.207031 C 4.023438 15.207031 0.789062 11.976562 0.789062 8 C 0.789062 4.023438 4.023438 0.792969 8 0.792969 C 11.972656 0.792969 15.207031 4.023438 15.207031 8 C 15.207031 8.65625 15.117188 9.300781 14.945312 9.921875 C 14.886719 10.132812 15.011719 10.351562 15.222656 10.410156 C 15.433594 10.46875 15.652344 10.34375 15.710938 10.132812 C 15.902344 9.441406 16 8.722656 16 8 C 15.996094 5.863281 15.164062 3.855469 13.652344 2.34375 Z M 11.296875 11.492188 C 11.109375 11.691406 10.898438 11.78125 10.605469 11.78125 C 10.574219 11.78125 10.546875 11.78125 10.515625 11.777344 C 9.925781 11.738281 9.363281 11.503906 8.945312 11.304688 C 7.789062 10.746094 6.777344 9.953125 5.933594 8.945312 C 5.238281 8.109375 4.777344 7.335938 4.464844 6.503906 C 4.28125 6.003906 4.214844 5.625 4.238281 5.261719 C 4.257812 5.046875 4.339844 4.875 4.492188 4.722656 L 5.199219 4.015625 C 5.257812 3.964844 5.34375 3.902344 5.433594 3.902344 C 5.527344 3.902344 5.605469 3.960938 5.65625 4.015625 C 5.65625 4.015625 5.660156 4.019531 5.664062 4.023438 C 5.789062 4.140625 5.910156 4.261719 6.035156 4.390625 C 6.097656 4.453125 6.164062 4.523438 6.230469 4.589844 L 6.792969 5.152344 C 6.96875 5.328125 6.96875 5.457031 6.792969 5.628906 C 6.734375 5.6875 6.675781 5.75 6.617188 5.808594 C 6.441406 5.980469 6.28125 6.148438 6.101562 6.308594 C 6.097656 6.3125 6.09375 6.316406 6.085938 6.324219 C 5.839844 6.570312 5.925781 6.828125 5.949219 6.914062 C 5.953125 6.921875 5.957031 6.929688 5.960938 6.941406 C 6.113281 7.304688 6.324219 7.648438 6.644531 8.054688 L 6.648438 8.058594 C 7.226562 8.773438 7.835938 9.328125 8.511719 9.753906 C 8.601562 9.808594 8.691406 9.855469 8.773438 9.898438 C 8.847656 9.933594 8.914062 9.96875 8.96875 10.003906 C 8.980469 10.011719 8.992188 10.019531 9.003906 10.023438 C 9.089844 10.066406 9.175781 10.085938 9.261719 10.085938 C 9.40625 10.085938 9.542969 10.027344 9.65625 9.910156 L 10.363281 9.203125 C 10.421875 9.144531 10.503906 9.078125 10.59375 9.078125 C 10.679688 9.078125 10.761719 9.140625 10.808594 9.195312 C 10.8125 9.199219 10.8125 9.199219 10.816406 9.203125 L 11.953125 10.339844 C 12.117188 10.5 12.117188 10.648438 11.949219 10.824219 L 11.945312 10.828125 C 11.871094 10.910156 11.785156 10.988281 11.699219 11.074219 C 11.566406 11.203125 11.429688 11.335938 11.296875 11.492188 Z M 11.296875 11.492188 "/>
                                    </g>
                                    </svg>
                            </div>
                        </div>
                <div class="margin-t-30">
                    <button type="submit" name="submit_fin" class="btn btn_default_lg">إرسال الطلب</button>
                </div>
               
            </form>
            </section>
            <!-- End. emPage__basket -->

        </div>
        <?php
         
        
        ?>

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
                                 $sqll="select * from cart where cust_id=".$_COOKIE["user_id"];
                                 $resultl = $conn->query($sqll);
                                 $allRecordsl = $resultl->fetch_all(MYSQLI_ASSOC);
                                 if(count($allRecordsl)>0){
                                   echo '<div class="items_basket">'.count($allRecordsl).' items</div>';
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
                                                                     </div>
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


<!-- Mirrored from emobile.orinostudio.com/preview/page-default-basket.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Apr 2021 21:26:35 GMT -->
</html>