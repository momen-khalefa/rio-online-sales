<?php

    session_start();
     $conn = mysqli_connect("localhost","root","","fuel_rio");

     if(!$conn)
     {
     die("Connection failed: ".mysqli_connect_error());
     }
    $Error="";
    
    $wrong="";
    if(isset($_POST["Submit"]))
    {
        $username = $_POST['email'];
        $password = $_POST['password'];
        $_SESSION['username']=$username;
        $_SESSION['Password']=$password;
    
        $sql = "SELECT * FROM rio_login WHERE user = '$username' AND password = '$password'";

        $result = mysqli_query($conn,$sql);
            
        if($row = mysqli_fetch_array($result))
        {
          
            setcookie("rio_id", $row['id_rio'], time() + (86400 * 700), "/"); 

            header("Location:rio_orders.php");
        }
        else
        {
            $wrong="خطأ في كلمة المرور او في البريد الالكتروني";
        }

        $conn->close();
       
    }
 
    
    ?>


<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from emobile.orinostudio.com/preview/page-signin-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Apr 2021 21:27:11 GMT -->
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

<body >
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
                </div>
            </header>
            <!-- End.main_haeder -->

            <section class="em__signTypeOne">
                <div class="em_titleSign">
                    <h1>تسجيل الدخول الى</h1>
                    <div class="brand">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="130px" height="100px" viewBox="0 0 230 250" enable-background="new 0 0 230 250" xml:space="preserve">  <image id="image0" width="230" height="250" x="0" y="0"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOYAAAD6CAYAAAC1fjtbAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
                        AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAABmJLR0QA/wD/AP+gvaeTAAAA
                        CXBIWXMAAA7EAAAOxAGVKw4bAACAAElEQVR42uz9d7wk13Uein5r711VnbtPDpMzBhkEQBIgxCRG
                        JYqSbMmSLcuWrOcr21e2JetZ72db9s/PsnUdpOsnX9lWoCmJskSCYg4iQRIgABIAkQeYnE+O3adj
                        hb33en9UVZ+eg0HgAOCcM+gPv0Kd6a6urqqur9beK3wL6KOPPvroo48++uijjz766KOPPvroo48+
                        +uijjz766KOPPvroo48++uijjz766KOPPvroo48++uijjz766KOPPvroo48++uijjz766KOPPvro
                        o48++uijjz766KOPPvroo48++uijjz766KOPPvroo48++uijjz766KOPPvroo48++uijjz766KOP
                        Pvroo48++ujjmgJd7QO41qG1Jq21stYKY4xgZgghOH2fiCCEsEIIFkJYImLm+G3HcezVPv4+rg76
                        xPwuYYyhTqeTWVtbK1ar1eGVlZWRlZWV4bW1tUqtVhtsNpullZWV0WazWdZaO2EYukEQeGEYusYY
                        aYyRYRh6zExExOmSElMIYbLZbMd13aBYLNZLpVJ1YGBguVgs1nK5XCuXy7WGBgZXRkdH5ycmJuYr
                        lUrN87xAKNkn8TWEPjETaK1JKcUAYK2ler1eWlpaGrx48eKeM2fOHLpw4cLeixcv7pufn5+s1+uV
                        TqeT830/F0WRm5AMiVWUUkolhJDWWlhrYYwBEFtHAHAcB0SE1DISUXcB0H2dmdlaa5jZcAySQtqM
                        5/nMLABQNpttj4yMzO3du/fYzp07T+/du/fk3r17T+/Zs+fc4NDQquM6utVoynyxYK72Ne7jleOa
                        J2a72RIAZK6Qj9LXmvWGEkqyMcZpNpuFxYWFyTNnzx48evTozceOHr1pZmZ2x/z83KQ2RmmtXWaW
                        UkoIIgcgl8FkjIExBtZaSCkhpYQQokuqSy4yEQQRkJDPGANmvmTp3baXyOkihAAAWGMRhWH3O1OC
                        E1Ekpex4MWlZShnt2rXrzF133fW1O+6441v79+8/USqV1oZHRxpX+zfp4+VxzRMTAMIgFFprJwwC
                        7+LFi7vPnTu3/9FHH3371NTUnosXL+6emZnZ2W63s0opzmQyrJQSnU7Hs9Zelji9RAGQEqP7d68l
                        7LF+3UUp9YJte/fvOE7336nVTbcVQkBKCWbuvt57XGEYgpmRzWYBAL7vQ0oZ7tq16/TBgweffe/7
                        3/epffv2ndq1a9fZ0dHRtav92/RxeVyzxOy02o7v+9n5+fnJZ5555s5HHnnk3U899dQdCwsLE1EU
                        ZYQQUmvtGGMkgK71iaII1loopbpWEECXBMmQFcYYCCG65Evf67FgLxie9m7XS9juj5Fsr7Xu/lsI
                        0f0eIQSMMYiiCEIIOI4T5nK5Zc/zmkRkrLVCSmkASK21J4SwSikdRVGm3W5XOp1OttVp0+HDh899
                        //d//1++5z3v+eyhQ4eeHx4e7hN0k+GaImar0cwsLS2NPfHEE3c9/vjjbzty5Mibz507d6jVahWl
                        lBQEARlj4HneJTd7an16LZOU8mqfzmWRPhi01rjuuuue/oVf+IX/+K53veu+QqHQajabWWYWmUwm
                        tNZSp9PJeJ7nA6CvfOUrH/4f/+N//Nsz585OlEolVKtVjIyMLP3wD//wn/ziL/7ifxkZGVnM5XLR
                        qz7APl4TqKt9AK8VqiurpU9/+tM/ce+99/69s2fPXreyslJJSZjJZMDMl1g5ay2M1jDGxASVEo7j
                        xJYTQJRYrc2GdCicyWSCXbt2nbnr7ru/PjYxvggAgR+0vYx3ydi4ulrNXDh//tDJkydvWFlZKYCB
                        arUKz/OwtrY29JGPfOSX5+bmtv/SL/3SbwF48mqfXx8xrgliLszND//2b//2/+fee+/9+Xq9XgKA
                        XC4HAGi326hWq1BKdeddYRgi47qAUi+YD4a+D2a+ZJ63mRBFEdrtNhzH8XzfLziOowHAb3eEMUb4
                        HZ/b7XZ2aWlp/PixYzf/69/4jR/+9re//Z6ZmZlxpZQaGRlpNpoNOzAwMD86OjqzsLAw8dnPfvav
                        FwqFeqvV+of5fD642ufYxzVAzHarrf73n/3ZX//iF7/401rrbKVS6YRhmA3DEEII5PP57twxiiIQ
                        EZRS8H3/so6czTqETeFlMsgXizDGoF6vTz791FNvm5ude3i1WqVGo1G6eOHCvmefffbOhx9++L2n
                        T58+1Gg0SgC4UqkslkqlaqFUrH/4xz5833ve854vTU5OTp07d27/L//yL3/08ccff1un08kD6BNz
                        E2DLE3NmZmbXo48++r5ms1l505vedH+lUlmem5vbsbS0tK1arU60Wq0MEBMunUM6jgPX87oT7DT0
                        QURwXRdSSoRheLVP7bLQUYRmqwUiwpkzZ6773d/93X+7b9++Z1utVm56enr33NzcpNZaZbPZZi6X
                        Wx0ZGTm3Y8eO83fceee3b7n55qcO33D90WKxWPc8TwPA4uJiY2hoaOX06dM3PP74428G8OWrfY59
                        XAPEXJif3762tjZ+/fXXP/PzP//zv3PX3Xd/fWV5efjJp56665mnn37zyZMnb5ibm9vRbrfLnU6n
                        0ul0iikRBQgkCFJISCFgmaG1hta6603dbBBSdofpQRA4zz777A2nTp3a7jhOO5vNNicnJ08NDg4u
                        79y16/x1hw4duf3227+zb9++M/lioe13fJHJZiwA1Ov1zNLS0vinPvWpH5yfn9/rOI548MEH36u1
                        /qs00aKPq4ctTcwojOiT996759y5c/tHRkbmgiDIBEEgh4aG5j/8Yx/+ROgHn6xWq0MXLlzYd/r0
                        6UOnT5++7uLFi/uWlpYm2s1mpVGvD62t1Yd933cEEaSSsMbCWAshNicxSVDoZbP1XC63ViwWq8PD
                        w3PDw8ML27dvv7Bv//4Thw4ePDE5OTlVrlTqrudeku3TbrXyJ0+cHFutrg5/7nOfO/DYY4+986tf
                        /eqHGo1GuVwu269+9as/8qu/+qv/BkD9ap/nGx1bmpjtVit/4cKFA+12O3/q1Knr/vRP//SfXLx4
                        cd++/fuff/7Ic+fX6vXpsYnxJQBLAB4BgOXFpcrCwsK2s2fPHpqfm9t+8cKFfbOzs9ubjWa57XcK
                        rUaz3O60i81GcyAyOmMiLQxbCAAgAhgAAQQCgwFmcM9rEARigAmAZVgwiBlMBAGAiUDMcRYQCJYt
                        2FowACkESEqwMXA8r53LZBuZbKaRz+XquUKhXsjlm6VKuToxOTk1PjExvXPHjvMHDx58fnBwcMnz
                        vCCbz12SL7u6vFKo1WpDtVptaHZ2ducnP/nJbUePHr39+WNHbzt75uweIYXbbrWyRAKNekMYYwYu
                        nL+wG8CzV/u3faNjSxOz0+nkV1dXR5vNZgYAHnvssXuefPLJ2wcGBtYOHz781M033/zwFz//hSNj
                        4+PTlXJ5dXh4eL48UKkBqAF4Pt3PytJyqbq6Ojo7N7djZnp65/LKysj83Nz2ZqtVWEsS06MocsMo
                        cqMw9MIwzGitHW2ME4Whp7V2jbUyyV+FEMICAFsrrLUCSaK6I2VEUhpBZBzX9T3X7QgpIyWEdjzP
                        L+TzzUw22/YcJyhVKqujIyPzQ8PDi6MjIwvjExMzExMT04ODgyvFcsnfeC3WamvO3MzsQL3RGKjX
                        65XVlZWRe++9d8+xY8duO3369I1TU1O76/V6wVrrAnCIiIwGHOV0PdN+u1P65gMPvBd9Yl51bM7x
                        2ivEc88eueW3fuu3/tMDDzzwnt4MHM/zoLUGM4elUqmxc+fO83v27Dmxf//+53bu3Hl2ZGRkYXR0
                        dKZYLNZK5fJq4UUSvEM/oEazWVhbWxtsNBrlRr1ebrVahWazWWw2m8UoTvPL+L6fDcPQi6IoziRi
                        JgCguFrESim1lNIopSIppXFdN/AymU4ul2sW8vlmoVBoFAqFeqlUqmWz2dbIyMhyNp+7bCC1WW+I
                        RqNRbrfbpXq9PpBWuMzPz08uLS1NzMzM7J2amtozMzOzrV6v54lIeZ4nrbUyDEO4rgvg0kym3oyl
                        O+64477/9dGP/kAu3082uJrY0hZzcXFxcm5ubndvArm1tpuyBsCt1+tDJ06cGHzuuefeFIYhBgYG
                        6rt37z67Z8+eo6NjozM7tu8498XPf2E2l883S8VirTIwsJzP5Rq5XK7hZjwNoJEs3xXazRblCvkr
                        cqI06w1aWVrOtlqtcqvVKjWbzVKz2SzV6/XSX/7lX1aWlpbGFxYWtk9PT++fm5vbVa1Wh5rNZi6K
                        IgeAJCLBzKSU6l6XlISpYyt1bqUJ82nq38mTJ2+ZmZ7eAeDs1f5938jY0sScn5/ftri4OA6s55lK
                        Kbs3n9YaURSBmSkNg7Tb7fKJEydue+aZZ25xHCfKZDJhLpdrl0qltZGRkYWJiYmLAwMDi4ODgwt/
                        8D9/v1EoFOqFQqHueZ6fyWQ6nuf5nuf52Wy2LYSwjuOEiSXUUkoNgC0z1RsNmp+dI2YWllnYuBZT
                        GWNkEIaZMAy9wPezQWxxcx3fz7ZbrUIQBJk/+IM/GGo0GpXV1dWxarU6srq6Olyr1Qbq9Xq53W5n
                        wzB0rLWSiNIF6TWwNp5mpvHY3txfz/O6GVBpQrzrut04bxiGCMMw9+ijj74TfWJeVWxZYlZXq/k/
                        +sM/3NlqtfKchDnSdLu0dEoIAc/zusM0x3GgtUYQBHAcRwghvCiKvFqtVlxdXR07d+7cQQAWgCUi
                        m8lk/Fwu18zn841cLtfK5/OtfD5fz+VyzWw225RSmg3ENERkmVlwMpy18TxTGmPSpHnVarXKnU4n
                        7/t+vtPp5DqdTq7dbhfq9Xo5CAJXay2ZOZ2zpgsAdB8+KXozl4QQ3cqVlHwySTVk5vQhdUnifGox
                        rbUgIgRB4D766KPv9Nud/5XJZfvF11cJW5aYy8vLk1NTU9dZa0lK2b0RU4sBAOlQLgxD+L7frRhx
                        HOeSId6GyhBhrRXpTer7fml5ebm35MoyMxtjehUIut+5oQyLe16ndBFCsLVWxJutEy2t7zTGdKtd
                        0odNuu/0IdRrJQF0zzslWC/50vlkunZdF0opaK3h+7EfqVwuNyuVyuItt9zynYMHDz53tX/fNzq2
                        LDFXVpbHZmZm9qWFymlaXXrTppk+6Q2bJqinSLfrvfGB9blWehNvfN9aK3pLtnrLvDaWiKXYWAKW
                        fk+KXjL3zpcvl3jfW/uZ7uNy35Wed3oOaR1nmkDBzKZUKtUOHjx4dv/+/c/t3bv35Pj4+Mzhw4ef
                        GxoeXuh9qPTxvceWJebCwsLYzMzMcHrjphYgtTYbC4gBXKIMkN741tpLyNdLyI3DvnT7tJi5dx+p
                        peslQu/nNuLFCrA3EmsjodPPbrSk6fa95Wzp+Rhj4DgO53K51q5du06MjY1Nb9u27dyu3btP7dq5
                        88yePXtOjY6NzRRLxW6ebLvZkgAMAExfnBrP5/ONgaHB1tX+3d8o2LLEHB0dm7399tvvJ6K7Z2dn
                        d0ZR5KZW4XLKARsdJCl5NxKvVy4k3b7XsZQOm8MwfAGZUlKk+3gxbDyeFBvJ+GIqCb1k7R0V9Kob
                        KKWiwcHBlV27dh3fuXPnie3bt58bHh5e2r59+4Xx8fGZ8fHxi5XBgfbljq+6spo7d+7cns98+jOH
                        jx49ettv/dZvbfvQhz70MQBfvdq/+xsFmz6O2el0xMrKytjg4OBSLrce26uuVvMXzp8/ePr06evO
                        nDlz3fnz5w9NTU3tmZ+f395ut8tBEGRTuUgAlxC2lwC9696/e4eC6bqXxL3qBZe9sC+Ra5t+pncf
                        vRa3d2je+72926fkF0JwLpdrDA8Pzw0NDS1u27ZtanR0dHZkZGR+fGJienJycmp0ZGR2aGhooTI4
                        0HmxY5qdnhmdnZ3ddeTIkTsWFha2nzlz5oYzZ85cNzs7uyOTydR+/dd//Z/95N/4qT+72vfDGwWb
                        2mK22231/PPP3/LRj370lycnJ6c+/vGPP3/gwIGj27ZtOz8wOFAD8FSn1X6m1WoVarXa8PLy8vjK
                        yspIrVYbXFpaGqtWq8PVanVoaWlpolqtDtdqtaG1tbXBdrudS4aq1OtBBV6crBtlQnrne73WbONn
                        L4d0mJzM9bqvKaW6oYsei6mZ2UopQ9d1O4VCoT42NjY7PDy8MD4+PjUxMTE9Ojo6PzIyslgul9dK
                        pdJapVJZKVcq1eyLeFWDjk/tdjt74cKFg8ePH7/p1KlTN/7Gb/zG/tXV1dGpqam9jUajlHi7yXEc
                        lEqlpat9L7zRsKmJmcvl9AMPPFC8//77P0hEbqVSWZicnLw4MTFx8T//p/98bmJi4uKRI0eOb9++
                        /czk5OT5/QcPdGNvK0vLuU6nU2g2m5VGo1Fpt9vFTqeT73Q6uTAM3Wq1OthqtYqNRqOSZNLkO51O
                        rtVq5X3fzzabzaLWWmmtnSAIsmEYZqIocrXWju1Jv0OsMkmpTiwASojaa0ovMavWWu4R19KO4/jZ
                        bLaVzWZbrusG5XK5ls/nm4ODgyuVSmVlYGBgeXh4eLFSqVRzuVyrVCrViqVSrVIurxZLpVrG88Js
                        PveizppOuyOWl5ZGZ2dndx8/fvyW3/md39kxNze3Y3p6es/q6urY2tracKPRKPi+7ziOQ71D+eQB
                        sjmrxq9hbGpiRlFE3/nOd7QxRvm+X6rX66UzZ84ckFLqUrHUKpdK1aGhocVKpbJcLpdX//2/+80L
                        hw4dOrJr165TxphT23fuWASweLl9N+sNirT2At/Ph2GYMcaoSGs3iNPrMqlebCrYpbVWxhhprSWt
                        tQqCwEtfj6LIiaLISbdNQiEvilwu11RKacdxQs/zgiRhoeN5ni+V0tlMpu24bpDNZNqZTKbpeV4n
                        m836+WLhZT2lrUZTNZrN/Pzc3K6zZ88eOnfu3MF/+S/+xa6FhYUdq6urI6urq2PtdrvU6XQyYRi6
                        wAtjoWltajqkTuatm37acy1hUxMTACUEEUSETCYDAIiiSDUajXKr2SzPzs7uIiKrlNLZbLZZLpdX
                        i8XiWqFQaPz9X/x/rY6Pj0/t2LHjzOS2bRe2TU5eGBoamisUCrVCqRgB8JPlitFutkSSRCCstdIm
                        1rNnk8u5ZCGl1EopXSgVrziIPzczW15eXp5cWFycnJ2Z2bm0tDT+r/7Vv9q9vLw8UavVBtfW1obq
                        9fpQu90u+r7vGWO6Md/UG93rxXUcB0GwLmCgtYa1FrlcLrNZ61OvVWxqYiYxQ+F5XtjpdLp5sEop
                        uI4DHWlYaylRPZeNRsNbW1sbSm8i13V1Lpdr5nK5uud57Vwu1ywUCvV8Pl//1X/6KysDAwMrIyMj
                        c8PDwwuVSmWlUqmsDA0NzZfL5VplcOAVhQZyhbxFnC30mqLTaqtWq5Wp1WqDvXPnarU6tLC4OFlf
                        Wxv4tV/7tdFWq1XqdDr5ZrNZbjQalU6nU4yiyDXGyJR0qRym53ndubFSqpslFEVRdxul1CWC1Gmi
                        RJ+Y31tsamJKKW2iLE5RFF0SfA+CsOtSTr2UwPpwjJkRhqGKoqhSq9Uq6XbpUiwWfcdxoiSlzncc
                        J3BdN8hkMh3XdYO/8ZM/FWQyGT+p+lgtFAprxVJpNZfNtnK5XCObzballFo5TuS6buA6TpCm56Xz
                        y3Tumc5V06FuEAQZrbWT5MfG89xms9Rpt/NBEGQXFha2/e2//bcznU4nm342iiLX9/2s7/v5IAjy
                        yf6UtZaS8xa9Htv0fNMQT9cbzQyVeqiNAQkRP+QSvdpMJhMXASgJ5ShorU2xVJwTUvarTb6H2NTE
                        ROxIEUopllJ2vZbWWlhjoXqyezbGANObNB2OpV7PNB2v0WhkmDnTG3/cmJmjlGKllBFCGCGEllL6
                        SqlAKRVKKTUR2eQ9kzYE6knTs8mQltKeJj1dv1TqETbGOMYYJ4qirNbaSYbtKooimea2Xi7MkxIu
                        tXq9sUzXdbvD1d5wizEGjhBxQTcQS6mEYZzk7jgoFApotVpwHMcfHh1ZOHz48LN33HHHA7fccsvj
                        hw8f7qfpfQ+x2YnJ1lrhum471elJyQmsZ8D0ehB7hZtTRTwA3WFwEATdFgK9GTobM3iCIIAQgoQQ
                        CoBiZo+I8huzetJ9Xy4x/HJJAmmlR/r65bJ3UudL7wMGWG9GlCYxpO0QesM16ZA0TUFM0wvT7wrD
                        CEpKuBkPjuOg3W6ztdbkC4XV7du3X7z99tsfvuWWWx49dPi6I/l8vpnP5+vj4+OrV/tGeKNhUxOT
                        mbF9+/bzH/jABz7x1FNP3XXy5MnDa2trRdd1yXGVtMa+wCpsDMj3EiZNYk9V8DbGEVMipUO/jRk9
                        vQH+NNe29/MpLhcLTY9tYwJD+nrvOiV/b85ub/pg+vk0PTA9r95hfDoy6LWciaUNk6FqsH///hNv
                        etObHr711lsf27Vnz9mhoaHFcrm8msvn1/JXWEvax2uDTT+j931f1mq1ISmlrtfrlaNHj9782GOP
                        vfPZZ555y+zM7M5ms1lqtVpZrbVMaw5T72JvKVjvkNda+7Kt8HpT9npLo1Ir3dsY6MWS1lNs7Oq1
                        MTF+47a9Q9iUcL1J7Ok+er2qaZ5w2v6h0+mg3W6DiMzAwEBtx44dFyYmJmbecsedDx08cODYvv37
                        TxYr5VXPcTpSSl0cqLwq73Qfry02PTF70Ww2FQBorb0wDDPNRrMyPTW16/Tp04eOHz9+0+nTp284
                        e/bswcXFxVGllE08jKp3yJtanA3ZNQBwSVqcSlTaUwfKxlzYjTm2vdjY8Wsjeknda9FS5PP5Szyj
                        veoMwLpGbm+lSBJ+MZlMpj08PLxw4MCB56+//vonDx06dHTbtm0zQ0NDy7lcrpFxXd91XN8r5PoW
                        cRNjSxHzxRD4gbDWqjAIsvV6vVKv18vHjx+/8fjx4zefO3fu0NmzZw8sLS1NtNvtgjFGMrNMq0M2
                        zkl7yZqSpneut3FO1+s42lie9YKL3TMP7C0VSx8a6QOg2WxeLg9XSyl18v1cqVRWRkdHF3bu3Hl+
                        7969xw8dOvTczp07z09OTk4VCoW6Uip0HCd6uWLnxbn5wempqX3ZfL5x+Ibrj1/t37KPGNcEMTci
                        9ANiAMysTKJk1+l0cktLS2NTU1M75+bmtp0/f/7A6urqyOLi4vjc3NzkysrKqO/7eWutSghj0zhq
                        4gQCgBckwPe+lhIpdVC9WHPapNjaMDNveChYItJSyqBSqayOjIwsjo6Ozo2Ojs6lObHj4+Nz27dv
                        v1ipVKqFQqElpIyEEIYAm8llX9YKdhot78SxYzc88eQTb33sO995x1NPPfVmrTX+5s/+7H//p7/6
                        K791tX+7PmJsaufPK8HUhYs75ubmdo6Njc2Ojo3NO0oFynVSKxElSxtA1W935g8dOvQ0YqsmmZls
                        PNQVYRh6jUajtLy8PFar1QZXVlaGk+T4wXq9PpDMZQu+72fa7XYuiTHKJM4oE9UDS0QshOBkbRNV
                        vNDzvCCTyfhKKT04OLicJD60CoXCWqlUWhsYGFgZHBxcyefzjbGxsRnXdQPHcUIhpaEkgSFJZnjF
                        CDq+WF1drZw8efLGJ5544q5jx47d+r73vveWtVptwIKdTqdT0lo7juPUrrvuun44ZBNhSxMzDEL6
                        5gMP3PDf//t///WjR4/ePD4+Pr9jx46zv/Ev/9XJ22+//aG9e/eeHBkZmR8cGqo6rqMzuWxXpjJR
                        sTMA0iYlTQArAM690u+32ojEqhIQ68kSEac5tel2SbzT9jwwXjMEHV9qrZXv+67v+96pU6euf/75
                        529+/vnn3/T+97//tunp6Z1BELhCCFJKuYqEEwYBpFLdYbqUMhweHu5XkGwibPmh7JnTZ/b99n/5
                        L//fT33qUz+VztE8z/PDMCRmpmKxuDY0NLQ0MTExu2fPnpO7d+8+NT4+PnPo0KFni8ViLZPJBKm6
                        nVIqKpSKm66bUKvRlMYYGUWR02w2i3NzczsXFxfHp6end549e/bQ+fPnD54/f37vwsLCmLVWOo5j
                        hBCOlDKTznnTGG4+k4WOIijHAYl4uF0oFM5/7gtfePvO3bumrva59hFjyxOzsVbP/O7v/u6//MhH
                        PvIrROSFYZhKabxAwpGZWUoZSSmN7/tOLpfrpEPIoaGhxeHh4fmxsbHpSqWyOj4+PpPP55ulUmmt
                        WCzWEqW8tpfJBILIAohLu5L0uw3CW+mF5bitAsNaS8lck4SUbI0hrbWMokhFUeT4vp9L8l5zFy5c
                        2NNqtQrLy8ujS0tL44uLi9uWlpYmV1dXh9fW1gZarVYh3VfiNJJCCLUxS6jHIsJ1Xbiui6DdQeD7
                        ccpdkhc7MTHx7Jf+6q/uKpZL7e/6B+jjdcGWHsoCQKpw3ul03FQBLo1jdlvuJerjWmsKw9DtdDrw
                        PA9hGBYXFhaKi4uLuxPni04WG4ahklJaKaURQhiOvUBWSqlzuVyrXC5XE/nKyHGcSEpppJRd5fWk
                        TQJba6W1ViRlYcoYIzudTi4IAs/3/UwQBF4URW6aCxtFkSyVSo1Eg1YRkQAgmFmlSQ3ZbPaS0E76
                        d0rEXk+vtRZhGCIIgrjN4AaxL2bG5OTkDAmxOVtov0Gx5YmZK+SjT37i3pM7duyYWVpa2p4G29OO
                        0MaYNNAOpRRyuVxXtyddUo+ptVaFYaistXBdtxu0T5GGNIIgGEnJnA6fe9H7GQCXJCr0dqvujVOm
                        Oa6u66LT6VQAvIBkqS5uK+mP2Zszm27XmxABxB7iVOzacRz4zbhoJjI6PQa7e/fuc6KvirepsOWJ
                        GfoBPfDAA9VsLtdodzrdyok0ZNFNFABgjYHv+9BRBC+p7ey9+VP1u14d1t7k8O7wMKld7E2VY2th
                        N6juERFICIieekfg0sLk3vzc9Fi8blNdgrHxw0Nr3e3lmc/n45NnwLLtJhsAANv1jCGp1vVqO50O
                        ojBCxnGQzWYR6ig9Brtz164zxhjxii54H98TbHliuhmPn3nu2ZnBbWOz5typwwIEBwRYC8MMA4YB
                        gUhACgkXDjLChWYTt9HrIcfGVDoCIBJyyTSOyQxtDSKj4/cASMSEEURA0qnPWAtLHBOHGbAGzBbE
                        ADEgpICUyeVP9iOSfZgogiABkIQFwIJghQBJAcGEMNCQWD9WYoJIlE6klPE5GYNQR91z8lQGjnIQ
                        2QBGarCItSkNJE9M7r7ALPsWcxNhyxMTACrjI/PecHGtLTWKwgVCCxhAkoCWAlYIgAXIAmQEJAMs
                        GZY2RC847ncJxKQkorgnJgDulaOUIt6AAcGAsIAwDBFTHSQFNCfbJfuVUsJEEZSQkGAQAxYWBIIQ
                        BOJEjNowHOFCMGAsgSVghYAhhiXAWoYHAWHTXceOJiaKRwUW8f5IQpIE2ManZRlMDCssOqYDx/Vg
                        DKAh9c591x0vVfKbzhv9RsY1QcxcNtuqVCqrGdeDjBjSMoSNHaJCiPjmJIYlAYKJiUQMK6/8Oxlx
                        c1qyiQVMmtcCPWroDIQmggAhCkNkHBd+q42s68ARyZcTI7a5ieUjMoolE5ElQQyHrHGkYkmwSggJ
                        EXlQgSSR1IKSFkIaIYQmQSbpiWshhJFSaqlUpGJPtBbE7DgaOgo9IbxIqnxAXrYpFfV7lGwyXBPE
                        LGS8zuTg0FzZy8AGbUjLUBx3c5ZsIBmwRBBIhpoi6fh8hdEi4rjLzyXCPsk/YqtmoGExPjm5VCgV
                        l7Nepq39wCnnC/Wg3XYdJUOlVCSk0FIpLZUbOUppRcooEjaj3FApaZRyjOO5kcp4ofKUJteJSCmt
                        PCck5USu64Su6/me6/mu6wRxIrsTOY4KlVKRUiryvEzHdVXgKDdwBOkhz61DG+Xmi3W4Ge2zVZPj
                        w7Wr/Rv2cSmuCWJmZdZ+5H9/dHowX1ysVpujTmLBCAzJgEiGjklJdDI8lbhiYgKQ/MJPWwKsADQz
                        pKP0Bz7w/j9/5zve+dmJsbFpacElL1eXjgrJFQYKhoQ0ylGRUMoU8+W+1eqji2uCmACwbXRiargy
                        OLt2YXa0RzMgdqqwjed+iPMBmAUYV+6EFD1ukq7uECXEJIAkgYnstu3bz7zptjd9s1Ipb5n5G9dX
                        JJWGzKvfUx+vBtcMMXds33FuYnRi6jQ/f6shAohjrygAAoHBoFQpgNaHnt8taMPfafTPJvtNJfOM
                        0e7i8vKE3+lksZ6P+4rAK9MERjxJtSygrYQlAWslrFUwkQO2EpYFmJPXWcSLlfFrHMtpWhbWGmWN
                        VTBQTpOzUF7YVhqRY9iayIW1jtDsGkHg6dnTAI5e7d/zjY5rhpijY+MXh4ZG5picKLLsEFlYAVik
                        5LQJQdH1tL4apFaTeN0RlC4WQCaXRb1RH+r4nQKAtfRzM1/51vfZ6uq4G/kurJXMWrKxwkILZkuW
                        maY/+XnFlgUMS9JGUWRc0iyFNg5p7QqjXbJWwRgHxiho40AbB8yCrBVkIWCstFo7RmtltJFWawcG
                        Ts54WQPCPFp+lEMnaDeL0nJWWJFrOaJ518//7L/ntaXTVB7ZMlb+WsQ1Q8yhykD7t/7d/7UolBsE
                        QeCQUGABWGIwGQgmxLPNVIH5yoeyaSzycmBCnA5IwOLi4rZOp5Pvff/oNx/+EH/rsb82XKsNKmMt
                        sWEdRWRMSIYsRzAgR8EIZjAJwSSkISUthLQsBVhIYohufWf8ZEjDJ8QMAep6ipPBQ5y8YAkdq2CU
                        hM9NOAOZwO20PZcErFHgXKbKmoFo6+dQb3VcM8QEgO2jE1MD5crqfHWlYEhCx+XSoHQwm8w1gSsf
                        yqboiY68AJ7nwliLqYtTu2vV6giAk933APJqzR0T8zXytIGbhjpNBAMN6wChCGCkhYUAQUAagrKU
                        eJcZWsbJEdRzDCIJ26SvdZ1dPa8BgDGAcvIwpg3R8j0VRPDIQccoqELJepM7zkCovrW8yri2iDk4
                        PDdWqqwurazuiCSTIQGAIRiQHN/K8bAWSGaFV/Q93C0dWbecXYIwIJSE1Rpzc3PbZ2ZndwN4OP3s
                        8NjoVEfBzypkKQiBToB8NgtYjSBqQgkPbTbQzDAiDsoIFlBWQDCgJcOQAROnuRBxgoGIcyN6iZke
                        X9dBBUDDAoIA0YGCgmcjuMwIwMiV8isYKC/R4EA/C+gqY0sQk1frBLKggcoLbhiuLhFCoWAkzj79
                        zNr2XK51LAy0daVjpRPbSo59KcmoDwCDmF58PPpSx5Ku02QCJEPGZDjJArCRAYxFs9EoHD129E2L
                        84ufGh0fbQPA9usPPvJsXi7UPLM7BwFmA2Ha8JIYTGA6sJJiAorYeywRrwUDkWQE0iDNbE1J2PuA
                        uOTvDceujYEjAhgZAcQQMLCs4UuF3LbRsxgorlzt3/v1ArdWCVYQAqtAjgFJC2ZBQ/lN54XetMS0
                        y1XHzizsk832AJ54tgQduObL97FmLbQNVaT9jLVGrH7prxxuW9caacJqbbTYalcqYKNhnDYTGALE
                        lFgOThw16x7aKzo2AEh5naTmpUNHZsAYG8c6iejZZ59969LS4jYApwCguH/38+VDe5+orszt6lhD
                        lXIW7UYHAMPNZhCFLYDi5D5GnEYXO5U4GZQDytKlM+QNMVW6TDgn/VsxQUaMDAtkGMhogRCEKCOj
                        4p6dJ9gTr7mMJbdq1B15MwE2cZOZZM1Yf82C4ngWC3Dv31rChk48FGARP20TTzRA0NpBpL3u9tau
                        L8yEMMzYx57IEAuAJTN5uq21p123bVYa35JDxU0l37lpielPXTx86s//8h/mV+s7nVp9G4WdjIGO
                        AtKRj5C0iVxpjBJt7cFHJiKP6l7GuAsLhYqJnLYBIsWwkCAICMTEsUkY5UqHscC695UIkKnTBQkh
                        LAAhIRJ2HHn++ZuPHH3uLc1G83ShWGDaNdFofOpTf3L8wqk7p46e2OkUSsgZA252IMmBdBxo2ORh
                        kh51/LdgEefkWhE/XF7kLF5q+sxGQIAgrUJGEDwDhNJB5GX93IF9z4nSYLcus/nUmUP5WnOY9Voh
                        yrQ4QiR0wA4sKG3xYK0VaaiGrRXWGkmWhTVWsolfm/3LvxRkmdjXHmmrYK1gy4KNlcRMbOLkyCgM
                        PYr3J9laAcOC2RJbK4VhSTr0qPudsVAaWxbETGSso5gVp+EiZorDSVYwGAKRCDvNAiAFpKONkwmX
                        jVW0beLkbeODMwBOXO17vhebkpi8POutPfbM7gsPPfwDo/XOeKXVka6OwEKDlQWUMYqtdC3DCwCX
                        svClh8h1MQ7GACxWTATHMrRQCTGTgV3XnFy59ydNJkjzh4B16ymSyhESgK8jtMOg8MBDD/3ADTfe
                        9AiA0wBQuO2mh7e/9Y4v1qu1v7ba7AwJz4XtBGhGAVylwEhHVgLEscUHSwgrEZtHGz8Y8EJi8mWO
                        9ZLjFgSDOFfYADAEhMJB6GU6YtfOM+m2wfyae+oPP/5jgyfOvE11Vsabbi0MbACHPQMLwTF5FFsr
                        2bKk+N8SliUxCzZWsbXCGhu3JbRWUhx7VYhJDTZWghlkIZIaNgFmIoaAZUrIF9esMoQiCaQF3jZ2
                        5oGTVhlAUpGDSxxezPFwxnEZQdACCQehkAi9rKlL1cmaiBGF2at9z2/EpiQmAj9L9XrFq9aKpY6W
                        g6FGxmpY0giNRWSMFMyQxoI1QWYJRgJWRyjnMihKCUcHUGxhYABKNFwtwExJGDOpOMG6h/WVruNh
                        cPzr27QARawHYNgYCEiQsShmc3j0299+11ve8tZ7VtbWzg6Vy5Z27182jz74PzvtIHvmvgc+5LGp
                        DFUq6KytQZAEWEAwgy3ikjCOGwGl02JKjvuyruGN/+ZeshJYKBhmMFloNjBE0EIi9DIdjI7OdD/W
                        8Aeajz91j3ji2R8YME3IbAtSh1CUja15su9uOKZ7SRgifR/rzicLRqQYJnmgXDIFiHujdZ+ZYv3y
                        dk+JOS6L4/S8e041dXqB08F+T5sKAEQWItKITAiVcdAKNTocSLgoiDDIkjWbLjy0OYnJiuTy2khF
                        UyZvLSBMTDC2kJZBEUFZgcgIdMYGQr1v5+moPLQ4kK3Um7XmgLfWeDOthR4zQRODhYVkgiQAJAAi
                        cJI/RwxAxOvUCgFJ3xMwyCbkS+4Iaw3YGgiVFE9LRggDNgYOSWSkAiKGjDRylpCXLuYvzox/8Qtf
                        +skbbrvtISRWUxw8/PS2Dzu/DXKj5cefee/y3NKuQjYPpS08NnC0hSviuWVkIhhjYYWCI1VSnpZa
                        hRf2R1kfE6yXrcXSQ4SMyKDRqCNTEID2YUMDch1kB4eWUBnsOn64tjRizh87XAirKJoAYAvNBIMI
                        aWFcmqch0j9iMd+4lC3eJAlVxddQaXspMYFLSJyW1lHv8feem7EJS2nDHJ9e8EC69MEQ18M6ELAm
                        giKBnDaISKPl+xmm176/6avF5iQmHBZrnYGcFUoyEAqGFgxpk0EpEywE1MiAGfzBd/xv+847/xLD
                        Y9OOLDXzR6du/tbM4r/l5+vXRWwQIh76OIYBA7BgMAkQxQXFREjcLEh8EMnfJilwZk4KpWVSNC0h
                        CGCyiIyGEYB0FYRwIYyFDqIk5hiHOBBE8KSDJx5/4p2f/NSn/+65pYV/t2dkrEUDwwzgGf3Mkd8s
                        3nzL/auf+/LfWzly9E1kUYyaLVDHh7QGrutAZB1YNtAALARgGS82RY4lgmJwQuCUqsyx48hID5Gn
                        Qa6EZQPfIRR2bDuHbK4rxkXNWkX61XImZyF8C45MTDiHYDeQwPaaMIqJ0NMy6ZJtu3nG69Jl63+m
                        ta+X/SQuZRt6hukbY1aXXI8e7zRJdKwFK4JjANcCbWtBSm66uO3mJKaxklvtoow9DIlnMvFOMoFJ
                        wFcSmZ0TUwP3vPmz+m1v+qJT2KMBwL8wP+195as/6Z8/tpdd4wppQWB4muFagoRAJBgRIhihk4Jl
                        7q5jIhJy2Ry0NTCRgWEDpkS6A0m9JQjWMDg0cWYRSUgixOxhQAqQp9AMfLjZDPwoynzmE5/4+dGx
                        4elztZXf31MZigBA3XLTOT5/ZqWwf+ezg6fO3UxPPvPD1ROn7giXVobDWq0ojRVKxkp7xiYU2NDa
                        L7aSGxoWJfcq9wzELRQCLYB8UXfEqnYdhzKeIzq5QnV0385jENxtTstLi2NtE3KLDKRDEMoF7Hrs
                        9KXwUpt8r8eM3PN/gBLHX0+Y69UEtF9HbEpistGO32oWKK51fsFVsyBEUsLJZHwU8o2UlACQ2TXe
                        /s1/9q/nO0qZjtFxCZYlGE3QWkALgYgM4AgIYZJ0tXTIQyCO53J+2IJhG2voCAEi0dXvMZphtUXO
                        ycF1BSiyMJGOrYUUsA7BNxFcT8I3FlJHqJTKqC9XRz/+kT/5B1YK8/TCxU/cOrZzFQBo9746gCM8
                        P3XC3HzoMW9heYetrQ2b5dUJ1NZGqdUpIzQeCzJwHR+uDNK0357YbGwU0hBD+j4JGycKE4OU0ZQL
                        4UgdhvNFJQNHWSlstriWvfvtX6RKuXsduVYfNuSgAwMlBAQJSM1Q1l5J+HczY1OezaYkpjHGaTcb
                        JQFLcWDLgnon9gyogBHN10b9hcbYxs+Pbd95amBwZKqxujhBZDxBLJlIR0JQIEGRADnWWGmTGBoz
                        xdo8kMRsmSCVlJYgExmfxPli4jmmYgUlMqDAwkQhyDKEILCjEAoAOQ/NyALQkLkMwkYb7moNJSvg
                        n5469KXf++N/HEwtbTt+5NgfXXfT4fPpcdP4jrBenb5Yuum2U+lrvHTeQaCz0NYFBEPJEIpNl3jr
                        SMeBcUZF8o/EYxQHQVkxdIbBRrLjE4lAIdQenFyHJvfX0h3ZmcVs9Q/+ZFdeZpSyFhYaGgxijRzF
                        qYF9vL7YlMRka5TfahYEg1IPXe8YSADISRcIuKhXWyMbP/99b/++L7v5fH2xvjpq2QgyVqiQlTVE
                        TQmKhIFt1orChBKWKbJGsTZKs5UwVhi2IgpCz7CVRhsZ6ciJgtBrdzq5oONn1tYag6vLtVFJkqRS
                        EtZ6TKBQAJEA2lGIyJHQJkKGFDIZD7rRgSM8ZKDk6pmp6z7/Jx//BxeOnbjtK5//0u++74c++Ffp
                        sZcGtge950Iju9P+K987NHUlml7ak4vgicBAkIV0JKAkoDedn+S7wNZ5omxOYkaR5zebpRzbpMg5
                        nQb0GAWj0apWHXNx6gCfPzlKuw8upp8/eNuBk7XF+mlttWRmgmFBGoIZZBSsFgxiLchamcTBBBsW
                        liFgWBhiIrJx3o1lYdlKa6w01iqrjQqCKFNbq1dmzl/ce/L547c9d+TIHRenp/Y2281KaNn1dQAl
                        PUgImEjDcz1kihIiYtTbbXAuj9lOdXDxiUd+8GR1bvsv/fqvfeid73nnp2+/6y0P7ssNda7adV+o
                        OqAMMLNcLCyt7Ri3MoOAQdCwbBHHb/gFzp/NjlRxYithcxJTR07YbucLsBCw3RDAJalmBOjIR/Pi
                        uQOVqYsHASz27qMyWkprll9P3L80t+QsLy5vO3bsxG1f/8Y3fvThR7/9HtVYmwwjHSvaSYnA92Gs
                        BRwHuqAQUAgoB6GN6PjpE7eevHD24IMPP/SuvQcPHPsn/+Y3zrztrrd9bc/2nWf3TO44P/gK1euC
                        WivOxrGWjDFSa62iKHKDIMiGUeRFYZg1lmW90anAUbqJwDlw/YEndg0Mdz2xy49854P6ubNvGg1s
                        fumxJ982qANkhIAliYAtQmNA4pqUn910j5rNSczAz/rtZkGwjQPtjEue0kwM2DgMsTJzYffCyWO3
                        AXjoahzryMRIBOA8gPNnTpz59jsee9s7/vxjf/YPjh87fqtQXtEPOwiYESqCLzWUS/ACRi4MwSAY
                        MDiwuU57bv+J2eVtZ72n7v7WF+770UKx0KhUBmt/52//vWY2k++4rutLJTVgoXWkrNUyiiInDINM
                        GITu3/qFv+ukhEy6jYlkSf42EpaEMlLUm828N1Bc+Q+//R9/DsCzAMBLq863/vVvfth5/NgPmFY4
                        UAo6yFgNRRGM1JDQUMmMn6/wPuZXkZ8MXL479yvff8+Iiy/t+r0ZsSmJiSDMkDausrEUpSWbJACs
                        x++INRxjIVZXh+2JU7fyUw/ciu3bTsLN+rBJDl4cVU9Ut4ghhLVC2jjLRIIMKElyTpOoGdYSmAFt
                        kjSxJAlaKkbGi+CoiEpDl7XE+w7tmwfwF0e+9fjRv/iTP/tHn/vc5/6W8f1MZbSChdYa2HPgBwEc
                        BqRNEtI5rhqxMIojLtp2WFxeXB1dUoql6zArJVhJxEfFDGshYZI8fCYGizg9LXXCpt2vsZ6y1lNM
                        nSXHtpotUfCHpUKPfmfQKkQXz+8tLy+MZtoBcjAQpGHIwJAF2MSeaZavupb1qiLN2lrHpjybzUnM
                        dqsgjJGpZFZatQEkZc9McAQhA4tOvVHxv/Xk+xfbUZErA4tSKBu2/IJudwqONq4bWY+MkdAQITMH
                        kEaTsTrqeOBIMrNI2hwkYdN4EUkTWmOMssYI5ThRsVSqF4cGF1v/7f/5Tu7mm7+BwYE5uuGGF5RJ
                        3XT3HUeOP/f8b9aCZvaxRx75/uXq8kQh66LdDiGlgFEWbbKQiQi1YoASlXbJAkXPo1gkFjA6RKAN
                        IljSbCEY8IgSHds0q0dAUGxRWJsNqYPriP9theMQsp4T5DLZ9e5efrNoaotDed2CZyIYiVjFXnCS
                        Y5vmB6+rvn+3eNUWE1dmMSmJT7/ExzcdOTcdMbm2IP37HiyzNUIwQ3AcKunNCokzcwxYR8gbgrkw
                        s21pae1DLWMglAtp4GaZUABgtYVjLMgQPCvgkEREBsLRsCJCLDdi44wZtvG/2cD3w0TRPO4fQiAo
                        14HJ5jH3wLc/vOh6S/nDB59Z/R//84sD99z5GbrhtkvmuNfdeMP50ydP/tp//c+//R++/IUv/Hhn
                        rZkfGqigFbSgFeA7cWWKsIBmQBkBaeMqGG10PDmO+3xBSkAIhktpZUiSQthN6DbobRkP4AVrIBG5
                        5gjKJeSz2U4220vMTg7tejlrfCiO0HEUtCAYEvFgg+M0O9qy5nJjdeolb2w6bDpiwmoX9VqFrBaS
                        bWxJELcfsCy615clwRqLDCkocmGNdJtRvK3rubChDxkFccYM0ooPCSKBDDN02IaAjhPZhQVYAmTj
                        mKVgFDwXsQBC/Lm4QMLAtBoo1huFnJMr+OGxbadPnb0NjzzyvoX//acfH33n2z5NE3u6oY39Bw/O
                        PXD/N37/xPHjN5x+7uhteS1E5FvYnECkJKyIUwwtCxgAUsTDWti4fswmhIsbG8UFn5YFrIlHDb3k
                        E2kKfaLvk64vSeomA0shhFAolor1jCPXaxDbraKj/YyDCCCNUCr4SoChIC3Bs7yem3rtYdOd1aYj
                        JjNEu9GoWGMkJUNZ2hDIZADwFMg4MO0QCgSPPLhWoNXyYVptMCIwGZjEXcE2uZlZQjAhl3WQij5z
                        2t+Dk1peaxHoILFC6x3BgDiH1jOEbNhBuxO4Hat3LS0sDJ+cX94RzS3viI4+/8fO9Tcsp8f6jne+
                        66F/8f/+5w/77U7l/LET+waHBwGYJB6YkknAUlwXDGK4nhMrG7CGsHFbpJi6cTsFVg5e7F5KLSeA
                        OFkfyRA3WUPED5jhwaEVz5HrMdOV6ojHJB1jIQFoEQtDECf1rNbGPV8EbaFo4NbF5iOmNSpod/JJ
                        ZTqAnrKinnsxsrH7XjLD0QzZ1ig4DqRw4CMCSQekVFzDCYZNCo+lFZBWIWIRe3pZgGFiUpKNq06I
                        IR0FIhsXK5ONJT4EQZKECjuIWk1kpcLBQgWTIpM//eSZt5yZqu1Rq9EIP/Lcf6O33jidHusP/cSH
                        //jxY8/d7s9c2Bd4CqpDKEUWhgSMQDJkBAwJMAEdvwNKZD8UGBIWAib2UAsCSCUF/OvNZ3vbBab5
                        st1k8C6TLBzE/UNHK0OrEnJdUmO1PuJE1lXWJonmSS2bdaAswzVx6EonOcvXEDbl2Ww6YiKSjtsw
                        pUyoPAuNUMTWxBLBCIJOn/4MONJFsVCEDICw7YOiCHAElGRoq2GiRLRKWDCJWDmHAcMGAQOaBCQY
                        LCSkiGsVReLkCIIA0nHgSAVjLUwUwYLhkEaeGflMBqwN2tUVsJPHDi+PlTV/dPpz9/09URpcssem
                        fl8c3tEAgMOHb3xyeHxyZmRyaWV1dmGoyAKeFZBJoYi0sXNFADBkIV0nzoZA3AQJNu7WZdnCGoYl
                        DUbcB1TIOH9Xpo2Meoe+GxDPDx2w4ShfKtSFJFNt+6pMxuL3PzLp+TZn4UBTnEMsLaAsQxkAEElQ
                        eFPmfF9z2HTEpNWo4k619mWbyOmsh0AyJMeWJVQChhQECzhGQGmLyFgYBijrJTuInRwuJECJbk6P
                        h5wswQhAOQTIWPuHe6qgOVk7GREPhdmAZdxRTxBBWAZHDB3G3cNMLoNQxJKTrmBErerQ1Bc/9/fl
                        7rFTPL/yBRofsuVCnn//I3/21dNPnH5rJItDhAAB664SApAOag16VU9iL2oyexQyljIBrdc/AohZ
                        i24ye6w19CIXlyVsJEHSDYujwwvskhnIZaxtL2bsUnVHXrsUSoKGhgKQNyYulwMhVHHabewAusLf
                        9jUQ2r6S/V9STJY2FF7vhdq3mK8IEuS2/dHBTAY+r8FyCM/GyS9sBARrSCshOZbW0i/quV+P7W10
                        o7MFoFNL8F0i0fUxKq4R1SomvySLLFsIY7A0P723/fA3f7JyYPJ5AGcBYO++7ScyedXsBE04rlgX
                        C+pBqgOLy7/zmgwh2cZxyHylVGNp0dQLEn6oguramGsldFKMAgDKaDhGwQhCJMQL5DD7eP2w6Yip
                        o2p+evbkhAiW4GQZggNI1nGzVysgjQPHxvE1LS3MFTy+pRVwDV2OG5dgo6RI/BqDZfz9RsRdqB0W
                        EDaWA3HB6ERGrhx77h3l2QuHuHbxAlV2mgPXbz8yvKs0O72kDhs/InGVcsGZGUJKMzg8tFjJVWxb
                        LwhYK2orq6MvsDgbery8aMChj9ccmyrxkdvTEoJBikVuoIhQWISCEUhCJGTsuoeE5FgXJyJC2LuI
                        3jUjoFjI2CdGACAQQESESBAiEoigYFhddq2tRMSyu47Sf7NExAKhZWjDMCauzeR0MQaelFhbWhxo
                        Xjh3A7db+bAzTdmcE1jXmqq/RtrqV32trvgax92tdaVSWQWAnBqzxIRGba3SW9lJbJO/4zml4CtN
                        xOvjSrC5LKaRwtZaleVmy601mlA5BxBA3O+SoFghEylkIKGlRUcYWHF5i2k5Cbgn7n1B62tiASFl
                        Egq4vOiWoHXxq951fIPGXtJYrS4WzWJLIEhoIeFLhYZmU51f3jXYCgYzk4frDb0SFosDDdfLAkH8
                        mat1o3ue5+fy2Vb3hUg7QbtVILaXTCAZ8Rx4E6eUvhbYlM+bzUVMeJqEG2ZuufWhYHF+W4c6sFIb
                        QbAEycoqykSOm9HKMcKayDGhJd4Y9k61IyxR3MKciOLGmPHfNhZDlJZJGuJEtKBnDQJLqXTP6zZd
                        C2YSYJKUFK8QgyykYAhikkZIeKXC2ljGadqRyYvauACAoG4zwlfSsZmAOPSuVjSQYZEt5BrZXG6d
                        mM123oRRRvRcxlTA2iLWSYrzi7e6R3brHPumIiYVB9ku1Z+6+dd+9Z8CRsLRGo4xkGxByoAdRuQQ
                        tIylWqRh0GWrAxNyUiK7RhwHJbtrC0kWQvAGc7kudy5fbAbKlCahMnGcLm6TXEzbVZKJk+2YLI0P
                        GgDIo9LJh0VTjPImMAwWV0f/iZm5WCw0Mtkei7lSG+EgyqzHPtfb+po4KTduWgR09Ze2Evr1mK8B
                        xEipg8STeS0hO+jY3/z1//vC8MDo7PyKP6ER5a013YQArTWklK9/KVJCTCnj5AIbrhIefHRIGOMQ
                        M6zgJNMqfmZZgVg6pStY9tp4h/t4aWw6Yl7L+IX/4+f+3eHbDj3yuc9/8meOHHny7sXFhVEA8DwP
                        zWYT5XIZUfTqVERektgMkCAzNDy0Qo7QAECWJaq1MQ8kYDSQVJMICxhiWKJYitesK5vzVRoSvk71
                        mC/WaeKqYtMSk1ebEn6QAzRBaAMwoKGgSUFLARiC1Og2l4k/lfw77o1hk8Y0DEtgAievk7USRrvC
                        muT9uB6T430RM5NhTjWek3rGWGYknmoJsBFEFgJsCdZIhiUjLCwRHM/zhZdpZ8qVRTUwNE8TZQMA
                        ozvLVQD3njh56qm/+NjH/sGXvvjFD8/Pz+8OggCu68KYOGldvE4qAQRAKmWKxWJDiiQdz7LUjXaF
                        tHF7pJeRSu5ZAtLyu1RR8Gr5S16u7OvFP9fDuxfWY25KbEpicrUuwhMn3jT/rSfe7+rAYxEZWCYY
                        ljAkyAqiKHJl5GfiQma73uGJQeC40Y21RjIDxpqYqNYIZpA02iW/U3SMySDW9AFiMjIsS8uWjDbK
                        gi2YyVomsIWJKyyItZDW56wyUNLGKkIaBh1pTUdCy1Ku7gyWlwf27Dmevf667wSPfOspd9/252lk
                        ZwgAhw4eODM7Pf0fyqXSysc+9rG/f+HChe3j4+NYXV2FlPLVXr6XhJTSDA0NLSvlxJNcbVSntjYM
                        rWXsueZLajlTFXpi7namvlr39csS88VEsIGXq8fcdNiUxIRpea3zp65/9qMf/SdDQVACRUHy1LMg
                        YcHEjmXpGHZEItVIIOp9NAohOL6JiGLvDBGzBUGQYCOV1VIn1SOcFtIi+f0IkEp126lz8oZKBRRI
                        AeQkat4M4riFg6ssXAV0Viz0rBvOnz55m3ns4fcP3Hz4kZF3vOUL0cUnvubsvH0eACa3b19cmJ37
                        fxYWFnZ86lOf+tn5+fns0NAQms3m60pOawwPDA4sS0dFyclRu1ofJGMhEsdObwqbodQRlPQk4a06
                        x3zJ9IhNd0abkpjsWOagnS2HYWasHSoRZ8kCgmFE3HtURRZOaLveNkq08OmS26ongTSZSlB3bbsV
                        K5fWLMYfs364/oS+pNkGISCNgDoxiS1DcnJTJw6SjJBAaFzdabuNleXy/NzsWP3c2Vu2zb1zT3T6
                        8T9x9t9xAQDGJieqZ06d/g+PP/74m+v1+m1aaziO87peW2stDw5WlhxHJtLyRK3q2iAnPT3Rc/WA
                        tDdnTw+Qaw+bjpTAJiUmhLJKQ5S1UEMB4mgJDIww8BUQiTidriuxgXV9m/TeEaLbiG29XUBP2wDb
                        Exnp/WnSCn2B9UY1vQXH8UWzMNbCsQzFSRE3ISnVAhBpeHDhGELZSgyyyK0cOX/9WnD/L5bcSt1O
                        XfiI2LGr4TdbRFJeePe73/1Xi4uLB5aWlgr5fB7GvH4NjkkQDwwMLivpxMS0TK21etk1tucBdRli
                        op8n+73EpkrJS0GsWEakchG5uQjIaiCjAdcArok7fQmSgJBgKeJFJEvyb0NxjaMliouQL3lfAsoF
                        Ow6scmCFghUKhiQ0CWgSsFLBCgkrZPf1CISI405hLhMcTlTJmWGZYSzDWoZDCsoSMgFQiRRGfYXR
                        NQv31MKOpS89+LPR+bkDAJAp5Fmzwft/8IMf12xbnpuJ+z7ikmdMck2uvKqjF0opUy5Xqmm4BFpL
                        v9kssNHJAwhYH/a9dsnzfXx32JTEZAsh2JK0GkAELSMEjkWoJCx5EJwFrAvNAhHixVBMIEsKlhQM
                        JGy6ULxmkiAoACrpJIAkMJcmCMQLpYtJFm1B2kKYuHpEWgOVTncFkuLluMOXYyUoAgQLWCERGANm
                        RlYoqHobzedP39S4/9s/Yc5PDQBAPpfnwf3bzwxtm5x2patZA4YIkUAyNI6VApUFpEkC/VdMUELG
                        ywfFfKGuhLAmqhF834vW6gOEWFhbWUCYxNHNMvnO+CGnxTVJ0k2Zm78piUmwEBKWRASjQvhuiLZr
                        4CuCJgVYF2AnJpwQ8ULJEs8eARLgdEnbecTO1UvrM5P/BJKC47jlLIRJukPb2CrGS0y+uM+mhRUW
                        WjJ00jJKWoIyBAUJa+Nk+dAV6EgDo4CMI5Frd9zOg9/+aV5amQSAi1wnWci3D954w/NkoKFtbO2T
                        +ATBQliGsOn3v7RvkjbUG15aeyiQL5QbnusGBekwWSa0OznbaRWlAJg1pI3PA5AASygrIWxcD2sE
                        wC+x/9d7edn75qU+223Z993t82phc84xiZnJwgpjrNCSyYDIgJggoOLCabIwwqy3RU/b6GywJl0F
                        93S62R3eSjBkHKFLJURg48a2SOdb8b/jHNF0kMewxGBp1nVuU1dlElaQQqy7oGJJv5hUIOTYoj09
                        t9OevXCYG9PHiEp2hSOze9uOi49ynKEa9DZzJQb3yoT0pM1999cVqAwMVLseWcMS9WYZUZQVFM/T
                        1+/VZK6dFmHT1UoreN3Rt5ivGBxPqIwAx7qmFiANogiECBAhiEIQQhDpeIFOtokX9CwsNGyysNBg
                        YWCTrBZLMQ3joVqqvUPQiRaPFoCWBJMsWhI0AREzNDMMx/uBIJCMFwMLzRqWDQANIgNBBpIMpGD4
                        zSbx9PxN8LUHAEPk8PbBkTmKLDmQcQVL11GFri6QFqkS+hXDDA4NrCilkspzENbqg8IYJ7aY60MJ
                        2rD08b3F5rSYcSSDAklRR5GyErAi9qVCRokwclx6lQbC19uDv/g8qLdle+zNvdT7eUmZCl267i2U
                        JjAkJMgm8cbEa0uptGZiYOPVeltyBgOCY8fVWmMCRnSv/4CbbXIYKXJVrMyeEjOVH+H4H+LV2S09
                        MLhOTCJhUVsblQaOEgKWuWsxU4mT3gfENWoxNyU2JzE1CbaCQiFMICWIEmcNidjRkhQKSitfoDYO
                        7iXRJS931/Fsy8RCV73vb2halGZSXuIdBUFYCdhYBCdN97ZJaMECcaNbsf65OL0h7gYdEdCxFrVq
                        bXg4st2gJWmWSkiwSAS4YkXn5FQpntulZMEVWzFbGRxYllKmCbkUra2NSmMcJWUs9Zm0iqek/u3a
                        0pJ90UfLpjvDzUnMUChoRxK7LpkMXCZINmAiWCiAY6siOe3Jiq4MxkYC8gbLF78X9+IA9RAzeT+t
                        9aKkUJo3fBYQkNaFME7cx0OkFRfrMb84+TsJexAnZI0JHAoHkcxhTWs5yBCdzqrIZgftWq0+xFIw
                        JCVlVT0VHrR+Pmk88UrABB4YHFxUroqFni2TX60PUaQdSbEK3vocc52Y3L22W9Vm8msSavpeYnMS
                        EwJGOKahMkHWgZvVDjxrAI6dNkYopHkq3EPIXgu33is6XtsezjKlcRFjgRdsn4ojc+LExfrnwMQC
                        DnvC46wUJEFSMCuhoYSFktZK0tJVARwRQJAVUsBRJISSREIoTyhWKtvI7dp2FFnPNxACgJ1ZnN/W
                        NqGElbAqHi5vtFb0KseTDKbiQGlFOSoWetZGhvVmhSKthFSwFGsZEShthZnkmaYXqD+g/V5hcxJT
                        Wsu7xk8Gtxz6ZtsPyyqyeU9IAQak57ZZOT5IaOl4ASQZEtJIKY0QwpASmoQwUkpDUurY6yI1KxlC
                        CAMhDKTQ7Lqd9X9LDSk1S6EhRFxQHRdSW5Yy3cakxdZCKC2FMkBcKQ3BDEEWSmgIWCGFho4UOSqE
                        Upr8Tp6kNOR5ARuWNoISI4OzspBrkRvLbp44e+Zg5Ao4WQc26eQusE6DWEWe1rNvXmTwlfYvSUMB
                        qc6sUgoEcHmgtFoqFRKJWCv8tbXBgvLgt5pwpYBez0pMrDN1C6OZrtxa9/HdYVMSkyaGW+H83EN3
                        7P4np1Wos8o3nmLBzJbIlSErETFJK4QTxeRIWkATMQkyIDCRiKVFBGxXtaCrYCAspKNBiYBlKj0i
                        ktueABrOfc9uwcVqtfjTP/5TYy0bCo9jz7CyaYXH+txSJMtLzYh6Gwtt/FsoyfliodHdWFsRNZpl
                        lxlkDYQjYch0HwgiqSZZT1y/NBP5GkJ/jvlK4Y5PNAA0XvWOtgAWlldG11qtnHUkZMZDFMaqHyIt
                        ekmCWmnHrZcaUPZaSgDddgnWWmQcNygUC/Xuxn6QidZaA06o4SkHlkPYHjO9nh+bWk1aH9puIbzM
                        w2RTns2mJeb3AtyuJ40JLCHuUUJgEesIkUyENIiZbdrXiEWu9F0rwj7x9NG9i3MLu4mJMoJsLotA
                        ZkUohwZWO5rdhx98+O1Li4ujodFodtpwZKzGJ3ldqT0dVr7cWDJuWnup0HUqXZLLZVr5Un6dmJ12
                        IWw2y57WcB2JdmTASSuElJTJ1bn0OzafgXnpa7I+IcBleNgn5pXCzi0V6MLsIbiuDxFZdmwEEoYi
                        48BAwVoBaxSMUTBGxn3tjIK1EnGbc2W1UcZaaa1RQmvHNaGLz3zGhWEJq5WNrDKspdUQzFoGQeQx
                        LFkTF1iDCSRgl3/7P2su5Vcz28bPeeMjF9To6JSYPNB8qeMfGR6c/cbXv/HBz372Cx82QbssuOOG
                        HGZlsdAWMhOaml8IW+2h0kAJoQ4gOIJMhq3rGT94RQOuyxEzRbFUWvMcd73DV6tdIj8sS8MQiqFN
                        BEsOaEPeCSXZUnRt6lhuypPa9MS0C7P59kNPfnDq3s/9n6rVKkd+3fFtx7Cr2iBpGSBrrWBr5frC
                        0nWcUAkBtlawsY61VlhmYmulsFrlBLuSIzeWFLFkjSUbKx0QGJBKMtm4jbplCwKxEAQW0rSkbNU9
                        p6Y9t0WF/NpDv/T3ZyYOHnx+8vY33Z/Zv+8pmthxiXDPzu3j/tHjpz9Vb9YHPnnvJ/5Gp748YUxY
                        MdIlEwFeRMgpD0wKftSCUMn8ji2Y5HqCwXeBXgdQOtccGByoqjQdDwAa9QGho5wDAWt1rMG7MWzU
                        s0/uBnc35b18pdiUruZNT0w060Ph1NSB1Ue/c8+wDlGkCDmKAAEYC4gkIC5JQJAAJYXPWmvA2vUk
                        dQKIkvZ0AohYx41jEweHSPJbU2dHGLWTPNGezCKK+28Ng0qCxASTQECE5tGLqD/+/FL1aw/9mBkb
                        Pr/46c/86citN3+Ddu/pSkRef93+2ZPnz/3e8VPPXf/Egw+OuizJdbOAEKAohDWMWr0J6QhINvFx
                        9VyGOD4ax25fyV0khOj2ykwspx2oDFSF6iFmdW2YIp1RxLBGQym13mCpB9e4J3ZTiuVuemJSqbAi
                        Mpm6ZyLktUZOGoQ2iLN3OC5JSvVo4ia3PdWEvF5d2EswIwQ6QiCSSQgC68HzdBCXTdPskGT7IBka
                        WgNXG7gGEMKBFgI5GNRrnRF/pTUSzCzeeOrC9GHzjns+x0ef+290/Y1z6bkc3L1n5Qtf/tIfLZw5
                        d3Dq7JnBZnVNuCqDguOBiSCiFnKFHGzYiatXKO6gLTgmZdyn85XdQ6nFTIkphLDZbL5FYr2VUtQI
                        y9pAaBH3A1SuA+Iovh5Ji0Du5umnjwlz1Zh6paate08QQ8Vy33AsIGJJN8MSV6mTzItj0xMTEIYi
                        7YhMphOxzTYpgnZdkGW4VsTETPRoZHLR0yWWUU92Qz3XngQcisuZNubV9jo6em8Eg3iuRUIidCSs
                        BDjp2ylYYpAB0Qyh21G+vrR288rSZ6+rnzt7U+uRB/9V/q3f90y6zx/8wAfv+z9+/u8fOX/u/CEn
                        6xYYgA+DIAzhugrQGpS0fuckrU9agiCzfkQvQYyUjFprCCG6aghCCD0yNjavXKc7x6wurU2w64Ud
                        SVlXCDhMUBwXXUYiJmWcXZU0YKK0qO57fx8nOQ5XVA9qCbDMkCBkQguXLZRldCSghYhYiVenGfo6
                        YHNWl1yCuHZfsoCysYVMD9omdYtp/aKWcQVGJIFIMgKVLhaBAgKFWJpEWhiyAJn4JiMDwMImayaD
                        pOwMVqyvjTAwwsa9OiWho4COYkQy3kdGa5SCEEMdH8XVqts+fvwdjfvu+5v65NHB3jM6cN3hY6WB
                        gYZQEhAELS3YAYQETKIryyRgklpTgZggAi9fJb3R8SOlTOeatlAo1hwpQwDglUDadqfAkXYYcd9N
                        iiJ42sJNdIxSz6zkpFDbJmpJJGAhXrjuXTa8x69ysSSS21UkJXovsk6W3teY4yqhSMapkml9rQUQ
                        SYRxI5rNhc1vMQ0LGVm3ENpsOYg1CbS1iGASAvXksxJgVDws5UsCbty1hIyk6NlGSYWJSDpaJeuk
                        tTtYwCav99SJdMs9BMt4LiuBSCHu/qUsXGNhOS5sDpYWyk/dd9+P3nlw/yMAPpme0k133vpI5VOV
                        lZnp6XEhBKXWTUqJMAxfla5s6uhJ2787jpNaTTM6NLCQVYnFDEPXVqsjyu/kssYgyxasQyg3bpkk
                        rYK0GtLGN7oRQCQAC3d9VHGZPOQuXqQ650qRjoK6Eisv1g1q4zEwQNLAlxqhsoACBMVD2UABWljD
                        wvbnmN81rJXElhRbKGvhWgtHWAiyiXJB2vgmTfZOaiyTTJU0Y+WSXTIgk2c7YJMSq3R4lmbV2sQy
                        XzpsS/UOKEkktSIe9pEESFiALFRkUWSJSSPQmVvZMf3QIz/SPvbUo7nDt00DwK7dO09LKcMwDMnz
                        PGit4brua1ZR3+v46Qmf2IFyeXUgn0uEngPZqlcrMAEUWTiCEIQhiB1IIBmyimSuG8930yJt5p6n
                        XO+6Fxve603Cv2L0lMKh92d9mQcEQwIwic9h/f7o7mfT0XIrEBMMFpa1YBNJll3tUxZQJk5mj+cQ
                        SDw+lNRHouthvKTol+N27RIaMu0BueEbNwbUN85rRKLal8jWImlHBgELx1rkwPACRgkEx1He9JPH
                        3x9dnP0ogGkAGCjla4LIplYSiDN1jDGvWlM29TCnxEzV3ZVSJpfP9cRbfdnw13JSGkTSIhIMrQgs
                        189Rk4BINCKMsHG9CYsrbtBDfOXktIgLxq8ElhjKJppMJvFNMEFZwDFQZF+1QX/NsfmJSUxMjEBy
                        FEiWIAshGWypK3uRbIi0tCSut6Rufil1NXtEUrCcSoisfzIFJ17QFGlx9fpL68mqxOvbWiKEQsAR
                        cSMe1hZChygXXUwvro7Y1foo12cElbZZz5WRVNK6rgulVHceGIYhlHp1P0mafgesW04AyOVyUT6T
                        6XQ3DIJs0GpXikQw1sISA0IhbYhgoSAorlhNhbiIGQoRxJUSE69CApMQayuJ734oKxjwDMflg5GA
                        ywICAq4BPC1civD6ivleAbYAMQErwb6C7jgAG4KUFHfSYw3mxGIKiiU+kglnGgeUliAtwbHoem2N
                        YITSIlT2RX0pqcVNg1y9VlN168sEpCGoVASM4v12JADHQhmBQBtYSEa9MYEocgAEkTHpdWetNaWW
                        MwgCeJ73qnVle4lpjIFSCqVSqZPNZNeJ2QwL1AhGvUgBAcCS4CALY+K6FmFV9163MialYA3iEFcy
                        9usNZ13hbdAV1HwxTvZys/c1AYIXKXjGBUWxggSRgBMpZCNkKRKvb1+KK8DmJyYAlsJqQRQJCcUS
                        DIagVCwrLUhOfrrunDKObwqKPY7rYlpJLFMyjEy61aYqXWS7tU1kBSC4S7iUnMQEaQjSOpAsIY2A
                        tAJKCkQyHj4GbCEdATguOkRg5TLaQQWBcQEEOog8HUWu1pqA2HOaOnx6QxxXirQxUbovKSWKxWJd
                        uW7ska3WBZ++mAmYREcpGOEiUgxFAkZKAAJkZTdhXgtGJCwkC2TYdqcA8Y+z4csvGX5seCsdwfS8
                        d4k6xEtVzST7Th+kl19fWv2yLosiEEkXBipuf0GxFmJbEUKSDN58wYnNT0wWwro5v2MgI+kgIwSC
                        oAWPACkY1oZpG5xEXZ1BFN/oFkBkGRrxyFWYOGKuBRC5DiIVx+yYDcjGsa405UyoRHWACAap6FaS
                        1MAOXO3C0RIuYolHKWUcOiEDrQi1KEJkGO7wIJqkWReHliHyIQA0q42hKIpcIPaiKqXQaDQwMDCA
                        IAiu+FKl+0vnqVEUQUqJKIowPDy85LleBwBooGTbX394WGyfPFENw8zw2Ai3Ip8MWwspLUGRZEmC
                        hbBsEMDYiCLtmFCy1a4yVgLMSfICJW3tCAAEUTLyZ2K+ZA4AYSHT0vP1zzKYExeNlHFIOtZUSdfx
                        exYyY0mtK+9fGhYiih9EaULFesYTw0DAZjNohBGkqxgAZcjFXOCjrbhjrnRs/jpi0xOTtXEts2zn
                        s621MMxEbCE8iTZMLAuppGFmaKPBRIYJ1lojhHK0UNIAzEmrd5sIY7ElwT7YGiFtrCVLkHETIhYg
                        IiLWxpBU0golDQuymtlqsAGRjawSIXvKZUcKVggNOCCKtCfbnHXaATGxBDX9sBAIIjU8cEFdd/Db
                        ND4eAMDS8tI2Y4wrpewOO9OmtcaYVxUuSfeXZv6kljOXyzWE5/jpdpmDu5+8+a9/6PcKrc6AJBiE
                        nRwymVprbW2E4FhhhBQswKyFFsZo0gwTKeWHOWVZMseCljGpwMxM1hppjZW9pLPWikRQm4wxko2V
                        ADhtd5iSkhnUarWKKcG7Aa9UH0yzEwQ6KzhN5OJL1kiPiVmk35+6jw2ASFHU0aGCEtpEoReRoqyX
                        aTs7R08JT7Sv9n2+EZuemFZJq8aHp4pvftPXKQrcdhQqsIGQbiSUFzmuFyLpcem4buB4js+wsEQW
                        ijSU1MKRkXCEFq4KpZJakLSD0ouIHCtJWCmEVVJpIYWRECyFsI7rtiHIdhclIjiuD0/5cFhDWADS
                        gB0L4UYQTgDXbcOhAIKBnBfAdTQAgraCdu5aS8/p1NkLhzp+UEgtW2o1AbxqYl4OQggzODi4KD2v
                        O8cU27fVAXwm/TcvTWdoZLu/8bO81iJPGFCxxLZTIyaFWBEteb/HJPYkQAJgwKbkiIlJUq67flLR
                        l3RbgFi8mL+X4xwQw2K9rUrPpszU/a6UqMnDIDkQgg0VTODAQ4ROJ4eOyUEqw4oiHh+ewybDpiem
                        mti+wsvVr7xt/76nkcs0oaAhhYbKRpY8y0xE1pKIx7Bp8V2SPMtxjwFhmcrlSwKSvFoVsBLdUuDh
                        wvdsPHP6xKkbO51OqTfJvHcY9mrRmyebfAdXKpUl13FedJx8OVICAJXz3QMS2cpLRS63EmpX+wBe
                        DpuemABAwwMtAOde030ODlw24ZOXGl2tPRopveY3YGOmmv1Hv/J/7g18391YlmWtfU16Y74IMZc9
                        J3b+9LH5sSWI+XIImnVha/UB2woKMtSujIyiSDtktQQbYdlIw1oY0sIgbvfOgfZgIKCNgrESkXag
                        jVr76pclWys4DL3l//UnzCQYroxENtN2i8U1p5irykJuWVXKczS5+0WTny9Mnx88eeH0TVFk3Iyb
                        8SkkqQzhW998cGj6wsXdYCjL623drbUgoteMmCkSC8wDAwNLnuP0iblFsOWJyc15ap567raZBx99
                        XzA1t7sYRJlMJ8o6flBQUZRhrV0dhW6kAyfQoQptJI010urIhWVBxgpYJmgryVoRKx4wMVsRMVvL
                        lqwSkZPJRIVyqZMtl6tyYtdJb//1T6196iunsrt3HHMmJs7SeOUSC7x4bmb/R//of/3Dp44eucl1
                        vNC1jpG+UdYPC6uN2oTjOAijsKvJk1aEKKW6Dpwruh5dLyV110RkS6XSWr6Q11f79+rjlWHLExOB
                        9dpnZ65b+sbDf82cOb/fsBGOCaUTRJ5jmGyS3ykTISsp4twWh+IpaNzRC0jdi6lTQaSq7yBYstBr
                        bdiFFYRCIOTjd0TOQx/ytm1fyB3YcyT3plsf8B955n5v7+5nabTMALD/8I1Pvuue9/3VyWPn989c
                        mNnpSqGs1o7jSMfCKCVUl5TfLV5ufG2tTWrU4nN3Xddkc7lN53ns48Wx9YmpSoHUjqysRdvceljM
                        wAdEBMfEyQOhFNBCwtVxBpBgARYWjmY4tidJ8nKFfgaIc/wITk/knGwoZDss6k6zuHbx1P7V5596
                        S/HEHW8e+sB7/1gvLD6gxkb9geGyvnB+6d4nvv3U21qL9Qk/amdDYbNWMKSkrve11/kD4GWt5csV
                        CzMRdOJUSvefzeV8x+3PL7cStjwxqVzg2v/+tM1FxslGGh40ICIoEyuKS1bQAvAihmKBQMQNipTd
                        kMHyUuhhAgGQxkBGEaADZK2Hpem5ycXa1360UauNbu908mZh5fNybCjctXuk9qVPf/UTx48+e8uZ
                        C6cr0gWYLJhevw6wvRY4/Tufzzdd1311mQt9fE+x5YkZQwMwTLAQbCCshWMZkgkMA8fGSczKWghJ
                        iJCKKV+J0zVO5TNEIMvwAFSMRbBaz7WeOXrPvHSNUx6eA/BtALj9LbfeP7ln2/mzc2cPSmE9q02P
                        TMdrj8sRs1wuVz3P8690n31877H5kgSvAFoZGyjbDqSNk9Nl3IPDUtxbMy5c0khyQMAUQaflTt/l
                        EiiLeoaxXBKolSXWHA3DIcrEKNbrmfrTT9/VfPLJ9/OpM0MAMDox0j5w04Hn8+VsQ2gNV8et218v
                        9IRIun8PDAwsu/2h7JbCNUFMIy2HksNAxpIfoYjbrHcb0Yq0+StDi5S0uKJFC0JHCay5AlXJaJCG
                        gYZnNIq+j2K9UfKfO/I+f3b6YHp8B286/HSuXKyaQCMDBfU6X/aUkOnfAwMDK32LubVwTQxlhRFS
                        sswIlgCrpLklgywgKGnPk+RTp5UicW9NQCQSIi+3jlXQAWtizRswYDs+claiJFwoQcgGDFiN1dPn
                        bmwvr2xPj2/7nl2nvVKhHoEMQ8rvVauM3qGs8xJZP31sPlwjxFRCsONZuHG3KjJQsUweIiFgiAAZ
                        Z+t1lIUlgssCjhXddMqXX8ffRSC4oYCK4j6ZGWNAkYFlwIFEhiXQCoo2NBleWxJUHrG5UrnmFUpN
                        cnNhECHL8goUnF/ptdjg6SUi5PP5uuoTc0thyxOTl9fUytfuNx03WzWOW3GUCg209gxcEbLLGa8T
                        geEYlkHYkSbvtVkKzgbkuRF5wGW1GCmuXnrh1wHEZImEkUI5zC0ZCpiACBYkJDquQiPjLA0TARzX
                        E2XcXNtEJElmYLVOpDRfH2Kmw9jUWgohUC6XV/sWc2thyxOThsu68/iR53a+770fMQvz24RHbSut
                        FlYIdHSeHBVZtoJcz4+itks51WYbOUq7UhrZ24IyxUbJp97EbQYThBGSjJDxWDkCREiAkUwkskKh
                        VCyuFvfseoYqQwwAumNyxjeeICWkK2FsALxO2qy9/TFToedisbjmKNXP+tlC2PLEBAD34O5nRyrl
                        KXQ6HlwOoTgCS0YEF5Is2BKkigADuByBtYR1YgGZdVw68eMXK2snCyPirmDSWsiIIUIBMgQmAZYE
                        4VnadaDbQnB5an4PdUyOQ+1qtrhiNatXgLRQOh3OKqVMLpdrSSk3ndp4Hy+Oa4KYslRkAKtX+zhe
                        DGeOHr/Vr9VHEEVkyEIKet38P+ncUuvYQHqeFxaLxbqb8foWcwvhmgiXbGa0lpvu8Sefuatdrw05
                        eQmnqMCvs8XsjWHm8/l2Npvt58luMVwTFvOVIqj5IlKMQiH7ugzrWqZJliQJo8gxEuhE6szRkzfP
                        X5zax9r3jAjR7DSRERm49Ppc+t4aT2aOs356ZSv72BJ4wxDzU3/+xZ/69V/95x9eqK8O/dzf/fkO
                        aSuEfYGmdwrqaslsBAGaBAwBii27xhCxJRaMX/o7v0gRSbJGyJzIREV2TH1pafz08eev12EblLOQ
                        bpIO2FWofm3RK0tCRBgYGFjOZjKtMAjJ9dytrjzwhsEbhpiLi/Pbn3r6mbdOL85MCIcgjDVkY9nn
                        3g4lvWtOFBXTNQAwgToSKhRxS7estlqyBQMUShJaCGKWyAgHbmhZt9qUzXtgjhAGITL5DBDRFTtl
                        X07VP41dppazUCisOa4b4DWQLOnje4c3DDEndo6f820nq6EdYQBhrQO+PCHjddL2gNfV2LsqwoaR
                        +jgjQNk0q4gBGAsCIzIWhpnII3SgwdKFIgmEaSeqK7eWl2szkKbkpxIljJikhVKx7npu4Ga8PjO3
                        EN4wxBwYKq1axRaCYdiCiZAKt19+WRd57nYTS0BI+kYm7xu5LvgWDyQZIBMrmAtCCAYLCQkBNuuy
                        xFcK2hhp7cEl9Z0EFIvFWr/ka+vhDeOVHR4eWlaO8qWSsbBzAn6F6414CcHxS3Bps1V61aR8OaSV
                        JULGqXlDQ0Nz2Wy2+er33Mf3Em8YYg4ODi5mMpnGa9XqbrMizfwBxyStVCrLXo+ebB9bA28YYubz
                        +Va5XF5NG/hcq/RcT8ezICJbKBTqjuNsulbmfbw03jDE9DzPn5iYmCUivpatZpojy8zwPC/M5XIt
                        z/P66XhbDG8YYjqOo7dt2zYthHhjpKYRoVgsNvP5fH9+uQXxhiEmAAwNDS0QUSyxcY0aTe7KbxLy
                        +Xyzr1ywNfGGIabv+96OHTvOlUql5TAMwa+j7s7VBBF1e2JWKpWq6pd7bUm8YeKYQghdqVRWhBBR
                        3Ibg2jSZqfMnCENkMpl2pp8nuyXxhrGYruuaiYmJadd1g2vZK5sKSRtjUKlUVrPZbOtqH1Mf3z3e
                        MBYTAIaGhhYzmUz7WvfKKqVgrMXg4OBKP4a5NfGGsZgAkMvlWpVKpfpa9KDcrEi7hRlrkM1m21LK
                        /hxzC+INRUyllJmYmJiTUm75zqsvBmstgiCAFBL5fL6hlOonF2xBvKGICQBj42Pzruuaa2kwS0j6
                        YjNgtQEB2L1r5/L+ffuO53K5/hxzC+INR8ydu3efdbPZhk2yYyQJCCJYY7p5ppcMdRlgG2+bEuD1
                        HgqnoRyiJOn9ku8kWBYAJMgKCEOQRsA1Ap4mqJAxMTgavuued37+xsM3Pp7P5/tzzC2INxwx3/p9
                        3/dXew8eeFpIATYWkghKqpgMvC6Y3NVmZYbRGmwsBOIem7DctVCvx8LWghjdhwZSxQOOBagZBBIK
                        EhKIABEyHENwNWEkV9bvufsdn/+Zn/zp/7p3955jV/t693FlePV9xbcY/uN/+r8a42Mji7NTM3ur
                        K6uTzUZDKNdBJpOFsaYbnO+qAHDSUkEIqMSxYoErajj7SqFU7Cy31naLnokIEARIAasEAo4glABJ
                        gcCGkK7C6Pho7Yd+9EMf+/Gf+on/tvvQ/ufdQqbfSGiL4g0VLgEAl6T1g/bX/Z9rlT7+53/xC489
                        8sj3+WHohlHULTCOjIHnedBRBGPjuKByHZCQ0EEAYw1IvX6XLohCSCkhpYQ18cMCQGzZJRBwiMAG
                        CFki43lwshmM7dx14fvf/f1/+UM/8iN/tH/fgaOe5/YT17cw3nDEBICMl/NtFH18eGh4dnJy8ue+
                        ct99P1JdWRkSqaU0Br7vx+RwHBARtDFgY0CCoISD11NDx3Gc7nA6LVOz1kJrA2MieJ5CoVQCAAhH
                        metvuvE7P/bjP/EHb3vbPZ/bNzy5eLWvbx+vHteSc/KK0Kg38g8+9OAH7/34J37hxMmTb16r1QaW
                        l5fheR6EEBAJKaLEoioloaQC7OtnkHodUES0rqxuLayJ4AiBkbGRxs49e47d/e53fu7t7/v+T+7Y
                        tedERWT6VvIawRuemO12W+RyOTs1NbXjoYce+sHvPPrYu2ZmZvaePXv2hrW1tWzb70BKCddzQSS6
                        Q0t6HZPgTTKUFkLA9334vg+lFAbKZbtjdGzp8L59T99w802P3Pm2e764//pDz2QLxb6mzzWGNzwx
                        UwRBID3PM7XVauXkyZO3PPXUU/fMzs7uPn/xwv65ubl9K9XVsdramhsEAYg5Vrx7nZDOdR3HQaFQ
                        6ExMTMzs2bPn6N49e44f2rPv2dtuuOlbYxMTF0Q594a3kO12m06fPn1btVod37Zt29lt27adzmaz
                        Wz7bqU/Ml0BttVqYnZ/bc/78+cMXpqYOzM7P7V5dXR1bq1ZH69XaeKfdKTabTa/T6ThBEKgoikTq
                        qEnRG/NMPb1pt+f031JK5HK5oFgsBvl8vjM8PDyby+VWR0dHp3ft2nVy/4EDz+7ZvfvY6OjoVL5Y
                        6Htae3Ds2LEb/uAP/uBfTk9PX79v375jd9999+fe/OY3f3F0dHTT9rJ5JXhDOn9eKSqDA00AR5IF
                        rcBX1Wp1ZGVpaVujtjbcbDQra2trg41Go9LpdHKdTqcQBEE2CIKMMcYxxqh0YWZKZE2slDLyPK/t
                        eV7HcZzQdV2/UCjUh4aGFkql0urw8PDM4ODg4sjo6Gy+kO8XOr8Ennvuubfcd999H65Wq+6TTz55
                        05NPPvnWn/7pnx6qVqt/ODAwsGXVG/rE/C6Q9zIawFyydBEGITFbobWRxmgZBGFGa+1aa2W8GGUt
                        y1TIUikVel6m5XluRyknEkIYIYi9TN95891gZmZm8vd+7/feVq1WXSkloijCsWPHdj711FNve/e7
                        330vgGa73aZcLrflUqO3LDG5uSbBgqCNAx1kTNgpGB1kIKGFqzqUy6+RciIYK0hILbKDr9tNn/QE
                        MckCAJs2Dc62apJafh5upk2Vypaei124cOHQE088cXcURXBdF8yM4eHh1X379h0rFAprALAVSQls
                        QWJyc1UgMFlcnN9tz07d0jh7/sbW4tIE+Z0chaFntVasRGRLuWpx++T54r7dR8Tu7Ue5Nj9FlfE3
                        XDs6np8rY2VtEqvVnbZa3RZ+/r4CiMmtDCzwU8+eRbG0iIHBGRoqfc+rULi+JtGqVzA/u68xPXMo
                        6Ph5CKkHDxx4XIxNnKbxiRcditbrdefee+9909TU1O5cLodOp4PBwcHOj/zIj3zygx/84J9VKpUt
                        O4wFtiIxl2vbwuOn76o/ceQ9wVPPvad9+vwevVZHwQJuZOEYCzgOAkdgbaCApZ3jJ83B3U+Vbr3u
                        kejE0/fTzsmTKjt6TRPUrFwc6pyfuaF6+uINz//uH75VzK7cMNAOt8tGo+RHdaMdDk0+txYNjZzN
                        7Nnz3Phtt95vp+cfItddpdHXb2TRC15aLuLZY3csfefx97See+4evbS0JwxCr0nwqzff+GjxTbd+
                        jddW/4jKg5d9YKyurk489dRT9zSbzQwRQQiBW2+99ekPfOADf7Jv374TV/s3eLXYUsTkqQsjtQcf
                        +dEzX7nvpzvHTxzO1dbKhUijACAHhgcLYgPtW8hIwNcNBPWVg+3z5/bUn3727s53nn33jnvu/hLP
                        zn6WJidnrvb5vJYwK6uKVqvbV5999r0n/++PvL1xfurmzvziZLi8MliUCvA805yfd0phB0XXQYN5
                        cJmxx4wO37Fy9Pm3bH/P9+8Yf+97Pgqg/nofKx8/v2/x81/9wZWvfP2nouPHbyzU1ooVMCwAv9PE
                        9Ozsjuziwt7x2279GoDTl9vH+fPnr3/yySfv0lrDdV3ceeedJ378x3/8Dw8fPvztq/1bvBbYMsTk
                        +gqFx84cmnnwWz+y/Mxzt1QiP+sigCWNFiy4XIQ3NlaTyjH1xaViu9F0TaghohCDLem0T8/uaJxf
                        3NE8s3z7wFxjJ8/M//9o2/hs73fY+dVc+8LFm+srK9sd1w0Gtk+ekmMj52mgtGk9o1yrEZbWdpr7
                        H/v+lW8//sOrx06+uT43O9YM26IyMbI8cs9dDxZuPPigUBSufOvhD/jfeuxuJ2TkjcUACJ1Guzz9
                        xDM3NYz9a5WdO48BuO/1O9aOFx49ccf5v/jkTy49/O0PqrMX9g8HAQpsQdYg9FxkimUTZEtVR3ot
                        ePnLjmzWVmuZe//iL25ZnJoZ9aTE2Ojw6gc/+N4/v/uet3wyl8tt6Xlzii1DTAiI9kp1W+fYyTtH
                        2362iBDWBNCRha9yKNx9z2dy7//+e8Xw0PxgvVEpTs/sWv7Wdz7QfOzI23OtyB3WFjbqIPv8mcnp
                        uYVfyTntyNanf0eUtq8CgD52bu/R3/vDX42OHX2Lra2OQ0Cv7tx+oXjH7V/lufnfo4nx5at9CTaC
                        16pkTp58a/2+b/ydtW89/gPBqYvbosDAyeew9823f2f4A+/6g+zhfU/IgdICMk4rd+ctX17bt+tn
                        lh969P1rp2b2FmXezVkFXq3l9VJr3CxVJ163Y20Ewjz1+NtP/vGf/jMcOXHXaLVZyDZ9EAnkbrh+
                        BT/w3t93B8oz2XJ5ZTJXaMhKZQWV0bnL7au5vDY2d/zMDW7bp+JQMfrQD7z78+//wD1/Ojo8Ubva
                        v8lrha1DTCksh6HrNFr5kjFwTYCILARcOOWxZuGG274l33zX52jbxBoA2NmZonP9jY+Hhx//4MrH
                        /vIfi7lFL2cYuraCIFpzpr7wmZ988827vsPN2fsQSNv+xpPfd+4LX/mx7auLY9uUQIQQixfO7mys
                        ro4MXXfgSeO3vigz+U3j4eOZlXzw1JG7F7/2lZ+tPvjgD3uzy+V8RPC9LAYO7zs28oPv+133rjs+
                        S5OX3KzfiS48N+fcevP9Q0+cuEefXbipOV/bvwcUbHv7Wz6buenGB1+/I7ZSz1486J9+/ubKwkKh
                        7BNkaBFVKnBuu/Hr4gff+0cYrMzSSOVlFReUUtG2HTvPHb7+xpN7Du4680M//CP/c+eOm06/kqPY
                        Ktg6xDQWCEKXtIHUBtJakCRISOSHJldK2/edTEkJAGJyWwPAA/bc0fPTx594k/hW7b1uvYkoKxBk
                        gZVzF7af/8Z3PrD38G33y6GxRvCVh5czpVITqytjoQnQDFvoZDw4ljmqtwel3lw15dH8wv7FL9z3
                        c9PfvP8DWJwv55hgpYfMrsmZgfe/4yPu7bd8YQMpAQDOrhunAUzzzJkHda01XmmGZbhekBmpXBTb
                        dyy9XserPW0b4VpeCAbYQhMjdIBOQUSl8eIZUVErr4SUADC2d9vsubmF37vhfe/6XCGXa+6aGDt5
                        9X6J1wdbiJhaouNnYS2BAbIWgiy0ZdDg4LQcGbusM8cMZBed8coMisoPGn7G9yRa1seQHHaXnjl3
                        2+5aewBAw7nhwMO3//gPfcQ++Z0PeP7aaDmvgolt207IG+64L3Poum+pQnbTWMtodnZg5d4v/FD9
                        kaffU15pDWa8HLjtoyUYQ7ce/kbmLbd8kXbvXHmpfdC2fSsAVl7hV75qGGmsZUuuk9FwFIwEWmSw
                        6vitkbxtKBF+V4n4eybG5gHMf6+O/3uNrUNMbSR3Onm2FsICygAMwppgqEpucaBcuGxupDy/uI9P
                        Tl+HWiMjoEFRgAGvANFylPRzeeELBwDEttGanbvwX/nt132FTHMQHmnKl5aRHZ2BLL4qTyWvrEmw
                        YBouviahiPr0uesv3v+1H6qcmRot2wCi6KDGgBoarOZuv+nrtGfy+Ov1M9i1qkI78NDxCxRGHrRx
                        IYRFxmujkKsjm/Gp+MLzVIERZeuhza4XaRuHszzGSkYHJkcdSDav5Puj1SVyBkc2zUPy9cIWIqZ2
                        0OkUYVkIIoAILAmBI+EV3DXknBcElM2Fi8X6xz7+M+7puTtzoYXrZRHBh4kIMBKTN9/5TTE4Mp1u
                        zw4FgoxG5AsryQkDmfMG3CYVB182cZyX1xxmI61goafmDoql6oQIggxFkcsPPgzKZ5r85JOLGCrP
                        o5Sp0sC2KwqAm8XZ7MxnPnmnPn364ITWkB0fPjREzoF3aP8zuUP7nhaFsVd0k79ScH1J2Nn5/WtH
                        j7/l6O/8zptbyysjzVp1MGx2SoJZ5rxsp1As1TKlUnV4544z9psPPkR7dj+HQnaZBoYtAKjckOE/
                        +mN2OzYDDZAEDAyCTtNbPH7q5vzYsx/kb35nCVSIkMk0MTl4gbaVX3CNUlLqWkOYarUia2sD7YWl
                        /a3V6rZysbiaHSgvoVisYnBkhnaMrH2357pZsHWIaYyDMMoAYCaiQAiEnoRxXAtFGm54iZuc5xqy
                        +ZnP/NzqVx76WwORkEJm4ZsO2tpBI5sxO95y6xPOu+74cxotBAAQLq3S2b+49x9F3/72Dzemzxyg
                        cn7VTkycv/Enfvp3AfzV5Q7JNmclzbR248jZt9b/20fvunDh/P7aWnUgU+9MlNrhYCaIPGECYaSJ
                        bMWr2fHiQjQ+eGHP3Xd9iZ9/4mHs2H6USmPflXu/vTC/v/rEk99X6rQqedcFAoJlC6NkiJ2Tx6KR
                        gQuv5WXnMxfHoq8++a65rz74NxtHnrkns7ZUNn4dERnIrAu4Dqyx6PgGDjwEmRIvffabM/kDBx7P
                        vfftH+fzU1+j3TsW7dJMxn7iS55tB6poHbghw1qA62Gl9eVHf2z56ZXvk2vekJElVIcq54bec8fH
                        eaXxn2moGK0fy/lBLNW2B488/oML/+Y/HVw9d/5gZ3FxdznrZD1CdtaGQShFk0uV5cL+g0+3/uzT
                        D+Zuu/UbGB89RwNbKzVv6xDTsoDRSgAkiBAQoUMCWgkNsgwOuiVsPLWYb3/6839n+ZOf/cdmfm7b
                        YquBAAayWNZtz1vd946331/6ib/2O+Kem7rBaIqsN/W1h3549NjJd0y0WggztcmL55d31G8+8y1s
                        IKZtTgueOn9z/SMf+/HlB575oH924XqKbNZXgDah0UEkKQQK2iAThehwx2suhGPtaYzVS9mbp556
                        +k277n7HV/a99/1/yksLD9PI2CueX5lqfYTPTF1X6vhCt1qQELDkomWNVZXiAhfL1dfskq/W3NW/
                        evADR/78M/+Ynzt76xgbCGExNrmtvv/Gg0fk9fvvh6da/skzt1Qff+498vziUGV1lXBhZXvt+XPb
                        58+evXlg9l0H9IVTfyBGts1Gv/eHWgeRcA0g/QCFLEHlS6jWWqX51ZNOKSpnfZHD+UVvm7x5x/iw
                        E/cytedPF7ndGVj9Xx/9Jxe//eQPqmpzl220XBkaDDkEa3yADJQOMzYIyk6+sK114sThqW989b1D
                        d97+7Z1//cd/nxv1r1GxtGVinFuHmCQsSydibUmAAAhoSxBCaiWI0WnmASzz6ecn2/fe+3MrX77v
                        Z8Ppi3s7FEVrg06zUx5enLjplmcO3f2uLxTuuP1r4tCuS5xFbEOvsTI/PuQ3kFUCCDW8rOtUG6vl
                        qL1MTm6YAYAXL+aaX7j/b8x/+vM/z8cu3OHVI6ejLRqD+aa4fuex0vaRC1kpDa/UR1dOX7yO5pfG
                        bduQkkBFCPDqGmxDb1v65qMfWj4xdd1b/umv/DKA77zi67C4MpZdWNlRjCJETlzPaUIfqlBqi4LX
                        zBbHXzPL0Jqf3/3Z+/7qR4KV+dLB/ZMnRm679YnKW2/8NB3aeUSUs2uUd6pgbdy19pD92sM/sfyR
                        T/zT+rnFPWUmeFZj8cKFXbMPPPDBw285fD+AWR0FrpfNRkxV15CA7wEzIgwO//SHPuHd+dYvi9Vo
                        hGVW5xzVmnjLLV+nUp55Yc4Nv3j/j01/7vN/p3P66J2y3cpZJ4co4zWC4XK1Vci2ScLYVsNzarXB
                        7JodLEUhMq2GW3bkpP+15R9fmD//prF/9s9/AcDXr/Zt/EqxdYhpLQGwYIZgIMsKOiSsrtYzRb/l
                        QRGHzz1w68Kffuzvzn/6az8jZucHx8eG0dS+OXjXPQ8P/u2f/fdy574jatv2xuV2T2GQGyBCkRho
                        1JB1MvDCKLe6MDdBwggAxiydyUVf+ebfbH7yC/9APHP85mJbg+GgdMfNZwoffs/v0ttu+ioGclUI
                        aSi0Ll+c24vnj71l9psP/NCFJx67M7taz0zmy8j5Aq2l2uBqrX1j48tf/Zv2+NS8uG7H1Cu5DMIP
                        M5lWVMxIiZA0BBswC7R1KBTb16zwXS+veHqt1nznhz/4JxPlkf8oS0PLcqC4LHaO1jZuyyvzy5Wb
                        b3sguu7Z7/On5vcEbBEBsCJkRZYlpAUAE4ausSFgLIgZlhxEGdly9m573r3zugdQGFqBk/OHwjDj
                        lsc7ujarlj/5pZ9rfeyLvxoeefZApSDQdAhm+/CZPT/w/ntz73rHn3OptEzaOLy0Nup/8b6faX7m
                        C3/PWVrO5F0PxgVqtgMldcYVW6sh6tYhZiJ6zMwsLCjXYeQcB2HJhbKRi3Pnrj/19BPvnvr/t3fn
                        MXZV9x3Av+fc/S33LTNvds94bI/H4xXjDWyzGGNKEiKSoFQ0baO2CklTqZXaP/pH1fxTJaqiRk0i
                        NZUS2qLShmw4hALGLMYQwAse756xZ7E9+8x782beevd7zukfDk4IBgyhCa7u5/9337lH53eX3z3n
                        /J7Z/5nlNT9r6jpQryFJhB7mF9oxX2mQb712UAIAmZrvTJbrTa2MQnM5WBjAThCMzhVbpJBfCczJ
                        mb7iE/u/UH9jYH1C0mBzwE/GReOtW/fKt+34AelZlv+1w06Ky6MjzS25sUoy8dnay2/cy22WMBmD
                        ZrtwQzc5+OIrn9x2512PA7iuwASlXAgglCS4sgDnFEKS4QeBFLiB+mF1t9zY4AGYYfmpfVRWAzhM
                        h+sYYnw2BttV4Xo6qlYaE1N94TceudW/eHGjPDp8s8F9eHKIukRhG4qTyCYXVPUXFcd8poqQyeAC
                        EgO0ADC4SomaqEJPFojZ8WaSzQGAcKbYMXbg55+Kj1zsaVETsAhAu1rHV/zFH30Nt6x/iacTs6rR
                        5YuFOYqZenNskTcrtq6HLIEFFmBW4S7ZsGKk+8/+8Jvy6p5Dv7Wx+mH0/++6Ae+DIIRwKkAkLqD5
                        HAgZVA2UeL6GRLzSsXptf3zd9GZ+6Gy7IamwKgvQADgXxtfM7d33kP/6sUl1x5ZT1zy4VY975Upc
                        YQyESpCYQIyqUEJO4TMiisOk/tTB7c75i5tMJwSNq6ipCrSu9ouJ1T2HrhGUAADSvWJGVOf3rpR1
                        d2rKXeIeOrUtJQEq4WikEi4XCk2YnesCcF2zbqgRs1nCcMrzVUPSFDBKwDiBSiCp5XqDmJgwSWfn
                        hzYRnYZMx9il1ezs0Nby0NDNM+PjS52qlbIqThqWl8lSSUm5Xjbm1BHnHgRz4ZAQQlbAiAhjpllW
                        1XgFAAQXlAouEQJwAgQh4AVcFiElJLvsbZnv8MTArsqFkZtNuwYtkUXeZbAVsyit3fwiae2ZBABR
                        nFTdw6fvnn70ib/x3hjYnWYCFZmi0tQw0/mZPY83f2r3j+iyJWdJ4vrf4z8KbqDApBwgHFeKBVCh
                        /KL4rO2BOlxF0iykbvm9w+KVA/N5+0fG/JHjt6RpEkbgQ64L1T1y/pOcf5/wwyf/lt668e2lA9Lx
                        km9IVavqNiZZAK4ZcBAikImPwCO2XcuND51fL9s1ahgySoEDpFNQl+QuKe3py+/WcmLmmBgd7W9b
                        2jfMzsxuM5w87MBCzDCRVBRanZ1eKqo2JeZ7b64l5dLzvKtttFCYXpdjCiQKOCJEguqaOZlfjYnZ
                        VQDe+E17mxemYva+Fz536qG/fsg6Obi1wQmgGRRC8aAaKhTlylwPhUiA74L6DjTBIAceFMHBQbCo
                        hUoiblYUPVECACJAKRGS0CgCWYarUlQIDa813YfNFOWRf/z63ZplZXWdoOLXoSZa0N7RN4xZnhU/
                        eXklm5xct/jlr39q9vzwHX69DmIofCKXnGzZuee55R+7+zF1zaojJNtwQwXkm26cwJSlELIc0Cub
                        rkJQDkY5qCJBDoQGx1cBgNyx+6B49dhfjcvKV8tH++/J2SqkugM2P4aR4tR9ijuru68d/Dt95663
                        Jlw0xWUx1fMtC4FEIChBxffBuAACRjin1C9bKcnzoakGYgpB3S4htMppeHXzPdvf3Dird7aPWkkd
                        oeODBy64okKSE4whJOC+hCvVF96V2tQ4bm7se708OrxcVJ0Ykwg8HkILhMQuTW+2Jqb6RKl6jGTM
                        D/xOxQbPLB/85r/+5eLrb3yiaaG8oiebBquUUJc5gpaWeTuuO1wxvJAJFCu1mBb6GS7UmOo7MBi/
                        ssufhCuFmvR4DYp65dFU4syTuadK0CkoJCpDITKIePuu8cIOk6JYas8qspxO6nDrFkiwgIl9P33Q
                        PPTKA04o1IAJCFWBiMcquY2rhnK33PSsdtuWvehsHybp7A0ZkG+6cQKTUEGoFBJCCCdAlXhwFYKq
                        rCLmeWrAtasDkdy25Vi478A3Ltn1ROnM+e1pT8BsTkBJyTh59KW7nX/xqfPkS18z7r/rapZOeJ7q
                        QxJEUkA1HTahgKxBonoIpkJhPjKKwTgoEDhQZA+654PMTq33ZqZ6ALz2rs1PpoX3vUeqs6xiZYgf
                        1w0FnAI+D8LMiu6zJJ2+rh0EaA7tfcQAAAtKSURBVENqMr5tw88bTpzZI/UPLZcgQFUJShhCFBYb
                        vaGRTbFbNrwI4AOtNxX5RSV8+rl76i8ceTCWn212vAomEgReAxW57be9svL+P/gWmjrGETcrIEqI
                        6dklfODcprlXD356sv/ojiwVqgwOW1fgSgiYrtiQEAKAq8GzNO6qlOmGLyEeSEhTxYh7qvK28wy5
                        1prKVqYth3h+FapvI04d1AVIrVZVK0aC1dtaJ1u3b3t1ya7b98ZX954QGXOOxFP/L+qB3jiBCQGo
                        sicoBYdASAVo0kDSSPiUEx12mHrLiX189wv5h3+wbLFYbTcE6fK8MtxyBcvMGCZO9N91pvSdlPXD
                        F/4h/uCe/wEAKPBdFa4vwisfY7hAXNFgqEYAqgqZKL6Rzc2XzSTKtUXwIERDKoP5+UV99vCJ3eG5
                        4y/Jaze948d9sTBF7O8/o5OY4QdWIk4lBltSEKbMeaxe1X+9vUAa2sLg0rH++Lrew7WR6eWS4yJB
                        BGTHRxhUsXj62A6c694J4EcfqJdLpabK2cEdYjrf3G2acGiAKrWR6F060v7Afd/BzTc/S7Ltv/o+
                        OMkHzl4KZka7vdPHNjImqzIAiergoOCq5pP2Zh8A3BipOzpcEyFIEIIKCipTykPvbUkrohi20bvq
                        eHjwwMd8u6xk9Bhqjo1EYxPKro+Gtb0ntvz5F7+CvuWnSPu13+9vZB+tJRPv2lLORVKr+wrxfBZe
                        KbAThPDrtqpyYSoejf36T5r23PtIeteeHxSMlG1TA0nFhOoytBLAGBvcdObhb3zNPvb6egCAGgYs
                        oVSdwIMkOHRJhmTbUBhXwAWVe3oXRW9v/3RMKS7E4wi1JCxfgmMxFA8P7Jp/4uWH2OnBjndqPh8p
                        9FoXptc6i57pGw0YsoBCIl3Y9MBnH5EV+X0la2iuYTSz+7bH4zs3HbA0FYodIh5yKMzB4vCZvokX
                        n/lM7dTzW0Jn+l0/n4iFvBqMTzXUB4aWW5dG2sL8tMZUwkbGR1Zm0ml4lgudK9CZCrtoGaHtKkIl
                        b7kjseIAtcZO3GSPn12tw48lBEE8lKCFMjRqUEnRrj5SclOvhppcp4zBIByCeBBx4VRQe9s4JMsz
                        VdLbe9ToWTlQ9IFQyoCTHBbLErjRWDOyLbNclkNo+jtOqAim68S9WEk4Q4uZ38II/VDdOHdMTfeQ
                        SpYDQ7V9SdJ0TkAcBmIQCE0NoNC3zQ8lSzO+ODn27erE5ZXOqeMfp6U5nVVtpA0dMglRmCqsHXn4
                        P78iLg5+ObQspjMqeXYAoSQg6i5ILAEtmazhFzt7ZzasebX73rt+uvj8Cw+q83XTBEeTosGaX2ir
                        PLX/i3Kx2OY9+cyP5b7uY9LK1QsAIKZHVT42t6ay98kv5V9++X7V96QZn4N3dU5379r5hH7n7Y+T
                        rq73FZhScplglfxTGaSC0CZK/dip2yXPhSoDzYwbpePnb58WP0Tr7rue5JfOv0ySuTzJNV7tn3By
                        sJWNLax0n35t9czpcztOj4/2xtYtPbTpnjt+nGlrH00tW3Kucnp0c8zhJKPrQCDgzDnN03tf+Vw7
                        byuzN86MEB0OK812VPbu31o82r8nuDC+2az4KnUIBJchOIeeiDFFT17N7ShED0KXyzoUKIoKRRIQ
                        MkI5ZZSvdZ7yup7X2u+767HL1nxq/NJUd1M8DoMzlMvl5Hz/8TuNxlTe9BxDnOsfgiQ5nBDuMyIz
                        j8WdyblV5//rkS31QqVDNpNzpYGL38usWX7DrNm8YQKTpJvFwv799SARr1paPdMEDXoQoiyAMJua
                        Rlq75oRlsnHpXLj/4DdPLU52uLXC1q5kDqZPEFZCtFAdpw8Pfyw4Pnab1NdzbIXZ5pmJBfh1DyyR
                        hB+LCTWdKYNcScroa9Zcrj/39FOYvdynnyjdppRqUAIPCaGgenExV5qa+FPnyKH7U2t7Dzv/9PUT
                        PJ1cqD/6WLs7OLxzYWBoi1JelLMNzfDNbLF1z+6fZO7d/R/SxjUjH6Q/pFQz50Xr2Y4vZWrllqce
                        mn3xwP1quWTqgUCyWm7xpo/+funszHa66cIBdVVfv/OzF6YCWQ7FzFz3/D/vvaV+dvROp1Bp8Qw5
                        aF/X/Wrn9u0vpTeuPSobLaH10588P3Tk/CeYPdfEnBAKkdCoqWrpuZP3LR4q35dobJ4XSblcckpm
                        tVZMSXZNzzkUKZKFphH4IYOABl2NQ5H1q3fMjlTbTIWmQ4nZQCBQDwIwIYlkQ/aay7fokiaLjQ8+
                        2sAX9dLzBx4snRleHfNDNGkagnLBrD7xs4fEkaOfjS1dehKZ7JzlOrHpiYneRddN1hnTXSHEkt6V
                        A6t23bc/2Zyevf7e/d27YQITAKREYoE2N44VZ+ZbdDfU5FCgoMtuS3vrAG9tuPiOJ3nvrtcm/+3h
                        f5+sFHPlfLmbew5kXYcrqfBCyMWT5+5uWto15Kl6WE+bYJIDBwSzmlxqbWueILns1btNfMumfZ0q
                        Z27OsCtnBrfNXp5LqxZDxkzCVHS4i1Z27uDhT7iH+u9yJc5qoSdUXaFxQ/eMZS3WTMKc7Lnn43uN
                        O+54jGxa/xst8KWNcQHgVXZ8YJF2twzmj76xe/HCyOaY7abjXgB/eKJjeiz/eSX7+v2uqrjzlkMc
                        T8iZZCNJCNnwZWm+eeP6I+1/8sBX6dr242V7IQYg1Nf1Hmy8Z+d/s+ODewqXplZx11JUM87BXMr9
                        EJW5Qs6aZ2aN+GEo80DXYsJSVFUIJqkMsMMQZVl27WRsgUvSLx99dXPR0xK1ihYHVQgcJQRpyU2h
                        MfuOiSqpa3VeTJ74bkNTujD7zPOfL124uFZYnqlBAnNDeBPTaTE+u8sHgTCM0I2pbiDB0Zqzc6u3
                        3vzakjvveFxe3n2KNDZc1yLsj4obKjCNtrbRju07ni0SlVozpRUi5KrckRsw1vcdkVo733UZ1ZIv
                        PPS90W9/KzH//Mt/7Ff8FkmK+bwhN9O6ov1k5vYtT5ElTZe0nZufLgRWzFR0xkCElElPx/p6Tv/q
                        cUi2lQN4VkydGKDDo5v8k+c3186NbfDnysvUstvALE+jsswUTQlCXbLjpl50M7G8nUvnm9f29bfs
                        2LlfyjZNkmzuQ1uaJW1aMxDYC4Otu27aXzjUf6d3bngrxuZuMsr1Rmq5cbdupWRqpzoy2Xq1JZX3
                        zHTB6Flxpnf7tn3y2hUnyLLWNwPDAgCpZ32e5y//fXjh0lOloYsb7NlCF3PcuKj58QWXGGo8UaOJ
                        WCVpKI5Qia8oJFQByKGviSBQ1MCXEwGTFd2w1Jz5yxlNnUvPGJu3vuAow37g+fFajFXUvs6jpL3p
                        XS9QZMnNBQDfFZOn9vmDw9umz1zYmh++vFoU600pOcYpg+x7gcJjsZre3jzW2bf8dMOG3iNyV8tl
                        kU7kidF8w2Vqb7iiQmLgwhI+PrWeLVQ7mCAkyGXGlTXdh4zOrvdceyfGR5X5I8c+HXfClNG2dIg0
                        N00K0yjQ7s6rV9Pw9VdulZKpOpwgBlW1yMYN597zuEPDzZieX4G5haVwA527vsGEIEjGy1Jz4yXa
                        3nwZTal50pT7rQwQMTLSjpHxDcgXO1GrZQK7ngAVQspkirS9YxTtHSNoyk2S1sbr2l9XFGdlBIEM
                        IgFEBiSJCypxSBKnKfOa317F7IQsvEClS5e/5T+8U+eXyBWnieoxG7HQQUqeI52r3tcuhLy0SIgX
                        6listAnbjyPgMpFlX5hmiafMItFpIKXjUbmJyEcXr5avXnwdq/B/VzswEolEIpFIJBKJRCKRSCQS
                        iUQikUgkEolEIpFIJBKJRCKRSCQSiUQikUgkEolEIpFIJBKJRCKRSCQSiUQikUgkEolEIpFIJBKJ
                        RCKRSCQS+Sj5XzRh9vJG6q+DAAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDIxLTA3LTE1VDAyOjE1OjUw
                        KzAzOjAwsdufaQAAACV0RVh0ZGF0ZTptb2RpZnkAMjAyMS0wNy0xNVQwMjoxNTo1MCswMzowMMCG
                        J9UAAAAASUVORK5CYII=" />
                        </svg>
                    </div>
                </div>
                <div class="em__body" style="text-align: right;">
                    <form  method="post">
                        <div class="form-group with_icon">
                            <label>البريد الالكتروني</label>
                            <div class="input_group">
                                <input type="text" class="form-control" placeholder="example@mail.com" required style="text-align: right;" name="email">
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
                        <div class="form-group with_icon mb-2" id="show_hide_password">
                            <label>كلمة المرور</label>
                            <div class="input_group">
                                <input type="password" class="form-control" placeholder="قم بادخال كلمة المرور" required style="text-align: right;" name="password">
                                <div class="icon">
                                   
                                </div>
                                <svg id="Iconly_Two-tone_Password" data-name="Iconly/Two-tone/Password"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g id="Password" transform="translate(2 2)">
                                            <path id="Stroke_1" data-name="Stroke 1"
                                                d="M13.584,0H4.915C1.894,0,0,2.139,0,5.166v8.168C0,16.361,1.885,18.5,4.915,18.5h8.668c3.031,0,4.917-2.139,4.917-5.166V5.166C18.5,2.139,16.614,0,13.584,0Z"
                                                transform="translate(0.75 0.75)" fill="none" stroke="#200e32"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                                stroke-width="1.5" opacity="0.4" />
                                            <path id="Stroke_3" data-name="Stroke 3"
                                                d="M3.7,1.852A1.852,1.852,0,1,1,1.851,0,1.852,1.852,0,0,1,3.7,1.852Z"
                                                transform="translate(4.989 8.148)" fill="none" stroke="#200e32"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                                stroke-width="1.5" />
                                            <path id="Stroke_5" data-name="Stroke 5" d="M0,0H6.318V1.852"
                                                transform="translate(8.692 10)" fill="none" stroke="#200e32"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                                stroke-width="1.5" />
                                            <path id="Stroke_7" data-name="Stroke 7" d="M.5,1.852V0"
                                                transform="translate(11.682 10)" fill="none" stroke="#200e32"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                                stroke-width="1.5" />
                                        </g>
                                    </svg>
                            </div>
                        </div>
                       
                        <div class="em__footer">
                    <button  class="btn bg-primary color-white justify-content-center" type="submit" name="Submit" >تسجبل الدخول</button>
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


<!-- Mirrored from emobile.orinostudio.com/preview/page-signin-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Apr 2021 21:27:11 GMT -->
</html>