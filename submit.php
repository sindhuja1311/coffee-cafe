<?php
session_start();
if(isset($_POST["book"])){
  $con = mysqli_connect("localhost","root","","sandy");
  if(!$con){
    echo "not connected properly" ;
    exit;
}
        $name=$_POST['cus_name'];
        $seats=$_POST['cus_seats'];
        $time=$_POST['time'];
        $pho_num=$_POST['pho_num'];
        $_SESSION['namie'] =$_POST['cus_name'];
        echo $_SESSION['namie'];
        $sql="INSERT INTO `booking`(`cus_name`,`cus_seats`,`time`,`pho_num`) VALUES('$name','$seats','$time','$pho_num')";
        $res = mysqli_query($con,$sql);
       if($res){
            header("Location: message.php"); 
            exit();
       }
}
?>