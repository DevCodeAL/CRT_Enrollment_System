<?php
session_start();
 require_once('db_conn.php');
 $conn = connection();

 $id = $_GET['edit_id'];
 $sql = "SELECT * FROM `college` WHERE id = $id";
 $result = mysqli_query($conn, $sql);

 if(mysqli_num_rows($result) > 0){
     $row = mysqli_fetch_assoc($result);
     $email = $row['email'];
     $classified = $row['Classified'];
     $year_status = $row['year_status'];
     $course = $row['course'];
     $enrollment_status = $row['enrollment_status'];
     $student_number = $row['student_number'];
     $firstname = $row['firstname'];
     $middlename = $row['middle_name']; 
     $lastname = $row['lastname'];
     $name_extension = $row['name_extension'];
     $date_birth = $row['date_birth'];
     $house_number = $row['house_number'];
     $barangay = $row['barangay'];
     $municipal = $row['municipal'];
     $province = $row['province'];
     $zipcode = $row['zipcode'];
     $sex = $row['sex'];
     $religion = $row['religion'];
     $height = $row['height'];
     $weight = $row['weigth'];
     $civil_status = $row['civil_status'];
     $cellphone_number = $row['cellhone_number'];
     $facebook = $row['facebook_account'];
     $income = $row['TotalAnnualGrossIncome'];
     $elementary = $row['elementary'];
     $elementary_graduated = $row['year_graduated'];
     $high_school = $row['high_school'];
     $highschool_year_graduated = $row['year_graduated_hs'];
     $college = $row['collegiate'];
     $admission = $row['admission'];
     $parent = $row['parent'];
     $contact_number = $row['contact_number_parent'];

 };

 if(isset($_POST['update'])){
    $id = $_GET['edit_id'];
    $emailc = $_POST['email'];
    $classifiedc = $_POST['user'];
    $year_statusc = $_POST['year-status'];
    $coursec = $_POST['course'];
    $enrollment_statusc = $_POST['student'];
    $student_numberc = $_POST['student_number'];
    $firstnamec = $_POST['firstname'];
    $middlenamec = $_POST['middle-name']; 
    $lastnamec = $_POST['lastname'];
    $name_extensionc = $_POST['name-extension'];
    $date_birthc = $_POST['date_birth'];
    $house_numberc = $_POST['house_number'];
    $barangayc = $_POST['barangay'];
    $municipalc = $_POST['municipal'];
    $provincec = $_POST['province'];
    $zipcodec = $_POST['zipcode'];
    $sexc = $_POST['sex'];
    $religionc = $_POST['religion'];
    $heightc = $_POST['height'];
    $weightc = $_POST['weight'];
    $civil_statusc = $_POST['civil_status'];
    $cellphone_numberc = $_POST['cellphone_number'];
    $facebookc = $_POST['fb_account_name'];
    $incomec = $_POST['income'];
    $elementaryc = $_POST['elementary'];
    $elementary_graduatedc = $_POST['year_graduated'];
    $high_schoolc = $_POST['high_school'];
    $highschool_year_graduatedc = $_POST['highschool_year_graduated'];
    $collegec = $_POST['college'];
    $admissionc = $_POST['admission'];
    $parentc = $_POST['parent'];
    $contact_numberc = $_POST['contact_number'];
    $branch = $_POST['branchc'];

    $stmt = mysqli_prepare($conn,"UPDATE `college` SET `email`= ?,`Classified`= ?,`year_status`= ?,`course`= ?,`enrollment_status`= ?,`student_number`= ?,`firstname`= ?,`middle_name`= ?,`lastname`= ?,`name_extension`= ?,`date_birth`= ?,`house_number`= ?,`barangay`= ?,`municipal`= ?,`province`= ?,`zipcode`= ?,`sex`= ?,`religion`= ?,`height`= ?,`weigth`= ?,`civil_status`= ?,`cellhone_number`= ?,`facebook_account`= ?,`TotalAnnualGrossIncome`= ?,`elementary`= ?,`year_graduated`= ?,`high_school`= ?,`year_graduated_hs`= ?,`collegiate`= ?,`admission`= ?,`parent`= ?,`contact_number_parent`= ? ,`branch`= ? WHERE id = ?");
        mysqli_stmt_bind_param($stmt, 'sssssssssssssssssssssssssssssssssi', $emailc, $classifiedc, $year_statusc, $coursec, $enrollment_statusc, $student_numberc, $firstnamec, $middlenamec, $lastnamec, $name_extensionc, $date_birthc, $house_numberc, $barangayc, $municipalc, $provincec, $zipcodec, $sexc, $religionc, $heightc, $weightc, $civil_statusc, $cellphone_numberc, $facebookc, $incomec, $elementaryc, $elementary_graduatedc, $high_schoolc, $highschool_year_graduatedc, $collegec, $admissionc, $parentc, $contact_numberc, $branch, $id);
        $result = mysqli_stmt_execute($stmt);

        if($result){
            header('Location: admin-dashboard.php');
            exit();
        } else {
            echo 'Error: ' . mysqli_error($conn);
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
 <h2 style="text-align: center; color: green;"><b>College Enrollment Form</b></h2>
    <form class="form-collge" action="edit.php?edit_id=<?php echo $id; ?>" method="post">
    <div class="w-50 p-3">
         <label for="email">Email:</label>
        <input type="text" class="form-control" name="email" value="<?php echo $email; ?>" placeholder="example@gmail.com" required>
    </div>

    <div class="w-50 p-3">
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
        <label for="user">Classified As:</label>
    <select class="form-select mb-3" name="user" id="">
        <option value="">Choose</option>
        <option style="text-align: center;" value="New Student">New Student</option>
        <option style="text-align: center;" value="Old Student">Old Student</option>
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
        <option style="text-align: center;" value="BS in Accounting Information System">BS in Accounting Information System</option>
        <option style="text-align: center;" value="BS in Management Accounting">BS in Management Accounting</option>
        <option style="text-align: center;" value="BS in Hospitality Management">BS in Hospitality Management</option>
        <option style="text-align: center;" value="BS in Tourism Management">BS in Tourism Management</option>
        <option style="text-align: center;" value="Bachelor in Technical Vocational Teacher Education">Bachelor in Technical Vocational Teacher Education</option>
        <option style="text-align: center;" value="Associate in Computer Technology (2 Years)">Associate in Computer Technology (2 Years)</option>
        <option style="text-align: center;" value="Hotel in Restaurant Services (2 Years)">Hotel in Restaurant Services (2 Years)</option>
    </select>
</div>

<div class="w-50 p-3">
            <label for="student">Enrollment Status:</label>
            <select name="student" id=""  class="form-select mb-3">
                <option value="">Choose</option>
                <option value="Regular Student">Regular Student</option>
                <option value="Irregular Student">Irregular Student</option>
        </select>
</div>

<div class="w-50 p-3">
            <label for="student_number">Student Number:</label>
            <input type="text" name="student_number" value="<?php echo $student_number; ?>" class="form-control" placeholder="Student Number:If none write N/A" required>
</div>

<div class="w-50 p-3">
            <label for="firstname">First Name:</label>
            <input type="text" name="firstname" value="<?php echo $firstname; ?>" class="form-control" placeholder="First Name" required>
</div>

<div class="w-25 p-3">
            <label for="middle-name">Middle Name:</label>
            <input type="text" name="middle-name" value="<?php echo $middlename; ?>" class="form-control" placeholder="Middle Name" required>
</div>

<div class="w-25 p-3">
            <label for="lastname">Last Name:</label>
            <input type="text" name="lastname" value="<?php echo $lastname; ?>" class="form-control" placeholder="Last Name" required>
</div>

<div class="w-25 p-3">
            <label for="name-extension">Name Extension:</label>
            <input type="text" name="name-extension" value="<?php echo $name_extension; ?>" class="form-control" placeholder="Example: Jr., III, Sr. etc.    Note: Please leave it blank if Not Available." required>
</div>

<div class="w-25 p-3">
            <label for="date_birth">Date of Birth:</label>
            <input type="date" name="date_birth" value="<?php echo $date_birth; ?>" class="form-control" placeholder="" required>
</div>

<div class="w-50 p-3">
            <label for="house_number">House Number:</label>
            <input type="text" name="house_number" value="<?php echo $house_number; ?>" class="form-control" placeholder="Building and Street Name*E.g. 123 Sampaguita St." required>
</div>

<div class="w-25 p-3">
            <label for="barangay">Barangay:</label>
            <input type="text" name="barangay" value="<?php echo $barangay; ?>" class="form-control" required>
</div>

<div class="w-25 p-3">
            <label for="municipal">City/Municipal:</label>
            <input type="text" value="<?php echo $municipal; ?>" name="municipal" class="form-control" required>
</div>

<div class="w-25 p-3">
            <label for="province">Province:</label>
            <input type="text" name="province" value="<?php echo $province; ?>" class="form-control" required>
</div>

<div class="w-25 p-3">
            <label for="zipcode">Zipcode:</label>
            <input type="text" name="zipcode" value="<?php echo $zipcode; ?>" class="form-control" required>
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
            <input type="text" name="religion" value="<?php echo $religion; ?>" class="form-control" required>
</div>

<div class="w-25 p-3">
            <label for="height">Height:</label>
            <input type="text" name="height" value="<?php echo $height; ?>" class="form-control" required>
</div>

<div class="w-25 p-3">
            <label for="weight">Weigth:</label>
            <input type="text" name="weight" value="<?php echo $weight; ?>" class="form-control" required>
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
            <input type="number" name="cellphone_number" value="<?php echo $cellphone_number; ?>" class="form-control" placeholder="Contact number must be 11 digits" required>
</div>

<div class="w-50 p-3">
            <label for="fb_account_name">Facebook Account Name:</label>
            <input type="text" name="fb_account_name" value="<?php echo $facebook; ?>" class="form-control" required>
</div>

<div class="w-50 p-3">
            <label for="income">Total Annual Gross Income:</label>
            <input type="number" name="income" value="<?php echo $income; ?>" class="form-control" placeholder="(Parent or guardian)" required>
</div>

<div class="w-50 p-3">
            <label for="elementary">(1) ELEMENTARY:</label>
            <input type="text" name="elementary" value="<?php echo $elementary; ?>" class="form-control" required>
</div>

<div class="w-50 p-3">
            <label for="year_graduated">(1) YEAR GRADUATED:</label>
            <input type="text" name="year_graduated" value="<?php echo $elementary_graduated; ?>" class="form-control" required>
</div>

<div class="w-50 p-3">
            <label for="high_school">(1) HIGH SCHOOL:</label>
            <input type="text" name="high_school" value="<?php echo $high_school; ?>" class="form-control" required>
</div>

<div class="w-50 p-3">
            <label for="highschool_year_graduated">(2) YEAR GRADUATED:</label>
            <input type="text" name="highschool_year_graduated" value="<?php echo $highschool_year_graduated; ?>" class="form-control" required>
</div>

<div class="w-50 p-3">
            <label for="college">(3) COLLEGIATE:</label>
            <input type="text" name="college" value="<?php echo $college; ?>" class="form-control" required>
</div>

<div class="w-25 p-3">
            <label for="admission">(3) Year of Admission:</label>
            <input type="text" name="admission" value="<?php echo $admission; ?>" class="form-control" required>
</div>

<div class="w-50 p-3">
            <label for="parent">PARENT/ GUARDIAN NAME:</label>
            <input type="text" name="parent" value="<?php echo $parent; ?>" class="form-control" required>
</div>

<div class="w-25 p-3">
            <label for="contact_number">CONTACT NUMBER OF PARENT/ GUARDIAN:</label>
            <input type="text" class="form-control" value="<?php echo $contact_number; ?>" name="contact_number" placeholder="Contact number must be 11 digits" required>
</div>
            <button type="submit" name="update"  class="btn btn-primary">Update</button>  
        </form>
 </body>
 </html>