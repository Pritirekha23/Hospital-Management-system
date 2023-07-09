
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
    
  <!-- header section  start-->
  <header class="header">
    <a href="#" class="logo"> <i class="fas fa-heartbeat"></i> <strong>Sum</strong> Hospital </a>

     <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#services">Services</a>
        <a href="patient.php"><button style="background-color: red;color: black;border-radius: 20px;padding:10px;
        font-weight:bold">REGISTER</button></a>
        <!-- <a href="#Appointment">Appointment</a> -->
        <a href="login.php"><button style="background-color: red;color: black;border-radius: 20px;padding:10px;
        font-weight:bold">LOG IN</button></a>
        
     </nav>

     <div id="menu-btn" class="fas fa-bars"></div>
  <!-- header section  end-->
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