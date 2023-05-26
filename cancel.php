<?php
session_start();
$con = mysqli_connect("localhost","root","","sandy");
if(!$con){
  echo "not connected properly" ;
  exit;
}
    
      $name1=$_SESSION['namie'];
      $sql= "DELETE FROM `booking`
      WHERE `cus_name`='$name1'";
      $res=mysqli_query($con,$sql);
      if($res){
        header("location:message.php");
      }
      ?>