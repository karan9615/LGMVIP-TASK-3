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

  $r_name = isset($_POST["res_name"])?$_POST["res_name"]:'';
  $r_class= isset($_POST["res_class"])?$_POST["res_class"]:'';
  $r_roll= isset($_POST["res_roll"])?$_POST["res_roll"]:'';
  $r_section= isset($_POST["res_section"])?$_POST["res_section"]:'';
  $r_s1= isset($_POST["sub-1"])?$_POST["sub-1"]:'';
  $r_m1= isset($_POST["sub-1_marks"])?$_POST["sub-1_marks"]:'';
  $r_s2= isset($_POST["sub-2"])?$_POST["sub-2"]:'';
  $r_m2= isset($_POST["sub-2_marks"])?$_POST["sub-2_marks"]:'';
  $r_s3= isset($_POST["sub-3"])?$_POST["sub-3"]:'';
  $r_m3= isset($_POST["sub-3_marks"])?$_POST["sub-3_marks"]:'';
  $r_s4= isset($_POST["sub-4"])?$_POST["sub-4"]:'';
  $r_m4= isset($_POST["sub-4_marks"])?$_POST["sub-4_marks"]:'';
  $r_s5= isset($_POST["sub-5"])?$_POST["sub-5"]:'';
  $r_m5= isset($_POST["sub-5_marks"])?$_POST["sub-5_marks"]:'';

  $sql = "SELECT * FROM `srms`.`result` WHERE `name`='$r_name' AND `class`='$r_class' AND `roll_no`='$r_roll' AND `section`='$r_section'";
  $result = $conn->query($sql);
  $count = mysqli_num_rows($result); 
  if($count>0)
  {
    echo "<div class='alert alert-danger d-flex align-items-center' role='alert'>
    <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:'><use xlink:href='#exclamation-triangle-fill'/></svg>
    <div>
      Already declared result !!
    </div>
  </div>";
  }
else{
  if(isset($_POST["submit"])){
    $sql = "INSERT INTO `srms`.`result`(`name`, `class`, `roll_no`, `sub-1`, `mark-1`, `sub-2`, `mark-2`, `sub-3`, `mark-3`, `sub-4`,`mark-4`, `sub-5`, `mark-5`, `section`) VALUES ('$r_name','$r_class','$r_roll','$r_s1','$r_m1','$r_s2'
    ,'$r_m2','$r_s3','$r_m3','$r_s4','$r_m4','$r_s5','$r_m5','$r_section')";
    $result = $conn->query($sql);
    if($result = true ){
   echo "<div class='alert alert-success d-flex align-items-center' role='alert' >
    <svg class=bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Success:'><use xlink:href='#check-circle-fill'/></svg>
    <div>
      Successfully declared this result.
    </div>
  </div>";}
    }
}
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adding Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <style>
    body{
        margin-left: 20%;
      }
</style>
</head>
<body>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
  <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </symbol>
  <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
</svg>

<div class="container p-5" style="color: white;">
  <main>
      <div class="col-md-7 col-lg-8 bg-dark p-3" style="width: 100%;font-family: 'Anida' sans-serif;">
        <h2 class="mb-3 text-center">Declare Result</h2><hr style="padding: .5%;color: yellow; margin-bottom: 5%;">
        <form action="createResult.php" method="POST">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="Name" class="form-label">Name</label>
              <input type="text" class="form-control" id="Name" Placeholder="Enter name of the student" name="res_name" required>
            </div>
        <div class="col-md-5">
              <label for="Class" class="form-label">Class</label>
              <select class="form-select" id="class" name="res_class" required>
                <option>Choose...</option>
                <?php 
                  $sql = "SELECT `class` FROM `srms`.`class`";
                  $result = $conn->query($sql);
                  while($row = mysqli_fetch_assoc($result))
                  {
                    $class = $row["class"];
                    echo "<option>$class</option>";
                  }
                ?>
              </select>
            </div>
            <div class="col-md-3">
              <label for="zip" class="form-label">Roll no.</label>
              <input type="text" class="form-control" id="rollno" placeholder="Enter your roll number" name="res_roll" required>
            </div>
          </div>
          <div class="col-md-5 pt-3">
              <label for="section" class="form-label">Section</label>
              <select class="form-select" id="class" name="res_section" required>
                <option>Choose...</option>
                <?php 
                  $sql = "SELECT `section` FROM `srms`.`class`";
                  $result = $conn->query($sql);
                  while($row = mysqli_fetch_assoc($result))
                  {
                    $section = $row["section"];
                    echo "<option>$section</option>";
                  }
                ?>
              </select>
            </div>
        <hr>   

                <div class="mb-3 row">
          <label for="Sub-1" class="col-sm-2 col-form-label">Subject-1</label>
          <div class="col-sm-10">
            <select class="form-control" id="sub-1" name="sub-1">
               <option>choose Subject</option>
               <?php 
               $sql = "SELECT * FROM `srms`.`subject`";
               $result =$conn->query($sql);
                  while($row = mysqli_fetch_assoc($result)){
                    $sub = $row["name"];
                  echo "<option>$sub</option>";
                  }
               ?>
            </section>
            <input type="number" class="input-group mt-1 mb-3 p-2" style="outline:0;border-radius: 5px;" placeholder="Enter marks here" name="sub-1_marks"></input>
          </div>
        </div>
        <div class="mb-3 row">
        <label for="Sub-2" class="col-sm-2 col-form-label">Subject-2</label>
        <div class="col-sm-10">
        <select class="form-control" id="sub-2" name="sub-2">
               <option>choose Subject</option>
               <?php 
               $sql = "SELECT * FROM `srms`.`subject`";
               $result =$conn->query($sql);
                  while($row = mysqli_fetch_assoc($result)){
                    $sub = $row["name"];
                  echo "<option>$sub</option>";
                  }
               ?>
            </section>   
            <input type="number" class="input-group mt-1 mb-3 p-2" style="outline:0;border-radius: 5px;" placeholder="Enter marks here" name="sub-2_marks"></input>
     </div>
      </div>
      <div class="mb-3 row">
      <label for="Sub-3" class="col-sm-2 col-form-label">Subject-3</label>
      <div class="col-sm-10">
      <select class="form-control" id="sub-3" name="sub-3">
               <option>choose Subject</option>
               <?php 
               $sql = "SELECT * FROM `srms`.`subject`";
               $result =$conn->query($sql);
                  while($row = mysqli_fetch_assoc($result)){
                    $sub = $row["name"];
                  echo "<option>$sub</option>";
                  }
               ?>
            </section>
            <input type="number" class="input-group mt-1 mb-3 p-2" style="outline:0;border-radius: 5px;" placeholder="Enter marks here" name="sub-3_marks"></input>

                  </div>
    </div>
    <div class="mb-3 row">
    <label for="Sub-4" class="col-sm-2 col-form-label">Subject-4</label>
    <div class="col-sm-10">
    <select class="form-control" id="sub-4" name="sub-4">
               <option>choose Subject</option>
               <?php 
               $sql = "SELECT * FROM `srms`.`subject`";
               $result =$conn->query($sql);
                  while($row = mysqli_fetch_assoc($result)){
                    $sub = $row["name"];
                  echo "<option>$sub</option>";
                  }
               ?>
            </section>
            <input type="number" class="input-group mt-1 mb-3 p-2" style="outline:0;border-radius: 5px;" placeholder="Enter marks here" name="sub-4_marks"></input>
    </div>
  </div>
  <div class="mb-3 row">
  <label for="Sub-5" class="col-sm-2 col-form-label">Subject-5</label>
  <div class="col-sm-10">
  <select class="form-control" id="sub-1" name="sub-5">
               <option>choose Subject</option>
               <?php 
               $sql = "SELECT * FROM `srms`.`subject`";
               $result =$conn->query($sql);
                  while($row = mysqli_fetch_assoc($result)){
                    $sub = $row["name"];
                  echo "<option>$sub</option>";
                  }
               ?>
            </section>  
            <input type="number" class="input-group mt-1 mb-3 p-2" style="outline:0;border-radius: 5px;" placeholder="Enter marks here" name="sub-5_marks"></input>
            </div>
            </div>
          <hr class="my-4">
          <button class="w-100 btn btn-primary btn-lg" type="submit" name="submit">Add</button>
        </form>
      </div>
    </div>
  </main>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
</body>
</html>