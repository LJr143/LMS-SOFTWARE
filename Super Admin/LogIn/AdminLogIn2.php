<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Super Admin Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/login.css">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-5 bg-left d-flex align-items-center justify-content-center">
            <img src="../../images/photoshop.png        "  alt="Left Image" class="img-fluid">
        </div>
        <div class="col-md-7 bg-image">
            <div class="glass-panel">
                <form>
                    <div class="text-center mb-4">
                        <img src="../../images/usep-logo.png" alt="usepLogo" class="usep"><br>
                        <br>
                        <div class="formLogIn">
                            <form id="selectuser "  action="#" method="POST">
                                
                                <select id="selectOption" name="selectedOption">
                                    <option value="option">Super Admin Login</option>
                                    <option value="option"> Admin Login</option>
                                </select>
                            </form>
                        </div>
                    <div class="mb-3"><br>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="STAFF ID">
                    </div>
                    <div class="mb-3">
                        
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="PASSWORD">
                    </div>
                    <div class="mb-3 ">
                        <a href="../ForgotPassword/ForgotPasswod.php">Forgot Password?</a>
                    </div>
                    <div class="btn-container "> 
                        <button type="submit" class="btn btn-dark">LOGIN</button>
                    </div>

                    <div class="google-signin-container">
                        <button class="google-signin-button" data-onsuccess="onSignIn">
                            <img src="../../images/google.png" alt="Google Logo" class="google-logo">
                            LOGIN WITH GOOGLE
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<script>
    gapi.load('auth2', function() {
        gapi.auth2.init({
            client_id: 'YOUR_CLIENT_ID.apps.googleusercontent.com'
        });
    });
</script>
</body>
</html>
