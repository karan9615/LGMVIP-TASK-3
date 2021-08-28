<?php
session_start();
if(isset($_POST["Name"],$_POST["Password"])){
   $_SESSION['severname'] = "localhost:3307";
   $_SESSION['username'] = "root";
   $_SESSION['password'] = "Karan@25";
   
    $_SESSION['conn'] = new mysqli($_SESSION['severname'],$_SESSION['username'],$_SESSION['password']);
    $conn = $_SESSION['conn'];
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
 }
//  echo "Connected successfully";
$_SESSION['name'] = isset($_POST["Name"])?$_POST["Name"]:'';
$_SESSION['id'] = isset($_POST["Teacher"])?$_POST["Teacher"]:'';
$_SESSION['pwd'] = $_POST["Password"];
$name = $_SESSION['name'];
$id = $_SESSION['id'];
$pwd = $_SESSION['pwd'];
$sql = "SELECT * FROM `srms`.`teacher` WHERE `name`='$name' AND `id`='$id' AND `Pwd`='$pwd'";

   $result = $_SESSION['conn']->query($sql);
   $count = mysqli_num_rows($result);
   echo $count;
   if($count == 1)
   {
    header("Location: After_login/index.php");
   }  
}
?>

<!-- Helping content is here -->