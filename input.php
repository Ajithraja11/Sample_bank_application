<!--
When the user creates theror account for the first time, their data will be stored in the sql server so that it can be accessed later.
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
    $user='root';
    $pass='';
    $db='sample';
    session_start();//This command starts session, from this point we can access data stored in session    
    $conn=new mysqli('localhost',$user,$pass,$db) or die("savu da");  
    $stmt = $conn->prepare("INSERT INTO data 
    (id,name,acc_no,balance,address) VALUES (?, ?,?,?,?)");
    $stmt->bind_param("isiis", $id, $name,$acc,$bal,$addr);
    $id=$_POST["id"];
    $addr="Add your mailing address";
    if($id==0)//user is not allowed to create an account with an unique id as 0
        header('Location:create.php');       
    $_SESSION['id'] = $id;
    $name=$_POST["name"];
    $acc=$_POST["acc_num"];
    $bal=$_POST["balance"];
    if($stmt->execute()==true)//user will be taken to their own home page if the entered value is accepted.
        {
            header('Location:first.php');
        } 
    else//user will be directed again to login page, since the data entered by user is not correct.
        {       
            header('Location:create.php');   
        }
    

    ?>

</body>
</html>