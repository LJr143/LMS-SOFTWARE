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



  <!--cATEGORY-->
  <main class="mt-0 pt-0">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 mb-3 mt-3">
          <h5>My Wishlist</h5>
        </div>
        <div class="col-md-6 text-right mb-3 mt-3 ">
          <button class="wishlist-button">EDIT</button>
        </div>
      </div>
    </div>
  </main>




  <!---TABLE for logs-->
  <main>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 mb-3">
          <div class="card">

            <div class="card-body">
              <div class="table-responsive">
                <table id="example" class="table table-striped data-table" style="width: 100%">
                  <thead>
                    <tr style="color: #711717; font-size: 13px;">
                      <th style="width: 20%;">BOOK COVER </th>
                      <th>BOOK TITLE </th>
                      <th>BOOK AUTHOR </th>
                      <th>STATUS </th>
                      <th> </th>

                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th><img src="../images/book1.jpg" style="width: 40%;" alt="photo sample"> </th>
                      <td>IT </td>
                      <td>Stephen King</td>
                      <td style="color: green; font-weight: bold;">Available </td>
                      <td> <a href="#"><span><i class="bi bi-trash" style="font-size: 30px; color: #711717;"></i></span></td>
                      </a>
                    </tr>
                    <tr>
                      <th><img src="../images/book2.jpg" style="width: 40%;" alt="photo sample"> </th>
                      <td>Data Structure </td>
                      <td>Sheena Mae</td>
                      <td style="color: green; font-weight: bold;">Available </td>
                      <td> <a href="#"><span><i class="bi bi-trash" style="font-size: 30px; color: #711717;"></i></span></td>
                      </a>
                    </tr>
                    <tr>
                      <th><img src="../images/book1.jpg" style="width: 40%;" alt="photo sample"> </th>
                      <td>Programming </td>
                      <td>Gwynn palsson</td>
                      <td style="color: #711717; font-weight: bold;">Not Available </td>
                      <td> <a href="#"><span><i class="bi bi-trash" style="font-size: 30px; color: #711717;"></i></span></td>
                      </a>
                    </tr>
                    <tr>
                      <th><img src="../images/book1.jpg" style="width: 40%;" alt="photo sample"> </th>
                      <td>IT </td>
                      <td>Stephen King</td>
                      <td style="color: green; font-weight: bold;">Available </td>
                      <td> <a href="#"><span><i class="bi bi-trash" style="font-size: 30px; color: #711717;"></i></span></td>
                      </a>
                    </tr>
                    <tr>
                      <th><img src="../images/book2.jpg" style="width: 40%;" alt="photo sample"> </th>
                      <td>Java </td>
                      <td>Hanna King</td>
                      <td style="color: #711717; font-weight: bold;">Not Available </td>
                      <td> <a href="#"><span><i class="bi bi-trash" style="font-size: 30px; color: #711717;"></i></span></td>
                      </a>
                    </tr>

                  </tbody>
                  <tfoot>
                    <tr style="color: #711717;">
                      <th>BOOK COVER </th>
                      <th>BOOK TITLE </th>
                      <th>BOOK AUTHOR </th>
                      <th>STATUS </th>
                      <th> </th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
  </main>



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

  <script></script>

</body>

</html>