<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Success</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 100px auto;
        }
        h2 {
            color: #1fbb1f;      
         }
         img{
            height: 25px;
         }

        /* Style for the button */
    button {
        background-color: #007bff; /* Blue background color */
        color: white; /* White text color */
        padding: 10px 20px; /* Padding */
        font-size: 16px; /* Font size */
        border: none; /* No border */
        border-radius: 5px; /* Rounded corners */
        cursor: pointer; /* Cursor on hover */
    }

    /* Hover effect */
    button:hover {
        background-color: #0056b3; /* Darker blue */
    }
    </style>
</head>
<body>
    <h2>Registration Successful!
    <lord-icon
    src="https://cdn.lordicon.com/guqkthkk.json"
    trigger="in"
    delay="1500"
    state="in-reveal"
    colors="primary:#16c72e"
    style="width:25px;height:25px">
</lord-icon>
    </h2>
    <p>Thank you for registering! You have been successfully enrolled for the event.
</p>
    <a href="events.php">
        <button>
            View More Events
        </button>
    </a>
    <script src="https://cdn.lordicon.com/lordicon.js"></script>

</body>
</html>


<?php
// Database connection parameters
$servername = "localhost"; // Change this if your database is hosted elsewhere
$username = "root"; // Change this to your database username
$password = "abhi"; // Change this to your database password
$database = "technocase"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("INSERT INTO EventRegistrations (name, email, Event_Name, division, concern) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $Event_Name, $division, $concern);

    // Set parameters and execute
    $name = $_POST['name'];
    $email = $_POST['email'];
    $Event_Name = $_POST['Event_Name'];
    $division = $_POST['division'];
    $concern = $_POST['concern'];

    if ($stmt->execute()) {
        // Redirect to success page
        header("Location: RegistrationSuccess.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>
