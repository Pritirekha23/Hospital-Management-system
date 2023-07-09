
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOSPITAL MANAGEMENT SYSTEM</title>
      <!-- font awesome cdn link  -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

      <!-- custom css file -->
      <link rel="stylesheet" href="css/style.css">
      
</head>
<body>
    <?php include 'dbconnect.php'?>

    <?php
 session_start();
 
    $email1=$_REQUEST['email'];
   
    $pass=$_REQUEST['pass'];
    $my_sql=mysqli_query($conn,"SELECT `p_id` FROM `patient_registration` WHERE `p_email`='$email1'");
    $my_obj=mysqli_fetch_array($my_sql);
    $my_id=$my_obj['p_id'];
    
    $mysql=mysqli_query($conn,"SELECT `pass` FROM `login`where `id`='$my_id'");
    $myarr=mysqli_fetch_array($mysql);
    $my_pass=$myarr['pass'];
    
    
    if($pass == $my_pass){
      
    }
    else{
        if(isset($_GET['msg'])){
            $email1=$_GET['msg'];
          
   
            $pass=$_REQUEST['pass'];
            $my_sql=mysqli_query($conn,"SELECT `p_id` FROM `patient_registration` WHERE `p_email`='$email1'");
            $my_obj=mysqli_fetch_array($my_sql);
            $my_id=$my_obj['p_id'];
            
            $mysql=mysqli_query($conn,"SELECT `pass` FROM `login`where `id`='$my_id'");
            $myarr=mysqli_fetch_array($mysql);
            $my_pass=$myarr['pass'];
        }
        header('location:login.php?msg1=error');
        
    }





?>





  <!-- header section  start-->
  <header class="header">
    <a href="#" class="logo"> <i class="fas fa-heartbeat"></i> <strong>Sum</strong> Hospital </a>

     <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#services">Services</a>
        
       
       <?php   
if( $email1 == 'arabinda725@gmail.com'){
echo " <a href='patient_list.php?msg=$email1' style='font-weight:bold;'>PATIENT LIST</a>";
echo "<a href='appont_list.php' style='font-weight:bold;'>TOTAL APPOINTMENT</a>";

}
else{
    echo "<a href='appont.html'>Appointment</a>";
}
?>
       


        <a href="#"><button style="background-color: red;color: black;border-radius: 20px;padding:10px;
        font-weight:bold">MY PROFILE</button></a>
        <a href="logout.php"><button style="background-color: red;color: black;border-radius: 20px;padding:10px;
        font-weight:bold">LOG OUT</button></a>
        
     </nav>

     <div id="menu-btn" class="fas fa-bars"></div>
   <!-- header section  end -->
  </header>



   <!-- home section starts -->
      <section class="home" id="home">
                <div class="image">
                    <img src="Images/home-img.svg" alt="">
                </div>

                <div class="content">
                    <h3>We take care of your health</h3>
                    <p>A person who has good physical health is likely to have bodily functions and processes working at their peak.</p>
                    <a href="#appointment">Appointment <span class="fas fa-chevron-right"></span></a>
                </div>

      </section>
   <!-- home section ends -->

   <!-- icon section start -->
   <section class="icons-container">
    <div class="icons">
        <i class="fas fa-user-md"></i>
        <h3>200+</h3>
        <p>doctors at work</p>
    </div>
 
    <div class="icons">
     <i class="fas fa-users"></i>
     <h3>1024+</h3>
     <p>satisfied patients</p>
    </div> 
       
    <div class="icons">
     <i class="fas fa-procedures"></i>
     <h3>500+</h3>
     <p>bed facility</p>
    </div>
 
 <div class="icons">
     <i class="fas fa-hospital"></i>
     <h3>300+</h3>
     <p>available nurses</p>
 </div>
</section>
   <!-- icon section end -->

</body> 
</html>