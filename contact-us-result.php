<?php
include_once('../back-end/connection.php');


$fn=$_POST['fname'];
$ln=$_POST['lname'];
$e=$_POST['email'];
$c=$_POST['contact'];
$m=$_POST['Message'];

$qry=mysqli_query($con, "insert into contact_tbl(first_name,last_name,email,contact,massage) values('$fn','$ln','$e','$c','$m')");

if ($qry)
{
               
header('location:contact-us.php');
}

?>