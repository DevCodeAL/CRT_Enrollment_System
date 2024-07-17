<?php
session_start();
 require_once('db_conn.php');
 $conn = connection();

 $id = $_GET['shs-edit_id'];
 $sql = "SELECT * FROM `shs_db` WHERE id = $id";
 $result = mysqli_query($conn, $sql);

 if(mysqli_num_rows($result) > 0){
     $row = mysqli_fetch_assoc($result);
        $email = $row['email'];
        $LRN_number = $row['LRN_number'];
        $date_birth = $row['date_birth'];
        $firstname = $row['firstname'];
        $middlename = $row['middle_name']; 
        $lastname = $row['lastname'];
        $name_extension = $row['name_extension'];
        $year_status = $row['grade'];
        $branch = $row['branch'];
        $strand = $row['strand'];
        $mothers_name = $row['mothers_name'];
        $fathers_name = $row['fathers_name'];
        $contact_number = $row['parent_contact_number'];
        $last_school_attendent = $row['last_school_attendent'];
        $house_number = $row['house_number'];
        $barangay = $row['barangay'];
        $municipal = $row['municipal'];
        $province = $row['province'];
        $zipcode = $row['zipcode'];
        $sex = $row['sex'];
        $religion = $row['religion'];
        $civil_status = $row['civil_status'];
        $cellphone_number = $row['cellphone_number'];
        $facebook = $row['fb_account_name'];
        $parent = $row['parent'];

 };


 if(isset($_POST['update'])){
        $id = $_GET['shs-edit_id'];
        $emails = $_POST['email_shs'];
        $LRN_numbers = $_POST['LRN_shs'];
        $date_births = $_POST['date_birth_shs'];
        $firstnames = $_POST['firstname_shs'];
        $middlenames = $_POST['middlename_shs']; 
        $lastnames = $_POST['lastname_shs'];
        $name_extensions = $_POST['name-extension_shs'];
        $year_statuss = $_POST['grade'];
        $branchs = $_POST['branch'];
        $strands = $_POST['strand'];
        $mothers_names = $_POST['mothers_name'];
        $fathers_names = $_POST['fathers_name'];
        $contact_numbers = $_POST['parent_contact_number'];
        $last_school_attendents = $_POST['last_school'];
        $house_numbers = $_POST['house_number_shs'];
        $barangays = $_POST['barangay_shs'];
        $municipals = $_POST['municipal_shs'];
        $provinces = $_POST['province_shs'];
        $zipcodes = $_POST['zipcode_shs'];
        $sexs = $_POST['sex_shs'];
        $religions = $_POST['religion_shs'];
        $civil_statuss = $_POST['civil_status_shs'];
        $cellphone_numbers = $_POST['cp_number_shs'];
        $facebooks = $_POST['fb_account_name_shs'];
        $parents = $_POST['parent_shs'];

    $stmt = mysqli_prepare($conn,"UPDATE `shs_db` SET `email`= ?,`LRN_number`= ?,`date_birth`= ?,`firsname`= ?,`middle_name`= ?,`lastname`= ?,`name_extension`= ?,`grade`= ?,`branch`= ?,`strand`= ?,`mothers_name`= ?,`fathers_name`= ?,`parent_contact_number`= ?,`last_school_attendent`= ?,`house_number`= ?,`barangay`= ?,`municipal`= ?,`province`= ?,`zipcode`= ?,`sex`= ?,`religion`= ?,`civil_status`= ?,`cellphone_number`= ?,`fb_account_name`= ?,`parent`= ? WHERE id = ?");
        mysqli_stmt_bind_param($stmt, 'sssssssssssssssssssssssssi',$emails, $LRN_numbers, $date_births, $firstnames, $middlenames, $lastnames, $name_extensions, $year_statuss, $branchs, $strands, $mothers_names, $fathers_names, $contact_numbers, $last_school_attendents, $house_numbers, $barangays, $municipals, $provinces, $zipcodes, $sexs, $religions, $civil_statuss, $cellphone_numbers, $facebooks, $parents, $id);
        $result = mysqli_stmt_execute($stmt);

        if($result){
            header('Location: admin-shs-dashboard.php');
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
<h2 style="text-align: center; color: green;"><b>SHS Enrollment Form</b></h2>
<form class="form-collge" action="shs-edit.php?shs-edit_id=<?php echo $id; ?>" method="post">

<div class="w-50 p-3">
     <label for="email_shs">Email:</label>
    <input type="text" class="form-control" value="<?php echo $email; ?>" name="email_shs" placeholder="example@gmail.com" required>
</div>

<div class="w-50 p-3">
        <label for="LRN_shs">LRN Number:</label>
        <input type="text" name="LRN_shs" class="form-control" value="<?php echo $LRN_number; ?>" required>
</div>

<div class="w-25 p-3">
        <label for="date_birth_shs">Date of Birth:</label>
        <input type="date" class="form-control" value="<?php echo $date_birth; ?>" name="date_birth_shs" placeholder="" required>
</div>

<div class="w-25 p-3">
        <label for="firstname_shs">First Name:</label>
        <input type="text" class="form-control" value="<?php echo $firstname; ?>" name="firstname_shs" placeholder="First Name" required>
</div>

<div class="w-25 p-3">
        <label for="middlename_shs">Middle Name:</label>
        <input type="text" class="form-control" value="<?php echo $middlename; ?>" name="middlename_shs" placeholder="Middle Name" required>
</div>

<div class="w-25 p-3">
        <label for="">Last Name:</label>
        <input type="text" class="form-control" value="<?php echo $lastname; ?>" name="lastname_shs" placeholder="Last Name" required>
</div>

<div class="w-25 p-3">
        <label for="lastname_shs">Name Extension:</label>
        <input type="text" class="form-control" value="<?php echo $name_extension; ?>" name="name-extension_shs" placeholder="Example: Jr., III, Sr. etc.    Note: Please leave it blank if Not Available." required>
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
</select>
</div>

<div class="w-25 p-3">
        <label for="strand">Strand:</label>
<select class="form-select mb-3" name="strand" id="">
<option value="">Choose</option>
    <option style="text-align: center;" value="GAS">GAS (exclusive for Cabanatuan only)</option>
    <option style="text-align: center;" value="ABM">ABM</option>
    <option style="text-align: center;" value="HUMMS">HUMSS (exclusive for Cabanatuan only)</option>
    <option style="text-align: center;" value="HUMMS">STEM (exclusive for Cabanatuan only)</option>
    <option style="text-align: center;" value="HE">HE</option>
    <option style="text-align: center;" value="ICT">ICT</option>
</select>
</div>

<div class="w-50 p-3">
        <label for="mothers_name">Mothers Name:</label>
        <input type="text" value="<?php echo $mothers_name; ?>" name="mothers_name" class="form-control" required>
</div>

<div class="w-50 p-3">
        <label for="fathers_name">Fathers Name:</label>
        <input type="text" value="<?php echo $fathers_name; ?>" name="fathers_name" class="form-control" required>
</div>

<div class="w-50 p-3">
        <label for="parent_contact_number">Parent Contact Number:</label>
        <input type="number" value="<?php echo $contact_number; ?>" name="parent_contact_number" class="form-control" required>
</div>

<div class="w-50 p-3">
        <label for="last_school">Last School Attendent:</label>
        <input type="text" name="last_school" value="<?php echo $last_school_attendent; ?>" class="form-control" required>
</div>

<div class="w-50 p-3">
        <label for="house_number_shs">House Number:</label>
        <input type="text" name="house_number_shs" value="<?php echo $house_number; ?>" class="form-control" placeholder="Building and Street Name*E.g. 123 Sampaguita St." required>
</div>

<div class="w-25 p-3">
        <label for="barangay_shs">Barangay:</label>
        <input type="text" name="barangay_shs" value="<?php echo $barangay; ?>" class="form-control" required>
</div>

<div class="w-25 p-3">
        <label for="municipal_shs">City/Municipal:</label>
        <input type="text" value="<?php echo $municipal; ?>" name="municipal_shs" class="form-control" required>
</div>

<div class="w-25 p-3">
        <label for="province_shs">Province:</label>
        <input type="text" value="<?php echo $province; ?>" name="province_shs" class="form-control" required>
</div>

<div class="w-25 p-3">
        <label for="zipcode_shs">Zipcode:</label>
        <input type="text" value="<?php echo $zipcode; ?>" name="zipcode_shs" class="form-control" required>
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
        <input type="text" value="<?php echo $religion; ?>" name="religion_shs" class="form-control" required>
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
        <input type="number" value="<?php echo $contact_number; ?>" name="cp_number_shs" class="form-control" placeholder="Contact number must be 11 digits" required>
</div>

<div class="w-50 p-3">
        <label for="fb_account_name_shs">Facebook Account Name:</label>
        <input type="text" value="<?php echo $facebook; ?>" name="fb_account_name_shs" class="form-control" required>
</div>

<div class="w-50 p-3">
        <label for="parent_shs">PARENT/ GUARDIAN NAME:</label>
        <input type="text" value="<?php echo $parent; ?>" name="parent_shs" class="form-control" required>
</div>
        <button type="submit" name="update" class="btn btn-primary">Update</button>
    </form>
</body>
</html>