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
        <link rel="stylesheet" href="../CSS/main.css">
	    <title>Profil</title>
    </head>

    <body>
        <h2>YOUR PROFILE</h2>
    
    <main>
        
        <?php
        //mendapatkan dulu, row mana yang ingin diubah
        $id=$_SESSION["user_id"]; //ambil dari anggota .php lewat URL
        //ambil data lengkap row yg mau diubah dari database, tampilkan di form
        require 'databaseAnggotaById.php';

        if(isset($_POST["update"])){
            header("Location: updateProfil");
          }

    ?>

    <article>
        <img src="../upload/<?php echo $row["picture"] ?>" alt="Taylor Swift Fearless Taylor's Version" width="100%" height="100%">
        </article>


        <aside>
           <h2>Name : <?php echo $row["name"] ?></h2>
           <h2>Email : <?php echo $row["email"] ?></h2>
           <h2>Birth Date : <?php echo $row["birthdate"] ?></h2>
           <h2>Gender : <?php echo $row["gender"] ?></h2>
           <h2>Reasons Join : <?php echo $row["reasons"] ?></h2>
           <br><br>
           <form action="" method="post">
              <button type="submit" name="update">Update Your Profil</button>
            </form>
        </aside>

    </main>

  </body>

</html>