<?php
   session_start();
    require_once('db_conn.php');
    $conn = connection();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $user = $_POST['user'];
        $username = $_POST['username'];
        $password = $_POST['password'];
    
    switch($user){
        case 'Cabanatuan':
        $sql = "SELECT `password` FROM `admin` WHERE `user`='".$username."'";
        $result = mysqli_query($conn, $sql);
        if($result && mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            $db_password = $row['password'];
            if($password == $db_password){
                echo 'CABANATUAN';
                exit();
            } else {
                echo 'Password Incorrect';
            } 
        } else{
            echo 'No user found';
        }

        break;

        case 'Gapan':
            $sql = "SELECT `password` FROM `admin-gapan` WHERE `username`='".$username."'";
            $result = mysqli_query($conn, $sql);
            if($result && mysqli_num_rows($result) > 0){
                $row = mysqli_fetch_assoc($result);
                $db_password = $row['password'];
                if($password == $db_password){
                    echo 'GAPAN';
                    exit();
                } else {
                    echo 'Password Incorrect';
                } 
            } else{
                echo 'No user found';
            }
    
            break;

            case 'Guimba':
                $sql = "SELECT `password` FROM `admin-guimba` WHERE `user`='".$username."'";
                $result = mysqli_query($conn, $sql);
                if($result && mysqli_num_rows($result) > 0){
                    $row = mysqli_fetch_assoc($result);
                    $db_password = $row['password'];
                    if($password == $db_password){
                        echo 'GUIMBA';
                        exit();
                    } else {
                        echo 'Password Incorrect';
                    } 
                } else{
                    echo 'No user found';
                }
        
                break;


                case 'San Jose':
                    $sql = "SELECT `password` FROM `admin-sanjose` WHERE `user`='".$username."'";
                    $result = mysqli_query($conn, $sql);
                    if($result && mysqli_num_rows($result) > 0){
                        $row = mysqli_fetch_assoc($result);
                        $db_password = $row['password'];
                        if($password == $db_password){
                            echo 'SAN JOSE';
                            exit();
                        } else {
                            echo 'Password Incorrect';
                        } 
                    } else{
                        echo 'No user found';
                    }
            
                    break;
    }
    }
               


    ?>
