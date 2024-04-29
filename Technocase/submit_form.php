<?php
// Initialize variables
$success_message = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize form inputs
    $name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
    $query_type = $_POST["query_type"];
    $division = $_POST["division"];
    $concern = $_POST["concern"];

    // Convert first letter of $name to uppercase
    $name = ucfirst($name);

    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "abhi";
    $dbname = "technocase";

    // Create database connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check database connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind SQL statement
    $stmt = $conn->prepare("INSERT INTO feedback (name, query_type, division, concern) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $query_type, $division, $concern);

    // Execute SQL statement
    if ($stmt->execute()) {
        // Set success message
        // $success_message = "We value your opinion!";
    } else {
        echo "Error submitting form: " . $conn->error;
    }

    // Close database connection
    $stmt->close();
    $conn->close();
}
?>
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
        h1 {
            color: #1fbb1f;
            font-size: 30px;      
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
<lord-icon
    src="https://cdn.lordicon.com/guqkthkk.json"
    trigger="in"
    delay="1000"
    state="in-reveal"
    colors="primary:#16c72e"
    style="width:50px;height:50px">
</lord-icon>
<h1>Thank you! <?php echo $name; ?></h2>
<h2>Feedback Received Successfully</h2>
    <h4>We're grateful for your input!</h4>
    <?php if (!empty($success_message)) : ?>
        <p><?php echo $success_message; ?></p>
    <?php else : ?>
        <!-- <p>Your insights are important to us.</p> -->
    <?php endif; ?>
    <a href="Home.php">
        <button>Go Back</button>
    </a>
    <script src="https://cdn.lordicon.com/lordicon.js"></script>

</body>
</html>
