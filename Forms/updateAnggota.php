<?php
try {
    
    $_SERVER = "localhost";
    $_USER = "221911079";
    $_PASSWORD = "4e6942d9";

    $conn = new PDO("mysql:host=$_SERVER;dbname=db221911079", $_USER, $_PASSWORD);
    // set PDO Error to Exception
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $id=$_POST["id"];
    $name = isset($_POST["fansname"]) ? $_POST["fansname"] : "";
    $birthdate = isset($_POST["birthdate"]) ? $_POST["birthdate"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $password = isset($_POST["password"]) ? $_POST["password"] : "";
    $gender = isset($_POST["gender"]) ? $_POST["gender"] : "Prefer not to say";
    $reasons = isset($_POST["reasons"]) ? $_POST["reasons"] : "";

    $hash = password_hash($password, PASSWORD_DEFAULT);

    try {
        $sql = "UPDATE `databaseanggota` SET
        `name`=:name,`birthdate`=:birthdate,`password`=:hash,`gender`=:gender,`reasons`=:reasons
        WHERE id=:id
        ";

        $statement = $conn->prepare($sql);

        $id1=$id;
        $name1=$name;
        $birthdate1=$birthdate;
        $hash1=$hash;
        $gender1=$gender;
        $reasons1=$reasons;

        $statement->bindValue(':id', $id1);
        $statement->bindValue(':name', $name1);
        $statement->bindValue(':birthdate', $birthdate1);
        $statement->bindValue(':hash', $hash1);
        $statement->bindValue(':gender', $gender1);
        $statement->bindValue(':reasons', $reasons1);

        $statement->execute();
        
        header("location: anggota");
        $conn = null;
    } catch (\Throwable $th) {
        $message = "Sorry we found some errors, please fill out your form, and make sure it matches what we asked for";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
    

} catch (PDOException $e) {
    echo "Update Failed ".$e->getMessage();
}
    

?>