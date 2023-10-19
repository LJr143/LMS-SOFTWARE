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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="../css/CreditScore.css" />
    <title>Library Management System</title>
</head>

<body>
    <!-- top navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbarTop fixed-top shadow-sm">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon " data-bs-target="#sidebar"></span>
            </button>
            <img src="../images/usep-logo.png" class="logo navbar-toggler-icon " style="width: 40px ;height:40px">
            <a class="navbar-brand me-auto ms-lg-0 ms-3 fw-bold px-3" href="#" style="color: black">USeP Library</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavBar" aria-controls="topNavBar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse topNavBar">
                <form class="d-flex ms-auto my-3 my-lg-0">

                </form>
                <ul class="navbar-nav person">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle ms-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-fill text-warning " style="font-size: 24px;"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item custom-dropdown-item bi-person" href="#">Manage Account</a></li>
                            <li><a class="dropdown-item custom-dropdown-item bi-bookmark-heart" href="../User/User-BookStatus.html">Book Status</a></li>
                            <li><a class="dropdown-item custom-dropdown-item bi-question-circle" href="#">Help</a></li>
                            <li><a class="dropdown-item custom-dropdown-item bi-rss" href="#">Feedback</a></li>
                            <hr>

                            <li><button class="dropdown-item custom-dropdown-item bi-plug" onclick="showLogoutConfirmation()">Log out</button>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- top navigation bar -->

    <main class="secondtop mt-4  pt-1">
        <div class="container-fluid">
            <div class="row bg-white shadow mt-3">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link px-5 text-dark">
                                <span>BOOKS</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link px-5 text-dark">
                                <span>WISHLIST</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link px-5 text-dark">
                                <span>PENALTIES</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link px-5 text-dark">
                                <span>CREDIT SCORE</span>
                            </a>
                        </li>

                    </ul>
                </nav>
            </div>
        </div>
    </main>

    <!--dashboard start-->
    <main class="mt-0 mb-1 pt-5" style="margin-top: -23px !important;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-1">
                    <button id="homeButton" class="minimize-button">Home </button>
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

                <div class="col-md-8 mb-1 mt-0">
                    <div class="col-md-5 col-sm-5 formCategory" style="width: 100%; height: 9px;">
                        <form id="searchForm" action="#" method="POST">
                            <div class="input-group">
                                <input id="searchInput" type="text" class="form-control" placeholder="Search Book Title" style="font-size: 13px; padding: 10px; height: 9%;">
                                <div class="input-group-append">
                                    <button id="searchButton" class="btn btn-danger" style="background-color: #711717; padding: 6px;" type="button">
                                        <i class="bi bi-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-4 mb-1 mt-0">
                    <h5 class="mt-2 ml-4" style="font-weight: bold; width:28%;">Credit Score</h5>
                    <div class="card ml-4">
                        <div class="card-body">
                            <canvas id="myPieChart" width="300px" height="300px"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-8 mb-1 mt-3 p-5">
                    <h6 class="mt-2 ml-4" style="font-style:italic; width:28%;">Borrowing History</h6>
                    <div class="ml-4 shadow-sm p-2" style="background-color: white; height:12%; width:90%; font-size:14px;">
                        <span class="ml-5" style="margin-left: 10%;">A Cat in the City</span>
                        <span style="margin-left: 57%; color:green;">RETURNED</span>
                    </div>
                    <div class="ml-4 mt-1 shadow-sm p-2" style="background-color: white; height:12%; width:90%; font-size:14px;">
                        <span class="ml-5">A Doe in the Forest</span>
                        <span style="margin-left: 54%; color:green;">RETURNED</span>
                    </div>
                    <div class="ml-4 mt-1 shadow-sm p-2" style="background-color: white; height:12%; width:90%; font-size:14px;">
                        <span class="ml-5">Harry Potter</span>
                        <span style="margin-left: 61%; color:green;">RETURNED</span>
                    </div>
                </div>
            </div>
    </main>

    <!--script-->
    <script src="../script/AdminDashboard.js"></script>
    <script src="../script/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="../script/jquery-3.5.1.js"></script>
    <script src="../script/jquery.dataTables.min.js"></script>
    <script src="../script/dataTables.bootstrap5.min.js"></script>
    <script src="../script/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="../script/CreditScore.js"></script>

</body>

</html>