<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>USeP LMS Login</title>
    <link rel="stylesheet" href="style.css">
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
        <img src= "../../images/usep-logo.png" style="width: 45px; height: 45px" alt="">
        <div class="container-fluid d-flex  align-items-center align-content-center" >
            <p style="margin: 10px 10px; font-weight: bold">USeP Library Management System</p>
        </div>
    </div>

</div>

<div class="d-flex container-fluid" >

    <div class="container-fluid col-md- d-flex justify-content-center align-content-center align-items-center" style=" min-height: 100vh; width: 100%; ">
        <div class="container formBox" style="height: 600px; width: 500px; z-index: 1000"  >
            <form action="" style="padding: 10px 10px">
                <div class="  p-2">
                    <div class=" d-flex justify-content-center align-items-center mb-3">
                        <img src= "../../images/usep-logo.png" style="width: 100px; height: 100px; display: block"  alt="">
                    </div>

                    <select  name="" id="" style="height: 40px; width: 100%; padding: 0px 10px; border-radius: 5px">
                        <option value="">Select User Type</option>
                        <option value="">Librarian</option>
                        <option value="">Staff</option>
                    </select>
                </div>
                <div class="d-flex flex-wrap p-2" style=" height: 100%">
                    <label for="inputUsername" class="form-label">Username</label>
                    <input type="password" id="inputUsername" class="form-control" aria-describedby="passwordHelpBlock">
                    <label for="inputPassword" class="form-label">Password</label>
                    <input type="password" id="inputPassword" class="form-control" aria-describedby="passwordHelpBlock">

                </div>
                <div class="container-fluid">
                    <a href="#">Forgot Password?</a>
                </div>

                <div class="justify-content-center p-2">
                    <button type="submit" class="btn btn-primary  p-2" style="width: 100%">Login</button>
                </div>
                <div class="justify-content-center p-2">
                    <button style="border: 1px solid black; width: 100%" type="button" class="btn btn-light p-2"><img style="width: 25px" src="../../images/google.png" alt=""> Login with Google</button>

                </div>


            </form>
        </div>
    </div>
</div>



</div>


</body>


<script src = "script.js">
    </html>