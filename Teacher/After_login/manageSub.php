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
      
    $sql = "SELECT * FROM `srms`.`subject` ORDER BY `srms`.`subject`.`code` ASC;";
    $result = $conn->query($sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Subjects</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <style>
  body{
        margin-left: 22%;
      }
      h1 {
        margin-top: 1%;
        text-align: center;
      }
</style>
</head>
<body>

<h1>Manage Subjects</h1><hr style="margin-left: 30%; margin-right: 30%; padding: .4%; color: green;border-radius: 15%;">
  <table class="table text-light bg-dark text-center" style="width: 98%;">
  <thead>
    <tr>
      <th >Name</th>
      <th >Code</th>
      <th >Manage</th> 
    </tr>
  </thead>
  <tbody>
    <?php
while($row = mysqli_fetch_assoc($result))
      {
         $show_sub = $row["name"];
         $show_code = $row["code"];
         echo "<tr>
         <td>$show_sub</td>
         <td>$show_code</td>         
          <td><div class='btn-group' role='group' aria-label='Basic mixed styles example'>
         <a href='editsub.php?na=$show_sub&su=$show_code' class='btn btn-warning' >Edit</a>
         <a href='deletesub.php?na=$show_sub&su=$show_code' class='btn btn-danger'>Delete</a>
       </div></td>
         </tr>";
      }
      ?>
      </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
</body>
</html>
