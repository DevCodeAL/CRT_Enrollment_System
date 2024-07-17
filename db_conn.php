<?php
    function connection(){
        $localhost = 'localhost';
        $servername = 'root';
        $password = '';
        $database = 'guest';

        $conn = mysqli_connect($localhost, $servername, $password, $database);

        if($conn->connect_error){
            die('Connection Failed'.$conn->connect_error);
        } else{
          //  echo 'Connection Succesffully';
        }
        return $conn;
    }

?>