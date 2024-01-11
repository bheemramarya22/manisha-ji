<?php
session_start();
 
 include_once('connection.php');

$u=$_POST['user_id'];
$p=$_POST['pass'];

$sql=mysqli_query($con,"select * from user_login where user_id='$u' and password='$p'");

 $count=mysqli_num_rows($sql);


 if ($count>0)
  {
 	
  $_SESSION['isactive']=$u;

 header('location:index.php');
 }
else
{
	header('location:login.php');
}




 ?>