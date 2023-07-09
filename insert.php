<?php
include 'dbconnect.php';
echo '<pre>';
print_r($_POST);
$pname=$_POST['uname'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$mob=$_POST['mobile'];
$hmob=$_POST['hmobile'];
$gender=$_POST['gender'];
$idtype=$_POST['idtype'];
$idno=$_POST['idno'];
$address=$_POST['address'];
$zip=$_POST['zip'];
$state=$_POST['state'];
$country=$_POST['country'];
$pass=$_POST['pass'];



$mysql=mysqli_query($conn,"INSERT INTO `patient_registration` (`p_name`, `p_dob`, `p_email`, `p_mob`, `gender`, `id_type`, `id_number`, `address`, `zip`, `state`, `country`)
VALUES ('$pname', '$dob', '$email', '$mob', '$gender', '$idtype', '$idno', '$address', '$zip', '$state', '$country');");

$id=mysqli_insert_id($conn);
$mysql2=mysqli_query($conn,"INSERT INTO `login`(`p_email`, `pass`, `id`) VALUES ('$email','$pass','$id')");
header('location:index.php');





    





?>