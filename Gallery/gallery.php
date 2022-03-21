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
    <link rel="stylesheet" href="../CSS/gallery.css">
	  <title>Gallery</title>
    <script src="../JavaScript/gallery.js"></script>
  </head>
  
  <body>
    <div class="galleryTay">
        <img id="jumbo" alt="Taylor Swift" src="../Foto/148022559_884819482089040_4676896142298036016_n.jpg" class="jumbo" >
        <div class="thumbnail">
            <img id="thumb1" alt="Taylor Swift" src="https://upload.wikimedia.org/wikipedia/en/1/1f/Taylor_Swift_-_Taylor_Swift.png" class="thumb" onclick="ganti(this.id)">
            <img id="thumb2" alt="Taylor Swift" src="../Foto/R-1738755-1459583491-9652.jpeg.jpg" class="thumb" onclick="ganti(this.id)">
            <img id="thumb3" alt="Taylor Swift" src="../Foto/Taylor_Swift_-_Speak_Now_cover.png" class="thumb" onclick="ganti(this.id)">
            <img id="thumb4" alt="Taylor Swift" src="https://upload.wikimedia.org/wikipedia/en/e/e8/Taylor_Swift_-_Red.png" class="thumb" onclick="ganti(this.id)">
            <img id="thumb5" alt="Taylor Swift" src="https://upload.wikimedia.org/wikipedia/id/f/f6/Taylor_Swift_-_1989.png" class="thumb" onclick="ganti(this.id)">
            <img id="thumb6" alt="Taylor Swift" src="https://upload.wikimedia.org/wikipedia/id/f/f2/Taylor_Swift_-_Reputation.png" class="thumb" onclick="ganti(this.id)">
            <img id="thumb7" alt="Taylor Swift" src="https://upload.wikimedia.org/wikipedia/id/c/cd/Taylor_Swift_-_Lover.png" class="thumb" onclick="ganti(this.id)">
            <img id="thumb8" alt="Taylor Swift" src="https://upload.wikimedia.org/wikipedia/id/f/f8/Taylor_Swift_-_Folklore.png" class="thumb" onclick="ganti(this.id)">
            <img id="thumb9" alt="Taylor Swift" src="https://upload.wikimedia.org/wikipedia/en/0/0a/Taylor_Swift_-_Evermore.png" class="thumb" onclick="ganti(this.id)">
        </div>
    </div>

  </body>
</html>