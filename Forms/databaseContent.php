<?php
try {
    
    $_SERVER = "localhost";
    $_USER = "221911079";
    $_PASSWORD = "4e6942d9";

    $conn = new PDO("mysql:host=$_SERVER;dbname=db221911079", $_USER, $_PASSWORD);
    // set PDO Error to Exception
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql=" SELECT * FROM `databasecontent`";

    $result=$conn->query($sql);
    $result->setFetchMode(PDO::FETCH_ASSOC);

    $conn = null;

} catch (PDOException $e) {
    echo "Connection Failed ".$e->getMessage();
}
    

?>