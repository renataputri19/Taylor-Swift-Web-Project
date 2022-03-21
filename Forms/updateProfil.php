<?php

    session_start();

    if(!isset($_SESSION["login"])){
        header("Location: ../Forms/login");
        exit;
    }

    if($_SESSION["role"]=='admin') {
      header("Location: ../Admin/Main");
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
	  <title>UPDATE FORMS</title>
    <script src="../JavaScript/Forms.js"></script>
  </head>
  
  <body>

	<h2><a href="#name">Join Us For More Update About Taylor Swift</h2></a>

    <br>
    <h4>UPDATE PROFIL</h4>
    <br>

  <a href="../Foto/136052138_1329454777409262_6342905822922207929_n(1).jpg" target="_blank">
    <img src="../Foto/136052138_1329454777409262_6342905822922207929_n(1).jpg" alt="Taylor Swift Fearless Taylor's Version" width="100%" height="50%"> 
  </a>
  <br>
      <span>&copy;taylorswift.com</span>
  <br><br>

    <?php
        //mendapatkan dulu, row mana yang ingin diubah
        $id=$_SESSION["user_id"]; //ambil dari anggota .php lewat URL
        //ambil data lengkap row yg mau diubah dari database, tampilkan di form
        require 'databaseAnggotaById.php';

    ?>
    <form name="UpdateForm" onsubmit="return validate()" action="updateAnggota" method="post">
      <br>

        <input type="hidden" id="id" name="id" value="<?php echo $row["id"]?>">


        <label for="name">Full Name : </label><br><br>
        <input type="text" id="name" name="fansname" required value="<?php echo $row["name"]?>">
        <br><br>

        <label for="date">Birthdate : </label><br><br>
        <input type="date" id="date" name="birthdate" min="1920-01-02" max="2011-01-02" required value="<?php echo $row["birthdate"]?>">
        <br><br>

        <label for="pw">Password : </label><br><br>
        <input type="password" id="pw" name="password" required placeholder="Password must contain capital letter and minimum 8 letter">
        <br><br>

        <label for="gender">Gender : </label><br><br>
        <select id="gender" name="gender">
          <option value="Prefer not to say" <?php if($row["gender"]=="Prefer not to say") echo "selected";?>>Prefer not to say</option>
          <option value="Female" <?php if($row["gender"]=="Female") echo "selected";?>>Female</option>
          <option value="Male" <?php if($row["gender"]=="Male") echo "selected";?>>Male</option>
        </select>
        <br><br>
        <br>
        <label for="reasons">Reasons why you want to join us : </label><br><br>
        <textarea id="reasons" name="reasons" rows="5" cols="50" required placeholder="Make sure Reasons only contains words"> <?php echo $row["reasons"]?> </textarea>
        <br><br>

        <input type="submit" value="Update">
        <a id="home" href="../User/Main" target="_self">Home</a>
    </form>

  </body>
</html>