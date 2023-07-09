<?php
include 'dbconnect.php';
$name=$_POST['uname'];
$email=$_POST['email'];
$ph=$_POST['phno'];
$dt=$_POST['date'];
$des=$_POST['des'];
$time1=time();
echo '<pre>';
print_r($_POST);
mysqli_query($conn,"INSERT INTO `book_app`(`p_name`, `p_email`, `phone`, `date`,`time`,`deases`) 
VALUES ('$name','$email','$ph','$dt','$time1','$des')");
header('location:appont.html');
?>