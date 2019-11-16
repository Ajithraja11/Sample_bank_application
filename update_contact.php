<!--     
This file is used to display account holder's information.
php is used to establish connection with the sql server.
-->
<html>
<head>
    <style>
        h2{
            color: black;
          }
        body{
            background-color: bisque;
            }
        header
            {
            background-color:burlywood;
            padding: 20px;
            text-align: left;    
            }
    </style>
</head>
<body>
    <?php
    $user='root';
    $pass='';
    $db='sample';
    session_start();
    $conn=new mysqli('localhost',$user,$pass,$db) or die("Error! cannot connect to database");
    
    $idd = $_SESSION['id'];    
    $sql="select name from data where id=$idd";
    $result=$conn->query($sql);
    while($row=mysqli_fetch_assoc($result))
    {
       echo "<header><b style='font-size:20px '>Welcome ".$row['name']."</b></header>";
    }
   ?>
 <div style='font-size:20px'>
    Enter your new mailing address:<br>
    <form action="address_add.php" method="post">
        <!--When this form is submitted control will be redirected to address_add.php where user's address will be updated-->
         <br>
         <input type="text" name="address" style="width: 300px;" ><br><br>
         <button type="submit">Update</button>
    </form>  

 </div>
</body>    
</html>