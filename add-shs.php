<?php
session_start();
require_once('db_conn.php');
$conn = connection();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
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
    
    $stmt = mysqli_prepare($conn, "INSERT INTO `shs_db`(`email`, `LRN_number`, `date_birth`, `firstname`, `middle_name`, `lastname`, `name_extension`, `grade`, `branch`, `strand`, `mothers_name`, `fathers_name`, `parent_contact_number`, `last_school_attendent`, `house_number`, `barangay`, `municipal`, `province`, `zipcode`, `sex`, `religion`, `civil_status`, `cellphone_number`, `fb_account_name`, `parent`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, 'sssssssssssssssssssssssss',$email, $LRN_number, $date_birth, $firstname, $middlename, $lastname, $name_extension, $year_status, $branch, $strand, $mothers_name, $fathers_name, $contact_number, $last_school_attendent, $house_number, $barangay, $municipal, $province, $zipcode, $sex, $religion, $civil_status, $cellphone_number, $facebook, $parent);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        header('Location: admin-shs-dashboard.php');
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
<h2 style="text-align: center; color: green;"><b>SHS Enrollment Form</b></h2>
    <form class="form-collge" action="" method="post">

    <div class="w-50 p-3">
         <label for="email_shs">Email:</label>
        <input type="text" class="form-control" name="email_shs" placeholder="example@gmail.com" required>
    </div>

    <div class="w-50 p-3">
            <label for="LRN_shs">LRN Number:</label>
            <input type="text" name="LRN_shs" class="form-control" required>
</div>

<div class="w-25 p-3">
            <label for="date_birth_shs">Date of Birth:</label>
            <input type="date" class="form-control" name="date_birth_shs" placeholder="" required>
</div>

<div class="w-25 p-3">
            <label for="firstname_shs">First Name:</label>
            <input type="text" class="form-control" name="firstname_shs" placeholder="First Name" required>
</div>

<div class="w-25 p-3">
            <label for="middlename_shs">Middle Name:</label>
            <input type="text" class="form-control" name="middlename_shs" placeholder="Middle Name" required>
</div>

<div class="w-25 p-3">
            <label for="">Last Name:</label>
            <input type="text" class="form-control" name="lastname_shs" placeholder="Last Name" required>
</div>

<div class="w-25 p-3">
            <label for="lastname_shs">Name Extension:</label>
            <input type="text" class="form-control" name="name-extension_shs" placeholder="Example: Jr., III, Sr. etc.    Note: Please leave it blank if Not Available." required>
</div>

<div class="w-25 p-3">
<label for="grade">Grade:</label>
    <select class="form-select mb-3" name="grade" id="">
    <option value="">Choose</option>
        <option style="text-align: center;" value="Grade 11">Grade 11</option>
        <option style="text-align: center;" value="Grade 12">Grade 12</option>
    </select>
</div>

<div class="w-25 p-3">
            <label for="branch">Branch:</label>
    <select class="form-select mb-3" name="branch" id="">
    <option value="">Choose</option>
        <option style="text-align: center;" value="Cabanatuan">Cabanatuan</option>
        <option style="text-align: center;" value="Guimba">Guimba</option>
        <option style="text-align: center;" value="Gapan">Gapan</option>
        <option style="text-align: center;" value="San Jose">San Jose</option>
    </select>
</div>

<div class="w-25 p-3">
            <label for="strand">Strand:</label>
    <select class="form-select mb-3" name="strand" id="">
    <option value="">Choose</option>
        <option style="text-align: center;" value="GAS">GAS</option>
        <option style="text-align: center;" value="ABM">ABM</option>
        <option style="text-align: center;" value="HUMMS">HUMSS</option>
        <option style="text-align: center;" value="HUMMS">STEM</option>
        <option style="text-align: center;" value="HE">HE</option>
        <option style="text-align: center;" value="ICT">ICT</option>
    </select>
</div>

<div class="w-50 p-3">
            <label for="mothers_name">Mothers Name:</label>
            <input type="text" name="mothers_name" class="form-control" required>
</div>

<div class="w-50 p-3">
            <label for="fathers_name">Fathers Name:</label>
            <input type="text" name="fathers_name" class="form-control" required>
</div>

<div class="w-50 p-3">
            <label for="parent_contact_number">Parent Contact Number:</label>
            <input type="number" name="parent_contact_number" class="form-control" required>
</div>

<div class="w-50 p-3">
            <label for="last_school">Last School Attendent:</label>
            <input type="text" name="last_school" class="form-control" required>
</div>

<div class="w-50 p-3">
            <label for="house_number_shs">House Number:</label>
            <input type="text" name="house_number_shs" class="form-control" placeholder="Building and Street Name*E.g. 123 Sampaguita St." required>
</div>

<div class="w-25 p-3">
            <label for="barangay_shs">Barangay:</label>
            <input type="text" name="barangay_shs" class="form-control" required>
</div>

<div class="w-25 p-3">
            <label for="municipal_shs">City/Municipal:</label>
            <input type="text" name="municipal_shs" class="form-control" required>
</div>

<div class="w-25 p-3">
            <label for="province_shs">Province:</label>
            <input type="text" name="province_shs" class="form-control" required>
</div>

<div class="w-25 p-3">
            <label for="zipcode_shs">Zipcode:</label>
            <input type="text" name="zipcode_shs" class="form-control" required>
</div>

<div class="w-25 p-3">
<label for="sex_shs">Sex:</label>
    <select class="form-select mb-3" name="sex_shs" id="">
    <option value="">Choose</option>
        <option style="text-align: center;" value="Male">Male</option>
        <option style="text-align: center;" value="Female">Female</option>
    </select>
</div>


<div class="w-25 p-3">
        <label for="religion_shs">Religion:</label>
            <input type="text" name="religion_shs" class="form-control" required>
</div>

<div class="w-50 p-3">
            <label for="civil_status_shs">Civil Status:</label>
    <select class="form-select mb-3" name="civil_status_shs" id="">
    <option value="">Choose</option>
        <option style="text-align: center;" value="1st Year College">Single</option>
        <option style="text-align: center;" value="2nd Year College">Married</option>
    </select>
</div>

<div class="w-50 p-3">
            <label for="cp_number_shs">Cellphone Number:</label>
            <input type="number" name="cp_number_shs" class="form-control" placeholder="Contact number must be 11 digits" required>
</div>

<div class="w-50 p-3">
            <label for="fb_account_name_shs">Facebook Account Name:</label>
            <input type="text" name="fb_account_name_shs" class="form-control" required>
</div>

<div class="w-50 p-3">
            <label for="parent_shs">PARENT/ GUARDIAN NAME:</label>
            <input type="text" name="parent_shs" class="form-control" required>
</div>
            <input type="submit" class="btn btn-primary" name="submit">  
        </form>
</body>
</html>