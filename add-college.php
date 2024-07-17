<?php
session_start();
    require_once('db_conn.php');
    $conn = connection();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
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

        $stmt = mysqli_prepare($conn, "INSERT INTO `college` (`email`, `Classified`, `year_status`, `course`, `enrollment_status`, `student_number`, `firstname`, `middle_name`, `lastname`, `name_extension`, `date_birth`, `house_number`, `barangay`, `municipal`, `province`, `zipcode`,`sex`, `religion`, `height`, `weigth`, `civil_status`, `cellhone_number`, `facebook_account`, `TotalAnnualGrossIncome`, `elementary`, `year_graduated`, `high_school`, `year_graduated_hs`, `collegiate`, `admission`, `parent`, `contact_number_parent`, `branch`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, 'sssssssssssssssssssssssssssssssss',$email, $classified, $year_status, $course,$enrollment_status, $student_number, $firstname, $middlename, $lastname, $name_extension, $date_birth, $house_number, $barangay, $municipal, $province, $zipcode, $sex, $religion, $height, $weight, $civil_status, $cellphone_number, $facebook, $income, $elementary, $elementary_graduated, $high_school, $highschool_year_graduated, $college, $admission, $parent, $contact_number, $branch);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);

            header('Location: admin-dashboard.php');
            exit();
        } else {
            // Handle error
            echo "Error in preparing statement: " . mysqli_error($conn);
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<style>
      .form-collge{
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }
</style>
<body>

    <h2 style="text-align: center; color: green;"><b>Collge Enrollment Form</b></h2>
    <form class="form-collge" action="" method="post">

    <div class="w-50 p-3">
         <label for="email">Email:</label>
        <input type="text" class="form-control" name="email" placeholder="example@gmail.com" required>
    </div>
    
    <div class="w-50 p-3">
        <label for="user">Classified As:</label>
    <select class="form-select mb-3" name="user" id="">
        <option value="">Choose</option>
        <option style="text-align: center;" value="New Student">New Student</option>
        <option style="text-align: center;" value="Old Student">Old Studen</option>
        <option style="text-align: center;" value="Transferee">Transferee</option>
    </select>
</div>

<div class="w-25 p-3">
    <label for="year-status">Year Status:</label>
    <select class="form-select mb-3" name="year-status" id="">
    <option value="">Choose</option>
        <option style="text-align: center;" value="1st Year College">1st Year College</option>
        <option style="text-align: center;" value="2nd Year College">2nd Year College</option>
        <option style="text-align: center;" value="3rd Year College">3rd Year College</option>
        <option style="text-align: center;" value="4rd Year College">4rth Year College</option>
    </select>
</div>

<div class="w-50 p-3">
    <label for="course">Course:</label>
    <select class="form-select mb-3" name="course" id="">
    <option value="">Choose</option>
        <option style="text-align: center;" value="BS in Information Technology">BS in Information Technology</option>
        <option style="text-align: center;" value="BS in Accounting Information Technology">BS in Accounting Information Technology</option>
        <option style="text-align: center;" value="BS in Management Accounting">BS in Management Accounting</option>
        <option style="text-align: center;" value="BS in Hospitality Management">BS in Hospitality Management</option>
        <option style="text-align: center;" value="BS in Tourism Management">BS in Tourism Management</option>
        <option style="text-align: center;" value="Bachelor in Technical Vocational Teacher Education">Bachelor in Technical Vocational Teacher Education</option>
        <option style="text-align: center;" value="Associate in Computer Technology (2 Years)">Associate in Computer Technology (2 Years)</option>
        <option style="text-align: center;" value="Hotel in Restaurant Services (2 Years)">Hotel in Restaurant Services (2 Years)</option>
    </select>
</div>

<div class="w-25 p-3">
            <label for="student">Enrollment Status:</label>
            <select name="student" id=""  class="form-select mb-3">
                <option value="">Choose</option>
                <option value="Regular Student">Regular Student</option>
                <option value="Irregular Student">Irregular Student</option>
        </select>
</div>

<div class="w-25 p-3">
            <label for="branch">Branch:</label>
    <select class="form-select mb-3" name="branchc" id="">
    <option value="">Choose</option>
        <option style="text-align: center;" value="Cabanatuan">Cabanatuan</option>
        <option style="text-align: center;" value="Guimba">Guimba</option>
        <option style="text-align: center;" value="Gapan">Gapan</option>
        <option style="text-align: center;" value="San Jose">San Jose</option>
    </select>
</div>

<div class="w-25 p-3">
            <label for="student_number">Student Number:</label>
            <input type="text" name="student_number" class="form-control" placeholder="Student Number:If none write N/A" required>
</div>

<div class="w-25 p-3">
            <label for="firstname">First Name:</label>
            <input type="text" name="firstname" class="form-control" placeholder="First Name" required>
</div>

<div class="w-25 p-3">
            <label for="middle-name">Middle Name:</label>
            <input type="text" name="middle-name" class="form-control" placeholder="Middle Name" required>
</div>

<div class="w-50 p-3">
            <label for="lastname">Last Name:</label>
            <input type="text" name="lastname" class="form-control" placeholder="Last Name" required>
</div>

<div class="w-25 p-3">
            <label for="name-extension">Name Extension:</label>
            <input type="text" name="name-extension" class="form-control" placeholder="Example: Jr., III, Sr. etc.    Note: Please leave it blank if Not Available." required>
</div>

<div class="w-25 p-3">
            <label for="date_birth">Date of Birth:</label>
            <input type="date" name="date_birth" class="form-control" placeholder="" required>
</div>

<div class="w-50 p-3">
            <label for="house_number">House Number:</label>
            <input type="text" name="house_number" class="form-control" placeholder="Building and Street Name*E.g. 123 Sampaguita St." required>
</div>

<div class="w-25 p-3">
            <label for="barangay">Barangay:</label>
            <input type="text" name="barangay" class="form-control" required>
</div>

<div class="w-25 p-3">
            <label for="municipal">City/Municipal:</label>
            <input type="text" name="municipal" class="form-control" required>
</div>

<div class="w-25 p-3">
            <label for="province">Province:</label>
            <input type="text" name="province" class="form-control" required>
</div>

<div class="w-25 p-3">
            <label for="zipcode">Zipcode:</label>
            <input type="text" name="zipcode" class="form-control" required>
</div>

<div class="w-25 p-3">
<label for="sex">Sex:</label>
            <select name="sex" id=""   class="form-select mb-3">
                <option value="">Choose</option>
                <option value="Regular Student">Male</option>
                <option value="Irregular Student">Female</option>
        </select>
</div>


<div class="w-25 p-3">
        <label for="religion">Religion:</label>
            <input type="text" name="religion" class="form-control" required>
</div>

<div class="w-25 p-3">
            <label for="height">Height:</label>
            <input type="text" name="height" class="form-control" required>
</div>

<div class="w-25 p-3">
            <label for="weight">Weigth:</label>
            <input type="text" name="weight" class="form-control" required>
</div>

<div class="w-25 p-3">
            <label for="civil_status">Civil Status:</label>
    <select class="form-select mb-3" name="civil_status" id="">
    <option value="">Choose</option>
        <option style="text-align: center;" value="1st Year College">Single</option>
        <option style="text-align: center;" value="2nd Year College">Married</option>
        <option style="text-align: center;" value="2nd Year College">Widowed</option>
    </select>
</div>

<div class="w-25 p-3">
            <label for="cellphone_number">Cellphone Number:</label>
            <input type="number" name="cellphone_number" class="form-control" placeholder="Contact number must be 11 digits" required>
</div>

<div class="w-50 p-3">
            <label for="fb_account_name">Facebook Account Name:</label>
            <input type="text" name="fb_account_name" class="form-control" required>
</div>

<div class="w-50 p-3">
            <label for="income">Total Annual Gross Income:</label>
            <input type="number" name="income" class="form-control" placeholder="(Parent or guardian)" required>
</div>

<div class="w-50 p-3">
            <label for="elementary">(1) ELEMENTARY:</label>
            <input type="text" name="elementary" class="form-control" required>
</div>

<div class="w-50 p-3">
            <label for="year_graduated">(1) YEAR GRADUATED:</label>
            <input type="text" name="year_graduated" class="form-control" required>
</div>

<div class="w-50 p-3">
            <label for="high_school">(1) HIGH SCHOOL:</label>
            <input type="text" name="high_school" class="form-control" required>
</div>

<div class="w-50 p-3">
            <label for="highschool_year_graduated">(2) YEAR GRADUATED:</label>
            <input type="text" name="highschool_year_graduated" class="form-control" required>
</div>

<div class="w-50 p-3">
            <label for="college">(3) COLLEGIATE:</label>
            <input type="text" name="college" class="form-control" required>
</div>

<div class="w-50 p-3">
            <label for="admission">(3) Year of Admission:</label>
            <input type="text" name="admission" class="form-control" required>
</div>

<div class="w-50 p-3">
            <label for="parent">PARENT/ GUARDIAN NAME:</label>
            <input type="text" name="parent" class="form-control" required>
</div>

<div class="w-50 p-3">
            <label for="contact_number">CONTACT NUMBER OF PARENT/ GUARDIAN:</label>
            <input type="text" class="form-control" name="contact_number" placeholder="Contact number must be 11 digits" required>
</div>
            <input type="submit" name="submit"  class="btn btn-primary">  
        </form>

</body>
</html>