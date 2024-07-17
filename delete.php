<?php
session_start();
 require_once('db_conn.php');
 $conn = connection();

 $id = $_GET['delete_id'];
    $sql = "DELETE FROM `college` WHERE id = $id";

    $result = mysqli_query($conn, $sql);

    if($result){
        header('Location: admin-dashboard.php');
        exit();
    }

?>