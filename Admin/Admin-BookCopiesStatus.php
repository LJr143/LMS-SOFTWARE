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
    <link rel="stylesheet" href="../css/Admin-BookCopiesStatus.css" />
    <title>Library Management System</title>
</head>
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
                    <h5>Book Copies Status</h5>
                </div>
                <div class="import col-1">
                    <img class="excel" src="../images/icons8-export-excel-48.png" alt="import excel">
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
                                                        <th>ID </th>
                                                        <th>BOOK TITLE </th>
                                                        <th>ISBN</th>
                                                        <th>ISSUED TO</th>
                                                        <th>ISSUED DATE</th>
                                                        <th>FINE </th>
                                                        <th>USER TYPE </th>
                                                        <th>STATUS</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Software</td>
                                                        <td>5674498433214</td>
                                                        <td>Lor John</td>
                                                        <td>11-15-2023</td>
                                                        <td>P500 </td>
                                                        <td>Student</td>
                                                        <td style="color: black; font-weight: bold;">
                                                            <div style="padding: 5px; text-align: center; background-color: #FDA700; border-radius: 5px;">OVERDUE</div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Programming</td>
                                                        <td>1887456893567</td>
                                                        <td>Maeve Vill</td>
                                                        <td>8-17-2023</td>
                                                        <td>P800 </td>
                                                        <td>Teacher</td>
                                                        <td style="color: black; font-weight: bold;">
                                                            <div style="padding: 5px; text-align: center; background-color: #0038FD; border-radius: 5px;">UNRETURNED</div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>Information Storage</td>
                                                        <td>3455678352356</td>
                                                        <td>Sheena Mae</td>
                                                        <td>05-11-2023</td>
                                                        <td>P390</td>
                                                        <td>Student</td>
                                                        <td style="color: black; font-weight: bold;">
                                                            <div style="padding: 5px; text-align: center; background-color: #0038FD; border-radius: 5px;">UNRETURNED</div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td>Information Storage</td>
                                                        <td>3455678352356</td>
                                                        <td>Hanajenie King</td>
                                                        <td>8-17-2023</td>
                                                        <td>P2000</td>
                                                        <td>Student</td>
                                                        <td style="color: black; font-weight: bold;">
                                                            <div style="padding: 5px; text-align: center; background-color: #AF2323; border-radius: 5px;">LOST</div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>14</td>
                                                        <td>Data Structure</td>
                                                        <td>5004567780356</td>
                                                        <td>Mishine Gray</td>
                                                        <td>12-17-2023</td>
                                                        <td>P350</td>
                                                        <td>Student</td>
                                                        <td style="color: black; font-weight: bold;">
                                                            <div style="padding: 5px; text-align: center; background-color: #FDA700; border-radius: 5px;">OVERDUE</div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>9</td>
                                                        <td>Information Management</td>
                                                        <td>5354567509723</td>
                                                        <td>John Zing</td>
                                                        <td>10-17-2023</td>
                                                        <td>P690</td>
                                                        <td>Student</td>
                                                        <td style="color: black; font-weight: bold;">
                                                            <div style="padding: 5px; text-align: center; background-color: #FDA700; border-radius: 5px;">OVERDUE</div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>34</td>
                                                        <td>Contemporary World</td>
                                                        <td>3213345777894</td>
                                                        <td>Gwynnie Palssy</td>
                                                        <td>05-11-2023</td>
                                                        <td>P480 </td>
                                                        <td>Teacher</td>
                                                        <td style="color: black; font-weight: bold;">
                                                            <div style="padding: 5px; text-align: center; background-color: #AF2323; border-radius: 5px;">LOST</div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>88</td>
                                                        <td>IT</td>
                                                        <td>599854384765</td>
                                                        <td>Stephen King</td>
                                                        <td>10-17-2023</td>
                                                        <td>P920 </td>
                                                        <td>Teacher</td>
                                                        <td style="color: black; font-weight: bold;">
                                                            <div style="padding: 5px; text-align: center; background-color: #0038FD; border-radius: 5px;">UNRETURNED</div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>10</td>
                                                        <td>Data Privacy</td>
                                                        <td>5887443659575</td>
                                                        <td>Reyin Henz</td>
                                                        <td>10-17-2023</td>
                                                        <td>P400</td>
                                                        <td>Student</td>
                                                        <td style="color: black; font-weight: bold;">
                                                            <div style="padding: 5px; text-align: center; background-color: #FDA700; border-radius: 5px;">OVERDUE</div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>Information Data</td>
                                                        <td>547858009376</td>
                                                        <td>Lowell Zing</td>
                                                        <td>10-17-2023</td>
                                                        <td>P270</td>
                                                        <td>Student</td>
                                                        <td style="color: black; font-weight: bold;">
                                                            <div style="padding: 5px; text-align: center; background-color: #0038FD; border-radius: 5px;">UNRETURNED</div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>20</td>
                                                        <td>Java</td>
                                                        <td>3768469803345</td>
                                                        <td>Carlajinn</td>
                                                        <td>05-11-2023</td>
                                                        <td>P6970</td>
                                                        <td>Student</td>
                                                        <td style="color: black; font-weight: bold;">
                                                            <div style="padding: 5px; text-align: center; background-color: #AF2323; border-radius: 5px;">LOST</div>
                                                        </td>
                                                    </tr>
                                                </tbody>
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