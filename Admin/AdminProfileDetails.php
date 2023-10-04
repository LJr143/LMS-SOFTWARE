<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <link rel="stylesheet" href="../css/dataTables.bootstrap5.min.css" />
  <link rel="stylesheet" href="../css/AdminProfileDetails.css" />
  <link rel="stylesheet" href="../css/AdminDashboard.css" />
  <title>Admin Add Student</title>
</head>

<body>
  <!-- top navigation bar -->
  <nav class="navbar navbar-expand-lg navbar-dark navbarTop fixed-top">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
        aria-controls="offcanvasExample">
        <span class="navbar-toggler-icon " data-bs-target="#sidebar"></span>
      </button>
      <img src="../images/usep-logo.png" class="logo navbar-toggler-icon " style="width: 40px ;height:40px">
      <a class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase  fw-bold px-3" href="#" style="color: black">Library
        Mangement System</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavBar"
        aria-controls="topNavBar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="topNavBar">
        <form class="d-flex ms-auto my-3 my-lg-0">

        </form>
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle ms-2" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              <i class="bi bi-person-fill text-dark " style="font-size: 24px;"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item custom-dropdown-item" href="#">My Profile</a></li>

              <li><button class="dropdown-item custom-dropdown-item" onclick="showLogoutConfirmation()">Log out</button>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- top navigation bar -->



  <!-- offcanvas -->
  <div class="offcanvas offcanvas-start sidebar-nav" tabindex="-1" id="sidebar" style="width: 220px;">
    <div class="offcanvas-body p-0">
      <nav class="navbar-dark">
        <ul class="navbar-nav">
          <li>
            <!-- <div class="text-muted usep fw-bold text-uppercase px-3 py-2">
              University of Southeastern Philippines
            </div> -->
          </li>
          <li>
            <a href="#" class="nav-link px-3 text-white  mt-5">
              <span class="me-2"><i class="bi bi-speedometer2"></i></span>
              <span>Dashboard </span>
            </a>
          </li>

          <li>
            <a class="nav-link px-3 sidebar-link text-white" data-bs-toggle="collapse" href="#layouts">
              <span class="me-2"><i class="bi bi-card-checklist"></i></span>
              <span>Inventory</span>
              <span class="ms-auto">
                <span class="right-icon">
                  <i class="bi bi-chevron-down"></i>
                </span>
              </span>
            </a>
            <div class="collapse" id="layouts">
              <ul class="navbar-nav ps-3">
                <li>
                  <a href="../Admin/AdminAddBook.html" class="nav-link px-3 text-white">
                    <span class="me-2"><i class="bi bi-journal-plus"></i></span>
                    <span>Add Book</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a href="../Admin/AdminAddStudent.html" class="nav-link px-3 text-white">
              <span class="me-2"><i class="bi bi-person"></i></span>
              <span>Students</span>
            </a>
          </li>

          <li>
            <a href="#" class="nav-link px-3 text-white">
              <span class="me-2"><i class="bi bi-flag"></i></span>
              <span>Reports</span>
            </a>
          </li>
          <li>
            <a href="#" class="nav-link px-3 text-white">
              <span class="me-2"><i class="bi bi-card-checklist"></i></span>
              <span>Logs</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
  <!-- offcanvas --> <!--Add book start-->
  <main class="mt-5 pt-5 ">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <h4>My Profile</h4>
        </div>
      </div>


      <div class="row align-content-center justify-content-center">


      </div>
    </div>


    </div>
    </div>
  </main>

  <!--cATEGORY-->

<!--Button group-->
<main class="mt-3 p-4 btngroup">
  <div class="row">
    <div class="col-md-3">
      <div class="btn-group-vertical mb-3" role="group" aria-label="Button group">
        <button type="button" class="btn btn-light">Edit Profile</button>
        <button type="button" class="btn btn-light">Change Password</button>
      </div>
    </div>
  </div>
</main>

<main class="mt-3 p-4 bgoas">
    <div class="container-fluid ">
      <div class="container">
      
  <div class="row">
    <div class="col-md-4">
      <img src="..\images\avatar.png" class="img-fluid" alt="Profile Image">
    </div>

    <div class="col-md-8">
      <div class="profile-details">
      <h2 class="AdminName">Jane Doe</h2>
      
        <p class="AdminEmail">janedoe01@usep.edu.ph</p>
        <h5 class="role">Admin</h5>
      </ul>
      </div>

    </div>

    <div class="profile-subdetails">
        <label class="Name"><b>Name:</b> Jane Doe </label> <br>
        <label class="Add"><b>Address:</b> Tagum City, Davao del Norte</label><br>
        <label class="Phone"><b>Phone Number:</b> 09917677040</label>

      </div>

  </div>
</div>
</div>
        </div>
      </div>
        </div>
        </main>


 




   <!-- SCRIPT
  //   for password form validation-->
  
  <script>
    var myInput = document.getElementById("psw");
    var letter = document.getElementById("letter");
    var capital = document.getElementById("capital");
    var number = document.getElementById("number");
    var length = document.getElementById("length");

    // When the user clicks on the password field, show the message box
    myInput.onfocus = function () {
      document.getElementById("message").style.display = "block";
    }

    // When the user clicks outside of the password field, hide the message box
    myInput.onblur = function () {
      document.getElementById("message").style.display = "none";
    }

    // When the user starts to type something inside the password field
    myInput.onkeyup = function () {
      // Validate lowercase letters
      var lowerCaseLetters = /[a-z]/g;
      if (myInput.value.match(lowerCaseLetters)) {
        letter.classList.remove("invalid");
        letter.classList.add("valid");
      } else {
        letter.classList.remove("valid");
        letter.classList.add("invalid");
      }

      // Validate capital letters
      var upperCaseLetters = /[A-Z]/g;
      if (myInput.value.match(upperCaseLetters)) {
        capital.classList.remove("invalid");
        capital.classList.add("valid");
      } else {
        capital.classList.remove("valid");
        capital.classList.add("invalid");
      }

      // Validate numbers
      var numbers = /[0-9]/g;
      if (myInput.value.match(numbers)) {
        number.classList.remove("invalid");
        number.classList.add("valid");
      } else {
        number.classList.remove("valid");
        number.classList.add("invalid");
      }

      // Validate length
      if (myInput.value.length >= 8) {
        length.classList.remove("invalid");
        length.classList.add("valid");
      } else {
        length.classList.remove("valid");
        length.classList.add("invalid");
      }
    }
    //     </script>

   <!-- Example starter JavaScript for disabling form submissions if there are invalid fields -->
  
  <script>

      (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
          .forEach(function (form) {
            form.addEventListener('submit', function (event) {
              if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
              }

              form.classList.add('was-validated')
            }, false)
          })
      })()

  </script>
  <script src="../script/AdminAddStudent.js"></script>
  <script src="../script/AdminDashboard.js"></script>
  <script src="../script/AddBook.js"></script>
  <script src="../script/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
  <script src="../script/jquery-3.5.1.js"></script>
  <script src="../script/jquery.dataTables.min.js"></script>
  <script src="../script/dataTables.bootstrap5.min.js"></script>
  <script src="../script/script.js"></script>
</body>

</html>