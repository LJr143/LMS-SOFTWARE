<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="../css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="../css/User-Dahsboard.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
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
            <a class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase  fw-bold px-3" href="#" style="color: black">USeP
                Library</a>
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

                            <li><button class="dropdown-item custom-dropdown-item bi-plug" onclick="showLogoutConfirmation()">Log
                                    out</button>
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
                            <a href="#" class="nav-link px-3 text-dark">
                                <span class="me-2"><i class="bi bi-journal"></i></span>
                                <span>Books</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link px-3 text-dark">
                                <span class="me-2"><i class="bi bi-card-checklist"></i></span>
                                <span>Wishlist</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link px-3 text-dark">
                                <span class="me-2"><i class="bi bi-flag"></i></span>
                                <span>Penalties</span>
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




                <div class="col-md-5 mb-1">
                    <div class="col-md-5 col-sm-5 formCategory" style="width: 100%;">
                        <form id="searchForm" action="#" method="POST">
                            <div class="input-group">
                                <input id="searchInput" type="text" class="form-control" placeholder="Search Book Title" style="font-size: 14px;">
                                <div class="input-group-append">
                                    <button id="searchButton" class="btn btn-danger" style="background-color: #711717;" type="button">
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
                <h6 class="mt-3"> <b>New Arrivals</h6></b>

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
                            <button class="wishlist-button">BORROW</button>
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
                            <button class="wishlist-button">BORROW</button>
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
                                <h6 class="text-start mt-1 text-danger" style="font-size: 13px;">Harry Potter</h6>
                            </i>
                            <h6 class="text-start" style="font-size: 13px; margin-top: 5px;">J.K Rowling</h6>
                            <button class="wishlist-button">BORROW</button>
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
                <h6 class="mt-2 "> <b>Reccomendations</h6></b>

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
                            <button class="wishlist-button">BORROW</button>
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
                            <button class="wishlist-button">BORROW</button>
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
    </script>



</body>

</html>