<?php  
error_reporting(0);
include '../Teacher_login.php';
$servername = "localhost:3307";
$username = "root";
$password = "Karan@25";

    $conn = new mysqli($servername,$username,$password);
    if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
     }
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Teachers Portal</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        border: 0;
    }

    /* Fixed sidenav, full height */
    .sidenav {
        width: 20%;
        height: 100%;
        position: fixed;
        z-index: 1;
        top: 0;
  left: 0;
        background-color: rgb(194 217 255);
        padding-top: 20px;
  overflow-x: hidden;
    }

    /* Style the sidenav links and the dropdown button */
    .sidenav a,
    .dropdown-btn {
        padding: 6px 8px 6px 16px;
        text-decoration: none;
        font-size: 20px;
        color: #000000;
        display: block;
        border: none;
        background: none;
        width: 100%;
        text-align: left;
        cursor: pointer;
        outline: none;
    }

    /* On mouse-over */
    .sidenav a:hover,
    .dropdown-btn:hover {
        color: #0220fdc2;
    }

    /* Add an active class to the active dropdown button */
    .active {
        background-color: rgb(81, 107, 252);
        color: rgb(230, 233, 235);
    }

    /* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
    .dropdown-container {
        display: none;
        background-color: rgba(0, 102, 255, 0.363);
        ;
        padding-left: 8px;
    }

    /* Optional: Style the caret down icon */
    .fa-caret-down {
        float: right;
        padding-right: 8px;
    }
    </style>
</head>

<body style="background: rgba(150,200,255,.3);">

    <div class="container-fluid d-flex">
        <!-- Creating side navbar -->
        <div class="sidenav">
            <p class="pb-0 p-3 fw-bold text-center">ELEMENTARY SCHOOL OF SUCCESS</p>
            <a href="dashboard.php" id="dashboard"><img src="../../glyphicons/glyphicons-halflings-10-home@2x.png"
                    style="height: 1.6rem; width: 1.7rem;padding: 1.4px;margin-right: 5px;">Dashboard</a>
            <hr style="color: black;">
            <button class="dropdown-btn"><img src="../../glyphicons/glyphicons-filetypes-1-file-text@2x.png"
                    style="height: 1.6rem; width: 1.7rem;padding: 1.4px;margin-right: 5px;">Student Class
                <img src="../../glyphicons/glyphicons-arrows-262-downwards-barb-chevron@2x.png"
                    style="height: 1.6rem; width: 1.7rem;padding: 5px;margin-right: 5px;">
            </button>
            <div class="dropdown-container">
                <a href="createClass.php" id="create_class">Create Class</a>
                <a href="manageClass.php" id="manage_class">Manage Classes</a>
            </div>
            <button class="dropdown-btn"><img src="../../glyphicons/glyphicons-basic-588-book-open-text@2x.png"
                    style="height: 1.6rem; width: 1.7rem;padding: 1.4px;margin-right: 5px;">Subjects
                <img src="../../glyphicons/glyphicons-arrows-262-downwards-barb-chevron@2x.png"
                    style="height: 1.6rem; width: 1.7rem;padding: 5px;margin-right: 5px;">
            </button>
            <div class="dropdown-container">
                <a href="createSub.php" id="add_subject">Add a Subject</a>
                <a href="manageSub.php" id="manage_subject">Manage Subject</a>
            </div>
            <button class="dropdown-btn"><img src="../../glyphicons/glyphicons-halflings-1-user@2x.png"
                    style="height: 1.6rem; width: 1.7rem;padding: 1.4px;margin-right: 5px;">Students <i
                    class="fa fa-caret-down"></i>
                <img src="../../glyphicons/glyphicons-arrows-262-downwards-barb-chevron@2x.png"
                    style="height: 1.6rem; width: 1.7rem;padding: 5px;margin-right: 5px;">
            </button>
            <div class="dropdown-container">
                <a href="createStudent.php" id="add_student">Add a Student</a>
                <a href="manageStudent.php" id="manage_student">Manage Students</a>
            </div>
            <button class="dropdown-btn"><img src="../../glyphicons/glyphicons-basic-713-announcement@2x.png"
                    style="height: 1.6rem; width: 1.7rem;padding: 1.4px;margin-right: 5px;">Results<i
                    class="fa fa-caret-down"></i>
                <img src="../../glyphicons/glyphicons-arrows-262-downwards-barb-chevron@2x.png"
                    style="height: 1.6rem; width: 1.7rem;padding: 5px;margin-right: 5px;">
            </button>
            <div class="dropdown-container">
                <a href="createResult.php" id="add_result">Add result</a>
                <a href="manageResult.php" id="manage_result">Manage results</a>
            </div>
            <a href="changePwd.php" id="pwd"><img
                    src="../../glyphicons/glyphicons-arrows-778-rightwards-black-circled-white-arrow@2x.png"
                    style="height: 1.6rem; width: 1.7rem;padding: 1.4px;margin-right: 5px;">Reset password</a>
            <a href="addNew.php" id="newuser"><img src="../../glyphicons/adduser.png"
                    style="height: 1.6rem; width: 1.7rem;padding: 1.4px;margin-right: 5px;">Add new User</a>

            <a href="../Logout.php" id="logout"><img src="../../glyphicons/log-out@2x.png"
                    style="height: 1.6rem; width: 1.7rem;padding: 1.4px;margin-right: 5px;">Logout</a>
        </div>

    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
    <!-- <script src="javascript.js"></script> -->
    <script>
    //* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "block";
            }
        });
    }
    </script>
</body>

</html>