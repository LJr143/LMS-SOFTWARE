<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" href="../../css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <link rel="stylesheet" href="../../css/dataTables.bootstrap5.min.css" />
  <link rel="stylesheet" href="../../css/SuperAdminAddStaff.css" />
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
           <div class="text-muted usep fw-bold px-3 py-2" style="color: white;">
              USeP
            
          </li>
          <li>
            <a href="#" class="nav-link px-3 text-white  mt-5">
              <span class="me-2"><i class="bi bi-speedometer2"></i></span>
              <span>Dashboard </span>
            </a>
          </li>

          <li>
            <a class="nav-link px-3 sidebar-link text-white" data-bs-toggle="collapse" href="../Super Admin/AddStaff/SA-AddStaff.html">
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
          <h4>Staff Management</h4>
        </div>
      </div>


      <div class="row align-content-center justify-content-center">


      </div>
    </div>


    </div>
    </div>
  </main>

  <!--cATEGORY-->




  <main class="mt-3 p-4 bgoas">
    <div class="container-fluid ">
      <div class="row con align-content-center justify-content-center">
        <div class="row txt ">
          <div class="col ">
        <button class="btn btn-lg"><i class="bi bi-arrow-left"></i></button>
          <h5 class="fw-bold px-2 align-content-center justify-content-center">Add Admin</h5>
         </div>
         </div>
         <div id="AddStaff">
          <div class="row align-content-center justify-content-center">
        <div class="col-md-3 SI">
          <div class="box addbookImage align-content-center justify-content-center">
            <img src="../../images/avatar.png" width="220" height="220" id="Profile-Pic">
            <br>
            <!-- Hide the input visually while keeping it accessible -->
            <label for="input-file" class="fw-bold mt-3 ">Add Image</label>
            <input type="file" accept="image/jpeg, image/png, image/jpg" id="input-file" class="visually-hidden">

          </div>
        </div>
        </div>


        <form class="row g-3 needs-validation" novalidate>
          <div class="col-md-2">
            <label for="validationCustom01" class="form-label">Staff ID</label>
            <input type="numeric" class="form-control" id="validationCustom01 " min="9" max="9" placeholder="2021-00565"
              required>
            <div class="invalid-feedback">
              Please choose a student ID.
            </div>
          </div>
          <div class="col-md-4">
            <label for="validationCustom01" class="form-label">First name</label>
            <input type="text" class="form-control text-capitalize" id="validationCustom01" required>
            <div class="invalid-feedback">
              Please type the first name.
            </div>
          </div>
          <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Last name</label>
            <input type="text" class="form-control text-capitalize" id="validationCustom02" required>
            <div class="invalid-feedback">
              Please type the last name.
            </div>
          </div>
          <div class="col-md-2">
            <label for="validationCustom02" class="form-label">Middle Initial</label>
            <input type="text" class="form-control text-capitalize" id="validationCustom02" required>
            <div class="invalid-feedback">
              Please type the middle initial .
            </div>
          </div>
          <div class="col-md-4">
            <label for="validationCustomUsername" class="form-label">Username</label>
            <div class="input-group has-validation">
              <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend"
                required>
              <div class="invalid-feedback">
                Please choose a username.
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <label for="validationCustom03" class="form-label">Address</label>
            <input type="text" class="form-control text-capitalize" id="validationCustom03" required>
            <div class="invalid-feedback">
              Please provide a valid address.
            </div>
          </div>
          <div class="col-md-2">
            <label for="validationCustom01" class="form-label">Phone Number</label>
            <input type="tel" class="form-control" id="validationCustom01" maxLength="11" minLength="11" pattern="^\d{4}-\d{3}-\d{4}$" placeholder="0912-345-6789" required>
            <div class="invalid-feedback">
              Please type the phone number.
            </div>
          </div>
          <div class="col-md-4">
            <label for="validationCustomUsername" class="form-label">Email</label>
            <div class="input-group has-validation">
              <!--<span class="input-group-text" id="inputGroupPrepend">@</span>-->
              <input type="text" class="form-control " id="validationCustomUsername"
                aria-describedby="inputGroupPrepend" required>
              <div class="invalid-feedback">
                Please choose a username.
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <label for="validationCustomUsername" class="form-label">Password</label>
            <div class="input-group has-validation">
             <!-- <span class="input-group-text" id="inputGroupPrepend">@</span>-->
             <input type="password" class="form-control" id="password" name="password"
             aria-describedby="inputGroupPrepend" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
             title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
             required>
             <span class="input-group-text">
               <i class="bi bi-eye-slash " id="togglePassword"></i>
             </span>
              <div class="invalid-feedback">
                <h6>Password must contain the following:</h6>
                <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                <p id="number" class="invalid">A <b>number</b></p>
                <p id="length" class="invalid">Minimum <b>8 characters</b></p>
              </div>
            </div>
          </div>


          <div class="col-12 mt-5">
            <div class="form-check">
              <input class="form-check-input bg-danger" type="checkbox" value="" id="invalidCheck" required>
              <label class="form-check-label" for="invalidCheck">
                Agree to terms and conditions
              </label>
              <div class="invalid-feedback">
                You must agree before submitting.
              </div>
            </div>
          </div>
      
      <div class="row align-content-center justify-content-center">
      </div>
    
    <div class="buttonContainer">
      <button type="submit" class="clear">CLEAR</button>
      <button type="submit" class="add">UPDATE</button>
    </div>
    </form>
    </div>
    </div>
    </div>
  </main>


  </div>
  </div>
  </div>




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
      })

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