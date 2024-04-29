<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            background-color: #222;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }
        
        #form {
            border: 3px solid white;
            border-radius: 15px;
            padding: 30px;
        }
        
        #blackLayer {
            background-color: #222;
            opacity: .80;
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
        }

        #reglink {
            color: white;
        }
        /* form{
            background-color: white;
        } */
    </style>
</head>
<body>
    <div id="blackLayer"></div>
    <div class="container">
        <div id="form" class="col-md-6 col-lg-4" >
            <h1 class="text-center text-white">TECHNOCASE</h1>
            <form action="User Login Data.php" method="post">
                <h3 class="text-center text-white"> LOGIN </h3>
                <div class="text-center mb-4">
                    <img src="assets/imgs/IICMR_logo.jpg" height="80" width="100" alt="Logo"/>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-grey"><img src="assets/imgs/user.png" height="20" width="20" alt="User Icon"/></span>
                        </div>
                        <input type="text" class="form-control bg-grey" id="uid" name="uid" placeholder="Username">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-grey"><img src="assets/imgs/lock.png" height="20" width="20" alt="Lock Icon"/></span>
                        </div>
                        <input type="password" class="form-control bg-grey" id="pass" name="pass" placeholder="Password">
                    </div>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary btn-block" >Log in</button>
                </div>
                <div class="text-center">
                    <a href="registration.php" id="reglink">Don't have an account?</a>
                </div>
            </form>
        </div>
    </div>
    <!-- Bootstrap JS and jQuery (for Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
