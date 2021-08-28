<?php  
error_reporting(0);
session_start();
include 'index.php';
$servername = "localhost:3307";
$username = "root";
$password = "Karan@25";
$conn = new mysqli($servername,$username,$password);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
   
      $old = isset($_POST["old"])?$_POST["old"]:'';
      if($_SESSION["pwd"] = $old)
      {
        $lat = isset($_POST["lat"])?$_POST["lat"]:'';
        $r_lat = isset($_POST["re_lat"])?$_POST["re_lat"]:'';
        if($lat = $r_lat)
        {
            $sql = "UPDATE `srms`.`teacher` SET `pwd`='$lat' WHERE `id`='$_SESSION[id]'";
            $result = $conn->query($sql);
            echo "<div class='alert alert-success d-flex align-items-center' role='alert' >
   <svg class=bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Success:'><use xlink:href='#check-circle-fill'/></svg>
   <div>
     Updated Successfully .
   </div>
 </div>";
        }
        else {
            echo "<div class='alert alert-danger d-flex align-items-center' role='alert'>
        <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:'><use xlink:href='#exclamation-triangle-fill'/></svg>
        <div>
          Entered and rentred password are not same !!
        </div>
      </div>";
        }
      }
      else {
        if(isset($_POST["submit"])){
        echo "<div class='alert alert-danger d-flex align-items-center' role='alert'>
        <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:'><use xlink:href='#exclamation-triangle-fill'/></svg>
        <div>
          Enter correct Current password!!
        </div>
      </div>";}
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Andika&family=Delius&family=Kaisei+Tokumin&family=Work+Sans:wght@500&display=swap');
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
    <div class="container p-5" style="color: white;font-family: sans-serif;">
        <main>
            <div class="col-md-7 col-lg-8 bg-dark p-5" style="width: 100%;font-family: 'Andika' sans-serif;">
                <h2 class="mb-3 text-center">Update Password</h2><hr style="padding: .4%;color: yellow;">
                <form action="changePwd.php" method="POST">
                    <div class="col-md-12 py-3">
                        <label for="zip" class="form-label">Current password</label>
                        <input type="password" class="form-control" placeholder="Enter your current password"
                            name="old" required>
                    </div>
                    <div class="col-md-12 py-3">
                        <label for="zip" class="form-label">New password</label>
                        <input type="password" class="form-control" placeholder="Enter your new password"
                            name="lat" required>
                    </div>
                    <div class="col-md-12 py-3">
                        <label for="zip" class="form-label">Renter new password</label>
                        <input type="password" class="form-control"  placeholder="Renter password.."
                            name="re_lat" required>
                    </div>

                    <hr class="my-4">
                    <button class="w-100 btn btn-primary btn-lg" type="submit">Reset</button>
                </form>
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
</body>

</html>