<!--
->This is the main page in which we will display user's content.
->Angular_js is used to display different pages in same space (Since it help in single page application).
-->

<html>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js">
    </script>
    <head><style>
        *{
  box-sizing: border-box;
}
        header{
            
            background-color:burlywood;
            padding: 20px;
            text-align: center; 
            font-size: 25px;
        }
        hea{
            
            padding: 15px;
             
            font-size: 20px;
        }
        .bar{
            padding: 20px;
            background-color:beige;          
        }
        span{    
            color:blueviolet;
        }
        body{
            background-color:antiquewhite;
        }
        .image{
            align-content: center;
        }
        
        </style></head>
<body>
    <header>Sample bank</header>
<?php

    $user='root';
    $pass='';
    $db='sample';
    session_start();//This command starts session, from this point we can access data stored in session
    $conn=new mysqli('localhost',$user,$pass,$db) or die("savu da");
    $idd = $_SESSION['id'];    
    $sql="select name from data where id=$idd";
    $result=$conn->query($sql);
   while($row=mysqli_fetch_assoc($result))
   {
       echo "<hea>Welcome ".$row['name'].",</hea>";
   }
?>
    <!-- Angular_js is used from here -->
    <span ng-app="myapp">
           <div > <span ng-app="myapp">
        <div class="bar">
        <a href="#!red">Show details  </a>
        &ensp;
        <a href="#!green">Deposit</a>
            &ensp;
        <a href="#!blue">Contact</a>
             &ensp;
        <a href="login_success.html">Logout</a>    
        </div>
        <script>
            var app = angular.module("myapp", ["ngRoute"]);
            app.config(function($routeProvider) {
                $routeProvider
                    .when("/red", {
                    templateUrl : "add_account.php"
                })
                    .when("/green", {
                    templateUrl : "deposit.html"
                })
                    .when("/blue", {
                    templateUrl : "user_contact.php"
                });
            });
            
        </script>
               <!--
                ng-view is used to display contents based on the option select above, one the main concepts in angular_js(Displaying contents from different pages in same space based on the option selected by user).
                -->
               <div ng-view></div>
               <br><br><br>
               <header>
               <img src="download.jpg" alt="Flowers in Chania"style="width:600px;height:340px;">
               </header>
    </span> 
       
    </body>
</html>