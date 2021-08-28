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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <style>
    body{
        margin-left: 22%;
      }
      h1{
        margin-top:1%;
        text-align: center;
      }
</style>
</head>

<body>

<table class="table bg-dark text-light text-center" style="width:98%;">
  <h1>Manage Results</h1><hr style="margin-right: 30%; margin-left: 30%; color: green; padding: .5%;">
  <thead >
    <tr>
      <th >Name</th>
      <th>Class and section</th>
      <th >Roll no</th>
      <th>Manage</th>
    </tr>
  </thead>
  <tbody >
    
    <?php 
      $sql ="SELECT * FROM `srms`.`result` ORDER BY `srms`.`result`.`class` ASC";
      $result = $conn->query($sql);
      while($row = mysqli_fetch_assoc($result)){
        $nme = $row["name"];
        $rll = $row["roll_no"];
        $css = $row["class"];
        $son = $row["section"];
        echo "<tr>
        <td >$nme</td>
        <td >$css-$son</td>
        <td >$rll</td>
        <td><div class='btn-group' role='group' aria-label='Basic mixed styles example'>
        <a href='editres.php?n=$nme&r=$rll&c=$css&s=$son' class='btn btn-warning'>Edit</a>
        <a href='deleteres.php?n=$nme&r=$rll&c=$css&s=$son'class='btn btn-danger'>Delete</a>
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