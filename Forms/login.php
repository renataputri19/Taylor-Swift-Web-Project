<?php

    session_start();

    if(isset($_SESSION["login"])){
      if($_SESSION["role"]=='admin'){
        header("Location: ../Admin/Main");
      } else if($_SESSION["role"]=='user') {
        header("Location: ../User/Main");
      }
      exit;
    }
    
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1">
    <link rel="stylesheet" href="../CSS/main.css">
	  <title>Login</title>
      <script src="../JavaScript/Forms.js"></script>
    <style>
      *{
      box-sizing: border-box;
      }
    </style>
  </head>

  <body>

  <?php if(isset($_POST["Home"])){
      header("Location: ../");
    }

    if(isset($_POST["join"])){
      header("Location: Forms");
    }

    ?>

  <div class="box">
    <div class="title">
    <form action="database_login" method="post">
        <h2>Please entry your email and password</h2>
    </div>
        <label for="email">Email : </label><br><br>
        <input class="input" type="email" name="email" id="email">
        <br><br>

        <label for="password">Password : </label><br><br>
        <input class="input" type="password" name="password" id="password">
        <br>

        <div class="button">
        <input class="input" id="button" type="submit" name="login" value="Login">
        </div>
    </form>
    
    <p class="p">Doesn't have an account yet? Join now for free</p>
    <br>
        <form method="post">
          <button type="submit" name="join">Join Us!</button>
          <button type="submit" name="Home">Home</button>
        </form>
    
      </div>
  </body>
</html>