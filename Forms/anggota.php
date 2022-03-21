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
    <link rel="stylesheet" href="../CSS/main.css">
	  <title>List Anggota</title>
      <style>
        .img-fluid {
            max-width: 100%;
            height: 60px;
        }
    </style>
  </head>

  <body>
    <h2>Daftar Anggota Aktif</h2>

    <form action="" method="get">
        <input type="text" id="keyword" name="keyword" placeholder="Find name or email">
        <input type="text" id="keywordReasons" name="keywordReasons" placeholder="Find reasons">
        <!-- <button type="submit" name="cari">Find</button> -->
    </form>

    <br>

    <div id="tabel_anggota">

        <table border="1">
            <tr>
                <th>NO. </th> 
                <th>Profile</th>
                <th>Name </th>
                <th>Birth Date </th>
                <th>Email </th> 
                <th>Gender </th> 
                <th>Reasons </th> 
                <th>Action</th>
            </tr>

    <?php

    require 'databaseAnggota.php';

    if(isset($_POST["home"])){
        header("Location: ../Admin/Main");
    }
  
    

    $i=1;

    foreach($result as $value){?>
        <tr>
            <td> <?php echo $i;?> </td>
            <td> <img class="img-fluid" src='../upload/<?php echo $value["picture"]; ?>'> </td>
            <td> <?php echo $value["name"];?> </td>
            <td> <?php echo $value["birthdate"];?> </td>
            <td> <?php echo $value["email"];?> </td>
            <td> <?php echo $value["gender"];?> </td>
            <td> <?php echo $value["reasons"];?> </td>
            <td>
                <a href="updateForm?id=<?php echo $value["id"];?>">Update</a>
                <a href="deleteAnggota?id=<?php echo $value["id"];?>">Delete</a>
            </td>
        </tr>
    
    <?php
            $i++;
        }

    ?>

        </table>
    </div>
            <br>
            <form action="" method="post">
              <button type="submit" name="home">Home</button>
            </form>
            <br>
        <footer>
            <p>Created By Renata Putri Henessa From 2KS2 STIS</p>
        </footer>

        <script src="../JavaScript/liveSearchAnggota.js"></script>
        <script src="../JavaScript/liveSearchReasons.js"></script>
  </body>
</html>