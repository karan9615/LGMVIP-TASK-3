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

      if(isset($_POST["submit"])){
      $stu_name = isset($_POST["stu_name"])?$_POST["stu_name"]:'';
     $stu_dob = isset($_POST["stu_dob"])?$_POST["stu_dob"]:'';
     $stu_gender = isset($_POST["stu_gender"])?$_POST["stu_gender"]:'';
     $stu_address = isset($_POST["stu_address"])?$_POST["stu_address"]:'';
     $stu_father = isset($_POST["stu_fat_name"])?$_POST["stu_fat_name"]:'';
     $stu_mother = isset($_POST["stu_mot_name"])?$_POST["stu_mot_name"]:'';
     $stu_roll = isset($_POST["stu_roll"])?$_POST["stu_roll"]:'';
     $stu_class = isset($_POST["stu_class"])?$_POST["stu_class"]:'';
     $stu_section = isset($_POST["stu_section"])?$_POST["stu_section"]:'';

     $sql = "INSERT INTO `srms`.`student`(`name`, `dob`, `gender`, `father's name`, `mother's name`, `address`, `roll_no`, `class`, `section`) VALUES 
     ('$stu_name','$stu_dob','$stu_gender','$stu_father','$stu_mother','$stu_address','$stu_roll','$stu_class','$stu_section') ;";
     $result=$conn->query($sql);
     echo "<div class='alert alert-success d-flex align-items-center' role='alert' >
  <svg class=bi flex-shrink-0 me-2' width='50' height='24' role='img' aria-label='Success:'><use xlink:href='#check-circle-fill'/></svg>
  <div>
    Successfully Admitted new student.
  </div>
</div>";
      }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission of Student</title>
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

<div class="container p-5" style="font-family: 'Andika', sans-serif;color: white;">
  <main>
      <div class="col-md-7 col-lg-8 bg-dark p-5" style="width: 100%;">
        <h2 class="mb-3 text-center">Addmsion Form</h2><hr style="color: orange;margin-bottom: 7%;padding: .5%;">
        <form action="createStudent.php" method="POST">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="Stu_Name" class="form-label">Name</label>
              <input type="text" class="form-control" id="StuName" placeholder="Enter name" name="stu_name" required>
              
              <div class="col-12 pt-3">
              <label for="Father's name" class="form-label">Father's name</label>
              <input type="text" class="form-control" id="parents" placeholder="Enter Father's name" name="stu_fat_name" required>
            </div>

            <div class="col-12 pt-3">
            <label for="Mother's name" class="form-label">Mother's name</label>
            <input type="text" class="form-control" id="parents" name" name="stu_mot_name" placeholder="Enter Mother's name" required>
            </div>


            <div class="col-sm-6 pt-3">
              <label for="DOB" class="form-label">DOB</label>
              <input type="date" class="form-control" id="lastName" placeholder="DD//MM/YY" name="stu_dob" required>
            </div>

           <div class="col-sm-6 pt-3">
            <input type="radio" name="stu_gender" value="male" class="mx-2">male</input>
            <input type="radio" name="stu_gender" value="female" class="mx-2" >female</input>
           </div>

            <div class="col-md-4 pt-3">
              <label for="country" class="form-label">Class</label>
              <select class="form-select" id="class" name="stu_class" required>
                <option value="">Choose...</option>
                <?php 
                $sql = "SELECT * FROM `srms`.`class`;";
                $result = $conn->query($sql);
                while($row = mysqli_fetch_assoc($result))
                  {
                    $class = $row["class"];
                    echo "<option>$class</option>";
                  }
                 ?>
              </select>
              </div>

              <div class="col-md-4 pt-3">
              <label for="section" class="form-label">Section</label>
              <select class="form-select" id="class" name="stu_section" required>
                <option value="">Choose...</option>
                <?php 
                $sql = "SELECT * FROM `srms`.`class`;";
                $result = $conn->query($sql);
                while($row = mysqli_fetch_assoc($result))
                  {
                    $section = $row["section"];
                    echo "<option>$section</option>";
                  }
                 ?>
              </select>
              </div>

            <div class="col-md-6 pt-3">
              <label for="zip" class="form-label">Roll no.</label>
              <input type="text" class="form-control"  id="rollno" placeholder="Enter unique roll no " name="stu_roll" required>
            </div>
          </div>

          <label for="zip" class="form-label">Address</label>
       <textarea name="stu_address" placeholder="Enter your address...." style="outline: 0 ;padding: 1%;"></textarea>
          

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