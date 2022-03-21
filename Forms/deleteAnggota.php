<?php
try {
    
    $_SERVER = "localhost";
    $_USER = "221911079";
    $_PASSWORD = "4e6942d9";

    $conn = new PDO("mysql:host=$_SERVER;dbname=db221911079", $_USER, $_PASSWORD);
    // set PDO Error to Exception
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $id=$_GET["id"];

    $sql=" DELETE FROM `databaseanggota` WHERE id=:id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);   
    $stmt->execute();

    echo "
        <script>
            alert('DELETE SUCCESS');
            document.location.href='anggota';
        </script>
    ";

    $conn = null;

} catch (PDOException $e) {
    echo "Connection Failed ".$e->getMessage();
}
    

?>