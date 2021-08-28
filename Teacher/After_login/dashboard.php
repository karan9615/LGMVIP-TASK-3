<?php 
include 'index.php';
$severname = "localhost:3307";
$username = "root";
$password = "Karan@25";

$conn = new mysqli($severname,$username,$password);
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
 }

 //  Total class
 $sql = "SELECT * FROM `srms`.`class`";
 $result = $conn->query($sql); 
 $TOTAL_CLASSES = mysqli_num_rows($result);
//  Total Subjects
$sql = "SELECT * FROM `srms`.`subject`";
$result = $conn->query($sql); 
$TOTAL_SUBJECTS = mysqli_num_rows($result);
//  Total result
 $sql = "SELECT * FROM `srms`.`result`";
 $result = $conn->query($sql); 
 $TOTAL_RESULT = mysqli_num_rows($result);
 //  Total teacher
    $sql = "SELECT * FROM `srms`.`teacher`";
    $result = $conn->query($sql); 
    $TOTAL_TEACHERS = mysqli_num_rows($result);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <style>
        .card{
      font-family: 'Work Sans', sans-serif;
    }
     body {
       margin-left: 25%;
     }
   </style>
</head>
<body>
<div class="container d-flex mt-5" style="margin-left: 2%;">
    <div class="card text-white bg-success m-3 p-3" style="border-style: ridge;
    border-width: .2rem;
    border-radius: 23px;width: 19%;height: 14rem;box-shadow: inset -3px -7px 14px 0px rgb(0 0 0 / 60%);">
      <div class="card-body">
        <h5 class="card-title">Total Classes</h5><hr>
        <p class="card-text"><?php echo $TOTAL_CLASSES; ?></p>
      </div>
    </div>    
    <div class="card text-white bg-dark m-3 p-3" style="width: 19%;height: 14rem;border-style: ridge;
    border-width: .2rem;
    border-radius: 23px;box-shadow: inset -3px -7px 14px 0px rgb(0 0 0 / 60%);">
      <div class="card-body">
        <h5 class="card-title">Total Subjects</h5><hr>
        <p class="card-text"><?php echo $TOTAL_SUBJECTS;?></p>
      </div>
    </div> 
    <div class="card text-white bg-primary m-3 p-3" style="width: 19%;height: 14rem;border-style: ridge;
    border-width: .2rem;
    border-radius: 23px;box-shadow: inset -3px -7px 14px 0px rgb(0 0 0 / 60%);">
      <div class="card-body">
        <h5 class="card-title">Total Users</h5><hr style="margin-top: 40px;">
        <p class="card-text"><?php echo $TOTAL_TEACHERS;?></p>
      </div>
    </div>
    <div class="card text-white bg-danger m-3 p-3" style="width: 19%;height: 14rem;border-style: ridge;
    border-width: .2rem;
    border-radius: 23px;box-shadow: inset -3px -7px 14px 0px rgb(0 0 0 / 60%);">
      <div class="card-body">
        <h5 class="card-title">Result Declared</h5><hr>
        <p class="card-text"><?php echo $TOTAL_RESULT;?></p>
      </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
</body>
</html>