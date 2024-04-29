<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $confirmPassword = $_POST['cpass'];
    $contactNo = $_POST['contact'];

    // Validate form data
    $errors = [];
    if (empty($name)) {
        $errors[] = "Name is required";
    }
    if (empty($email)) {
        $errors[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }
    if (empty($password)) {
        $errors[] = "Password is required";
    }
    if ($password !== $confirmPassword) {
        $errors[] = "Passwords do not match";
    }
    if (empty($contactNo)) {
        $errors[] = "Contact number is required";
    }

    // If there are no errors, proceed to database insertion
    if (empty($errors)) {
        // Database connection
        $servername = "localhost";
        $username = "root";
        $password = "abhi";
        $dbname = "technocase";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Insert data into database
        $sql = "INSERT INTO signupuser (name, email, password, contact_no) VALUES ('$name', '$email', '$password', '$contactNo')";

        if ($conn->query($sql) === TRUE) {
            // Redirect to signupsuccess.php
            header("Location: signupsuccess.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    } else {
        // If there are errors, display them
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
    }
}
?>
