<!--
->This is where user will be creating his own unique id.
->once this form is submitted then the control will be transfered to input.php where the data will be processed and stored in database.
-->

<!DOCTYPE html>
<html>
<head>
<style>
    body {
            height: 100%;    
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
     h1  {
            text-align: center; 
            padding: 50px;
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
    <h1>WELCOME</h1>
    <form method="post" action="input.php">
    <div class="front">
    <h2>Your name    : </h2><input type="text" placeholder="Your name" name="name"><br><br>
    <h2>Your Unique id :</h2><input type="number" name="id" placeholder="Your ID"><br><br>
    <div class="front">
    <h2>Is this your First time: </h2><input type="text" placeholder="If new 'yes' else 'no'" name="new"><br><br>
    <button type="submit">Login</button>
    </div></div>
    </form>
    <br>
<footer><h3>*If this is your first time Enter your name and your unique id(in number) so that you can use them to login .</h3></footer>
</body>
</html>