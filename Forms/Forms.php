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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/forms.css">
	  <title>FORMS</title>
    <script src="../JavaScript/Forms.js"></script>
  </head>
  
  <body>

	<h2><a href="#name">Join Us For More Update About Taylor Swift</a></h2>

  <div>
    <p>Welcome to the Taylor Swift mailing list sign up form! It's completely free to join and signing up for the list gives you early access to :</p>
    <ul>
      <li>Taylor news & updates</li>
      <li>Exclusive videos and photos</li>
      <li>Pre-sale and ticketing information</li>
      <li>Special promotions for the Taylor Swift Official Online Store</li>
      <li>Anything special Taylor wants to share with YOU!</li>
    </ul>
  </div>

  <a href="../Foto/136052138_1329454777409262_6342905822922207929_n(1).jpg" target="_blank">
    <img src="../Foto/136052138_1329454777409262_6342905822922207929_n(1).jpg" alt="Taylor Swift Fearless Taylor's Version" width="100%" height="50%"> 
  </a>
  <br>
      <span>&copy;taylorswift.com</span>
  <br><br>

  <?php require 'daftarAnggota.php'; ?>

    <form name="RegisterForm" onsubmit="return validate()"  method="post" enctype='multipart/form-data'>
      <br>

        <label for="picture">Profile Picture</label>
        <input type="file" id="picture" name="picture" required>

        <label for="name">Full Name : </label><br><br>
        <input type="text" id="name" name="fansname" required>
        <br><br>

        <label for="date">Birthdate : </label><br><br>
        <input type="date" id="date" name="birthdate" min="1920-01-02" max="2011-01-02" required>
        <br><br>

        <label for="email">Email Address : </label><br><br>
        <input type="email" id="email" name="email" required >
        <br><br>

        <label for="pw">Password : </label><br><br>
        <input type="password" id="pw" name="password" required placeholder="Password must contain capital letter and minimum 8 letter">
        <br><br>

        <label for="gender">Gender : </label><br><br>
        <select id="gender" name="gender">
          <option value="Prefer not to say">Prefer not to say</option>
          <option value="Female">Female</option>
          <option value="Male">Male</option>
        </select>
        <br><br>
        <br>
        <label for="reasons">Reasons why you want to join us : </label><br><br>
        <textarea id="reasons" name="reasons" rows="5" cols="50" required placeholder="Make sure Reasons only contains words"></textarea>
        <br><br>

        <input type="submit" value="Subscribe" name="join_now">
        <a id="home" href="../" target="_self">Home</a>
    </form>

  </body>
</html>