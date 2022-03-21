<?php
    include "conn.php";

    $sql = "SELECT * FROM databaseanggota";
    $query = mysqli_query($conn,$sql);
    while ($data = mysqli_fetch_array($query)) {
        $item[] = array(
            'name'=>$data["name"],
            'email'=>$data["email"],
            'reasons'=>$data["reasons"]
        );
    }

    $response = array(
        'status'=>'OK',
        'item'=>$item
    );

    echo json_encode($response);
?>