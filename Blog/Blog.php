<?php

    session_start();

    if(!isset($_SESSION["login"])){
        header("Location: ../Forms/login");
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
	<title>Test HTML CSS PERT 4</title>
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
      <header>
          <h1>Welcome to Blog about Taylor Swift</h1>
      </header>

      <nav>
          <a href="../User/Main" target="_self">Home</a>
      </nav>

    <?php 

    require '../Forms/databaseContent.php';

        if(isset($_POST["gallery"])){
            header("Location: ../Gallery/gallery");
        }
  
    ?><main>
      <article><?php
  foreach($result as $value){?>
      
          
             <h2><?php echo $value["title"];?></h2> 
             <img class="img-fluid" alt="Taylor Swift" src='../upload/<?php echo $value["picture"]; ?>'> 
             <p><?php echo $value["prg1"];?> </p>
             <p><?php echo $value["prg2"];?> </p>
             <p><?php echo $value["prg3"];?> </p>
             <p><?php echo $value["prg4"];?> </p>
             <p><?php echo $value["prg5"];?> </p>
             
             <br><br>
    <?php
        
        }

    ?>
    </article>
            <aside>
                <h2>Some of Her Music</h2>
                <img id="jumbo" alt="Taylor Swift" src="../Foto/148022559_884819482089040_4676896142298036016_n.jpg" class="thumb" >
                <img id="thumb1" alt="Taylor Swift" src="https://upload.wikimedia.org/wikipedia/en/1/1f/Taylor_Swift_-_Taylor_Swift.png" class="thumb">
                <img id="thumb2" alt="Taylor Swift" src="../Foto/R-1738755-1459583491-9652.jpeg.jpg" class="thumb">
                <img id="thumb3" alt="Taylor Swift" src="../Foto/Taylor_Swift_-_Speak_Now_cover.png" class="thumb">
                <img id="thumb4" alt="Taylor Swift" src="https://upload.wikimedia.org/wikipedia/en/e/e8/Taylor_Swift_-_Red.png" class="thumb">
                <img id="thumb5" alt="Taylor Swift" src="https://upload.wikimedia.org/wikipedia/id/f/f6/Taylor_Swift_-_1989.png" class="thumb">
                <img id="thumb6" alt="Taylor Swift" src="https://upload.wikimedia.org/wikipedia/id/f/f2/Taylor_Swift_-_Reputation.png" class="thumb">
                <img id="thumb7" alt="Taylor Swift" src="https://upload.wikimedia.org/wikipedia/id/c/cd/Taylor_Swift_-_Lover.png" class="thumb">
                <img id="thumb8" alt="Taylor Swift" src="https://upload.wikimedia.org/wikipedia/id/f/f8/Taylor_Swift_-_Folklore.png" class="thumb">
                <img id="thumb9" alt="Taylor Swift" src="https://upload.wikimedia.org/wikipedia/en/0/0a/Taylor_Swift_-_Evermore.png" class="thumb">
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