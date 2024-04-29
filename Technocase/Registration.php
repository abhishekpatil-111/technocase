<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .container {
      max-width: 500px;
      margin: 50px auto;
    }
    .logo {
      display: block;
      margin: 0 auto 20px; /* Adjust margin as needed */
    }
  </style>
</head>
<body>

<div class="container">
  <img src="assets/imgs/IICMR_logo.jpg" style="height: 80px; width:90px;" alt="Logo" class="logo img-fluid"> <!-- Adjust src attribute to the path of your logo image -->
  <h2 class="text-center mb-4">Sign Up</h2>
  <form  action="Registration Data.php" method="post">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" name="pass" placeholder="Enter your password" required>
    </div>
    <div class="form-group">
      <label for="confirmPassword">Confirm Password:</label>
      <input type="password" class="form-control" id="confirmPassword" name="cpass" placeholder="Confirm your password" required>
    </div>
    <div class="form-group">
      <label for="contactNo">Contact No:</label>
      <input type="tel" class="form-control" id="contactNo" name="contact" placeholder="Enter your contact number" required>
    </div>
    <button type="submit" class="btn btn-primary btn-block">Create Account</button>
    <a href="User Login.php">
        Already have an account
    <img width="20" height="20" src="https://img.icons8.com/3d-fluency/94/right.png" alt="right"/>
    </a>
  </form>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
