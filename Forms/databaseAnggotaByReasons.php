<?php
try {
    
    $_SERVER = "localhost";
    $_USER = "221911079";
    $_PASSWORD = "4e6942d9";

    $conn = new PDO("mysql:host=$_SERVER;dbname=db221911079", $_USER, $_PASSWORD);
    // set PDO Error to Exception
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $name=$_GET["keyword"];

    $sql=" SELECT * FROM `databaseanggota`
            WHERE reasons LIKE '%$name%'
        ";

    $result=$conn->query($sql);
    $result->setFetchMode(PDO::FETCH_ASSOC);

    $conn = null;

} catch (PDOException $e) {
    echo "Connection Failed ".$e->getMessage();
}

?>

        <table border="1">
            <tr>
                <th>NO. </th> 
                <th>Profile</th>
                <th>Name </th>
                <th>Birth Date </th>
                <th>Email </th> 
                <th>Gender </th> 
                <th>Reasons </th> 
                <th>Action</th>
            </tr>

    <?php

    $i=1;

    foreach($result as $value){?>
        <tr>
            <td> <?php echo $i;?> </td>
            <td> <img class="img-fluid" src='../upload/<?php echo $value["picture"]; ?>'> </td>
            <td> <?php echo $value["name"];?> </td>
            <td> <?php echo $value["birthdate"];?> </td>
            <td> <?php echo $value["email"];?> </td>
            <td> <?php echo $value["gender"];?> </td>
            <td> <?php echo $value["reasons"];?> </td>
            <td>
                <a href="updateForm?id=<?php echo $value["id"];?>">Update</a>
                <a href="deleteAnggota?id=<?php echo $value["id"];?>">Delete</a>
            </td>
        </tr>
    
    <?php
            $i++;
        }

    ?>

        </table> 