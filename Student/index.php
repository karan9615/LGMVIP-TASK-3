<?php  
if( isset($_POST["Name"]) && isset($_POST["Roll"])){
     session_start();
     $severname = "localhost:3307";
     $username = "root";
     $password = "Karan@25";

     $conn = new mysqli($severname,$username,$password);
     if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

      $name = isset($_POST['Name'])?$_POST['Name']:''; 
      $roll = isset($_POST['Roll'])?$_POST['Roll']:'';
	  $class= isset($_POST["Class"])?$_POST["Class"]:'';
	  $section = isset($_POST["Section"])?$_POST["Section"]:'';
      $sql = "SELECT  * FROM `srms`.`result` WHERE `name`='$name' AND `roll_no`='$roll' AND `class`='$class' AND `section`='$section'"; 
    $result = $conn->query($sql);
    $count = mysqli_num_rows($result);
    if($count == 1){      
		$sql = "SELECT * FROM `srms`.`student` WHERE `name`='$name' AND `class`='$class' AND `roll_no`='$roll' AND `section`='$section'";
    $result = $conn->query($sql);
		$row = mysqli_fetch_assoc($result);
             $dob = $row["dob"];
             $father = $row["father's name"];
             $mother = $row["mother's name"];             
             $sql = "SELECT * FROM `srms`.`result` WHERE `name`='$name' AND `class`='$class' AND `roll_no`='$roll' AND `section`='$section'";
             $result = $conn->query($sql);
           $row = mysqli_fetch_assoc($result);
           $sub1 = $row["sub-1"];
           $sub2 = $row["sub-2"];
           $sub3 = $row["sub-3"];
           $sub4 = $row["sub-4"];
           $sub5 = $row["sub-5"];
           $mark1 = $row["mark-1"];
           $mark2 = $row["mark-2"];
           $mark3 = $row["mark-3"];
           $mark4 = $row["mark-4"];
           $mark5 = $row["mark-5"];
          $total_marks = $mark1+$mark2+$mark3+$mark4+$mark4;
            if($total_marks > 167)
            {
              $pop = "PASS";
            }
            else {
              $pop = "FAIL";
            }
            echo `<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </symbol>
            <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
            </symbol>
            <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
              <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </symbol>
          </svg>`;
       
              echo "<!DOCTYPE html>
              <html lang='en'>
            <head>
              <meta charset='UTF-8'>
              <meta http-equiv='X-UA-Compatible' content='IE=edge'>
              <meta name='viewport' content='width=device-width, initial-scale=1.0'>
              <style>
              p {
                font-family: sans-serif;
                font-size: 1.2em;
              }
              html{
                background-color: aliceblue;
              }</style>
              <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We' crossorigin='anonymous'>
              <title>Result</title>
            </head>
            <body style='margin: 100px;border-style: solid;padding: 70px 40px;background-color: #80f18c; border-radius: 23px;'>
            <p><a href='logout.php' style='margin-left:90%;margin-bottom: 5%;'>LOGOUT</a></p>
            
            <div class='container'>
            <table class='table table-dark'>
            <thead>
            <h1 class='text-center'>The Elementary School Of Success</h1>
            <h4 class='text-center pb-5'>(GOVT. Approved)</h4>
            <p>Name: $name</P>
            <p>Father's name: $father</P>
            <p>Mother's name: $mother</P>
            <p>Class & Section: $class-$section</P>
            <p>Roll no. : $roll</P>
            <p>Dob : $dob</P>
            <tr class='table-active text-center'>
            <th scope='row'>SUBJECTS</th>
            <td colspan='2'>MARKS</td>
            <td>TOTAL MARKS</td>
            </tr>
            </thead>
            <tbody class='text-center'>

            <tr >
            <th scope='row'>$sub1</th>
            <td colspan='2' >$mark1</td>
            <td>100</td>
            </tr>
              <tr >
                <th scope='row'>$sub2</th>
                <td colspan='2' >$mark2</td>
                <td>100</td>
                </tr>
                  <tr >
                    <th scope='row'>$sub3</th>
                    <td colspan='2' >$mark3</td>
                    <td>100</td>
                    </tr>
                      <tr >
                        <th scope='row'>$sub4</th>
                        <td colspan='2' >$mark4</td>
                        <td>100</td>
                        </tr>
                          <tr >
                            <th scope='row'>$sub5</th>
                            <td colspan='2' >$mark5</td>
                            <td>100</td>
                            </tr>
                                        <tr>
              <th scope='row' colspan='3'><h4>Result</h4></th>
              <td colspan='1'><h5>$pop</h5></td>
              </tr>
            </tbody>
          </table>          
          <button onclick='javascript: window.print();' class='text-center mt-5 p-3' style='border-radius: 23px;background-color: blue; color: white;margin-left: 45%;' id='download'>Download</button>
          </div>
            </body>
            </html>
";
    }
    else {
      echo "<div class='alert alert-danger d-flex align-items-center' role='alert'>
      <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:'><use xlink:href='#exclamation-triangle-fill'/></svg>
      <div>
        Your result is not declared yet !!
      </div>
    </div>";
    }
  }
?>
