<?php
session_start();
    require_once('db_conn.php');
    $conn = connection();

    // Include PHPMailer classes
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

// Initialize PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $name = htmlspecialchars($_POST['username_shs']);
    $email = htmlspecialchars($_POST['email_shs']);
    $password = htmlspecialchars($_POST['password_shs']); // Remember to hash passwords in production!

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'abadleomar875@gmail.com';
        $mail->Password   = 'vfbfxjnmdzxyjnfu';
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Recipients
        $mail->setFrom('abadleomar875@gmail.com', 'Mailer');
        $mail->addAddress($email, $name);

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Registration Confirmation';
        $mail->Body    = 'Thank you for registering! <b>We are excited to have you on board!</b>';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}


    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = $_POST['username_shs'];
        $password = $_POST['password_shs'];
        $email = $_POST['email_shs'];
        $LRN_number = $_POST['LRN_shs'];
        $date_birth = $_POST['date_birth_shs'];
        $firstname = $_POST['firstname_shs'];
        $middlename = $_POST['middlename_shs']; 
        $lastname = $_POST['lastname_shs'];
        $name_extension = $_POST['name-extension_shs'];
        $year_status = $_POST['grade'];
        $branch = $_POST['branch'];
        $strand = $_POST['strand'];
        $mothers_name = $_POST['mothers_name'];
        $fathers_name = $_POST['fathers_name'];
        $contact_number = $_POST['parent_contact_number'];
        $last_school_attendent = $_POST['last_school'];
        $house_number = $_POST['house_number_shs'];
        $barangay = $_POST['barangay_shs'];
        $municipal = $_POST['municipal_shs'];
        $province = $_POST['province_shs'];
        $zipcode = $_POST['zipcode_shs'];
        $sex = $_POST['sex_shs'];
        $religion = $_POST['religion_shs'];
        $civil_status = $_POST['civil_status_shs'];
        $cellphone_number = $_POST['cp_number_shs'];
        $facebook = $_POST['fb_account_name_shs'];
        $parent = $_POST['parent_shs'];
        $date = $_POST['datetimes'];
        

        $hash_password = password_hash($password, PASSWORD_DEFAULT);
        $stmt = mysqli_prepare($conn, "INSERT INTO `shs_db`(`username`, `password`, `email`, `LRN_number`, `date_birth`, `firstname`, `middle_name`, `lastname`, `name_extension`, `grade`, `branch`, `strand`, `mothers_name`, `fathers_name`, `parent_contact_number`, `last_school_attendent`, `house_number`, `barangay`, `municipal`, `province`, `zipcode`, `sex`, `religion`, `civil_status`, `cellphone_number`, `fb_account_name`, `parent`, `date_time`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, 'ssssssssssssssssssssssssssss', $username, $hash_password, $email, $LRN_number, $date_birth, $firstname, $middlename, $lastname, $name_extension, $year_status, $branch, $strand, $mothers_name, $fathers_name, $contact_number, $last_school_attendent, $house_number, $barangay, $municipal, $province, $zipcode, $sex, $religion, $civil_status, $cellphone_number, $facebook, $parent, $date);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);

            header('Location: paymongo.php');
            exit();
        } else {
            // Handle error
            echo "Error in preparing statement: " . mysqli_error($conn);
        }
    }
?>
