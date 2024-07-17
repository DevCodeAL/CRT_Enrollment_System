<?php
session_start();
 require_once('db_conn.php');
 $conn = connection();

 $id = $_GET['shs-delete_id'];
    $sql = "DELETE FROM `shs_db` WHERE id = $id";

    $result = mysqli_query($conn, $sql);

    if($result){
        header('Location: admin-shs-dashboard.php');
        exit();
    }

?>