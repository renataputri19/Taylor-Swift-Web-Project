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
	  <title>WEB</title>
    <style>
        .img-fluid {
          width: 200px;
          float: left;
          border: 10px solid #ccc;
          border-color: #f1f1f1;
        }
    </style>
  </head>

  <body>
  
    <h1>Taylor Swift Fan Page</h1>
   
    <nav>
      <a href="https://id.wikipedia.org/wiki/Taylor_Swift" target="_blank">Wikipedia TS</a>
      <a href="https://www.youtube.com/watch?v=aXzVF3XeS8M" target="_blank">Love Story (Taylor's Version)</a>
      <a href="https://www.taylorswift.com/" target="_blank"> Website Official TS</a>
      <a href="../Blog/Blog" target="_self">Blog</a>
      <a href="../Gallery/gallery" target="_self">Gallery Album</a>
      <a href="../Forms/updateProfil" target="_self">Update Profil</a>
      <a href="../Forms/profil" target="_self">Profile</a>
      <a href="../Forms/logout">Log Out</a>

    </nav>

    <a href="https://otakukart.com/wp-content/uploads/2021/04/tylor-1.jpg" target="_blank">
    <img alt="Taylor Swift" src="https://otakukart.com/wp-content/uploads/2021/04/tylor-1.jpg" alt="Taylor Swift Fearless Taylor's Version" width="100%" height="100%"> 
    </a>
    <br>
  
    <?php if(isset($_POST["blog"])){
      header("Location: ../Blog/Blog");
    }

    if(isset($_POST["gallery"])){
      header("Location: ../Gallery/gallery");
    }

    require '../Forms/databaseContent.php';
  
    ?><main>
      <article><?php

    foreach($result as $value){?>
      
          
             <h2><?php echo $value["title"];?></h2> 
             <img class="img-fluid" alt="Taylor Swift" src='../upload/<?php echo $value["picture"]; ?>'> 
             <p><?php echo $value["prg1"];?> </p>
             <form action="" method="post">
              <button type="submit" name="blog">Continue Reading</button>
            </form>
             
             <br><br>
  <?php
        
      }

  ?>
  </article>
          <aside>
              <h2>Some of Her Music</h2>
              <img id="thumb1" alt="Taylor Swift" src="https://upload.wikimedia.org/wikipedia/en/1/1f/Taylor_Swift_-_Taylor_Swift.png" class="thumb" onclick="ganti(this.id)">
              <img id="thumb2" alt="Taylor Swift" src="../Foto/R-1738755-1459583491-9652.jpeg.jpg" class="thumb" onclick="ganti(this.id)">
              <img id="thumb3" alt="Taylor Swift" src="../Foto/Taylor_Swift_-_Speak_Now_cover.png" class="thumb" onclick="ganti(this.id)">
              <img id="thumb4" alt="Taylor Swift" src="https://upload.wikimedia.org/wikipedia/en/e/e8/Taylor_Swift_-_Red.png" class="thumb" onclick="ganti(this.id)">
              <br><br><p></p>
              <form method="post">
                <button type="submit" name="gallery">See Gallery</button>
              </form>
              
          </aside>
      </main>

      <footer>
        <p>Created By Renata Putri Henessa From 2KS2 STIS</p>
      </footer>
    
  </body>

</html>