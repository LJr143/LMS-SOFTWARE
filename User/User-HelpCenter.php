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
    <link rel="stylesheet" href="../css/User-HelpCenter.css" />
    <link rel="stylesheet" href="../css/User-Dahsboard.css" />
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
                    <i class="bi bi-arrow-left"></i>
                    <span class="help">HELP CENTER</span>
                </nav>
            </div>
        </div>
    </main>

    <!--cATEGORY-->
    <main class="mt-0 pt-0 ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-12 leftContent">
                    <h2 class="title">Check out our articles</h2>
                    <h4 class="menu ml-4"><a href="">Getting Started</a></h4>
                    <h4 class="mt-2 ml-4"><a href="">Notification once book is available</a></h4>
                    <h4 class="mt-2 ml-4"><a href=""> Password</a></h4>
                    <h4 class="mt-2 ml-4"><a href="">Change Password</a></h4>

                </div>
                <div class="col-12 col-sm-12 rightContent">
                    <h2 class="form mb-4">HELP FORM</h2>
                    <form class="helpForm" action="submit.php" method="post" enctype="multipart/form-data">

                        <label for="firstName">First Name:</label>
                        <div class="input-group col-9 col-xs-12">
                            <input class="form-control mb-3" type="text" id="firstName" name="firstName" required><br>
                        </div>

                        <label for="email">Email Address:</label>
                        <div class="input-group col-9">
                            <input class="form-control mb-3" type="email" id="email" name="email" required><br>
                        </div>
                        <div class="input-group  mb-3 mt-3">
                            <input type="file" id="image" name="image" accept="image/*"><br>
                        </div>

                        <label for="description">Description of the Issue:</label>
                        <div class="input-group mb-3">
                            <textarea class="col-6" id="description" name="description" rows="10" required></textarea><br>
                        </div>
                        <div class="bottomButtons">
                            <button class="btn btnCancel" type="reset">CANCEL</button>
                            <button class="btn btnSubmit" type="submit">SUBMIT</button>
                        </div>
                    </form>


                </div>


            </div>
        </div>
    </main>




    <!--script-->

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

    <script>
        function openFileExplorer() {
            // Trigger the file input element
            document.getElementById("image").click();
        }

        // Display selected file name next to the "Browse" button
        document.getElementById("image").addEventListener("change", function() {
            const selectedFile = document.getElementById("image").files[0];
            document.getElementById("selectedFileName").textContent = selectedFile ? "Selected File: " + selectedFile.name : "";
        });
    </script>
</body>

</html>