<?php
session_start();
require_once('db_conn.php');
$conn = connection();

session_destroy();
header('Location: index.php');
?>