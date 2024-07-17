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
    <link rel="stylesheet" href="admin.css">
    <title>Document</title>
</head>
<style>
   .div-con{
    text-align: center;
    background-color: #49AD12;
    color: white;
    border-radius: 6px;
  }

  #log-out{
    position: relative;
    left: 440px;
    color: whitesmoke;
    top: 10px;
  }

  #disableFormButton{
    position: absolute;
    top: 50px;
    right: 5px;
  }
</style>
<body>
    <div class="header-container">
    <h2>Guimba Dashboard</h2>
    <a class="log-out" id="log-out" href="logout.php">Log Out</a>
    </div>
    <h3 style="text-align: center; margin-top: 20px;">Senior High School</h3>
    <div class="shs-container">
    <?php 
    // Assuming $conn is your database connection
    $sqls = "SELECT COUNT(strand) AS strand_count FROM `shs_db` WHERE strand LIKE 'GAS'";
    $results = mysqli_query($conn, $sqls);

    if(mysqli_num_rows($results) > 0){
        while($rows = mysqli_fetch_assoc($results)){
            echo '<div class="div-con"><p>GAS</p>'.$rows['strand_count'].'</div>';
        }
    }
?>

<?php 
    // Assuming $conn is your database connection
    $sqls = "SELECT COUNT(strand) AS strand_count FROM `shs_db` WHERE strand LIKE 'ABM'";
    $results = mysqli_query($conn, $sqls);

    if(mysqli_num_rows($results) > 0){
        while($rows = mysqli_fetch_assoc($results)){
            echo '<div class="div-con"><p>ABM</p>'.$rows['strand_count'].'</div>';
        }
    }
?>

<?php 
    // Assuming $conn is your database connection
    $sqls = "SELECT COUNT(strand) AS strand_count FROM `shs_db` WHERE strand LIKE 'HUMMS'";
    $results = mysqli_query($conn, $sqls);

    if(mysqli_num_rows($results) > 0){
        while($rows = mysqli_fetch_assoc($results)){
            echo '<div class="div-con"><p>HUMMS</p>'.$rows['strand_count'].'</div>';
        }
    }
?>

<?php 
    // Assuming $conn is your database connection
    $sqls = "SELECT COUNT(strand) AS strand_count FROM `shs_db` WHERE strand LIKE 'STEM'";
    $results = mysqli_query($conn, $sqls);

    if(mysqli_num_rows($results) > 0){
        while($rows = mysqli_fetch_assoc($results)){
            echo '<div class="div-con"><p>STEM</p>'.$rows['strand_count'].'</div>';
        }
    }
?>

<?php 
    // Assuming $conn is your database connection
    $sqls = "SELECT COUNT(strand) AS strand_count FROM `shs_db` WHERE strand LIKE 'HE'";
    $results = mysqli_query($conn, $sqls);

    if(mysqli_num_rows($results) > 0){
        while($rows = mysqli_fetch_assoc($results)){
            echo '<div class="div-con"><p>HE</p>'.$rows['strand_count'].'</div>';
        }
    }
?>

<?php 
    // Assuming $conn is your database connection
    $sqls = "SELECT COUNT(strand) AS strand_count FROM `shs_db` WHERE strand LIKE 'ICT'";
    $results = mysqli_query($conn, $sqls);

    if(mysqli_num_rows($results) > 0){
        while($rows = mysqli_fetch_assoc($results)){
            echo '<div class="div-con"><p>ICT</p>'.$rows['strand_count'].'</div>';
        }
    }
?>
    
    </div>

    <div class="search">
            <label><h6>Search:</h6></label>
            <input type="text" class="form-control" id="searchInput" placeholder="Type to search..." oninput="filterTable()">
        </div>

    <table id="dataTable"  class="table">
<div class="button-container">
<button id="disableFormButton" class="btn btn-danger">Disable User Form</button>
      <a href="guimba-dashboard.php" class="btn btn-primary">College Dashboard</a>
      <a href="guimba-shs.php" class="btn btn-primary">SHS Dashboard</a>
      <a href="add-shs.php" class="btn btn-success">Add SHS Student</a>
      </div>

  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Firstname</th>
      <th scope="col">Middle Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">LRN</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">Strand</th>
      <th scope="col">Branch</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <?php 
      $sql = "SELECT * FROM `shs_db` WHERE branch IN ('Guimba')";
      $result = mysqli_query($conn, $sql);
      if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
        echo  '<tr>';
        echo  '<th scope="row">'.$row['id'].'</th>'.
          '<td>'.$row['firstname'].'</td>'.
          '<td>'.$row['middle_name'].'</td>'.
          '<td>'.$row['lastname'].'</td>'.
          '<td>'.$row['email'].'</td>'.
          '<td>'.$row['LRN_number'].'</td>'.
          '<td>'.$row['date_birth'].'</td>'.
          '<td>'.$row['strand'].'</td>'.
          '<td>'.$row['branch'].'</td>'.
          '<td>'.'<a class="btn btn-primary" href="shs-view.php?shs-view_id='.$row['id'].'">View</a>'.'</td>'.
          '<td>'.'<a class="btn btn-success" href="shs-edit.php?shs-edit_id='.$row['id'].'">Edit</a>'.'</td>'.
          '<td>'.'<a class="btn btn-danger" href="shs-delete.php?shs-delete_id='.$row['id'].'">Delete</a>'.'</td>';
       echo '</tr>';
        }
      }
    ?>
  </tbody>
</table>

<script>
document.getElementById('disableFormButton').addEventListener('click', function() {
  // Check and toggle the state for the first form
  var currentState1 = localStorage.getItem('disableForm1');
  if (currentState1 === 'true') {
    localStorage.setItem('disableForm1', 'false');
    alert('The first form on the landing page will now be enabled.');
  } else {
    localStorage.setItem('disableForm1', 'true');
    alert('The first form on the landing page will now be disabled.');
  }

  // Check and toggle the state for the second form
  var currentState2 = localStorage.getItem('disableForm2');
  if (currentState2 === 'true') {
    localStorage.setItem('disableForm2', 'false');
    alert('The second form on the landing page will now be enabled.');
  } else {
    localStorage.setItem('disableForm2', 'true');
    alert('The second form on the landing page will now be disabled.');
  }
});

</script>

<script src="js/shs-search.js"></script>
</body>
</html>