fetch_pdf_list.php
delete_pdf.php




<?php
    session_start();
    $con=mysqli_connect('localhost','root','abhi','technocase');

    // Check if the user is logged in
    if(isset($_SESSION['uname'])) {
        // User is logged in, show logout option
?>
        <a href="User%20Logout.php" style="text-decoration: none;">
            <div id="user" style="cursor:pointer; color:white;">
                Logout
            </div>
        </a>
        <a class="usrname" style="color: white; text-decoration:none; margin-left: 10px;" href="#" id="una">Welcome: <?php echo $_SESSION['uname'];?></a>
<?php
    } else {
        // User is not logged in, show login option
?>
        <a href="User Login.php" style="text-decoration: none;">
            <div id="user" style="cursor:pointer; color:white; ">
                Login
            </div>
        </a>
<?php
    }
?>
