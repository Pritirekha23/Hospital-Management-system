
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
echo " <a href='patient_list.php?msg=$email1' style='font-weight:400;'>PATIENT LIST</a>";
echo "<a href='appont_list.php' style='font-weight:400;'>TOTAL APPOINTMENT</a>";

}
else{
    echo "<a href='appont.html'>Appointment</a>";
}
?>
       

<!-- 
        <a href="#"><button style="box-shadow: var(--box-shadow);color: black;black;border-radius: 10px;padding:15px;
        font-weight:300">MY PROFILE</button></a> -->
        <a href="logout.php"><button style="box-shadow: var(--box-shadow);color: black;border-radius: 10px;padding:15px;
        font-weight:300">LOG OUT</button></a>
        
     </nav>

     <div id="menu-btn" class="fas fa-bars"></div>
   
  </header>
<!-- header section  end -->


   <!-- home section starts -->
      <section class="home" id="home">
                <div class="image">
                    <img src="Images/home-img.svg" alt="">
                </div>

                <div class="content">
                    <h3>We take care of your health</h3>
                    <p>A person who has good physical health is likely to have bodily functions and processes working at their peak.</p>
                
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
 <!-- about section start -->
 <section class="about" id="about">
        <h1 class="heading"><span>About</span> Us</h1>
        <div class="row">
            <div class="image">
            <img src="Images/blog-1.jpg" alt="">
            </div>
            <div class="content">
                <h3>Welcome to our Hospital Management System! </h3><br>
                <p> We are dedicated to providing efficient and comprehensive health management solutions for hospitals and healthcare facilities.
                Our system is designed to streamline various staff administrative tasks, enhance patient care, and improve overall operational efficiency. With our system, hospitals can manage patient records,care  ,appointments, billing and invoicing, inventory and supplies, staff scheduling, and much more.</p>
                <a href="#" class="btn">Learn More <span class="fas fa-chevron-right"></span> </a>
            </div>
           
            

        </div>
    </section>

   <!-- about section end -->




   <!-- Our services section starts -->
      <section class="services" id="services">
        <h1 class="heading">Our  <span>Services </span> </h1>
        <div class="box-container">
        <div class="box">
            <i class="fas fa-notes-medical"></i>
            <h3>free checkups</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-ambulance"></i>
            <h3>24/7 ambulance</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-user-md"></i>
            <h3>expert doctors</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-pills"></i>
            <h3>medicines</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-procedures"></i>
            <h3>bed facility</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-heartbeat"></i>
            <h3>total care</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>
        </div>
      </section>
   <!-- Our services section end -->


 <!-- doctor section starts -->

 <section class="doctors" id="doctors">

<h1 class="heading"> our <span>doctors</span> </h1>

<div class="box-container">

    <div class="box">
        <img src="Images/doc-2.jpg"pg alt="">
        <h3>Rakesh Dash</h3>
        <span>expert doctor</span>
       
    </div>

    <div class="box">
    <img src="Images/doc-5.jpg"pg alt="">
        <h3>Striver Gosh</h3>
        <span>expert doctor</span>
        
    </div>

    <div class="box">
    <img src="Images/doc-8.jpg"pg alt="">
        <h3>Akash pann</h3>
        <span>expert doctor</span>
      
    </div>

    <div class="box">
    <img src="Images/doc-9.jpg"pg alt="">
        <h3>Smash Get</h3>
        <span>expert doctor</span>
        
    </div>

    <div class="box">
    <img src="Images/dr4.jpg"pg alt="">
        <h3>Charile panth</h3>
        <span>expert doctor</span>
        
    </div>
    <div class="box">
    <img src="Images/dr3.jpg"pg alt="">
        <h3>Akash pann</h3>
        <span>expert doctor</span>
      
    </div>

    <div class="box">
    <img src="Images/dr2.jpg"pg alt="">
        <h3>Poonam kar</h3>
        <span>expert doctor</span>
        
    </div>

    <div class="box">
    <img src="Images/dr1.jpg"pg alt="">
        <h3>Smita jha</h3>
        <span>expert doctor</span>
        
    </div>

 <!-- doctor section end -->
<!-- footer section starts  -->
<section class="footerr">
    <div class="box-containerr">
        <div class="box1">
            <h3>links</h3>
            <a href="#"><i class="fas fa-chevron-right"></i>home</a>
            <a href="#"><i class="fas fa-chevron-right"></i>about </a>
            <a href="#"><i class="fas fa-chevron-right"></i>services</a>
            <a href="#"><i class="fas fa-chevron-right"></i>contact</a>
            <a href="#"><i class="fas fa-chevron-right"></i>doctors</a>
            <a href="#">apponmnt</a>
        </div>
        <div class="box1">
            <h3>services</h3>
            <a href="#"><i class="fas fa-chevron-right"></i>Freecheck</a>
            <a href="#"><i class="fas fa-chevron-right"></i>Ambulance</a>
            <a href="#"><i class="fas fa-chevron-right"></i>Experts</a>
            <a href="#"><i class="fas fa-chevron-right"></i>Medicines</a>
          
            <a href="#"><i class="fas fa-chevron-right"></i>Total Care</a>
        </div>
        <div class="box1">
            <h3>contact</h3>
            <a href="#"><i class="fas fa-phone"></i> +123-456-7890</a>
            <a href="#"><i class="fas fa-phone"></i> +123-498-9998</a>
            <a href="#">sumhospital767@gmail.com</a>
            <a href="#"><address>Kalinganagar
                  Bhubaneswar
                  7564002
            </address></a>
        </div>
        <div class="box1">
            <h3>follow</h3>
            <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
            <a href="#"><i class="fab fa-twitter"></i>twitter</a>
            <a href="#"><i class="fab fa-instagram"></i>instagrm</a>
            <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>

        </div>
    </div>
    </section>


<!-- footer section ends -->


</body> 
</html>