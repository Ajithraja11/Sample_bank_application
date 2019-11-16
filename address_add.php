<!--
This PHP file is used to update the mailing address of user.
This file is called from update_contact.php to store the new mailing address into database

-->
<html>
    <body>
<?php   
    session_start();//This command starts session, from this point we can access data stored in session
    $user='root';
    $pass='';
    $db='sample';
    $conn=new mysqli('localhost',$user,$pass,$db);//connection to database is made with this command
    $addres=$_POST['address'];
    $idd = $_SESSION['id'];//accessing user's unique id stored in session   
    $sql="update data set address='$addres' where id=$idd";
    $result=$conn->query($sql);
    header('Location:first.php#!/blue');//user will redirected to home page(contact)
    
?>
    </body>
</html>