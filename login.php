<?php
   session_start();
    require_once('db_conn.php');
    $conn = connection();
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $user = $_POST['user'];
        $username = $_POST['username'];
        $password = $_POST['password'];
    
                switch($user){

                    case 'College':
                        $sql = "SELECT `id`, `email`, `Classified`, `year_status`, `course`, `enrollment_status`, `student_number`, `firstname`, `middle_name`, `lastname`, `name_extension` ,`password` FROM `college` WHERE `username`='".$username."'";
                            $result = mysqli_query($conn, $sql);
                            if($result && mysqli_num_rows($result) > 0){
                                $row = mysqli_fetch_assoc($result);
                                $hash_password = $row['password'];
                                $_SESSION['id'] = $row['id'];
                                $_SESSION['firstname'] = $row['firstname'];
                                $_SESSION['middle_name'] = $row['middle_name'];
                                $_SESSION['lastname'] = $row['lastname'];
                                $_SESSION['name_extension'] = $row['name_extension'];
                                $_SESSION['email'] = $row['email'];
                                $_SESSION['Classified'] = $row['Classified'];
                                $_SESSION['year_status'] = $row['year_status'];
                                $_SESSION['course'] = $row['course'];
                                $_SESSION['enrollment_status'] = $row['enrollment_status'];
                                $_SESSION['student_number'] = $row['student_number'];

                                if(password_verify($password, $hash_password)){
                                    echo 'College';
                                    exit();
                                } else {
                                    echo 'Password Incorrect';
                                } 
                            } else{
                                echo 'No user found';
                            }
            
                            break;
    
                    case 'SHS':
                        $sql = "SELECT `id`,`email`,`LRN_number`, `firstname`, `middle_name`, `lastname`, `name_extension`, `grade`, `branch`, `strand` ,`password` FROM `shs_db` WHERE `username`='".$username."'";
                            $result = mysqli_query($conn, $sql);
                            if($result && mysqli_num_rows($result) > 0){
                                $row = mysqli_fetch_assoc($result);
                                $hash_password = $row['password'];
                                $_SESSION['id'] = $row['id'];
                                $_SESSION['firstname'] = $row['firstname'];
                                $_SESSION['middle_name'] = $row['middle_name'];
                                $_SESSION['lastname'] = $row['lastname'];
                                $_SESSION['name_extension'] = $row['name_extension'];
                                $_SESSION['email'] = $row['email'];
                                $_SESSION['grade'] = $row['grade'];
                                $_SESSION['branch'] = $row['branch'];
                                $_SESSION['strand'] = $row['strand'];
                                $_SESSION['LRN_number'] = $row['LRN_number'];

                                if(password_verify($password, $hash_password)){
                                    echo 'Shs';
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