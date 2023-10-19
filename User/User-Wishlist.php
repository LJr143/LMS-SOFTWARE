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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
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

    .navbar-toggler {
        background-color: #711717 !important;
    }

    .dropdown-item:hover {
        background-color: #fd7e14;
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
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s, color 0.3s, border-color 0.3s;
    }

    .wishlist-button:hover {
        background-color: #711717;
        color: white;
        border-color: #711717;
        border-radius: 3px;
    }

    .book-image {
        width: 100%;
    }

    .navbarTop {
        background-color: white;
    }

    td {
        vertical-align: middle !important;
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
    <main class="mt-0 pt-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 mb-1 mt-5">
                    <h5>My Wishlist</h5>
                </div>
                <div class="col-md-6 text-right mb-1 mt-5">
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
                                        <tr style="color: #711717;">
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
                                            <td> <a href="#"><span><i class="bi bi-trash3" style="font-size: 30px; color: #711717;"></i></span></td>
                                            </a>
                                        </tr>
                                        <tr>
                                            <th><img src="../images/book2.jpg" style="width: 40%;" alt="photo sample"> </th>
                                            <td>Data Structure </td>
                                            <td>Sheena Mae</td>
                                            <td style="color: green; font-weight: bold;">Available </td>
                                            <td> <a href="#"><span><i class="bi bi-trash3" style="font-size: 30px; color: #711717;"></i></span></td>
                                            </a>
                                        </tr>
                                        <tr>
                                            <th><img src="../images/book1.jpg" style="width: 40%;" alt="photo sample"> </th>
                                            <td>Programming </td>
                                            <td>Gwynn palsson</td>
                                            <td style="color: #711717; font-weight: bold;">Not Available </td>
                                            <td> <a href="#"><span><i class="bi bi-trash3" style="font-size: 30px; color: #711717;"></i></span></td>
                                            </a>
                                        </tr>
                                        <tr>
                                            <th><img src="../images/book1.jpg" style="width: 40%;" alt="photo sample"> </th>
                                            <td>IT </td>
                                            <td>Stephen King</td>
                                            <td style="color: green; font-weight: bold;">Available </td>
                                            <td> <a href="#"><span><i class="bi bi-trash3" style="font-size: 30px; color: #711717;"></i></span></td>
                                            </a>
                                        </tr>
                                        <tr>
                                            <th><img src="../images/book2.jpg" style="width: 40%;" alt="photo sample"> </th>
                                            <td>Java </td>
                                            <td>Hanna King</td>
                                            <td style="color: #711717; font-weight: bold;">Not Available </td>
                                            <td> <a href="#"><span><i class="bi bi-trash3" style="font-size: 30px; color: #711717;"></i></span></td>
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
    <script src="../script/AddBook.js"></script>
    <script src="../script/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="../script/jquery-3.5.1.js"></script>
    <script src="../script/jquery.dataTables.min.js"></script>
    <script src="../script/dataTables.bootstrap5.min.js"></script>
    <script src="../script/script.js"></script>



</body>

</html>