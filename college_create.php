
<?php
session_start();

// Include database connection
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
    $name = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']); // Remember to hash passwords in production!

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
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $classified = $_POST['user'];
        $year_status = $_POST['year-status'];
        $course = $_POST['course'];
        $enrollment_status = $_POST['student'];
        $student_number = $_POST['student_number'];
        $firstname = $_POST['firstname'];
        $middlename = $_POST['middle-name']; 
        $lastname = $_POST['lastname'];
        $name_extension = $_POST['name-extension'];
        $date_birth = $_POST['date_birth'];
        $house_number = $_POST['house_number'];
        $barangay = $_POST['barangay'];
        $municipal = $_POST['municipal'];
        $province = $_POST['province'];
        $zipcode = $_POST['zipcode'];
        $sex = $_POST['sex'];
        $religion = $_POST['religion'];
        $height = $_POST['height'];
        $weight = $_POST['weight'];
        $civil_status = $_POST['civil_status'];
        $cellphone_number = $_POST['cellphone_number'];
        $facebook = $_POST['fb_account_name'];
        $income = $_POST['income'];
        $elementary = $_POST['elementary'];
        $elementary_graduated = $_POST['year_graduated'];
        $high_school = $_POST['high_school'];
        $highschool_year_graduated = $_POST['highschool_year_graduated'];
        $college = $_POST['college'];
        $admission = $_POST['admission'];
        $parent = $_POST['parent'];
        $contact_number = $_POST['contact_number'];
        $branch = $_POST['branchc'];
        $date = $_POST['datetime'];

        $hash_password = password_hash($password, PASSWORD_DEFAULT);
        $stmt = mysqli_prepare($conn, "INSERT INTO `college` (`username`, `password`, `email`, `Classified`, `year_status`, `course`, `enrollment_status`, `student_number`, `firstname`, `middle_name`, `lastname`, `name_extension`, `date_birth`, `house_number`, `barangay`, `municipal`, `province`, `zipcode`,`sex`, `religion`, `height`, `weigth`, `civil_status`, `cellhone_number`, `facebook_account`, `TotalAnnualGrossIncome`, `elementary`, `year_graduated`, `high_school`, `year_graduated_hs`, `collegiate`, `admission`, `parent`, `contact_number_parent` , `branch`, `date_time`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, 'ssssssssssssssssssssssssssssssssssss', $username, $hash_password, $email, $classified, $year_status, $course,$enrollment_status, $student_number, $firstname, $middlename, $lastname, $name_extension, $date_birth, $house_number, $barangay, $municipal, $province, $zipcode, $sex, $religion, $height, $weight, $civil_status, $cellphone_number, $facebook, $income, $elementary, $elementary_graduated, $high_school, $highschool_year_graduated, $college, $admission, $parent, $contact_number, $branch, $date);
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
