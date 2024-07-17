<?php
session_start();
require_once('db_conn.php');
$conn = connection();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
    <style>
        table{
            width: 100%;
        }
        th, td {
            padding: 10px;
            border: 1px solid black;
            text-align: left;
        }
    </style>
</head>
<body>
<div style="overflow-x:auto;">
    <table>
        <tbody class="table-group-divider">
            <?php 
             $id = $_GET['shs-view_id'];
                $sql = "SELECT * FROM `shs_db` WHERE id = $id";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        echo  '<tr>';
                        echo  '<th scope="row">#</th>'.
                            '<td>'.$row['id'].'</td>'.
                            '</tr>'.

                            '<tr>'.
                            '<th scope="row">Enrollment (Date in Time)</th>'.
                            '<td>'.$row['date_time'].'</td>'.
                            '</tr>'.

                            '<tr>'.
                            '<th scope="row">Firstname</th>'.
                            '<td>'.$row['firstname'].'</td>'.
                            '</tr>'.
                            '<tr>'.
                            '<th scope="row">Middle Name</th>'.
                            '<td>'.$row['middle_name'].'</td>'.
                            '</tr>'.
                            '<tr>'.
                            '<th scope="row">Last Name</th>'.
                            '<td>'.$row['lastname'].'</td>'.
                            '</tr>'.

                            '<tr>'.
                            '<th scope="row">Name Extension</th>'.
                            '<td>'.$row['name_extension'].'</td>'.
                            '</tr>'.

                            '<tr>'.
                            '<th scope="row">Email</th>'.
                            '<td>'.$row['email'].'</td>'.
                            '</tr>'.
                            '<tr>'.
                            '<th scope="row">Grade</th>'.
                            '<td>'.$row['grade'].'</td>'.
                            '</tr>'.
                            '<tr>'.
                            '<th scope="row">Branch</th>'.
                            '<td>'.$row['branch'].'</td>'.
                            '</tr>'.
                            '<tr>'.
                            '<th scope="row">Strand</th>'.
                            '<td>'.$row['strand'].'</td>'.
                            '</tr>'.
                            '<tr>'.
                            '<th scope="row">Mothers Name</th>'.
                            '<td>'.$row['mothers_name'].'</td>'.
                            '</tr>'.

                            '<tr>'.
                            '<th scope="row">Fathers Name</th>'.
                            '<td>'.$row['fathers_name'].'</td>'.
                            '</tr>'.

                            '<tr>'.
                            '<th scope="row">Cellphone Number</th>'.
                            '<td>'.$row['cellphone_number'].'</td>'.
                            '</tr>'.


                            '<tr>'.
                            '<th scope="row">Last School Attendent</th>'.
                            '<td>'.$row['last_school_attendent'].'</td>'.
                            '</tr>'.

                            '<tr>'.
                            '<th scope="row">House Number</th>'.
                            '<td>'.$row['house_number'].'</td>'.
                            '</tr>'.

                            '<tr>'.
                            '<th scope="row">Barangay</th>'.
                            '<td>'.$row['barangay'].'</td>'.
                            '</tr>'.

                            '<tr>'.
                            '<th scope="row">Municipal</th>'.
                            '<td>'.$row['municipal'].'</td>'.
                            '</tr>'.

                            '<tr>'.
                            '<th scope="row">Province</th>'.
                            '<td>'.$row['province'].'</td>'.
                            '</tr>'.

                            '<tr>'.
                            '<th scope="row">Zipcode</th>'.
                            '<td>'.$row['zipcode'].'</td>'.
                            '</tr>'.

                            '<tr>'.
                            '<th scope="row">Sex</th>'.
                            '<td>'.$row['sex'].'</td>'.
                            '</tr>'.

                            '<tr>'.
                            '<th scope="row">Religion</th>'.
                            '<td>'.$row['religion'].'</td>'.
                            '</tr>'.

                            '<tr>'.
                            '<th scope="row">Civil Status</th>'.
                            '<td>'.$row['civil_status'].'</td>'.
                            '</tr>'.

                            '<tr>'.
                            '<th scope="row">Facebook Account</th>'.
                            '<td>'.$row['fb_account_name'].'</td>'.
                            '</tr>'.

                            '<tr>'.
                            '<th scope="row">Parent/Guardian Name</th>'.
                            '<td>'.$row['parent'].'</td>'.
                            '</tr>'.

                            '<tr>'.
                            '<th scope="row">Parent/Guardian Contact Number</th>'.
                            '<td>'.$row['parent_contact_number'].'</td>'.
                            '</tr>'.

                            '<tr>'.
                            '<th scope="row">Action</th>'.
                            '<td>'.'<a class="btn btn-success" href="shs-edit.php?shs-edit_id='.$row['id'].'">Edit</a>'.'  '.'<a class="btn btn-danger" href="shs-delete.php?shs-delete_id='.$row['id'].'">Delete</a>'.'</td>'.
                            '</tr>';
                    }
                }
            ?>
        </tbody>
    </table>
</div>
</body>
</html>
