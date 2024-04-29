<?php

// session_start();


$con = mysqli_connect('localhost', 'root', 'abhi', 'technocase');

$query = "select * from FEATURED_MOVIES where id>=1 and id<=4";

$res = mysqli_query($con, $query);

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Events</title>
</head>

<body>
  <!-- NAVIGATION-BAR  starts here -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
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
        <li class="nav-item active">
          <a class="nav-link " href="events.php">Events</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gallery.html">Gallery</a>
        </li>
        <li class="nav-item">
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

  <!-- CAROUSAL STARTS -->
  <!-- <div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/TechnoCase.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/wallpaper1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/wallpaperflare.com_wallpaper.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> -->

  <!-- CAROUSAL ENDS -->


  <!-- cards starts here -->
  <center>
    <h1 class="mx-md-4" style="margin-top: 45px;">Events Gallery</h1>
  </center>
  <!-- FERATURED EVENTS STARTS -->
  <div id="featuredMovies" class="container">
    <h4 class="text-center mb-4">Events to be Held</h4>
    <hr class="mb-4" style="border-color: #94c82f; width: 142px;">
    <div class="row">
      <?php
      $query = "SELECT * FROM FEATURED_events WHERE id >= 1 AND id <= 8"; // Combine both queries
      $res = mysqli_query($con, $query);

      while ($data = mysqli_fetch_array($res)) {
      ?>
        <div class="col-md-3">
          <div class="featuredMovie text-center">
            <div class="fmposter">
              <a href="EventRegistration.php">
                <img src="poster/<?php echo $data['poster']; ?>" class="img-fluid" alt="<?php echo $data['name']; ?>">
              </a>
            </div>
            <div class="moviename"><?php echo $data['name']; ?></div>
            <div class="rdate"><?php echo $data['rdate']; ?></div>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </div>
  <!-- FERATURED EVENTS ENDS -->

  <!-- cards ends here -->
  <!-- Certification -->
  <center style="margin-top: 55px;">
    <h1> 
    <img width="70" height="70" src="https://img.icons8.com/3d-fluency/94/3d-fluency-diploma.png" alt="3d-fluency-diploma"/>
      Certificate of Participation</h1>
    <br>
  </center>
  <div class="container my-4">
    <div class="row featurette d-flex justify-content-center align-items-center">
      <div class="col-md-7 col order-md-2">

        <p class="lead">👈🏼Participate in the Events and get Certificate of Participation.
        </p>
      </div>
      <div class="col-md-5 order-md-1">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="img\Diplomas.jpeg" alt="">

      </div>
    </div>
  </div>


  <!-- Rules  -->
  <div>

    <Br>
    <br>
    <br>
    <br>
    </Br>
  </div>


  <div>
    <center>
        <h1>View Rule Book</h1>
        <h4>You Can See the Competition Rules From Here...</h4>
        <a id="viewRulesBtn" href="uploads/rules.pdf" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">View Rules</a>
    </center>
</div>



  <!-- -----------footer starts here----------------------- -->


  <div class="container">
    <footer class="py-3 my-4">
      <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="Home.php" class="nav-link px-2 text-muted">Home</a></li>
        <li class="nav-item"><a href="about.html" class="nav-link px-2 text-muted">About</a></li>
        <li class="nav-item"><a href="events.php" class="nav-link px-2 text-muted">Events</a></li>
        <li class="nav-item"><a href="gallery.html" class="nav-link px-2 text-muted">Gallery</a></li>
        <li class="nav-item"><a href="contact.php" class="nav-link px-2 text-muted">Contact</a></li>
      </ul>
      <p class="text-center text-muted">Technocase 2024, IICMR</p>
      <p class="text-center text-muted">© Department of MCA All Rights Reserved </p>
      <p class="text-center text-muted">This Website is Developed By- ABHISHEK_PATIL_(MCA)</p>
    </footer>
  </div>


  <!-- -----------footer ends   here----------------------- -->


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="index.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <script>
    document.getElementById("viewRulesBtn").addEventListener("click", function(event) {
        event.preventDefault(); // Prevent the default link behavior

        // Path to the PDF file
        var pdfPath = "uploads/rules.pdf";

        // Check if the file exists
        var xhr = new XMLHttpRequest();
        xhr.open('HEAD', pdfPath, true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4) {
                if (xhr.status === 200) {
                    // File exists, open it in the same tab/window
                    window.open(pdfPath, '_self');
                } else {
                    // File not found, show error message
                    alert("The file could not be found. Please contact the administrator.");
                }
            }
        };
        xhr.send();
    });
</script>
</body>
<!-- https://source.unsplash.com/1400x900/?animals,coding  -->

</html>