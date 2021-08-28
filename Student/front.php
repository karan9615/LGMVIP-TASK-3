<?php 
$severname = "localhost:3307";
$username = "root";
$password = "Karan@25";
$conn = new mysqli($severname,$username,$password);
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
 }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Login page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>

	<div class="modal modal-signin position-static d-block bg-warning py-5" tabindex="-1" role="dialog" id="modalSignin">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-5 shadow">
      <div class="modal-header p-5 pb-4 border-bottom-0">
        <!-- <h5 class="modal-title">Modal title</h5> -->
        <h2 class="fw-bold mb-0 text-center">Student Dashboard</h2>
      </div>

      <div class="modal-body p-5 pt-0">
        <form class="" method="POST" action="index.php">
          <div class="form-floating mb-3">
            <input type="text" class="form-control rounded-4" id="floatingInput" placeholder="Enter your name" name="Name">
            <label for="floatingInput">Name</label>
          </div>
		  <div class="form-floating mb-3">
            <input type="text" name="Roll" class="form-control rounded-4" id="floatingInput" placeholder="Enter your roll no">
            <label for="floatingInput">Roll no.</label>
          </div>
		  <select name="Class" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
				<option>Select Class</option>
				<?php 
                  $sql = "SELECT * FROM `srms`.`class`";
				  $result = $conn->query($sql);
				  while($row = mysqli_fetch_assoc($result))
				  {
					  $class = $row["class"];
					  echo "<option>$class</option>";
				  }
				?>
				</select>
	    	<select name="Section" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
				<option>Select Section </option>
				<?php 
                  $sql = "SELECT * FROM `srms`.`class`";
				  $result = $conn->query($sql);
				  while($row = mysqli_fetch_assoc($result))
				  {
					  $section = $row["section"];
					  echo "<option>$section</option>";
				  }
				?>
				</select>
				<hr class="my-5">
          <button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit">Get Result</button>
         
	   </form>
      </div>
				</div>
				</div>
				</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
   <script src="script.js"></script>
</body>
</html>