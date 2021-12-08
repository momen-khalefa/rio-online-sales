<?php 
if(isset($_POST['id_p'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "fuel_rio";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    $size=0;
    if(isset($_POST['size'])){
      $size=$_POST['size'];
    }
    $sql="select * from cart where cust_id= ".$_POST['cus_id']." and cat_id= ".$_POST['cat']." and size=".$size." and product_id=".$_POST['id_p'];
    $result = $conn->query($sql);
    $allRecords = $result->fetch_all(MYSQLI_ASSOC);
    if(count($allRecords)>0){
        $id_of_p=$allRecords[0]['id'];
        $num=$allRecords[0]['quantity'];
        $num=$num+1;
        $sql="update cart set quantity=".$num." where id=".$id_of_p;
        $result = $conn->query($sql);
    }
    else{
        $sql="insert into cart (cust_id,cat_id,product_id,size,quantity)
        values (".$_POST['cus_id'].",".$_POST['cat'].",".$_POST['id_p'].",".$size.",1)";
        $result = $conn->query($sql);
    }
    
     
  }
?>