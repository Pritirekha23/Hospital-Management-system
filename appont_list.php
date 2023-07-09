<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APPOINTMENT LIST</title>
    <style>
        *{
            margin: 2%;
           
        }
        body{
            background-color:rgba(220, 123, 123, 0.4);
           
        }
        table{
            align-items: center;
            background-color:rgba(123, 123, 123, 0.4);
        }
        table,th,tr{
            border: 2px solid black;

           
        }
        th{
            padding: 10px;
        }
    </style>
</head>
<body>
    <?php
    include 'dbconnect.php';
    session_start();
    $my_sql3=mysqli_query($conn,"SELECT * FROM `book_app`");
    
    
    ?>
    <table>
    
        <tr>
            <th>SI NO</th>
            <th>NAME</th>
            <th>MOB</th>
            <th>EMAIL</th>
            <th>DATE</th>
            <th>TIME</th>
            <th>DES</th>
        </tr>
        <?php
        while($my_arr3=mysqli_fetch_array($my_sql3)){
        echo '<tr>';
           echo '<th>'?><?php echo $my_arr3['id'] ?></th>
            <th><?php echo $my_arr3['p_name'] ?></th>
            <th><?php echo $my_arr3['phone'] ?></th>
            <th><?php echo $my_arr3['p_email'] ?></th>
            <th><?php echo $my_arr3['date'] ?></th>
            <th><?php echo time() ?></th>
            <th><?php echo $my_arr3['deases'] ?><?php echo '</th>';
    
       
    echo '</tr>';
        }
        ?>
        
    </table>
</body>
</html>