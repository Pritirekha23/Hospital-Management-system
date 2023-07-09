<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>patient list</title>
    <style>
        *{
            margin: 2%;
           
        }
        body{
            background: linear-gradient(90deg, #6CB4EE, #007FFF );
        }
        table,th,tr{
            border: 2px solid black;
            
          
        }
       .thh th{
         background-color: #F1948A;
       }
        th{
            padding: 10px;
            background: #40E0D0;

        }
        button{
            margin-top: 2%;
            background-color: red;
            color: white;
            border-radius: 15px;
            box-shadow: 0px 6px 15px black;
            padding: 15px;
        }
    </style>
</head>
<body>

    <?php
include 'dbconnect.php';
$my_sql=mysqli_query($conn,"SELECT * FROM `patient_registration` ");
?>
<table cellspacing="0" cellpading="0" class="tab">

    <tr class="thh">
        <th>SI NO</th>
        <th>NAME</th>
        <th>ADRS</th>
        <th>DOB</th>
        <th>MOB</th>
        <th>EMAIL</th>
        <th>PASS</th>
        <th>DES</th>
    </tr>
    <?php
    while($my_arr=mysqli_fetch_array($my_sql)){
        ?>
    <tr>
        <th><?php echo $my_arr['p_id'] ?></th>
        <th><?php echo $my_arr['p_name'] ?></th>
        <th><?php echo $my_arr['address'] ?></th>
        <th><?php echo $my_arr['p_dob'] ?></th>
        <th><?php echo $my_arr['p_mob'] ?></th>
        <th><?php echo $my_arr['p_email'] ?></th>

        <?php
        $last_id=$my_arr['p_email'];
        $my_sql2=mysqli_query($conn,"SELECT `pass` FROM `login` where `p_email`='$last_id'");

         while($my_arr2=mysqli_fetch_array($my_sql2)){
?>
        <th><?php echo $my_arr2['pass'] ?></th>
<?php } ?>
<?php 
$my_sql3=mysqli_query($conn,"SELECT `deases` FROM `book_app` where `p_email`='$last_id'");
while($my_arr3=mysqli_fetch_array($my_sql3)){
    ?>
        <th><?php echo $my_arr3['deases'] ?></th>
<?php } ?>
   
</tr>
<?php
}
$e=$_REQUEST['msg'];

?>
    
</table>
<a href="profile.php?msg=<?php echo $e; ?>"><button>BACK</button></a>
</body>
</html>