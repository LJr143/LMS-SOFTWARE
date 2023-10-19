<? error_reporting(E_ALL);
ini_set('display_errors', 1); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="../css/dataTables.bootstrap5.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link rel="stylesheet" href="../css/AdminDashboard.css" />
    <link rel="stylesheet" href="../css/AdminDeleteBook.css" />
    <title>Admin Delete Book</title>
</head>


<body>
    <!-- top navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbarTop fixed-top">
        <div class="container-fluid" id="upper">
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
                        <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#layouts">
                            <span class="me-2"><i class="bi bi-card-checklist"></i></span>
                            <span>Inventory</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-3 text-white">
                            <span class="me-2"><i class="bi bi-people"></i></span>
                            <span>Student</span>
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



    <main class="container-fluid">
        <div class="row mt-5 title">
            <div class="col-md-12">
                <h5 class="btitle">Book Inventory</h5>
            </div>
        </div>
        <div class="container mt-2" id="buttons-container">

            <div class="row mt-2 mb-1">
                <div class="col-md-2 ms-3">
                    <span class="clickable-text">ADD BOOK</span>
                </div>
                <div class="col-md-2">
                    <span class="clickable-text2">DELETE BOOK</span>
                </div>
                <div class="col-md-2">
                    <span class="clickable-text3">UPDATE BOOK</span>
                </div>


            </div>
        </div>
        <!-- Clickable text for Add Book, Update Book, and Delete Book -->
        <!-- Container for the checkboxes -->
        <div class="container mt-1 mb-4" id="checkbox-container">
            <div class="row">
                <div scope="col-7" class="cell-padding1" style="font-size: 12px; width: 100px; " id="checkall">
                    <input class="checkbox selectAllCheckbox mt-1" type="checkbox" id="selectAll">
                    <!-- Display this small text when hovering -->
                    <p class="text">Select All</p>
                </div>
                <div class="col-md-2 col-sm-5 formCategory">
                    <form id="SearchBy" action="#" method="POST">
                        <select class="selectOption" name="selectedOption">
                            <option value="option" selected disabled hidden>SEARCH BY</option>
                            <option value="option">Fictional</option>
                            <option value="option">Educational</option>
                            <option value="option">Filipiniana</option>
                            <option value="option">Video Tapes</option>
                            <option value="option" class="last-option">Others...</option>

                        </select>
                    </form>
                </div>
                <div class="search col-4 col-md-2 col-xl-2 col-xs-4 col-lg-4 col-sm-4 ms-2">
                    <div class="input-group searchBar col-sm-3">
                        <!--SEARCH BAR-->
                        <div class="input-group-text1 border-end-0 bg-transparent">
                            <i class="bi bi-search small-icon"></i>
                        </div>
                        <input type="text" class="form-control border-start-0" id="searchInput" placeholder="  Search...">
                    </div>
                </div>
                <div class="import col-1 ">
                    <img class="excel" src="../images/icons8-export-excel-48.png" alt="import excel">
                </div>
            </div>


            <div class="row mt-2">
                <!-- Row 1 -->

                <div class="col-md-4">
                    <div class="box" style="width: 320px; height: 253px;">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="box1" name="available">
                        </div>
                        <div style="float: left; width: auto; font-size: smaller; height:180%; width:85%;">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#borrowModal">
                                <img class="cover-image" src="../images/book1.jpg" alt="Book Cover" style="height: 38%; width: 40%;"></a>
                            <div class="small-letters mt-2">AVAILABLE</div>
                            <div class="book-copies">Book Copies:</div>
                        </div>
                        <div id="info">
                            <div class="bookTitle" data-bs-toggle="modal" data-bs-target="#borrowModal">IT</div>
                            <div>Stephen King</div>
                            <div>ISBN: 978-3-16-148410-0</div>
                            <div>Shelf: CN1023</div>
                            <div>Genre:</div>
                            <div>Description:</div>
                            <div class="description" data-bs-toggle="modal" data-bs-target="#borrowModal">The story begins when a band <br> of seven “uncool” 11-year-olds,<b>...see more</b></div>
                        </div>

                        <!-- Modal for button borrow-->
                        <div class="modal fade" id="borrowModal" tabindex="-1" role="dialog" aria-labelledby="borrowModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="borrowModalLabel">Book Details</h5>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
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

                                                <button class="wishlist-button" data-bs-dismiss="modal" style="padding: 5px 20px;">CANCEL</button>
                                                <button class="wishlist-button" onclick="showDeleteConfirmation()" style="background-color: #711717; color: white;padding: 5px 20px;">DELETE</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="box" style="width: 320px; height: 253px;" >
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="box2" name="available">
                        </div>
                        <div style="float: left; width: auto; font-size: smaller; height:180%; width:85%;">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#borrowModal">
                                <img class="cover-image" src="../images/book1.jpg" alt="Book Cover" style="height: 38%; width: 40%;"></a>
                            <div class="small-letters mt-2">AVAILABLE</div>
                            <div class="book-copies">Book Copies:</div>
                        </div>
                        <div id="info">
                            <div class="bookTitle" data-bs-toggle="modal" data-bs-target="#borrowModal">IT </div>
                            <div>Stephen King</div>
                            <div>ISBN: 978-3-16-148410-0</div>
                            <div>Shelf: CN1023</div>
                            <div>Genre:</div>
                            <div>Description: </div>
                            <div class="description" data-bs-toggle="modal" data-bs-target="#borrowModal">The story begins when a band <br> of seven “uncool” 11-year-olds,<b>...see more</b></div>
                        </div>
                        <!-- Modal for button borrow-->
                        <div class="modal fade" id="borrowModal" tabindex="-1" role="dialog" aria-labelledby="borrowModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="borrowModalLabel">Book Details</h5>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
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

                                                <button class="wishlist-button" data-bs-dismiss="modal" style="padding: 5px 20px;">CANCEL</button>
                                                <button class="wishlist-button" onclick="showDeleteConfirmation()" style="background-color: #711717; color: white;padding: 5px 20px;">DELETE</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="box" style="width: 320px; height: 253px;">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="box3" name="available">
                        </div>
                        <div style="float: left; width: auto; font-size: smaller; height:180%; width:85%;">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#borrowModal">
                                <img class="cover-image" src="../images/book1.jpg" alt="Book Cover" style="height: 38%; width: 40%;"></a>
                            <div class="small-letters mt-2">AVAILABLE</div>
                            <div class="book-copies">Book Copies:</div>
                        </div>
                        <div id="info">
                            <div class="bookTitle" data-bs-toggle="modal" data-bs-target="#borrowModal">IT</div>
                            <div>Stephen King</div>
                            <div>ISBN: 978-3-16-148410-0</div>
                            <div>Shelf: CN1023</div>
                            <div>Genre: </div>
                            <div>Description: </div>
                            <div class="description" data-bs-toggle="modal" data-bs-target="#borrowModal">The story begins when a band <br> of seven “uncool” 11-year-olds,<b>...see more</b></div>
                        </div>
                        <!-- Modal for button borrow-->
                        <div class="modal fade" id="borrowModal" tabindex="-1" role="dialog" aria-labelledby="borrowModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="borrowModalLabel">Book Details</h5>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
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

                                                <button class="wishlist-button" data-bs-dismiss="modal" style="padding: 5px 20px;">CANCEL</button>
                                                <button class="wishlist-button" onclick="showDeleteConfirmation()" style="background-color: #711717; color: white;padding: 5px 20px;">DELETE</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box" style="width: 320px; height: 253px;">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="box4" name="available">
                        </div>
                        <div style="float: left; width: auto; font-size: smaller ">
                            <img class="cover-image" src="../images/bookcover.png" alt="Book Cover" style="height: 25%; width: 40%;" data-bs-toggle="modal" data-bs-target="#bookModal2">
                            <div class="small-letters mt-2">AVAILABLE</div>
                            <div class="book-copies">Book Copies:</div>
                        </div>
                        <div id="info">
                            <div class="bookTitle" data-bs-toggle="modal" data-bs-target="#bookModal2">The Doe in the Forest</div>
                            <div>Laura Tauven</div>
                            <div>ISBN: 978-3-16-148410-0</div>
                            <div>Location:</div>
                            <div>Genre: </div>
                            <div>Description: </div>
                            <div class="description" data-bs-toggle="modal" data-bs-target="#bookModal2">A Doe in the forest is about  <br> a doe named Emily who can't <b>...see more</b></div>
                        </div>
                         <!-- Modal for button borrow-->
                         <div class="modal fade" id="bookModal2" tabindex="-1" role="dialog" aria-labelledby="borrowModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="borrowModalLabel">Book Details</h5>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <!-- Photo in the Left Side -->
                                                <div class="col-md-5">
                                                    <img src="../images/bookcover.png" style="width: 100%; " alt="book sample" data-bs-toggle="modal" data-bs-target="#bookModal2">
                                                </div>

                                                <!-- Text in the Right Side -->
                                                <div class="col-md-7">
                                                    <h4 class="text-start mt-1 fw-bold" style="font-size: 18px; color: #711717; ">The Doe in the Forest</h4>
                                                    <p class="mt-0 fw-bold">Author:
                                                        <span style="color: gray;">Laura Tauven</span>
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
                                                    A Doe in the forest is about a doe named Emily who can't find her family. She is sad and and lost in the forest.
                                                     She then finds them behind a Christmas tree! Teacher and review resources at the end....color pages, questions 
                                                     about the story, and more fun activities for readers to complete.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">

                                        <div class="wishlist-container">
                                            <div class="heart-and-button ">

                                                <button class="wishlist-button" data-bs-dismiss="modal" style="padding: 5px 20px;">CANCEL</button>
                                                <button class="wishlist-button" onclick="showDeleteConfirmation()" style="background-color: #711717; color: white;padding: 5px 20px;">DELETE</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box" style="width: 320px; height: 253px;">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="box5" name="available">
                        </div>
                        <div style="float: left; width: auto; font-size: smaller ">
                            <img class="cover-image" src="../images/bookcover.png" alt="Book Cover" style="height: 25%; width: 40%; " data-bs-toggle="modal" data-bs-target="#bookModal2">
                            <div class="small-letters mt-2">AVAILABLE</div>
                            <div class="book-copies">Book Copies:</div>
                        </div>
                        <div id="info">
                            <div class="bookTitle" data-bs-toggle="modal" data-bs-target="#bookModal2">The doe in the Forest</div>
                            <div>Laura Tauven</div>
                            <div>ISBN: 978-3-16-148410-0</div>
                            <div>Location:</div>
                            <div>Genre: </div>
                            <div>Description: </div>
                            <div class="description" data-bs-toggle="modal" data-bs-target="#bookModal2">A Doe in the forest is about  <br> a doe named Emily who can't <b>...see more</b></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box" style="width: 320px; height: 253px;">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="box6" name="available">
                        </div>
                        <div style="float: left; width: auto; font-size: smaller ">
                            <img class="cover-image" src="../images/bookcover.png" alt="Book Cover" style="height: 25%; width: 40%;" data-bs-toggle="modal" data-bs-target="#bookModal2">
                            <div class="small-letters mt-2">AVAILABLE</div>
                            <div class="book-copies">Book Copies:</div>
                        </div>
                        <div id="info1"> <!-- Changed the ID here -->
                            <div class="bookTitle" data-bs-toggle="modal" data-bs-target="#bookModal2">The Cat in the Forest</div>
                            <div>Laura Tauven</div>
                            <div>ISBN: 978-3-16-148410-0</div>
                            <div>Location:</div>
                            <div>Genre: </div>
                            <div>Description: </div>
                            <div class="description" data-bs-toggle="modal" data-bs-target="#bookModal2">A Doe in the forest is about  <br> a doe named Emily who can't <b>...see more</b></div>
                        </div>
                    </div>
                </div>


                <div class="buttonContainer">
                    <button type="submit" class="btn clear" id="clearallAdminButton" disabled>CLEAR</button>
                    <button type="submit" class="btn delete ms-2" id="deleteallAdminButton" disabled>DELETE</button>
                </div>

                <!-- Other similar sections for books 2 to 6 -->

            </div>


    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="../script/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="../script/jquery.dataTables.min.js"></script>
    <script src="../script/script.js"></script>
    <script src="../script/AdminDeleteBook.js"></script>
    <script>
        var myModal = document.getElementById('myModal')
        var myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', function() {
            myInput.focus()
        })
    </script>


</body>

</html>