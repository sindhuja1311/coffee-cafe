<?php 
if(session_start()){
session_destroy();
session_unset();
$_SESSION = [];}
header("location:index.html");
?>