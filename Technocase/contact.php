<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
 
  <script src="index.js"></script>
  <title>Feedback</title>
</head>

<body>
  <!-- NAVIGATION-BAR  starts here -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="Home.php">
  <span style="color:white; font-weight:bold; font: size 30px;">TECHNOCASE</span>
      <img src="img/IICMR_logo.png"  style="margin-left: 10px;" width="80" height="50" alt="IICMR">
    </a>

    <!-- Toggler button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="Home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="events.php">Events</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gallery.html">Gallery</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="contact.php">Feedback</a>
        </li>
      </ul>

      <!-- User section -->
      <div class="my-2 my-lg-0">
        <?php if (isset($_SESSION['uname'])) : ?>
          <span style="color:yellow; font-weight:800;">Welcome :</span>
          <a class="usrname" style="color: white; text-decoration:none; margin-left: 10px;" href="User%20Logout.php" id="una">
            <img width="32" height="32" src="https://img.icons8.com/3d-fluency/94/guest-male--v2.png" alt="guest-male--v2"/>
            <span style="font-family: cursive;">
              <?php echo $_SESSION['uname']; ?>
            </span>
          </a>
          <a href="User Login.php" style="text-decoration: none; color:orange;">
            Logout
          </a>
        <?php else : ?>
          <a href="User Login.php" style="text-decoration: none;">
            <!-- Add your login icon here -->
            <lord-icon src="https://cdn.lordicon.com/mebvgwrs.json" trigger="hover" style="width:40px;height:40px"></lord-icon>
          </a>
        <?php endif; ?>
      </div>
    </div>
  </nav>

  <!-- Navbar ends here -->


  


  <!-- ----------contact section stsrts here---------------------------------------------- -->
  <div class="container my-4">
    <div class="row">
        <div class="col-lg-6 order-lg-2">
            <!-- Image shown on the right side in desktop view -->
            <div class="text-center">
              <img src="img/feedback1.jpg" id="feedimg" class="img-fluid" alt="Feedback Image">
              </div>
          </div>
          <div class="col-lg-6 order-lg-1">
          <h2 class="text-center mb-4">We Value Your Opinions
          <img width="50" height="50" src="https://img.icons8.com/3d-fluency/94/comments.png" alt="comments"/>
          </h2>
          <h6>Write Your feedback Below</h6>
            <!-- Form -->
            <form method="post" action="submit_form.php">
                <div class="form-group">
                    <label for="exampleFormControlInput1">NAME</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Your Name" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Select your Query</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="query_type">
                        <option value="">Select</option>
                        <option value="Regarding-program">Regarding Program</option>
                        <option value="Regarding-Techinng">Regarding Teaching</option>
                        <option value="Regarding-non-teaching">Regarding Non-Teaching</option>
                        <option value="Regarding-Events">Regarding Events</option>
                        <option value="Regarding-Faculty">Regarding Faculty</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <!-- Select Division -->
                <div class="form-group">
                    <label>Select Division</label><br>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="division" id="exampleRadios1" value="Code_Warriors" checked required>
                        <label class="form-check-label" for="exampleRadios1">Code_Warriors</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="division" id="exampleRadios2" value="Techno_Crats" required>
                        <label class="form-check-label" for="exampleRadios2">Techno_Crats</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Any Concern or Suggestions Please Elaborate .</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="concern" rows="3" placeholder="Write for us..." required></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Send Feedback 
                    <img width="25" height="25" src="https://img.icons8.com/color/48/paper-plane.png" alt="paper-plane"/>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>




    <!-- -----------------------------contact section ends here-------------------------------- -->

    <!-- <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                                    <form class="mx-1 mx-md-4">

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" id="form3Example1c" class="form-control" />
                                                <label class="form-label" for="form3Example1c">Your Name</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="email" id="form3Example3c" class="form-control" />
                                                <label class="form-label" for="form3Example3c">Your Email</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" id="form3Example4c" class="form-control" />
                                                <label class="form-label" for="form3Example4c">Password</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" id="form3Example4cd" class="form-control" />
                                                <label class="form-label" for="form3Example4cd">Repeat your
                                                    password</label>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button type="button" class="btn btn-primary btn-lg">Register</button>
                                        </div>

                                    </form>

                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                                        class="img-fluid" alt="Sample image">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->


    <!-- -----------footer starts here----------------------- -->


    <div class="container">
      <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
          <li class="nav-item"><a href="Home.php" class="nav-link px-2 text-muted">Home</a></li>
          <li class="nav-item"><a href="about.html" class="nav-link px-2 text-muted">About</a></li>
          <li class="nav-item"><a href="events.php" class="nav-link px-2 text-muted">Events</a></li>
          <li class="nav-item"><a href="gallery.html" class="nav-link px-2 text-muted">Gallery</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link px-2 text-muted">Feedback</a></li>
        </ul>
        <p class="text-center text-muted">Technocase 2024, IICMR</p>
        <p class="text-center text-muted">© Department of MCA All Rights Reserved </p>
        <p class="text-center text-muted">This Website is Developed By- ABHISHEK_PATIL_(MCA)</p>
      </footer>
    </div>


    <!-- -----------footer ends   here----------------------- -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"></script>
</body>
<!-- https://source.unsplash.com/1400x900/?animals,coding  -->

</html>