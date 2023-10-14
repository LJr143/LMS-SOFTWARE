<?php
session_start();
//error_reporting(0);
include 'config/db_config.php';


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>USeP LMS Login</title>
    <link rel="stylesheet" href="Super Admin/LogIn/style.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Noto+Sans:ital,wght@0,100;1,100&family=Poppins:ital,wght@0,100;0,200;0,300;0,500;1,100;1,300;1,400&display=swap" rel="stylesheet">
</head>
<body>
<div class="container-fluid col-md-12" style=" height: 100%; width: 100%; overflow: hidden; background-color: rgba(173,173,173,0.03) " >
<div class="container-fluid bg-white col-md-12 headerSection">
    <div class="container-fluid d-flex align-items-center" style="" >
        <img src= "images/usep-logo.png" style="width: 45px; height: 45px" alt="">
        <div class="container-fluid d-flex  align-items-center align-content-center" >
            <p style="margin: 10px 10px; font-weight: bold">USeP Library Management System</p>
        </div>
    </div>

</div>

<div class="d-flex container-fluid" >

    <div class="container-fluid col-md- d-flex justify-content-center align-content-center align-items-center" style=" min-height: 100vh; width: 100%; ">
        <div class="container formBox" style="height: 450px; width: 350px; z-index: 1000"  >
            <form action="#" method="post" style="padding: 10px 10px">
                <div class="  p-2">
                    <div class=" d-flex justify-content-center align-items-center mb-3">
                        <img src= "img/usep-logo.png" style="width: 100px; height: 100px; display: block" alt="">
                    </div>

                    <select  name="usertype" id="usertype" >
                        <option value="">Select User Type</option>
                        <option value="Librarian">Librarian</option>
                        <option value="Staff">Staff</option>
                    </select>
                </div>
                <div class="d-flex flex-wrap p-2" style=" height: 100%">
                    <label for="inputUsername" class="form-label">Username</label>
                    <input type="text" id="inputUsername" class="form-control" aria-describedby="passwordHelpBlock">
                    <label for="inputPassword" class="form-label">Password</label>
                    <input type="password" id="inputPassword" class="form-control" aria-describedby="passwordHelpBlock">

                </div>
                <div class="container-fluid">
                    <a href="#">Forgot Password?</a>
                </div>

                <div class="justify-content-center p-2">
                    <button type="submit" name="submit" id="login" class="btn btn-primary " style="width: 100%; font-size: 10px; height: 30px;">Login</button>
                </div>
                <div class="d-flex justify-content-center p-2">
                    <button style="border: 1px solid black; font-size: 10px;" type="button" class="btn btn-light p-2 justify-content-center">
                        <img style="width: 14px" src="images/google.png" alt=""> Login with Google</button>

                </div>


            </form>
        </div>
    </div>
</div>



</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
    $(document).ready(function() {
        $(function (){
            $("#login").click(function (event) {
                $("#login").prop("disabled", true);
                var useradmin = $("#usertype").val();
                var username = $("#inputUsername").val();
                var password = $("#inputPassword").val();

                $.ajax({
                    type: "POST",
                    url: "operations/AjaxLogin.php",
                    data: {
                        useradmin: useradmin,
                        username : username,
                        password : password
                    },
                    dataType: 'json',

                    success: function (response){
                        $("#login").prop("disabled", false);
                        console.log(response);
                        var len = response.length;
                        for( var i = 0; i<len; i++){
                            var login_result = response[i]['login_result'];
                            if(login_result == "success"){

                                window.location = 'admin/please_wait.php';

                            }else if(login_result == "wrong_password"){
                                Swal.fire({
                                    title: 'Login Failed!',
                                    text: "Incorrect username or password",
                                    icon: 'error',
                                    confirmButtonColor: '#A24D4D',
                                    confirmButtonText: 'Try Again',
                                }).then((result) => {
                                    if (result.value) {
                                        // location.reload();
                                    }
                                })
                            }else if(login_result == "librarian_success"){

                                window.location = '../AddStaff/SA-AddStaff2.php';

                            }else if(login_result == "empty_fields"){
                                Swal.fire({
                                    title: 'Login Failed!',
                                    text: "Some fields are empty. Make sure to fill in all fields.",
                                    icon: 'error',
                                    confirmButtonColor: '#A24D4D',
                                    confirmButtonText: 'Try Again!'
                                }).then((result) => {
                                    if (result.value) {
                                        // location.reload();
                                    }
                                })
                            }else if(login_result == "staff_success"){

                                window.location = '../../Admin/AdminAddBook.php';

                            }
                            else{
                                Swal.fire({
                                    title: 'Login Failed!',
                                    text: "Account does not exist in our database!",
                                    icon: 'error',
                                    confirmButtonColor: '#A24D4D',
                                    confirmButtonText: 'Try Again!'
                                }).then((result) => {
                                    if (result.value) {
                                        // location.reload();
                                    }
                                })
                            }

                        }
                    },
                    error: function() {
                        // Re-enable the login button in case of an error
                        $("#login").prop("disabled", false);
                    }

                })
            })
        })
    })
</script>

</body>


<script src = "Super Admin/LogIn/script.js">
    </html>


