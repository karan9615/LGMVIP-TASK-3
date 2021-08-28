<?php 
error_reporting(0);
include 'index.php'; 
$server = "localhost: 3307";
$user = "root";
$password = "Karan@25";
$conn = new mysqli($server,$user,$password);
$cl = isset($_GET['cl'])?$_GET['cl']:'';
$se = isset($_GET['se'])?$_GET['se']:'';
$class= isset($_POST['class']) ? $_POST['class'] : '';
$section = isset($_POST['section']) ? $_POST['section'] : '';
$sql = "DELETE FROM `srms`.`class` WHERE `class`='$cl' AND `section`='$se'";
$result = $conn->query($sql);
$sql = "SELECT * FROM `srms`.`class` WHERE `class`='$class' AND `section`='$section'";
$result = $conn->query($sql);
$count = mysqli_num_rows($result);
if($count<1){
$sql = "INSERT INTO `srms`.`class`(`class`,`section`) VALUES ('$class','$section')";
$result = $conn->query($sql);
if(isset($_POST['submit'])){
    echo "<div class='alert alert-success d-flex align-items-center' role='alert'>
        <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:'><use xlink:href='#check-circle-fill'/></svg>
        <div>
          Updated Successfully !!
        </div>
      </div>";
}}
else {
    echo "<div class='alert alert-danger d-flex align-items-center' role='alert'>
        <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:'><use xlink:href='#exclamation-triangle-fill'/></svg>
        <div>
          Already exist this class and section !!
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
    <title>Update Class</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <style>
    .form-floating {
        width: 30rem;
        height: 3rem;
        margin-left: 20rem;
    }

    h1 {
        margin-left: 26%;
        color: black;
        font-weight: bold;
        text-transform: uppercase;
    }

    .btn {
        width: 30%;
        margin-top: 5%;
        margin-left: 37%;
        border-color: orange;
        color: black;
        background-color: orange;
    }

    .btn:focus {
        border-color: orange;
        color: black;
        background-color: orange;
    }

    .btn:hover {
        background-color: blue;
        color: white;
        border-color: blue;
    }
   
    body{
        margin-left: 35%;
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
<hr style="margin-right: 40%;margin-left: 20%;padding: .4%;color: green;margin-top: 5%;">
    <h1>Update Class</h1><hr style="margin-right: 40%;margin-left: 20%;padding: .4%;color: green;margin-bottom: 5%;">
    <form action="editc.php" method="POST" class="form-control bg-dark text-light p-5" style="width: 80%;">
        <div class="col-md-12">
            <label for="class" class="form-label">Class</label>
            <select class="form-select" id="class" name="class" required>
                <option>Choose...</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
                <option>11</option>
                <option>12</option>
            </select>
        </div>
        <div class="col-md-12 pt-3">
            <label for="section" class="form-label">Section</label>
            <select class="form-select" id="section" name="section" required>
                <option>Choose...</option>
                <option>A</option>
                <option>B</option>
                <option>C</option>
                <option>D</option>
            </select>
        </div>
        <button type="submit" class="btn-lg btn btn-light" name="submit">Update</button>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
</body>
</html>