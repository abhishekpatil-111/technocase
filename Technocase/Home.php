<?php

session_start();


$con = mysqli_connect('localhost', 'root', 'abhi', 'technocase');

$query = "select * from registrations where id>=1 and id<=4";

$res = mysqli_query($con, $query);

?>
<?php

// session_start();


$con = mysqli_connect('localhost', 'root', 'abhi', 'technocase');

$query = "select * from FEATURED_events where id>=1 and id<=4";

$res = mysqli_query($con, $query);

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="index.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
  <!-- Bootstrap Font Icon CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <title>TECHNOCASE</title>
</head>


<body>
  <style></style>
  <!-- NAVIGATION-BAR  starts here -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="Home.php">
      <span style="color:white; font-weight:bold; font: size 30px;">TECHNOCASE</span>
      <img src="img/IICMR_logo.png" style="margin-left: 10px;" width="80" height="50" alt="IICMR">
    </a>

    <!-- Toggler button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="Home.php">Home</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="events.php">Events</a>
        </li>
        <li class="nav-item  dropdown">
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
            <img width="32" height="32" src="https://img.icons8.com/3d-fluency/94/guest-male--v2.png" alt="guest-male--v2" />
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



  <!-- CAUROSEL (IMAGE-GALLERY)  starts here -->
  <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="img/wallpaper1.jpg" alt="the-buzz-img3" width="650" height="600" alt="First slide">
        <div class="overlay-intro"></div>
      </div>
      <div class="carousel-caption d-none d-md-block  carousel-fade">
        <h5 class="heading"></h5>
        <div>
          <marquee class="marque" id="mark"><b>Department of MCA <span style="color: brown;">IICMR</span> Pune</b></marquee>
          <!-- <marquee class="marque" id="mark"><b>Technovation-2023 Registrations LIVE</b></marquee> -->
        </div>
        <i class="fa-solid fa-dumbbell"></i>
        <div class="carousel-caption d-none d-md-block">
          <h2>Techno-Case-2024 Registrations Started</h2>
          <div class="text-center my-3">

            <!-- <button class="btn btn-primary" href="register.html"> Click here to REGISTER</button> -->
            <!-- <a class="btn btn-warning " href="https://www.google.com" role="button"> Click here to REGISTER</a> -->

          </div>
          <h2>Participate to Show Up your Skills</h2>
          <p></p>
        </div>

        <!-- Centered Buttons On Caurosel -->

      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img\wallpaper2.jpg" alt="the-buzz-img3" width="650" height="600" alt="Second slide">
      </div>

      <!-- <div class="carousel-caption d-none d-md-block">
        <h5>First Second label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div> -->
      <div class="carousel-item">
        <img class="d-block w-100" src="img/wallpaperflare.com_wallpaper.jpg" alt="the-buzz-img3" width="650" height="600" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="https://source.unsplash.com/1400x600/?coffe/800x400?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
      </div>
      <!-- <div class="carousel-caption d-none d-md-block ">
        <h5>First Third label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div> -->
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

  </div>
  <!-- carousel Ends here -->

  <div class="text-center my-3">
    <a class="button  " href="Events.php" role="button">Register Here</a>
  </div>


  <!-- black-box container starts here -->
  <div class="container2 mr-3">
    <div class="p-4 p-md-5 mb-4 rounded text-bg-dark">
      <div class="col-md-6 px-0">
        <h1 class="display-4 fst-italic">TechnoCase The Event of 2K24</h1>
        <p class="lead my-3">"Technocase is an event organized by IICMR where students can exhibit their skills and
          compete." </p>
        <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
      </div>
    </div>
  </div>

  <!-- cards starts here -->
  <div class="container my-5 flex-column gx-3 ">
    <div class="row mb-2">
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">C++ programming</strong>
            <h3 class="mb-0">Show up Skills</h3>
            <div class="mb-1 text-muted">Nov 12</div>
            <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to
              additional content.</p>
            <a href="#" class="stretched-link">Continue reading</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <!-- <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img"
              aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
                dy=".3em">Thumbnail</text>
            </svg> -->
            <img class="bd-placeholder-img" width="300" height="250" src="assets/imgs/poster1.jpg" alt="">
          </div>
        </div>
      </div>


      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-danger">DEBATE COMPETATION</strong>
            <h3 class="mb-0">Speak Up</h3>
            <div class="mb-1 text-muted">Nov 11</div>
            <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional
              content.</p>
            <a href="#" class="stretched-link">Continue reading</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <!-- <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img"
              aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMid000000YMid slice" focusable="false">
              <title>Placeholder</title>, 
              <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
                dy=".3em">Thumbnail</text>
            </svg> -->
            <img class="bd-placeholder-img" width="300" height="250" src="assets/imgs/debate-poster.jpg" alt="ERROR">
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="container my-5">
    <div class="row mb-2">
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-success">POSTER PRESENTATION</strong>
            <h3 class="mb-0">Be Creative</h3>
            <div class="mb-1 text-muted">Nov 12</div>
            <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to
              additional content.</p>
            <a href="#" class="stretched-link">Continue reading</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <!-- <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img"
              aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
                dy=".3em">Thumbnail</text>
            </svg> -->
            <img class="bd-placeholder-img" width="300" height="250" src="assets/imgs/poster-presentation.jpg" alt="">
          </div>
        </div>
      </div>


      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-warning">PROJECT PRESENTATION</strong>
            <h3 class="mb-0">new</h3>
            <div class="mb-1 text-muted">Nov 11</div>
            <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional
              content.</p>
            <a href="#" class="stretched-link">Continue reading</a>
          </div>
          <div class="col-auto d-none d-lg-block">

            <!-- <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img"
              aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
                dy=".3em">Thumbnail</text>
            </svg> -->
            <img class="bd-placeholder-img" width="300" height="250" src="assets/imgs/poster-4.jpg" alt="">

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- cards ends here -->

  <!-- FERATURED EVENTS STARTS -->
  <!-- <div id="featuredMovies" class="container">
    <h2 class="text-center mb-4">FEATURED MOVIES</h2>
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
                        <img src="poster/<?php echo $data['poster']; ?>" class="img-fluid" alt="<?php echo $data['name']; ?>">
                    </div>
                    <div class="moviename"><?php echo $data['name']; ?></div>
                    <div class="rdate"><?php echo $data['rdate']; ?></div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div> -->
  <!-- FERATURED EVENTS ENDS -->
    <!---winner section starts---------->
    <figure class="text-center ">
    <blockquote class="blockquote">
      <h1>
        <p>
          <img width="50" height="50" src="https://img.icons8.com/3d-fluency/94/medal.png" alt="medal" />
          WINNERS OF 2023
          <img width="50" height="50" src="https://img.icons8.com/3d-fluency/94/trophy.png" alt="trophy" />
        </p>
      </h1>
    </blockquote>
    <figcaption class="blockquote-footer">
      Here are our CHAMPIONS of Previous Year<cite title="Source Title"></cite>
    </figcaption>
  </figure>
  <!-- ============================(principal and vice principal section starts)========================================================================================= -->
  <div class="container marketing my-5">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <img class="rounded-circle" src="assets/imgs/user.png" alt="Generic placeholder image-1" width="140" height="140">
        <h2>1st Winner</h2>
        <figcaption class="blockquote-footer my-2">
          Principal--<cite title="Source Title">All Department</cite>
        </figcaption>
        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies
          vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus
          magna.</p>

      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="rounded-circle" src="assets/imgs/user.png" alt="Generic placeholder image-2" width="140" height="140">
        <h2>2nd winner</h2>
        <figcaption class="blockquote-footer my-2">
          Vice Principal--<cite title="Source Title">Commerce Department</cite>
        </figcaption>
        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis
          consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.
        </p>

      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="rounded-circle" src="assets/imgs/user.png" alt="Generic placeholder image-3" width="140" height="140">
        <h2>3rd Winner</h2>
        <figcaption class="blockquote-footer my-2">
          Vice Principal--<cite title="Source Title"> Botany Department </cite>
        </figcaption>
        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta
          felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum
          massa justo sit amet risus.</p>

      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
  </div>
  <!---winner section Ends---------->


<!--------------- sports section Starts ------------------->
<div class="card text-center">
            <h2 class="card-title my-5">
              
              <img width="50" height="50" src="https://img.icons8.com/3d-fluency/94/football2.png" alt="football2" />
              SPORTS
              <img width="60" height="60" src="https://img.icons8.com/3d-fluency/94/football--v5.png" alt="football--v5" />
            </h2>
            <h5>
              </h3>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            </h5>
          </div>
          <!-- --------------------------------------------------------------------- -->
          <div class="container my-4">
            <div class="row featurette d-flex justify-content-center align-items-center">
              <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">First featurette heading. <span class="text-muted">It’ll
                    blow your
                    mind.</span></h2>
                <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting
                  prose here.
                </p>
              </div>
              <div class="col-md-5">
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="assets/imgs/football.jpg" alt="">

              </div>
            </div>
          </div>
          <!--(1 ends) -----(2 started)--------------------------------------------------------------------------------------------------------- -->

          <div class="container my-4">
            <div class="row featurette d-flex justify-content-center align-items-center">
              <div class="col-md-7 col order-md-2">
                <h2 class="featurette-heading fw-normal lh-1">First featurette heading. <span class="text-muted">It’ll
                    blow your
                    mind.</span></h2>
                <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting
                  prose here.
                </p>
              </div>
              <div class="col-md-5 order-md-1">
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="assets/imgs/tugofwar.jpg" alt="">

              </div>
            </div>
          </div>
          <!-- -(2 ends )------(3 started)------------------------------------------------------------------------------------------------ -->
          <div class="container my-4">
            <div class="row featurette d-flex justify-content-center align-items-center">
              <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">First featurette heading. <span class="text-muted">It’ll
                    blow your
                    mind.</span></h2>
                <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting
                  prose here.
                </p>
              </div>
              <div class="col-md-5">
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="assets/imgs/badminton.jpg" alt="">

              </div>
            </div>
          </div>
          <!--------------- sports section Ends ------------------->






  <!-- ------------TEACHERS CARDS STSRTS HERE---------------- -->
  <div class="card text-center my-5">

    <h2 class="card-title my-5">
      <img width="70" height="70" src="https://img.icons8.com/3d-fluency/94/collaboration-female-male--v6.png" alt="collaboration-female-male--v6" />
      ORGANIZING TEAM
    </h2>
    <h5>
      </h3>
      <p class="card-text" style="margin: 10px;">With supporting text below as a natural lead-in to additional content.</p>
    </h5>
  </div>
  <!-- ------------------------------------------------------------------------------------------------------------- -->

  <div class="container">
    <div class="album py-5 bg-light">
      <div class="container">

        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 400px; width: 100%; display: block;" src="assets/imgs/dummymen.png" data-holder-rendered="true">
              <div class="card-body">
                <h5 class="card-title">Dr VANDANA PEDNEKAR</h5>
                <p class="card-text">Director Department of MCA </p>
                <div class="d-flex justify-content-between align-items-center">

                  <small class="text-muted">Msc.Computer Science</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 400px; width: 100; display: block;" src="assets/imgs/dummy.png" data-holder-rendered="true">
              <div class="card-body">
                <h5 class="card-title">Prof. RENU MATHEW</h5>
                <p class="card-text">Department of MCA</p>
                <div class="d-flex justify-content-between align-items-center">

                  <small class="text-muted">Qualification: M.SC</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 400px; width: 100%; display: block;" src="assets/imgs/dummymen.png" data-holder-rendered="true">
              <div class="card-body">
                <h5 class="card-title">Prof. SANJAY MATE</h5>
                <p class="card-text">Department of BCA Science</p>
                <div class="d-flex justify-content-between align-items-center">

                  <small class="text-muted">Qualification: MCA</small>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 400px; width: 100%; display: block;" src="assets/imgs/dummy.png" data-holder-rendered="true">
              <div class="card-body">
                <h5 class="card-title">Prof. SWATI KIRANGE</h5>
                <p class="card-text">Department of BCA Science</p>
                <div class="d-flex justify-content-between align-items-center">

                  <small class="text-muted">Qualification: M.Sc</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 400px; width: 100%; display: block;" src="assets/imgs/dummymen.png" data-holder-rendered="true">
              <div class="card-body">
                <h5 class="card-title">Prof. HARSHADA TALINKAR</h5>
                <p class="card-text">Department of BCA Science</p>
                <div class="d-flex justify-content-between align-items-center">

                  <small class="text-muted">Qualification: MCA</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 400px; width: 100%; display: block;" src="assets/imgs/dummy.png" data-holder-rendered="true">
              <div class="card-body">
                <h5 class="card-title">Prof. ANJALI PATIL</h5>
                <p class="card-text">Department of BCA Science</p>
                <div class="d-flex justify-content-between align-items-center">

                  <small class="text-muted">Qualification: MCA</small>
                </div>
              </div>
            </div>
          </div>


          <!-- ------------teachers cards ends here-------------------------------------------------------- -->

          



          <!-- -----------footer starts here----------------------- -->


          <div class="container">
            <footer class="py-3 my-4">
              <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="Home.php" class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="about.html" class="nav-link px-2 text-muted">About</a></li>
                <li class="nav-item"><a href="events.html" class="nav-link px-2 text-muted">Events</a></li>
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
          <script src="https://cdn.lordicon.com/lordicon.js"></script>

</body>
<!-- https://source.unsplash.com/1400x900/?animals,coding  -->

</html>