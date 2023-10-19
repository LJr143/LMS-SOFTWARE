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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <title>Library Management System</title>
</head>
<style>
    body {
        background-color: #f0f0f0;
    }

    .custom-container {
        width: 180px;
        height: 270px;
        text-align: center;
        display: flex;
        align-items: center;
        flex-direction: column;
        justify-content: center;
    }

    .offcanvas-body {
        background-color: white !important;
    }

    .navbar-dark .navbar-nav .nav-link {
        color: black !important;
    }

    .navbar-dark .navbar-nav .nav-link:hover {
        background-color: #711717;
        width: 100% !important;
        color: white !important;
    }

    .dropdown-toggle::after {
        color: orange !important;
    }

    .selectOption {
        font-size: 13px !important;
        width: 200px !important;
        height: 35px !important;
    }

    .minimize-button {
        width: 60px;
        height: 30px;
        background-color: transparent;
        border: none;
        color: black;
        font-size: 13px;
    }

    .minimize-button:hover {
        background-color: #711717;
        color: white;
    }

    .wishlist-button {
        background-color: transparent;
        border: 1px solid #711717;
        color: #711717;
        border-radius: 3px;
        width: 100px;
        margin-top: -5px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 12px;
        cursor: pointer;
        transition: background-color 0.3s, color 0.3s, border-color 0.3s;
    }

    .wishlist {
        background-color: transparent;
        border: 1px solid #711717;
        color: #711717;
        border-radius: 3px;
        width: 40px;
        margin-top: -5px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 12px;
        cursor: pointer;
        transition: background-color 0.3s, color 0.3s, border-color 0.3s;
    }


    .wishlist-button:hover {
        background-color: #711717;
        color: white;
        border-color: #711717;
        border-radius: 5px;
    }

    .wishlist:hover {
        background-color: #711717;
        color: white;
        border-color: #711717;
        border-radius: 5px;
    }

    .new-button {
        background-color: orange;
        color: white;
        padding: 3px 15px;
        position: absolute;
        top: 0px;
        left: 0px;
        font-size: 12px;
        border: none;
    }

    .custom-container {
        position: relative;
    }

    .navbar-toggler {
        background-color: #711717 !important;
    }

    .dropdown-item:hover {
        background-color: #fd7e14;
        color: white;
    }

    .navbarTop {
        background-color: white;
    }
</style>

<body>
    <!-- top navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbarTop fixed-top shadow ">
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

    <main class="mt-5  pt-1">
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
                <h6 class="mt-2 ml-3"> <b>Recomendations</h6></b>

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



    <!--script for bar chart-->
    <script>
        //bar chart
        var ctxD = document.getElementById("barChart").getContext('2d');
        var myLineChart = new Chart(ctxD, {
            type: 'bar',
            data: {
                labels: ["First Quarter", "Second Quarter", "Third Quarter"],
                datasets: [{
                    data: [145, 257, 379],
                    backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C"],
                    hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870"]
                }]
            },
            options: {
                responsive: true
            }
        });
    </script>

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


        // modal for borrow book
        var myModal = document.getElementById('myModal')
        var myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', function() {
            myInput.focus()
        })
    </script>
    <script>
        // for confirmation borrow
        function showBorrowConfirmation() {
            // Sample hardcoded date (October 17, 2023)
            const today = new Date(2023, 9, 17);
            // Format date as MM/DD/YYYY
            const formattedBorrowDate = today.toLocaleDateString();
            // Update book returned date after confirming
            const returnedDate = new Date(today);
            returnedDate.setDate(today.getDate() + 14); // Assuming a 14-day borrowing period
            const formattedReturnedDate = returnedDate.toLocaleDateString();

            Swal.fire({
                title: 'Borrow Book Confirmation',
                html: `
        <p><strong>Are you sure you want to borrow this book?</strong></p>
        <p><strong>Borrowed Date:</strong> ${formattedBorrowDate}</p>
        <p><strong>Return Date:</strong> ${formattedReturnedDate}</p>
      `,
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#711717',
                cancelButtonColor: 'gray',
                confirmButtonText: 'Confirm',
                cancelButtonText: 'Cancel',
                iconHtml: '<i class="bi bi-check-circle" style="color: darkred;"></i>',
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: 'Book Borrowed!',
                        html: `
            <p><strong>Borrowed Date:</strong> ${formattedBorrowDate}</p>
            <p><strong>Return Date:</strong> ${formattedReturnedDate}</p>
            <p>Penalties will be given once it is overdue, including a daily late fee of $X and a suspension of borrowing privileges until the book is returned.<br>Proceed to the Library for pickup</p>
          `,
                        icon: 'success'
                    });
                }
            });
        }
    </script>



    <script>
        // for confirmation reserve
        function showReserveConfirmation() {
            // Get today's date
            const today = new Date();
            // Add 7 days to get the reserve date
            const reserveDate = new Date(today);
            reserveDate.setDate(today.getDate() - 3);
            // Format dates as MM/DD/YYYY
            const formattedReserveDate = reserveDate.toLocaleDateString();
            const formattedReturnDate = today.toLocaleDateString();

            Swal.fire({
                title: 'Reserve Book Confirmation',
                html: `
        <p><strong>Are you sure you want to reserve this book?</strong></p>
        <p>Reserved Date: <span style="color: #711717;">${formattedReserveDate}</span></p>
        <p>Return Date: <span style="color: #711717;">${formattedReturnDate}</span></p>
      `,
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#711717',
                cancelButtonColor: 'gray',
                confirmButtonText: 'Confirm',
                cancelButtonText: 'Cancel',
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: 'Book Reserved!',
                        html: `
            <p><strong>Reserved Date:</strong> ${formattedReserveDate}</p>
            <p><strong>Return Date:</strong> ${formattedReturnDate}</p>
            <p> Penalties will be given once it is overdue, including a daily late fee of $X and a suspension of borrowing privileges until the book is returned.<br>Proceed to the Library for pickup</p>
          
          `,
                        icon: 'success'
                    });
                }
            });
        }
    </script>






</body>

</html>