<!--
This where the unique id entered to log in will be validated. A connection will be made to the sql server then we will verify whether the entered unique id exists.
-->

<html>
<head>
<style>
    h1{
        text-align:left;
        background-color: antiquewhite;
        padding: 20px;
        
    }
    </style> 
    </head>
<body>
<?php
    session_start();//This command starts session, from this point we can access data stored in session
    $user='root';
    $pass='';
    $db='sample';
    $conn=new mysqli('localhost',$user,$pass,$db) or die("Error! Cannot make a connection with sql server");
    $ide=$_POST["id"];
    $_SESSION['id'] = $ide;
    $sql="select id from data where id=$ide";
    $result=$conn->query($sql);//compiling query
    $noRows = mysqli_num_rows($result);
    //If the entered unique_id exists then user will be logged in
    if($noRows=='0')
        {
           header('Location:create.php');

        }
    else//else user will be redirected to create a new unique id
        header('Location:first.php#!/red');
?>
</body>
</html>