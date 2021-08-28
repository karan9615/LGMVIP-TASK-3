<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Admin login</title>
  <style>
    #login {
   width: 40%;
    border-radius: 19px;
    padding: 12px;
   color: white;
   border-style: solid;
   border-color: rgba(255, 0, 0, 1);
   background-color: rgba(255, 0, 0, 1);
}
  </style>
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We' crossorigin='anonymous'>
</head>
<body>
	<div class="modal modal-signin position-static d-block bg-warning py-5" tabindex="-1" role="dialog" id="modalSignin">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-5 shadow">
      <div class="modal-header p-5 pb-4 border-bottom-0">
        <!-- <h5 class="modal-title">Modal title</h5> -->
        <h2 class="fw-bold mb-0 text-center">Teacher Dashboard</h2>
      </div>

      <div class="modal-body p-5 pt-0">
        <form class="" method="POST" action="../Teacher_login.php">
          <div class="form-floating mb-3">
            <input type="text" class="form-control rounded-4" id="floatingInput" placeholder="Enter your name" name="Name">
            <label for="floatingInput">Name</label>
          </div>
		  <div class="form-floating mb-3">
            <input type="text" name="Teacher" class="form-control rounded-4" id="floatingInput" placeholder="Enter your roll no">
            <label for="floatingInput">ID</label>
          </div>
		  <div class="form-floating mb-3">
            <input type="password" name="Password" class="form-control rounded-4" id="floatingInput" placeholder="Enter your roll no">
            <label for="floatingInput">Password</label>
          </div>
		  <hr class="my-5">
		  <button type="submit" style="margin-bottom: 5.7%;padding: 3% 2%;margin-left: 30%;" id="login">Login</button>
	   </form>
      </div>
				</div>
			</div>
</body>
</html>