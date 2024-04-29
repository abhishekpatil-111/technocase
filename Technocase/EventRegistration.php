



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- NAVIGATION-BAR  starts here -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <img id="logo" src="img/IICMR_logo.png" width="80" height="50" alt="IICMR">
        <!-- <a class="navbar-brand" href="Home.php"></a> -->

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">MCA
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="Home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="events.php">Events</a>
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
        </div>
        <!-- <img id="logo" src="assets/imgs/user.png" width="50" height="50" alt="IICMR"> -->


        <!-- </form> -->
        </div>
    </nav>
    <!-- Navbar ends here -->
    <div class="container">
        <div class="container my-4">
            <div class="row">
                <div class="col-lg-6 order-lg-2">
                    <!-- Image shown on the right side in desktop view -->
                    <div class="text-center">
                        <img src="poster/EventRegistration.jpeg" class="img-fluid" alt="Feedback Image">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <h2 class="text-center mb-4">Register For the Event</h2>
                    <!-- Form -->
                    <form method="post" action="RegistrationSuccess.php">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Name</label>
                            <input type="text" class="form-control mt-1" id="exampleFormControlInput1" name="name" placeholder="Enter Name" required>
                            <label for="exampleFormControlInput1">Email address</label>
                            <input type="email" class="form-control mt-1" id="exampleFormControlInput1" name="email" placeholder="name@example.com" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Select Event </label>
                            <select class="form-control mt-1" id="exampleFormControlSelect1" name="Event_Name">
                                <option value="">Select</option>
                                <option value="Chess">Chess</option>
                                <option value="Carrom">Carrom</option>
                                <option value="Dance">Dance</option>
                                <option value="Singing">Singing</option>
                                <option value="Coding">Coding</option>
                                <option value="debate">Debate</option>
                                <option value="Football">Football</option>
                                <option value="Badminton">Badminton</option>
                            </select>
                        </div>
                        <!-- Select Division -->
                        <div class="form-group">
                            <label>Select Division</label><br>
                            <div class="form-check">
                                <input class="form-check-input mt-1" type="radio" name="division" id="exampleRadios1" value="Code_Warriors" checked>
                                <label class="form-check-label" for="exampleRadios1">Code_Warriors</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="division" id="exampleRadios2" value="Techno_Crats">
                                <label class="form-check-label" for="exampleRadios2">Techno_Crats</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Elaborate Your Concern (Recommended)</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Write for us" name="concern" rows="3"></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary mt-4">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- -----------footer starts here----------------------- -->


    <div class="container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="Home.php" class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="about.html" class="nav-link px-2 text-muted">About</a></li>
                <li class="nav-item"><a href="events.html" class="nav-link px-2 text-muted">Events</a></li>
                <li class="nav-item"><a href="gallery.html" class="nav-link px-2 text-muted">Gallery</a></li>
                <li class="nav-item"><a href="contact.php" class="nav-link px-2 text-muted">Feedback</a></li>
            </ul>
            <p class="text-center text-muted">Technocase 2024, IICMR</p>
            <p class="text-center text-muted">© Department of MCA All Rights Reserved </p>
            <p class="text-center text-muted">This Website is Developed By- ABHISHEK_PATIL_(MCA)</p>
        </footer>
    </div>


    <!-- -----------footer ends   here----------------------- -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>