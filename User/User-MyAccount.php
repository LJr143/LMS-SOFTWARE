<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/dataTables.bootstrap5.min.css" />
  <link rel="stylesheet" href="../css/User-Dashboard.css" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <title>Library Management System</title>
</head>

<body>

  <!-- top navigation bar -->
  <nav class="navbar navbar-expand-lg navbar-dark navbarTop fixed-top shadow">
    <div class="container-fluid">
      <img src="../images/usep-logo.png" class="logo navbar-toggler-icon" style="width: 40px; height: 40px">
      <a class="navbar-brand me-auto ms-lg-0 ms-3 fw-bold px-3" href="#" style="color: black">USeP Library</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavBar" aria-controls="topNavBar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse topNavBar" id="topNavBar">
        <form class="d-flex ms-auto my-3 my-lg-0"></form>
        <ul class="navbar-nav person">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle ms-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-person-fill text-warning" style="font-size: 24px;"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item custom-dropdown-item bi-person" href="User-MyAccount.php">Manage
                  Account</a></li>
              <li><a class="dropdown-item custom-dropdown-item bi-bookmark-heart" href="User-BookStatus.php">Book Status</a></li>
              <li><a class="dropdown-item custom-dropdown-item bi-question-circle" href="#">Help</a></li>
              <li>
                <button type="button" class="dropdown-item custom-dropdown-item bi-rss" onclick="showFeedbackDialog()">Feedback</button>
              </li>
              <hr>

              <li><button class="dropdown-item custom-dropdown-item bi-plug" onclick="showLogoutConfirmation()">Log out</button>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main class="mt-5">
    <div class="container-fluid">
      <div class="row shadow">
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: white">
          <button class="navbar-toggler " data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="background-color: #f0f0f0; border: none;">
            <span>Menu</span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto" style="font-size: 15px;">
              <li class="nav-item">
                <a href="UserDashboard.php" class="nav-link px-3 text-dark">
                  <span>BOOKS</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="User-Wishlist.php" class="nav-link px-3 text-dark">
                  <span>WISHLIST</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link px-3 text-dark">
                  <span>PENALTIES</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="User-CreditScore.php" class="nav-link px-3 text-dark">
                  <span>CREDIT SCORE</span>
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </main>

  <main class="mt-0 pt-0 ml-3">
    <div class="container-fluid">
      <div class="row ml-0">
        <div class="col-md-6 mb-1 mt-3 ">
          <h5 style="font-weight: bold;">Profile</h5>
          <img src="../images/avatar.png" style="width: 15%;" alt="">
          <div class="profile" style="position: absolute; bottom: 0; left: 20%; top:50px; transform: (-50%);">
            <p>Meave Villanueva</p>
            <i>
              <p style="margin-top: -10px;">mvillanueva@usep.edu.ph</p>
            </i>
          </div>

        </div>
      </div>
  </main>



  <main class="m-3">
    <div class="container-fluid ">
      <div class="row justify-content-between ">
        <div class="col-md-3 mb-1 mt-3    shadow bg-white" style="font-size: 15px;">
          <p style="font-weight: bold; margin-top: 15px; ">Personal Information</p>
          <p style="font-weight: bold; margin-top: 5px;">Name</p>
          <p style=" margin-top: -15px; ">Meave Villanueva</p>
          <p style="font-weight: bold; margin-top: 5px;">Age</p>
          <p style=" margin-top: -15px; ">22 years old</p>
          <p style="font-weight: bold; margin-top: 5px;">Address</p>
          <p style=" margin-top: -15px; ">Asuncion, DAvao Del Norte</p>

        </div>
        <div class="col-md-4 mb-1 mt-3  shadow bg-white " style="font-size: 15px;">
          <p style="font-weight: bold; margin-top: 15px;">Academic Information</p>
          <p style="font-weight: bold; margin-top: 5px;">Student ID</p>
          <p style=" margin-top: -15px; ">2021-00565</p>
          <p style="font-weight: bold; margin-top: 5px;">Program</p>
          <p style=" margin-top: -15px; ">Bachelor of Science and Information Technology</p>
          <p style="font-weight: bold; margin-top: 5px;">Major Study</p>
          <p style=" margin-top: -15px; ">Information Security</p>
          <p style="font-weight: bold; margin-top: 5px;">College</p>
          <p style=" margin-top: -15px; ">College of Teachers Information and Technology</p>

        </div>

        <div class="col-md-4 mb-1 mt-3  shadow bg-white " style="font-size: 15px;">
          <p style="font-weight: bold; margin-top: 15px;">Change Password</p>

          <form method="post" id="passwordForm">
            <input type="password" class="form-control mb-2" name="password1" id="password1" placeholder="New Password" style="font-size: 13px;" autocomplete="off">
            <div class="row">
              <div class="col-sm-6">
                <p style="font-size: 13px;"><span id="8char" class="fas fa-times mt-3" style="color:#FF0004;"></span> 8 Characters Long<br></p>
                <p style="font-size: 13px;"><span id="ucase" class="fas fa-times" style="color:#FF0004;"></span> One Uppercase Letter</p>
              </div>
              <div class="col-sm-6">
                <p style="font-size: 13px;"><span id="lcase" class="fas fa-times mt-3" style="color:#FF0004;"></span> One Lowercase Letter<br></p>
                <p style="font-size: 13px;"><span id="num" class="fas fa-times" style="color:#FF0004;"></span> One Number</p>
              </div>
            </div>
            <input type="password" class="form-control mt-2" name="password2" id="password2" style="font-size: 13px;" placeholder="Confirm Password" autocomplete="off">
            <div class="row">
              <div class="col-sm-12">
                <p style="font-size: 13px;"><span id="pwmatch" class="fas fa-times mt-3" style="color:#FF0004;"></span> Passwords Match</p>
              </div>
            </div>
            <input style="width: 100%; font-size: 13px; padding: 5px 10px;" type="submit" class="btn btn-danger btn-load mt-0 mb-3" data-loading-text="Changing Password..." value="Change Password">
          </form>
        </div><!--/col-sm-6-->

      </div>
    </div>
  </main>





  <!--script-->
  <script src="../script/AdminDashboard.js"></script>
  <script src="../script/User-Dashboard.js"></script>
  <script src="../script/AddBook.js"></script>
  <script src="../script/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
  <script src="../script/jquery-3.5.1.js"></script>
  <script src="../script/jquery.dataTables.min.js"></script>
  <script src="../script/dataTables.bootstrap5.min.js"></script>
  <script src="../script/script.js"></script>

  <script>
    $(document).ready(function() {
      // Your password validation code here
    });

    // for change password
    $("input[type=password]").keyup(function() {
      var ucase = new RegExp("[A-Z]+");
      var lcase = new RegExp("[a-z]+");
      var num = new RegExp("[0-9]+");

      if ($("#password1").val().length >= 8) {
        $("#8char").removeClass("glyphicon-remove");
        $("#8char").addClass("glyphicon-ok");
        $("#8char").css("color", "#00A41E");
      } else {
        $("#8char").removeClass("glyphicon-ok");
        $("#8char").addClass("glyphicon-remove");
        $("#8char").css("color", "#FF0004");
      }

      if (ucase.test($("#password1").val())) {
        $("#ucase").removeClass("glyphicon-remove");
        $("#ucase").addClass("glyphicon-ok");
        $("#ucase").css("color", "#00A41E");
      } else {
        $("#ucase").removeClass("glyphicon-ok");
        $("#ucase").addClass("glyphicon-remove");
        $("#ucase").css("color", "#FF0004");
      }

      if (lcase.test($("#password1").val())) {
        $("#lcase").removeClass("glyphicon-remove");
        $("#lcase").addClass("glyphicon-ok");
        $("#lcase").css("color", "#00A41E");
      } else {
        $("#lcase").removeClass("glyphicon-ok");
        $("#lcase").addClass("glyphicon-remove");
        $("#lcase").css("color", "#FF0004");
      }

      if (num.test($("#password1").val())) {
        $("#num").removeClass("glyphicon-remove");
        $("#num").addClass("glyphicon-ok");
        $("#num").css("color", "#00A41E");
      } else {
        $("#num").removeClass("glyphicon-ok");
        $("#num").addClass("glyphicon-remove");
        $("#num").css("color", "#FF0004");
      }

      if ($("#password1").val() == $("#password2").val()) {
        $("#pwmatch").removeClass("glyphicon-remove");
        $("#pwmatch").addClass("glyphicon-ok");
        $("#pwmatch").css("color", "#00A41E");
      } else {
        $("#pwmatch").removeClass("glyphicon-ok");
        $("#pwmatch").addClass("glyphicon-remove");
        $("#pwmatch").css("color", "#FF0004");
      }
    });
  </script>

</body>

</html>