<!--
This is were user will be entering the amount to be deposited.

-->
<htlm>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<head>
    <style>
        h1{
            text-align: center;
        } 
        div{
            background-color: beige;
            padding: 30px;
        }
        .formstyle{
            text-align: center;
        }
        p{
            text-align: center;
            background-color: azure; 
            padding: 30px;
        }
    </style>
    </head>
<body>
    <div>
        <h1>Secured deposit connection</h1>  
    </div>
    <?php
    if(isset($_POST['submit']))//When the form is submitted control will be transfered here.
    {  
    $user='root';
    session_start();
    $pass='';
    $db='sample';
    $conn=new mysqli('localhost',$user,$pass,$db);//connection to database is made with this command
    
    $idd = $_SESSION['id'];
    $sql="select * from data where id=$idd";
    $result=$conn->query($sql);
    
     while($row = mysqli_fetch_array($result))
     {
     $newbal=$row['balance']+$_POST['deposit'];
     $sq="update data set balance=$newbal where id=$idd";
     $resu=$conn->query($sq);
         echo "<br><p>Updated current balance: ".$newbal."</p>";
     }
       echo " <a href='first.php'>Proceed back to home page</a>";
    }
    else
    {?>
    <div class="formstyle">
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <!--
            When the form is to be handles by the php in same file then echo $_SERVER['PHP_SELF']; will be given as input to action.
        -->
          Amount to be deposited &ensp;
        <input type='number' name='deposit' placeholder='Amount' value='0'><br><br>
        <input type="submit" value="submit" name="submit">
    </form> 
        <img src="secure.jpg" alt="Flowers in Chania"style="width:600px;height:340px;">
        </div>
    <?php } ?>
    
   
    
    
    
    
    
    
    
    
    
    
    
    </body></htlm>