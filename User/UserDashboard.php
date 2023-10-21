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



  <!--dashboard start-->
  <main class="mt-0 mb-1 pt-5" style="margin-top: -20px !important;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-1">
          <button id="homeButton" class="minimize-button ml-2">Home </button>
        </div>
      </div>
    </div>
  </main>


  <!--cATEGORY-->
  <main class="mt-0 pt-0 ">
    <div class="container-fluid">

      <div class="row ">

        <div class="col-md-3 mb-1  ">
          <div class="col-md-5 col-sm-5 formCategory">
            <form id="SelectCategory " action="#" method="POST">

              <select class="selectOption" name="selectedOption">
                <option value="option">SEARCH BY</option>
                <option value="option">Environment and Forestry</option>
                <option value="option">Agriculture and Agriculture Engineering</option>
                <option value="option">Usepiana</option>
                <option value="option">General Information</option>
                <option value="option">Filipiñiana </option>
                <option value="option">Educational</option>
                <option value="option"> Video Tapes</option>
                <option value="option"> Special Education</option>
                <option value="option">Overall</option>


              </select>
            </form>
          </div>
        </div>




        <div class="col-md-9 mb-1">
          <div class="col-md-5 col-sm-5 formCategory" style="width: 100%;">
            <form id="searchForm" action="#" method="POST">
              <div class="input-group">
                <input id="searchInput" type="text" class="form-control" placeholder="Search Book Title" style="font-size: 16px; padding: 10px;">
                <div class="input-group-append">
                  <button id="searchButton" class="btn btn-danger" style="background-color: #711717; padding: 10px;" type="button">
                    <i class="bi bi-search"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>




      </div>
  </main>




  <!---book info-->
  <main>

    <div class="container-fluid">
      <div class="row justify-content-start">
        <h6 class="mt-3 ml-3"> <b>New Arrivals</h6></b>

        <div class="col-12 col-md-3 mt-3">
          <div class="wrapper d-flex justify-content-center mt-0">
            <!-- First Row -->
            <div class="totalU p-1 bg-white shadow mb-2 custom-container">
              <button class="new-button">OUT OF STOCKS</button>
              <img src="../images/book2.jpg" alt="Icon" style="width: 130px; height: 150px; margin-top: 24px;">
              <i>
                <h6 class="text-start mt-1 text-danger" style="font-size: 13px;">IT</h6>
              </i>
              <h6 class="text-start" style="font-size: 13px; margin-top: 5px;">Stephen King</h6>
              <div class="wishlist-container">
                <div class="heart-and-button">

                  <button class="wishlist-button">NOTIFY ME</button>
                  <span class="heart-icon">
                    <button class="wishlist"><i class="bi bi-heart-fill "></i></button>
                  </span>
                </div>
              </div>
            </div>


          </div>
        </div>


        <div class="col-12 col-md-3 mt-3">
          <div class="wrapper d-flex justify-content-center mt-0">
            <!-- First Row -->
            <div class="totalU p-1 bg-white shadow mb-2 custom-container">
              <button class="new-button">NEW</button>
              <img src="../images/book1.jpg" alt="Icon" style="width: 130px; height: 150px; margin-top: 24px;">
              <i>
                <h6 class="text-start mt-1 text-danger" style="font-size: 13px;">IT</h6>
              </i>
              <h6 class="text-start" style="font-size: 13px; margin-top: 5px;">Stephen King</h6>
              <button class="wishlist-button mt-1" data-toggle="modal" data-target="#borrowModal">BORROW</button>
            </div>

            <!-- Modal for button borrow-->
            <div class="modal fade" id="borrowModal" tabindex="-1" role="dialog" aria-labelledby="borrowModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="borrowModalLabel">Borrow Book</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="container-fluid">
                      <div class="row">
                        <!-- Photo in the Left Side -->
                        <div class="col-md-5">
                          <img src="../images/book1.jpg" style="width: 100%; " alt="book sample">
                        </div>

                        <!-- Text in the Right Side -->
                        <div class="col-md-7">
                          <h4 class="text-start mt-1 fw-bold" style="font-size: 18px; color: #711717; ">IT Movie</h4>
                          <p class="mt-0 fw-bold">Author:
                            <span style="color: gray;">Stephen King</span>
                          </p>
                          <p style="margin-top: -15px; font-weight: bold;">Genre:
                            <span style="color: gray;">Fiction</span>
                          </p>

                          <p style="margin-top: -15px; font-weight: bold;">Publisher:
                            <span style="color: gray;">XYZ Inc.</span>
                          </p>

                          <p style="margin-top: -15px !important; font-weight: bold; display: inline-block;">
                            Status: <span style="color: green;">Available</span>
                          </p>

                          <span style="color: black; margin-top: -15px; font-weight: bold;  margin-left: 90px;"> Shelf: </span>
                          <span style="color: gray;">CN1023</span>

                          <p style="margin-top: -15px !important; font-weight: bold; display: inline-block;">
                            ISBN: <span style="color: gray;">1234567898527</span>
                          </p>

                          <span style="color: black; margin-top: -15px; font-weight: bold;  margin-left: 50px;"> Edition:
                          </span>
                          <span style="color: gray;">2019</span>


                          <p style="margin-top: 5px; font-weight: bold; align-items: center;">Description</p>

                          <p class="text-justify">
                            The story begins when a band of seven “uncool” 11-year-olds, led by Bill Denbrough,
                            discovers and battles an evil, shape-changing monster that the children call “It.”
                            It attacks every 27 years, taking on a variety of terrifying guises—predominantly that of
                            the clown Pennywise—and committing appalling acts. One of those acts is the
                            killing of Bills six-year-old brother George.The story begins when a band of seven
                            “uncool” 11-year-olds, led by Bill Denbrough, discovers and battles an evil, shape-changing
                            monster that the children call “It.”
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">

                    <div class="wishlist-container">
                      <div class="heart-and-button ">

                        <button class="wishlist-button" onclick="showBorrowConfirmation() " style="background-color: #711717; color: white;padding: 5px 20px;">BORROW</button>
                        <button class="wishlist-button" onclick="showReserveConfirmation()" style=" padding: 5px 20px;">RESERVE</button>
                        <span class="heart-icon">
                          <button class="wishlist " style=" border: none;  "><i class="bi bi-heart-fill " style="font-size: 18px;"></i></button>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


          </div>
        </div>




        <div class="col-12 col-md-3 mt-3">
          <div class="wrapper d-flex justify-content-center mt-0">
            <!-- First Row -->
            <div class="totalU p-1 bg-white shadow mb-2 custom-container">
              <button class="new-button">NEW</button>
              <img src="../images/book1.jpg" alt="Icon" style="width: 130px; height: 150px; margin-top: 24px;">
              <i>
                <h6 class="text-start mt-1 text-danger" style="font-size: 13px;">IT</h6>
              </i>
              <h6 class="text-start" style="font-size: 13px; margin-top: 5px;">Stephen King</h6>
              <button class="wishlist-button mt-1" data-toggle="modal" data-target="#borrowModal">BORROW</button>
            </div>

            <!-- Modal for button borrow-->
            <div class="modal fade" id="borrowModal" tabindex="-1" role="dialog" aria-labelledby="borrowModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="borrowModalLabel">Borrow Book</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="container-fluid">
                      <div class="row">
                        <!-- Photo in the Left Side -->
                        <div class="col-md-5">
                          <img src="../images/book1.jpg" style="width: 100%; " alt="book sample">
                        </div>

                        <!-- Text in the Right Side -->
                        <div class="col-md-7">
                          <h4 class="text-start mt-1 fw-bold" style="font-size: 18px; color: #711717; ">IT Movie</h4>
                          <p class="mt-0 fw-bold">Author:
                            <span style="color: gray;">Stephen King</span>
                          </p>
                          <p style="margin-top: -15px; font-weight: bold;">Genre:
                            <span style="color: gray;">Fiction</span>
                          </p>

                          <p style="margin-top: -15px; font-weight: bold;">Publisher:
                            <span style="color: gray;">XYZ Inc.</span>
                          </p>

                          <p style="margin-top: -15px !important; font-weight: bold; display: inline-block;">
                            Status: <span style="color: green;">Available</span>
                          </p>

                          <span style="color: black; margin-top: -15px; font-weight: bold;  margin-left: 90px;"> Shelf: </span>
                          <span style="color: gray;">CN1023</span>

                          <p style="margin-top: -15px !important; font-weight: bold; display: inline-block;">
                            ISBN: <span style="color: gray;">1234567898527</span>
                          </p>

                          <span style="color: black; margin-top: -15px; font-weight: bold;  margin-left: 50px;"> Edition:
                          </span>
                          <span style="color: gray;">2019</span>


                          <p style="margin-top: 5px; font-weight: bold; align-items: center;">Description</p>

                          <p class="text-justify">
                            The story begins when a band of seven “uncool” 11-year-olds, led by Bill Denbrough,
                            discovers and battles an evil, shape-changing monster that the children call “It.”
                            It attacks every 27 years, taking on a variety of terrifying guises—predominantly that of
                            the clown Pennywise—and committing appalling acts. One of those acts is the
                            killing of Bills six-year-old brother George.The story begins when a band of seven
                            “uncool” 11-year-olds, led by Bill Denbrough, discovers and battles an evil, shape-changing
                            monster that the children call “It.”
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">

                    <div class="wishlist-container">
                      <div class="heart-and-button ">

                        <button class="wishlist-button" onclick="showBorrowConfirmation() " style="background-color: #711717; color: white;padding: 5px 20px;">BORROW</button>
                        <button class="wishlist-button" onclick="showReserveConfirmation()" style=" padding: 5px 20px;">RESERVE</button>
                        <span class="heart-icon">
                          <button class="wishlist " style=" border: none;  "><i class="bi bi-heart-fill " style="font-size: 18px;"></i></button>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>




          </div>
        </div>

        <div class="col-12 col-md-3 mt-3">
          <div class="wrapper d-flex justify-content-center mt-0">
            <!-- First Row -->
            <div class="totalU p-1 bg-white shadow mb-2 custom-container">
              <button class="new-button">NEW</button>
              <img src="../images/book1.jpg" alt="Icon" style="width: 130px; height: 150px; margin-top: 24px;">
              <i>
                <h6 class="text-start mt-1 text-danger" style="font-size: 13px;">IT</h6>
              </i>
              <h6 class="text-start" style="font-size: 13px; margin-top: 5px;">Stephen King</h6>
              <button class="wishlist-button mt-1" data-toggle="modal" data-target="#borrowModal">BORROW</button>
            </div>

            <!-- Modal for button borrow-->
            <div class="modal fade" id="borrowModal" tabindex="-1" role="dialog" aria-labelledby="borrowModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="borrowModalLabel">Borrow Book</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="container-fluid">
                      <div class="row">
                        <!-- Photo in the Left Side -->
                        <div class="col-md-5">
                          <img src="../images/book1.jpg" style="width: 100%; " alt="book sample">
                        </div>

                        <!-- Text in the Right Side -->
                        <div class="col-md-7">
                          <h4 class="text-start mt-1 fw-bold" style="font-size: 18px; color: #711717; ">IT Movie</h4>
                          <p class="mt-0 fw-bold">Author:
                            <span style="color: gray;">Stephen King</span>
                          </p>
                          <p style="margin-top: -15px; font-weight: bold;">Genre:
                            <span style="color: gray;">Fiction</span>
                          </p>

                          <p style="margin-top: -15px; font-weight: bold;">Publisher:
                            <span style="color: gray;">XYZ Inc.</span>
                          </p>

                          <p style="margin-top: -15px !important; font-weight: bold; display: inline-block;">
                            Status: <span style="color: green;">Available</span>
                          </p>

                          <span style="color: black; margin-top: -15px; font-weight: bold;  margin-left: 90px;"> Shelf: </span>
                          <span style="color: gray;">CN1023</span>

                          <p style="margin-top: -15px !important; font-weight: bold; display: inline-block;">
                            ISBN: <span style="color: gray;">1234567898527</span>
                          </p>

                          <span style="color: black; margin-top: -15px; font-weight: bold;  margin-left: 50px;"> Edition:
                          </span>
                          <span style="color: gray;">2019</span>


                          <p style="margin-top: 5px; font-weight: bold; align-items: center;">Description</p>

                          <p class="text-justify">
                            The story begins when a band of seven “uncool” 11-year-olds, led by Bill Denbrough,
                            discovers and battles an evil, shape-changing monster that the children call “It.”
                            It attacks every 27 years, taking on a variety of terrifying guises—predominantly that of
                            the clown Pennywise—and committing appalling acts. One of those acts is the
                            killing of Bills six-year-old brother George.The story begins when a band of seven
                            “uncool” 11-year-olds, led by Bill Denbrough, discovers and battles an evil, shape-changing
                            monster that the children call “It.”
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">

                    <div class="wishlist-container">
                      <div class="heart-and-button ">

                        <button class="wishlist-button" onclick="showBorrowConfirmation() " style="background-color: #711717; color: white;padding: 5px 20px;">BORROW</button>
                        <button class="wishlist-button" onclick="showReserveConfirmation()" style=" padding: 5px 20px;">RESERVE</button>
                        <span class="heart-icon">
                          <button class="wishlist " style=" border: none;  "><i class="bi bi-heart-fill " style="font-size: 18px;"></i></button>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>




          </div>
        </div>



      </div>
    </div>
    <hr style="margin-left: -50px;">
  </main>


  <!---Recommended info-->
  <main>

    <div class="container-fluid">
      <div class="row justify-content-start">
        <h6 class="mt-2 ml-3"> <b>Recommendations</h6></b>

        <div class="col-12 col-md-3 mt-3">
          <div class="wrapper d-flex justify-content-center mt-0">
            <!-- First Row -->
            <div class="totalU p-1 bg-white shadow mb-2 custom-container">
              <button class="new-button">OUT OF STOCKS</button>
              <img src="../images/book2.jpg" alt="Icon" style="width: 130px; height: 150px; margin-top: 24px;">
              <i>
                <h6 class="text-start mt-1 text-danger" style="font-size: 13px;">Harry Potter</h6>
              </i>
              <h6 class="text-start" style="font-size: 13px; margin-top: 5px;">Stephen King</h6>
              <div class="wishlist-container">
                <div class="heart-and-button">

                  <button class="wishlist-button">NOTIFY ME</button>
                  <span class="heart-icon">
                    <button class="wishlist"><i class="bi bi-heart-fill "></i></button>
                  </span>
                </div>
              </div>
            </div>


          </div>
        </div>

        <div class="col-12 col-md-3 mt-3">
          <div class="wrapper d-flex justify-content-center mt-0">
            <!-- First Row -->
            <div class="totalU p-1 bg-white shadow mb-2 custom-container">
              <button class="new-button">OUT OF STOCKS</button>
              <img src="../images/book2.jpg" alt="Icon" style="width: 130px; height: 150px; margin-top: 24px;">
              <i>
                <h6 class="text-start mt-1 text-danger" style="font-size: 13px;">Harry Potter</h6>
              </i>
              <h6 class="text-start" style="font-size: 13px; margin-top: 5px;">Stephen King</h6>
              <div class="wishlist-container">
                <div class="heart-and-button">

                  <button class="wishlist-button">NOTIFY ME</button>
                  <span class="heart-icon">
                    <button class="wishlist"><i class="bi bi-heart-fill "></i></button>
                  </span>
                </div>
              </div>
            </div>


          </div>
        </div>
        <div class="col-12 col-md-3 mt-3">
          <div class="wrapper d-flex justify-content-center mt-0">
            <!-- First Row -->
            <div class="totalU p-1 bg-white shadow mb-2 custom-container">
              <button class="new-button">NEW</button>
              <img src="../images/book2.jpg" alt="Icon" style="width: 130px; height: 150px; margin-top: 24px;">
              <i>
                <h6 class="text-start mt-1 text-danger" style="font-size: 13px;">Harry Potter</h6>
              </i>
              <h6 class="text-start" style="font-size: 13px; margin-top: 5px;">J.K Rowling</h6>
              <button class="wishlist-button mt-1">BORROW</button>
            </div>

          </div>
        </div>
        <div class="col-12 col-md-3 mt-3">
          <div class="wrapper d-flex justify-content-center mt-0">
            <!-- First Row -->
            <div class="totalU p-1 bg-white shadow mb-2 custom-container">
              <img src="../images/book2.jpg" alt="Icon" style="width: 130px; height: 150px; margin-top: 24px;">
              <i>
                <h6 class="text-start mt-1 text-danger" style="font-size: 13px;">Harry Potter</h6>
              </i>
              <h6 class="text-start" style="font-size: 13px; margin-top: 5px;">Bill Gates</h6>
              <button class="wishlist-button mt-1">BORROW</button>
            </div>

          </div>
        </div>


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


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const searchForm = document.getElementById("searchForm");
      const searchInput = document.getElementById("searchInput");
      const searchButton = document.getElementById("searchButton");
      const bookItems = document.querySelectorAll(".totalU");

      // Function to filter book items based on search input
      function filterBooks() {
        const searchText = searchInput.value.toLowerCase();
        bookItems.forEach((item) => {
          const title = item.querySelector("h6.text-start").textContent.toLowerCase();
          if (title.includes(searchText)) {
            item.style.display = "block"; // Show matching items
          } else {
            item.style.display = "none"; // Hide non-matching items
          }
        });
      }

      // Add an event listener to the search button
      searchButton.addEventListener("click", function(e) {
        e.preventDefault();
        filterBooks();
      });

      // Add an event listener to the search input for real-time filtering
      searchInput.addEventListener("input", filterBooks);
    });

    document.addEventListener("DOMContentLoaded", function() {
      const homeButton = document.getElementById("homeButton");

      // Add the 'active' class to the button
      if (homeButton) {
        homeButton.classList.add("active");
      }
    });
  </script>

</body>

</html>