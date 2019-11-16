<!--
This page is used to display users mailing address and also this provides an option to update the mailing address
-->

<html> 
<head>
    <style>
        .container {
    width: 100%;
    height: 80px;
    margin: auto;
     }
.one {
    width: 45%;
    height: 200px;
    float: left;
}
.two {
    margin-left: 35%;
    height: 200px;
   
}
        .head{
            color: brown;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="one">
            <?php
            $user='root';
            session_start();
            $pass='';
            $db='sample';
            $conn=new mysqli('localhost',$user,$pass,$db);
            $idd = $_SESSION['id'];
            //used to display the address stored in database.
            $sql="select address from data where id=$idd";
            $result=$conn->query($sql);
            while($row = mysqli_fetch_array($result))
                {
                ?>
            <div class="head">Current mailing address:</div><br>
            <?php
                    echo "".$row['address']; 
         
                }
            ?> 
        </div>
        <div class="two">
            <br>
            <a href="update_contact.php">Update mailing address</a>
        </div>
    </div>
    
</body>
</html>