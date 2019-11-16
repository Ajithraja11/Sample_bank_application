<!--
This file is used to get user's information to create an account for the first time.
When the form is submitted input.php will be called to store the data obtained into the database.
-->
<!DOCTYPE html>
<html>
    <head>
        <style>
    body {
  height: 100%;
  background-color: antiquewhite;
  background-position: center;
  background-repeat:repeat;
  background-size: cover;
}
    .front{
        text-align: center;
        box-sizing: border-box;           
    }    
    button{
            background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 30%;    

    }
    h1{
        text-align: center;
        
        padding: 30px;
        box-sizing: border-box;
        border-radius: 30px;
    }
    footer{
        color: red;
        text-align: center;
    }
    input{
        width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
    }
    
</style>    
    </head>
    <body >
        <h1>Register an unique ID</h1>
        <form method="post" action="input.php">
            <!--
            action="input.php" states that this form will be handled by the file input.php.
            -->
        <div class="front"><h2>
            Your name    : </h2><input type="text" placeholder="Your name" name="name"><br>
            <h2>Your Unique id :</h2><input type="number" name="id" placeholder="Your ID"><br>
            <h2>Account number :</h2><input type="number" name="acc_num" placeholder="Max 10 digit"><br>
            <h2>Balance :</h2><input type="number" name="balance" placeholder="current balance"><br>
        
        <div class="front">
            <button type="submit">Login</button>
        </div>
        </div>
        </form>
        <br>
        <footer><h3>*If you are again directed to this page try a different unique id.</h3></footer>
    </body>
</html>