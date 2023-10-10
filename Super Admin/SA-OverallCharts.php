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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
  <link rel="stylesheet" href="../css/AdminDashboard.css" />
  <title>Library Management System</title>
</head>
<style>
  .custom-container {
    width: 160px;
    /* Set your desired width */
    height: 160px;
    /* Set your desired height */
    text-align: center;
    /* Center text horizontally */
    display: flex;
    flex-direction: column;
    justify-content: center;
    margin: 10px;
  }
</style>

<body>
  <!-- top navigation bar -->
  <nav class="navbar navbar-expand-lg navbar-dark navbarTop fixed-top">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="offcanvasExample">
        <span class="navbar-toggler-icon " data-bs-target="#sidebar"></span>
      </button>
      <img src="../images/usep-logo.png" class="logo navbar-toggler-icon " style="width: 40px ;height:40px">
      <a class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase  fw-bold px-3" href="#" style="color: black">Library
        Mangement System</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavBar" aria-controls="topNavBar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="topNavBar">
        <form class="d-flex ms-auto my-3 my-lg-0">

        </form>
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle ms-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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

          </li>
          <li>
            <a href="#" class="nav-link px-3 text-white  mt-5">
              <span class="me-2"><i class="bi bi-speedometer2"></i></span>
              <span>Dashboard </span>
            </a>
          </li>



          <li>
            <a href="#" class="nav-link px-3 text-white">
              <span class="me-2"><i class="bi bi-person"></i></span>
              <span>Staff</span>
            </a>
          </li>

          <li>
            <a href="#" class="nav-link px-3 text-white">
              <span class="me-2"><i class="bi bi-flag"></i></span>
              <span>Feedback</span>
            </a>
          </li>
          <li>
            <a href="#" class="nav-link px-3 text-white">
              <span class="me-2"><i class="bi bi-card-checklist"></i></span>
              <span>Logs</span>
            </a>
          </li>

          <li>
            <a class="nav-link px-3 sidebar-link text-white" data-bs-toggle="collapse" href="#layouts">
              <span class="me-2"><i class="bi bi-card-checklist"></i></span>
              <span>Reports</span>
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
                    <span class="me-2"><i class="bi bi-rss"></i></span>
                    <span>Website</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link px-3 text-white">
                    <span class="me-2"><i class="bi bi-bookmark-plus"></i></span>
                    <span>Categories</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link px-3 text-white">
                    <span class="me-2"><i class="bi bi-journal-plus"></i></span>
                    <span>Inventory</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link px-3 text-white">
                    <span class="me-2"><i class="bi bi-journal-plus"></i></span>
                    <span>Book Status</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

          <li>
            <a href="#" class="nav-link px-3 text-white">
              <span class="me-2"><i class="bi bi-door-open"></i></span>
              <span>Logs</span>
            </a>
          </li>

        </ul>
      </nav>
    </div>
  </div>


  <!--quarterly reports -->
  <main class="mt-5 pt-5 ">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 fw-bold">
          <h4>Quarterly Reports</h4>
        </div>
      </div>
      <div class="row align-content-center justify-content-center">

      </div>
    </div>
  </main>

  <!--cATEGORY-->
  <main class="mt-0 pt-0 ">
    <div class="container-fluid">

      <div class="row justify-content-between ">

        <div class="col-md-4 mb-1  ">
          <div class="col-md-5 col-sm-5 formCategory">
            <form id="SelectCategory " action="#" method="POST">
              <label for="selectOption">Category:</label>
              <select class="selectOption" name="selectedOption">

                <option value="option">Overall</option>
                <option value="option">Visitors</option>
                <option value="option">Borowed Books</option>
                <option value="option"> New Members</option>
                <option value="option">Returned</option>
                <option value="option">Reserved</option>
                <option value="option">Filipiñia</option>
                <option value="option"> Fictional</option>
                <option value="option">Educational</option>
                <option value="option"> Video Tapes</option>
              </select>


            </form>

          </div>
        </div>

        <!--export excel -->
        <div class="col-md-2 mb-1   ">
          <a href="#"> <img src="../images/excel.png" alt="Excel photo" style="width: 50px;"></a>
        </div>
      </div>
    </div>
  </main>


  <!--doughnut  charts -->
  <main class="mt-0 p-4">
    <div class="container-fluid">
      <div class="row ">

        <div class="col-12 col-md-5 mt-0 shadow bg-white">
          <div class="content-1 p-4 m-1">
            <h6 class="text-center mb-4" style="font-weight: bold">Reports on Books</h6>
            <canvas id="doughnutChart" style="width:100%;max-width:600px"></canvas>
          </div>
        </div>

        <div class="col-12 col-md-1 mt-5"></div>


        <!--reports on books, borrowers and total books etc. -->
        <div class="col-12 col-md-6 mt-0">
          <div class="content-1 p-4 overview bg-white shadow">
            <h6 class="text-center fw-bold">Overall Reports</h6>
            <div class="wrapper d-flex justify-content-center mt-4 ">
              <!-- First Row -->
              <div class="totalU p-4 bg-warning shadow mb-2 custom-container">
                <div class="circle-container">
                  <img src="../images/total-books.png" alt="Icon" style="width: 60px;">
                </div>
                <h4 class="text-center mt-2" style="font-weight: bold; color: white">1,461</h4>
                <h6 class="text-center" style="font-size: 14px;">Total Books</h6>
              </div>
              <div class="totalP shadow bg-primary mb-2 custom-container">
                <div class="circle-container1">
                  <img src="../images/total-borrower.png" alt="Icon" style="width: 60px; margin-left: 25px;">
                </div>
                <div class="text-container">
                  <h4 class="text-center mt-2" style="font-weight: bold; color: white">260</h4>
                  <h6 class="text-center" style="font-size: 14px;">Total Borrower</h6>
                </div>
              </div>
            </div>
            <div class="wrapper d-flex justify-content-center mt-0">
              <!-- Second Row -->
              <div class="totalR p-4 bg-success mb-2 custom-container">
                <div class="circle-container2">
                  <img src="../images/total-users.png" alt="Icon" style="width: 60px;">
                </div>
                <h4 class="text-center mt-2" style="font-weight: bold; color: white">521</h4>
                <h6 class="text-center" style="font-size: 14px;">Registered User</h6>
              </div>
              <div class="totalI p-4 bg-danger mb-2 custom-container">
                <div class="circle-container3">
                  <img src="../images/available-book.png" alt="Icon" style="width: 50px; ">
                </div>
                <div class="text-container">
                  <h4 class="text-center mt-2" style="font-weight: bold; color: white">321</h4>
                  <h6 class="text-center" style="font-size: 14px;">Available Books</h6>
                </div>
              </div>
            </div>
          </div>
        </div>




      </div>
    </div>
  </main>



  <!--script-->
  <script src="../script/AdminDashboard.js"></script>
  <script src="../script/AddBook.js"></script>
  <script src="../script/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
  <script src="../script/jquery-3.5.1.js"></script>
  <script src="../script/jquery.dataTables.min.js"></script>
  <script src="../script/dataTables.bootstrap5.min.js"></script>
  <script src="../script/script.js"></script>

  <!--script for doughnut chart-->
  <script>
    //doughnut
    var ctxD = document.getElementById("doughnutChart").getContext('2d');
    var myLineChart = new Chart(ctxD, {
      type: 'doughnut',
      data: {
        labels: ["Books Unreturned", "Books Returned", "Books Lost", "Books Overdue", "Books Borrowed"],
        datasets: [{
          data: [55, 49, 44, 24, 17],
          backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
          hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
        }]
      },
      options: {
        responsive: true
      }
    });
  </script>




</body>

</html>