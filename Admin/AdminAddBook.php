<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="../css/dataTables.bootstrap5.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="../css/AdminAddBook.css" />
  <link rel="stylesheet" href="../css/AdminDashboard.css" />
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
                <a href="#" class="nav-link px-3 text-white">
                  <span class="me-2"><i class="bi bi-journal-plus"></i></span>
                  <span>Add Book</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <a href="AdminAddStudent.php" class="nav-link px-3 text-white">
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
        <h4>Book Inventory</h4>
      </div>
    </div>
    <div class="row align-content-center justify-content-center">

      <div class="col-md-2 mb-1  ">
        <div class="card  ">
          <div class="box addbook  align-content-center justify-content-center ">
            <a class="" href="#">ADD BOOK</a>
          </div>

        </div>
      </div>

      <div class="col-md-2 mb-1 ">
        <div class="card  ">
          <div class="box addbook ">
            <a href="#">UPDATE BOOK</a>
          </div>

        </div>
      </div>
      <div class="col-md-2 mb-1 ">
        <div class="card  ">
          <div class="box addbook ">
            <a href="#">DELETE BOOK</a>
          </div>

        </div>
      </div>


    </div>
  </div>
</main>

<!--cATEGORY-->
<main class="mt-0 pt-0 ">
  <div class="container-fluid">
    <div class="row">

    </div>
    <div class="row justify-content-between ">



      <div class="col-md-4 mb-1  ">
        <div class=" ">
          <div class="col-md-5 col-sm-5 formCategory">
            <form id="SelectCategory " action="#" method="POST">
              <label for="selectOption">Category:</label>
              <select class="selectOption" name="selectedOption">
                <option value="option">Filipiñia</option>
                <option value="option"> Fictional</option>
                <option value="option">Educational</option>\
                <option value="option"> Video Tapes</option>

              </select>


            </form>

          </div>

        </div>
      </div>
      <div class="col-md-2 mb-1   ">
        <div class="card  ">
          <div class="box addbook  ">
            <a class="bi-box-arrow-in-right" href="#">IMPORT</a>
          </div>

        </div>
      </div>

    </div>
  </div>
</main>



<main class="mt-0 pt-5 bgUB">
  <div class="container-fluid">
    <div class="row  ">

    </div>
    <div class="row align-content-center justify-content-center">

      <div class="col-md-3 col-lg-3 col-xl-3 SI mt-5">
        <div class="box addbookImage align-content-center justify-content-center">
          <img src="../images/avatar.png" width="220" height="220" id="Profile-Pic">
          <br>
          <!-- Hide the input visually while keeping it accessible -->
          <label for="input-file" class="fw-bold mt-0  ">Add Image</label>
          <input type="file" accept="image/jpeg, image/png, image/jpg" id="input-file" class="visually-hidden">
        </div>
      </div>


      <div class="col-md-3 col-lg-3 col-xl-3 content">
        <div class="box addbook1  ">
          <h6>BOOK ID</h6>
          <input type="number" name="numericInput" min="8" max="12" class="custom-width mb-3">
          <h6>BOOK COPIES</h6>
          <input type="number" name="number" name="numericInput" min="1" max="1000" class="custom-width mb-3">
          <h6>BOOK GENRE</h6>
          <form class="SelectCategoryGenre  mb-3" action="#" method="POST">
            <select class="selectOptionGenre " name="selectedOption">
              <option value="option">Filipiñia</option>
              <option value="option"> Fictional</option>
              <option value="option">Educational</option>\
              <option value="option"> Video Tapes</option>

            </select>
          </form>
        </div>
      </div>

      <div class="col-md-3 col-lg-3 col-xl-3 mb-1 ">
        <div class="box addbook1 ">
          <h6>BOOK TITLE</h6>
          <input type="text" name="textarea" class="custom-width-capitalize mb-3">
          <h6>BOOK ISBN</h6>
          <input type="number" name="number" name="numericInput" min="10" max="13" class="custom-width mb-3">
          <h6 class="">DESCRIPTION</h6>
          <textarea class="comments custom-width2"></textarea>
        </div>
      </div>
      <div class="col-md-3 mb-1 col-lg-3 col-xl-3">
        <div class="box addbook1 ">
          <h6>BOOK AUTHOR</h6>
          <input type="text" name="textarea" class="custom-width-capitalize mb-3">
          <h6>PUBLISHING ID</h6>
          <input type="number" name="number" name="numericInput" min="8" max="12" class="custom-width">


        </div>
      </div>
      <div class="buttonContainer">



        <button type="submit" class="clear">CLEAR</button>
        <button type="submit" class="add">ADD</button>
      </div>

    </div>
  </div>
</main>

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