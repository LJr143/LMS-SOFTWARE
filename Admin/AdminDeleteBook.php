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
                        <div style="float: left; width: auto; font-size: smaller ">
                            <img class="cover-image" src="../images/bookcover.png" alt="Book Cover" style="height: 25%; width: 40%; ">
                            <div class="small-letters mt-2">AVAILABLE</div>
                            <div class="book-copies">Book Copies:</div>
                        </div>
                        <div id="info">
                            <div class="bookTitle">The Cat in the Forest</div>
                            <div>Laura Tauven</div>
                            <div>ISBN: 978-3-16-148410-0</div>
                            <div>Location:</div>
                            <div>Genre:</div>
                            <div>Description:</div>
                            <div class="description">Lorem ipsum dolor sit amet, <br> consectetur adipiscing elit<b>...see more</b></div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="box" style="width: 320px; height: 253px;">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="box2" name="available">
                        </div>
                        <div style="float: left; width: auto; font-size: smaller ">
                            <img class="cover-image" src="../images/bookcover.png" alt="Book Cover" style="height: 25%; width: 40%; ">
                            <div class="small-letters mt-2">AVAILABLE</div>
                            <div class="book-copies">Book Copies:</div>
                        </div>
                        <div id="info">
                            <div class="bookTitle">The Cat in the City</div>
                            <div>Laura Tauven</div>
                            <div>ISBN: 978-3-16-148410-0</div>
                            <div>Location:</div>
                            <div>Genre:</div>
                            <div>Description: </div>
                            <div class="description">Lorem ipsum dolor sit amet, <br> consectetur adipiscing elit<b>...see more</b></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box" style="width: 320px; height: 253px;">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="box3" name="available">
                        </div>
                        <div style="float: left; width: auto; font-size: smaller ">
                            <img class="cover-image" src="../images/bookcover.png" alt="Book Cover" style="height: 25%; width: 40%; ">
                            <div class="small-letters mt-2">AVAILABLE</div>
                            <div class="book-copies">Book Copies:</div>
                        </div>
                        <div id="info">
                            <div class="bookTitle">The Doe in the Forest</div>
                            <div>Laura Tauven</div>
                            <div>ISBN: 978-3-16-148410-0</div>
                            <div>Location:</div>
                            <div>Genre:  </div>
                            <div>Description: </div>
                            <div class="description">Lorem ipsum dolor sit amet, <br> consectetur adipiscing elit<b>...see more</b></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box" style="width: 320px; height: 253px;">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="box4" name="available">
                        </div>
                        <div style="float: left; width: auto; font-size: smaller ">
                            <img class="cover-image" src="../images/bookcover.png" alt="Book Cover" style="height: 25%; width: 40%; ">
                            <div class="small-letters mt-2">AVAILABLE</div>
                            <div class="book-copies">Book Copies:</div>
                        </div>
                        <div id="info">
                            <div class="bookTitle">The Cat in the City</div>
                            <div>Laura Tauven</div>
                            <div>ISBN: 978-3-16-148410-0</div>
                            <div>Location:</div>
                            <div>Genre: </div>
                            <div>Description: </div>
                            <div class="description">Lorem ipsum dolor sit amet, <br> consectetur adipiscing elit<b>...see more</b></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box" style="width: 320px; height: 253px;">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="box5" name="available">
                        </div>
                        <div style="float: left; width: auto; font-size: smaller ">
                            <img class="cover-image" src="../images/bookcover.png" alt="Book Cover" style="height: 25%; width: 40%; ">
                            <div class="small-letters mt-2">AVAILABLE</div>
                            <div class="book-copies">Book Copies:</div>
                        </div>
                        <div id="info">
                            <div class="bookTitle">The doe in the Forest</div>
                            <div>Laura Tauven</div>
                            <div>ISBN: 978-3-16-148410-0</div>
                            <div>Location:</div>
                            <div>Genre:  </div>
                            <div>Description: </div>
                            <div class="description">Lorem ipsum dolor sit amet, <br> consectetur adipiscing elit<b>...see more</b></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box" style="width: 320px; height: 253px;">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="box6" name="available">
                        </div>
                        <div style="float: left; width: auto; font-size: smaller ">
                            <img class="cover-image" src="../images/bookcover.png" alt="Book Cover" style="height: 25%; width: 40%; " onclick="openModal()">
                            <div class="small-letters mt-2">AVAILABLE</div>
                            <div class="book-copies">Book Copies:</div>
                        </div>
                        <div id="info">
                            <div class="bookTitle" onclick="openModal()">The Cat in the Forest</div>
                            <div>Laura Tauven</div>
                            <div>ISBN: 978-3-16-148410-0</div>
                            <div>Location:</div>
                            <div>Genre:  </div>
                            <div>Description: </div>
                            <div class="description" onclick="openModal(1)">Lorem ipsum dolor sit amet, <br> consectetur adipiscing elit<b>...see more</b></div>
                        </div>
                    </div>
                </div>
                
                
                <div class="buttonContainer">
                    <button type="submit" class=" btn clear" id="clearallAdminButton" disabled>CLEAR</button>
                    <button type="submit" class="btn delete ms-2" id="deleteallAdminButton" disabled>DELETE</button>
                </div>

            </div>
            <div class="modal" id="myModal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <div id="modalContent">
        <div id="info">
                            <img class="cover-image" src="../images/bookcover.png" alt="Book Cover" style="height: 25%; width: 40%; ">
                            <div class="small-letters mt-2">AVAILABLE</div>
                            <div class="book-copies">Book Copies:</div>
                            <div class="bookTitle">The doe in the Forest</div>
                            <div>Laura Tauven</div>
                            <div>ISBN: 978-3-16-148410-0</div>
                            <div>Location:</div>
                            <div>Genre:  </div>
                            <div>Description: </div>
                            <div class="description">Lorem ipsum dolor sit amet, <br> consectetur adipiscing elit<b>...see more</b></div>
                        </div>                                                                      
        </div>
    </div>
</div>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="../script/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/chart.js/3.0.2/dist/chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="../script/jquery.dataTables.min.js"></script>
<script src="../script/dataTables.bootstrap5.min.js"></script>
<script src="../script/script.js"></script>
<script src="../script/AdminDeleteBook.js"></script>

</body>

</html>