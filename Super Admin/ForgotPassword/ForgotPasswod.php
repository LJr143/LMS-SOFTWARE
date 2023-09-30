<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Admin Forgot Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/ForgotPassword.css">

</head>
<body>
    <section class="vh-50 bg" >
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black " style="border-radius: 25px;">
                        <div class="return "> <a href="../LogIn/AdminLogIn.php">
                            <img src="../../images/arrow.webp" style="width: 50px;" alt="Arrow return"></a></div>
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-1">
    
                                    <img src="../../images/forgotpass.png"
                                         class="img-fluid" alt="Sample image">
    
                                </div>
                                <div class="right col-md-10 col-lg-6 col-xl-5 order-2 order-lg-2 mt-5">
    
                                    <p class="text-center hello h4 fw-bold mb-2 mx-1 mx-md-5 mt-5 checkemail">TROUBLE LOGGING IN?</p>
                                    <p class="text-left hello  mb-4 mx-1 mx-md-5 mt-0" style="font-size: 12px;">Enter the email associated with your account 
                                        and a code will be sent to your email.</p>
    
                                    <form class="mx-1 mx-md-4">
    
    
    
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="email" id="form3Example4c" class="form-control" placeholder="@example.com" />
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-center "> <a href="CreateNewPassword.php" class="link">
                                            <button type="button" class="btn log  btn-lg">Confirm</a></button>
                                        </div>
    
                                    </form>
    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    </body>
</html>