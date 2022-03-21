<?php

session_start();

try {

    $_SERVER = "localhost";
    $_USER = "221911079";
    $_PASSWORD = "4e6942d9";

    $conn = new PDO("mysql:host=$_SERVER;dbname=db221911079", $_USER, $_PASSWORD);
    // set PDO Error to Exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $email = $_POST["email"];
    $userpass = $_POST["password"];


    $sql = " SELECT * FROM `databaseanggota` WHERE email=:email
        ";
    $result = $conn->prepare($sql);

    $params = array(
        ":email" => $email
    );

    $result->execute($params);

    $row = $result->fetch(PDO::FETCH_ASSOC);


    if ($row) {
        if (password_verify($userpass, $row["password"])) {
            $_SESSION["login"] = true;
            $_SESSION["user_id"] = $row["id"];
            $_SESSION["role"] = $row["role"];
            if ($_SESSION["role"] == 'admin') {
                header("Location: ../Admin/Main");
            } else if ($_SESSION["role"] == 'user') {
                header("Location: ../User/Main");
            }
        }else {
            $message = "Wrong password";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    } else {
        $message = "Email Not Found";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
    $conn = null;
} catch (PDOException $e) {
    echo "Connection Failed " . $e->getMessage();
}
