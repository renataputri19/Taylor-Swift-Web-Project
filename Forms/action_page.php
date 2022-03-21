<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <title>FORMS DOCUMENT</title>
  </head>
  
  <body>
    <?php var_dump($_POST); ?> 

    <h2>Welcome, <?php echo $_POST["fansname"]?></h2>
    <br>
    Your Identity is : 
    <ul>
      <li>Birthdate : <?php echo $_POST["birthdate"]?></li>
      <li>Email : <?php echo $_POST["email"]?></li>
      <li>Gender : <?php echo $_POST["gender"]?></li>
      <li>Reasons why you want to join us : <?php echo $_POST["reasons"]?></li>
    </ul>

  </body>
</html>