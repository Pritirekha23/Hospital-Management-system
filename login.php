<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>patient login form</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">

</head>
<body>
   <div class="center">
    <h1>Log in</h1>
    <form method="post" action="profile.php">
        <div class="txt_field">
            <input type="text" name="email" required>
            <span></span>
            <label>Email</label>
        </div>
        <div class="txt_field">
            <input type="password" name="pass" required>
            <span></span>
            <label>password</label>
            
        </div>
        <div class="pass">Forgot Password</div>
        <?php
if(isset($_GET['msg1'])){
    echo "<p style='color:red;'> !!! ENTER VALID ID PASSWORD</p>";
}
?>
        <input type="submit" value="Login">
        <div class="signup_link">
            Not a member?<a href="#">Signup</a>
        </div>
    </form>
   </div>
</body>
</html>