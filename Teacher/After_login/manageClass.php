<?php
error_reporting(0);
session_start();
include 'index.php';
$server = "localhost: 3307";
$user = "root";
$password = "Karan@25";
$conn = new mysqli($server,$user,$password);       
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Class</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <style>
    body{
        margin-left: 22%;
      }
      h1{
        margin-top: 3%;
        text-align: center;
        color: black;
      }
</style>
</head>
<body>

<table class="table text-light bg-dark text-center" style="width: 98%;">
  <h1>Manage Classes</h1><hr style="margin-right: 30%;margin-left: 30%;padding: .5%; color: green;">
  <thead>
    <tr>
      <th colspan="2">Class</th>
      <th  colspan="2">Section</th>
      <th colspan="2">Last Updation</th>
      <th colspan="2">Manage</th>
    </tr>
  </thead>
  <tbody>
<?php 
    $sql = "SELECT * FROM `srms`.`class` ORDER BY `srms`.`class`.`class` ASC;";
    $result = $conn->query($sql);
    while($row = mysqli_fetch_assoc($result)){
      $cls = $row["class"];
      $sec = $row["section"];
      $tme = $row["last_updated"];
             echo "<tr>
             <td colspan='2'>Class-$cls</td>
             <td colspan='2'>$sec</td>
             <td colspan='2'>$tme</td>        
             <td><div class='btn-group' role='group' aria-label='Basic mixed styles example'>
             <a  href='editc.php?cl=$cls&se=$sec' class='btn btn-warning'>Edit</a>
             <a  href='deletec.php?cl=$cls&se=$sec' class='btn btn-danger'>Delete</a>
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