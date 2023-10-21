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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,700'>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="../css/CreditScore.css" />
    <link rel="stylesheet" href="../css/User-Dahsboard.css" />
    <title>Library Management System</title>
</head>


<style>


    .color-red {
        stop-color: #e23131;
    }

    .color-yellow {
        stop-color: #fbe500;
    }

    .color-green {
        stop-color: #25cd6b;
    }
    .gauge-container {
        padding: 20px;
        margin-top: 80px;
        display: flex;
        justify-content: space-around;
    }

    .gauge {
        height: 220px;
        width: 500px;
    }

    .gauge .dxg-range.dxg-background-range {
        fill: url(#gradientGauge);
    }


    svg{
        background-color: white;
    }
</style>

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
                        <span style="color: white">Menu</span>
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
            <div class="row">

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

            <div class="container">
                <div class="row m-3">
                    <div class="col-md-5 mb-1 mt-3 ">
                        <h5 class="mt-4 ml-4 mb-3" style="font-weight: bold;">Credit Score</h5>
                        <div class="card ml-4">
                            <div class="card-body">
                                <div class="gauge-container mt-0">
                                    <div class="gauge"></div>
                                </div>

                                <svg width="0" height="0" version="1.1" class="gradient-mask" xmlns="http://www.w3.org/2000/svg">
                                    <defs>
                                        <linearGradient id="gradientGauge">
                                            <stop class="color-red" offset="0%" />
                                            <stop class="color-yellow" offset="17%" />
                                            <stop class="color-green" offset="40%" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-1 mt-5">
                        <h6 class="mt-2 ml-4" style="font-style: italic;">Borrowing History</h6>
                        <div class="ml-4 mt-2">
                            <div class="card shadow-sm" style="background-color: white; font-size:14px">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span>A Cat in the City</span>
                                        <span class="text-success">RETURNED</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ml-4 mt-2">
                            <div class="card shadow-sm" style="background-color: white; font-size:14px">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span>A Doe in the Forest</span>
                                        <span class="text-success">RETURNED</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ml-4 mt-2">
                            <div class="card shadow-sm" style="background-color: white; font-size:14px">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span>Harry Potter</span>
                                        <span class="text-success">RETURNED</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </main>




    < <!--script-->

        <script src="../script/User-Dashboard.js"></script>
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


        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.2/jquery.min.js'></script>
        <script src='https://cdn3.devexpress.com/jslib/17.1.6/js/dx.all.js'></script>


</body>

</html>