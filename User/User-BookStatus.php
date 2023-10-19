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
            <a class="navbar-brand me-auto ms-lg-0 ms-3  fw-bold px-3" href="#" style="color: black">USeP Library</a>
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
                            <li><a class="dropdown-item custom-dropdown-item bi-bookmark-heart" href="#">Book Status</a></li>
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



    <!--cATEGORY-->
    <main class="mt-0 pt-0 ">
        <div class="container-fluid">

            <div class="row ">

                <div class="col-md-3 ml-3 mb-1 mt-5 ">
                    <h5>Book Status</h5>
                </div>



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
                                                    <tr style="color: #711717;">
                                                        <th>BOOK TITLE </th>
                                                        <th>AUTHOR </th>
                                                        <th>QUANTITY</th>
                                                        <th>GENRE</th>
                                                        <th>DATE BORROWED</th>
                                                        <th>RETURN DATE </th>
                                                        <th>STATUS</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Software</td>
                                                        <td>Lor John</td>
                                                        <td>5</td>
                                                        <td>Fiction</td>
                                                        <td>10-17-2023</td>
                                                        <td>11-15-2023</td>
                                                        <td style="color: green; font-weight: bold;">Reserved</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Programming</td>
                                                        <td>Maeve Vill</td>
                                                        <td>1</td>
                                                        <td>Non Fiction</td>
                                                        <td>8-17-2023</td>
                                                        <td>06-27-2023</td>
                                                        <td style="color: green; font-weight: bold;">Returned</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Information Storage</td>
                                                        <td>Sheena MAe</td>
                                                        <td>3</td>
                                                        <td>Novel</td>
                                                        <td>05-11-2023</td>
                                                        <td>01-15-2023</td>
                                                        <td style="color: #711717; font-weight: bold;">Overdue</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Programming</td>
                                                        <td>Hanna King</td>
                                                        <td>1</td>
                                                        <td>Non Fiction</td>
                                                        <td>8-17-2023</td>
                                                        <td>06-27-2023</td>
                                                        <td style="color: green; font-weight: bold;">Returned</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Data Structure</td>
                                                        <td>Mishine</td>
                                                        <td>50</td>
                                                        <td>Java</td>
                                                        <td>12-17-2023</td>
                                                        <td>03-03-2023</td>
                                                        <td style="color: green; font-weight: bold;">Reserved</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Information Management</td>
                                                        <td>John Zing</td>
                                                        <td>5</td>
                                                        <td>Novel</td>
                                                        <td>10-17-2023</td>
                                                        <td>11-15-2023</td>
                                                        <td style="color: green; font-weight: bold;">Available</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Contemporary World</td>
                                                        <td>Gwynn Palsson</td>
                                                        <td>3</td>
                                                        <td>Novel</td>
                                                        <td>05-11-2023</td>
                                                        <td>01-15-2023</td>
                                                        <td style="color: #711717; font-weight: bold;">Overdue</td>
                                                    </tr>
                                                    <tr>
                                                        <td>IT</td>
                                                        <td>Stephen King</td>
                                                        <td>5</td>
                                                        <td>Fiction</td>
                                                        <td>10-17-2023</td>
                                                        <td>11-15-2023</td>
                                                        <td style="color: green; font-weight: bold;">Reserved</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Data Privacy</td>
                                                        <td>Reyin Henz</td>
                                                        <td>5</td>
                                                        <td>Non Fiction</td>
                                                        <td>10-17-2023</td>
                                                        <td>11-15-2023</td>
                                                        <td style="color: green; font-weight: bold;">Available</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Information Data</td>
                                                        <td>Lowell Zing</td>
                                                        <td>5</td>
                                                        <td>Fiction</td>
                                                        <td>10-17-2023</td>
                                                        <td>11-15-2023</td>
                                                        <td style="color: green; font-weight: bold;">Available</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Java</td>
                                                        <td>Carla Jean</td>
                                                        <td>3</td>
                                                        <td>Novel</td>
                                                        <td>05-11-2023</td>
                                                        <td>01-15-2023</td>
                                                        <td style="color: #711717; font-weight: bold;">Overdue</td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr style="color: #711717;">
                                                        <th>BOOK TITLE </th>
                                                        <th>AUTHOR </th>
                                                        <th>QUANTITY</th>
                                                        <th>GENRE</th>
                                                        <th>DATE BORROWED</th>
                                                        <th>RETURN DATE </th>
                                                        <th>STATUS</th>
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
    <script src="../script/AddBook.js"></script>
    <script src="../script/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="../script/jquery-3.5.1.js"></script>
    <script src="../script/jquery.dataTables.min.js"></script>
    <script src="../script/dataTables.bootstrap5.min.js"></script>
    <script src="../script/script.js"></script>


</body>

</html>