<?php
if(isset($_POST['join_now'])){

try {
    
    $_SERVER = "localhost";
    $_USER = "221911079";
    $_PASSWORD = "4e6942d9";

    $conn = new PDO("mysql:host=$_SERVER;dbname=db221911079", $_USER, $_PASSWORD);
    // set PDO Error to Exception
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $picture = $_FILES['picture']['name'];
    $name = isset($_POST["fansname"]) ? $_POST["fansname"] : "";
    $birthdate = isset($_POST["birthdate"]) ? $_POST["birthdate"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $password = isset($_POST["password"]) ? $_POST["password"] : "";
    $gender = isset($_POST["gender"]) ? $_POST["gender"] : "Prefer not to say";
    $reasons = isset($_POST["reasons"]) ? $_POST["reasons"] : "";
    $target_dir = "../upload/";
    $role = "user";
   
    // cek email
    $sql = " SELECT * FROM `databaseanggota` WHERE email='$email'
        ";

    $result = $conn->query($sql);
    $result->setFetchMode(PDO::FETCH_ASSOC);

    $row = $result->fetch();

    if ($row) {
        $message = "Use Another Email";
        echo "<script type='text/javascript'>alert('$message');</script>";
    } 

    else{
        $hash = password_hash($password, PASSWORD_DEFAULT);
    
        move_uploaded_file($_FILES['picture']['tmp_name'],$target_dir.$picture);
    
        try {
            $sql = $conn->prepare("INSERT INTO databaseanggota (`picture`,`name`, `birthdate`, `email`, `password`, `gender`, `reasons`,`role`) 
            VALUES (:picture,:name,:birthdate,:email,:hash,:gender,:reasons,:role)
            ");

            $sql->bindParam(':picture',$picture1);
            $sql->bindParam(':name',$name1);
            $sql->bindParam(':birthdate',$birthdate1);
            $sql->bindParam(':email',$email1);
            $sql->bindParam(':hash',$hash1);
            $sql->bindParam(':gender',$gender1);
            $sql->bindParam(':reasons',$reasons1);
            $sql->bindParam(':role',$role1);
        
            $picture1 = $picture;
            $name1 = $name;
            $birthdate1 = $birthdate;
            $email1 = $email;
            $hash1 = $hash;
            $gender1 = $gender;
            $reasons1 = $reasons;
            $role1 = $role;
            $sql->execute();
            
        
            $last_ID = $conn->lastInsertId();
            
            header("location: ../User/Main");
            
            $conn = null;
        } catch(Exception  $e){
            $message = "Sorry we found some errors, please fill out your form, and make sure it matches what we asked for or try change Apostrophes ( ' ) with ( ` ) ";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }  

    } catch (PDOException $e) {
            echo "Connection Failed ".$e->getMessage();
    }
}
?>
