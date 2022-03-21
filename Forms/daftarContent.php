<?php

if(isset($_POST['addContent'])){

try {
    
    $_SERVER = "localhost";
    $_USER = "221911079";
    $_PASSWORD = "4e6942d9";

    $conn = new PDO("mysql:host=$_SERVER;dbname=db221911079", $_USER, $_PASSWORD);
    // set PDO Error to Exception
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $picture = $_FILES['picture']['name'];
    $title = isset($_POST["title"]) ? $_POST["title"] : "";
    $prg1 = isset($_POST["prg1"]) ? $_POST["prg1"] : "";
    $prg2 = isset($_POST["prg2"]) ? $_POST["prg2"] : "";
    $prg3 = isset($_POST["prg3"]) ? $_POST["prg3"] : "";
    $prg4 = isset($_POST["prg4"]) ? $_POST["prg4"] : "";
    $prg5 = isset($_POST["prg5"]) ? $_POST["prg5"] : "";
    
    $target_dir = "../upload/";
    move_uploaded_file($_FILES['picture']['tmp_name'],$target_dir.$picture);
    
        try {
            $sql = $conn->prepare("INSERT INTO  databasecontent (`picture`,`title`,`prg1`, `prg2`, `prg3`, `prg4`, `prg5`) 
            VALUES (:picture,:title,:prg1,:prg2,:prg3,:prg4,:prg5)
            ");

        $sql->bindParam(':picture',$picture1);
        $sql->bindParam(':title',$title1);
        $sql->bindParam(':prg1',$prg11);
        $sql->bindParam(':prg2',$prg21);
        $sql->bindParam(':prg3',$prg31);
        $sql->bindParam(':prg4',$prg41);
        $sql->bindParam(':prg5',$prg51);
    
        $picture1 = $picture;
        $title1 = $title;
        $prg11 = $prg1;
        $prg21 = $prg2;
        $prg31 = $prg3;
        $prg41 = $prg4;
        $prg51 = $prg5;
        $sql->execute();

            header("location: ../Blog/Blog");
            $conn = null;
        } catch(Exception  $e){
            $message = "Sorry we found some errors, please fill out your form, and make sure it matches what we asked for or try change Apostrophes ( ' ) with ( ` ) ";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }  

    } catch (PDOException $e) {
            echo "Connection Failed ".$e->getMessage();
    }
}
