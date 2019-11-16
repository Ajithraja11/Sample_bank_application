<!--     
->This file is used to display account holder's information.
->php is used to establish connection with the sql server.
->Using the unique id in session data is retrived from database. 
-->
<html>
<head>
    <style>
        h2{
            color: black;
          }
    </style>
    </head>
<body>
    <h2>Account information:</h2>
<?php  
    session_start();   //This command starts session, from this point we can access data stored in session
    $user='root';
    $pass='';
    $db='sample';
    $conn=new mysqli('localhost',$user,$pass,$db);//connection to database is made with this command

    $idd = $_SESSION['id'];//accessing user's unique id stored in session
    $sql="select * from data where id=$idd";
    $result=$conn->query($sql);//compiling query
    
     while($row = mysqli_fetch_array($result))
     {
        echo "Account holder name: ".$row['name']; 
         echo "<br>Account number: ".$row['acc_no'];
         echo "<br>Current balance: ".$row['balance'];
     }
    
?>

    </body>    
</html>