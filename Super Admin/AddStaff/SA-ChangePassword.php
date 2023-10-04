<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" href="../../css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <link rel="stylesheet" href="../../css/dataTables.bootstrap5.min.css" />
  <link rel="stylesheet" href="../../css/SA-ChangePassword.css" />
  <link rel="stylesheet" href="../../css/AdminDashboard.css" />
  <title>Library Management System</title>
</head>

<body>
  <!-- top navigation bar -->
  <nav class="navbar navbar-expand-lg navbar-dark navbarTop fixed-top">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
        aria-controls="offcanvasExample">
        <span class="navbar-toggler-icon " data-bs-target="#sidebar"></span>
      </button>
      <img src="../../images/usep-logo.png" class="logo navbar-toggler-icon " style="width: 40px ;height:40px">
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
           <i class="bi bi-list"  style="font-size: 2.5rem; color: white;"></i>
            <!-- <div class="text-muted usep fw-bold text-uppercase px-3 py-2">
              University of Southeastern Philippines
            </div> -->
          </li>
          <li>
            <a href="#" class="nav-link px-3 text-white  mt-3">
              <span class="me-2"><i class="bi bi-speedometer2"></i></span>
              <span>Dashboard </span>
            </a>
          </li>

          <li>
            <a class="nav-link px-3 sidebar-link text-white" data-bs-toggle="collapse" href="../AddStaff/SA-AddStaff.html">
              <span class="me-2"><i class="bi bi-people-fill"></i></span>
              <span>Staff</span>
             
            </a>
          </li>
          <li>
            <a href="#" class="nav-link px-3 text-white">
              <span class="me-2"><i class="bi bi-chat-left-text"></i></span>
              <span>Feedback</span>
            </a>
          </li>

          <li>
            <a href="#" class="nav-link px-3 text-white">
              <span class="me-2"><i class="bi bi-flag"></i></span>
              <span>Reports</span>
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
          <h4 class="fw-bold">My Profile</h4>
        </div>
      </div>
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
 <!--Form group -->
 <main class="mt-3 p-4 bgoas">
    <div class="container-fluid ">
      <div class="row align-content-center justify-content-center">
        <h5 class="fw-bold px-2  image">Change Password</h5>
        <form class="row g-3 needs-validation" novalidate>

        
        <div class="col-md-7">
  <label for="validationCustom03" class="form-label">Current Password</label>
  <div class="input-group">
    <input type="password" class="form-control" id="validationCustom03" required>
    <button class="btn btn-outline-secondary toggle-password" type="button" id="togglePassword">
      <i class="fas fa-eye-slash"></i>
    </button>
  </div>
  <div class="invalid-feedback">
    Please provide a strong password.
  </div>
</div> 
       
          <div class="col-md-7">
  <label for="validationCustom03" class="form-label">New Password</label>
  <div class="input-group">
    <input type="password" class="form-control" id="validationCustom03" required>
    <button class="btn btn-outline-secondary toggle-password" type="button" id="togglePassword">
      <i class="fas fa-eye-slash"></i>
    </button>
  </div>
  <div class="invalid-feedback">
    Please provide a strong password.
  </div>
</div> 

<div class="col-md-7">
  <label for="validationCustom03" class="form-label">Confirm New Password</label>
  <div class="input-group">
    <input type="password" class="form-control" id="validationCustom03" required>
    <button class="btn btn-outline-secondary toggle-password" type="button" id="togglePassword">
      <i class="fas fa-eye-slash"></i>
    </button>
  </div>
  <div class="invalid-feedback">
    Please provide a strong password.
  </div>
</div> 
         


      <div class="row align-content-center justify-content-center">
      </div>
    </div>
    
    <div class="buttonContainer">
      <button type="submit" class="clear">CLEAR</button>
      <button type="submit" class="add">CONFIRM</button>
    </div>
    </form>
    </div>
    </div>
  </main>
  </div>
  </div>
  </div>
      
  <script>
  const togglePassword = document.querySelectorAll(".toggle-password");
  togglePassword.forEach(function (toggle) {
    toggle.addEventListener("click", function () {
      const password = toggle.previousElementSibling;
      if (password.type === "password") {
        password.type = "text";
        toggle.innerHTML = '<i class="fas fa-eye"></i>';
      } else {
        password.type = "password";
        toggle.innerHTML = '<i class="fas fa-eye-slash"></i>';
      }
    });
  });
</script>  
       

  




   <!-- SCRIPT
  //   for password form validation
  
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
    //     </script> -->

   <!-- Example starter JavaScript for disabling form submissions if there are invalid fields 
  
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
      }) -->

  </script>





  <script src="../../script/AdminAddStudent.js"></script>
  <script src="../../script/AdminDashboard.js"></script>
  <script src="../../script/AddBook.js"></script>
  <script src="../../script/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
  <script src="../../script/jquery-3.5.1.js"></script>
  <script src="../../script/jquery.dataTables.min.js"></script>
  <script src="../../script/dataTables.bootstrap5.min.js"></script>
  <script src="../../script/script.js"></script>
</body>

</html>