<?php
session_start();
require_once('db_conn.php');
$conn = connection();

if(isset($_SESSION['id']) && isset($_SESSION['firstname'])
 && isset($_SESSION['middle_name'])
 && isset($_SESSION['lastname'])
 && isset($_SESSION['name_extension'])
 && isset($_SESSION['email'])
 && isset($_SESSION['grade'])
 && isset($_SESSION['branch'])
 && isset($_SESSION['strand'])
 && isset($_SESSION['enrollment_status'])
 && isset($_SESSION['LRN_number'])
 ){

}else{
   // echo "Error Session";
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
    .header{
        display: flex;
        justify-content: center;
        background-color: #0079FF;
        color: white;
    }

    .log-out{
        position: relative;
        left: 530px;
        top: 8px;
        color: white;
    }



</style>
<body>
    <div class="header">
    <h3>Profile</h3>
    <a class="log-out" href="logout.php">Logout</a>
    </div>

<div class="con">
    <table class="table">
  <tbody>
  <tr>
      <th scope="row">Student Number</th>
      <td colspan="2"><?php echo $_SESSION['LRN_number']; ?></td>
    </tr>

    <tr>
      <th scope="row">FirstName</th>
      <td><?php echo $_SESSION['firstname'];  ?></td>
    </tr>

    <tr>
      <th scope="row">Middle Name</th>
      <td><?php echo $_SESSION['middle_name']; ?></td>
    </tr>

    <tr>
      <th scope="row">Last Name</th>
      <td colspan="2"><?php echo $_SESSION['lastname']; ?></td>
    </tr>

    <tr>
      <th scope="row">Name Extension</th>
      <td colspan="2"><?php echo $_SESSION['name_extension']; ?></td>
    </tr>

    <tr>
      <th scope="row">Email</th>
      <td colspan="2"><?php echo $_SESSION['email']; ?></td>
    </tr>

    <tr>
      <th scope="row">Classified</th>
      <td colspan="2"><?php echo $_SESSION['grade']; ?></td>
    </tr>

    <tr>
      <th scope="row">Year Status</th>
      <td colspan="2"><?php echo $_SESSION['branch']; ?></td>
    </tr>

    <tr>
      <th scope="row">Course</th>
      <td colspan="2"><?php echo $_SESSION['strand']; ?></td>
    </tr>

  </tbody>
</table>
    </div>
</body>
</html>