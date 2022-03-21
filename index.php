<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/main.css">
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
      <a id="myForm" href="Forms/Forms">Join Us!</a>
      <a id="login" href="Forms/login">Login</a>

    </nav>

    <br>
    
    <div><iframe width="100%" height="500" src="https://www.youtube.com/embed/P7Kpe3f0Wj0?autoplay=1;start=2" title="YouTube video player" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
    <br>
    <a href="https://otakukart.com/wp-content/uploads/2021/04/tylor-1.jpg" target="_blank">
    <img src="https://otakukart.com/wp-content/uploads/2021/04/tylor-1.jpg" alt="Taylor Swift Fearless Taylor's Version" width="100%" height="100%"> 
    </a>
    <br>
   
    <?php if(isset($_POST["blog"])){
      header("Location: Blog/Blog");
    }

    if(isset($_POST["gallery"])){
      header("Location: Gallery/Gallery");
    }

    require 'Forms/databaseContent.php';
  
    ?><main>
      <article><?php
  foreach($result as $value){?>
      
          
             <h2><?php echo $value["title"];?></h2> 
             <img class="img-fluid" alt="Taylor Swift" src='upload/<?php echo $value["picture"]; ?>'> 
             <p><?php echo $value["prg1"];?> </p>
             <form method="post">
              <button type="submit" name="blog">Continue Reading</button>
            </form>
             
             <br><br>
  <?php
        
      }

  ?>
  </article>
          <aside>
              <h2>Some of Her Music</h2>
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