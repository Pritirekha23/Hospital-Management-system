<?php 

// session_abort();
unset($_SESSION['email']);
session_destroy();
header('location:index.php');
?>