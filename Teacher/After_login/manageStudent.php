<?php  
error_reporting(0);
include 'index.php';
$severname = "localhost:3307";
     $username = "root";
     $password = "Karan@25";

     $conn = new mysqli($severname,$username,$password);
     if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
      
    $sql = "SELECT `name`,`class`,`roll_no`,`section` FROM `srms`.`student` ORDER BY `srms`.`student`.`class` ASC";
    $result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <style>
    body{
        margin-left: 22%;
        
      }
      h1{
        margin-top: 1%;
        text-align: center;
      }
</style>
</head>
<body>

<h1>Manage Students</h1><hr style="margin-left: 30%; margin-right: 30%; padding: .4%; color: black;">
  <table class="table bg-dark text-light text-center" style="width: 97%;">
  <thead >
    <tr>
      <th >Name</th>
      <th >Roll no</th>
      <th >Class and Section</th>
      <th >Manage</th>
    </tr>
  </thead><?php
  while($row = mysqli_fetch_assoc($result))
    {
      $st_name = $row["name"];
      $st_class = $row["class"];
      $st_roll = $row["roll_no"];
      $st_section = $row["section"];

      echo "<tr>
      <td >$st_name</td>
      <td >$st_roll</td>
      <td >$st_class-$st_section</td>
      <td><div class='btn-group' role='group' aria-label='Basic mixed styles example'>
      <a href='editst.php?na=$st_name&ca=$st_class&ra=$st_roll&sa=$st_section' class='btn btn-warning'>Edit</a>
      <a href='deletest.php?na=$st_name&ca=$st_class&ra=$st_roll&sa=$st_section' class='btn btn-danger'>Delete</a>
    </div></td>
      </tr>";
    }
    ?>
  <tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
</body>
</html>