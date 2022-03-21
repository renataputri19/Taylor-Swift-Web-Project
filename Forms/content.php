<?php

    session_start();

    if(!isset($_SESSION["login"])){
        header("Location: ../Forms/login");
        exit;
    }

    if($_SESSION["role"]=='user') {
        header("Location: ../User/Main");
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
	  <title>Content</title>
  </head>
  
  <body>
  <a href="../Foto/136052138_1329454777409262_6342905822922207929_n(1).jpg" target="_blank">
    <img src="../Foto/136052138_1329454777409262_6342905822922207929_n(1).jpg" alt="Taylor Swift Fearless Taylor's Version" width="100%" height="50%"> 
  </a>
  <br>
      <span>&copy;taylorswift.com</span>
  <br><br>

  <h2>Add Blog Content For Admin</h2>

  <?php require 'daftarContent.php'; ?>

    <form name="ContentForm" onsubmit="return validate()" action="" method="post" enctype='multipart/form-data'>
      <br>

        <label for="picture">Picture</label>
        <input type="file" id="picture" name="picture" id="picture" required>

        <label for="title">Title </label><br><br>
        <input type="text" id="title" name="title" required>
        <br><br>

        <label for="article">Article : </label><br><br>
        <textarea id="prg1" name="prg1" rows="7" cols="50" required placeholder="Paragraph 1"></textarea> <br><br>
        <textarea id="prg2" name="prg2" rows="7" cols="50" placeholder="Paragraph 2 (Optional)"></textarea> <br><br>
        <textarea id="prg3" name="prg3" rows="7" cols="50" placeholder="Paragraph 3 (Optional)"></textarea><br><br>
        <textarea id="prg4" name="prg4" rows="7" cols="50" placeholder="Paragraph 4 (Optional)"></textarea><br><br>
        <textarea id="prg5" name="prg5" rows="7" cols="50" placeholder="Paragraph 5 (Optional)"></textarea><br><br>
        <br>

        <input type="submit" value="Add Content" name="addContent">
        <a id="home" href="../" target="_self">Home</a>
    </form>


  </body>
</html>