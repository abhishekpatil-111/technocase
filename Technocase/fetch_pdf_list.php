<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "abhi";
$database = "technocase";

try {
    // Create connection
    $connection = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // Set PDO to throw exceptions
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Fetch PDF files from database
    $stmt = $connection->prepare("SELECT id, pdf_name FROM rulebook");
    $stmt->execute();

    // Display PDF files with delete option
    $pdfList = '';
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $pdfList .= '<li class="list-group-item">' . $row['pdf_name'] . ' <button type="button" class="btn btn-danger btn-sm ml-2 delete-btn" data-id="' . $row['id'] . '">Delete</button></li>';
    }

    echo $pdfList;
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Close the connection
$connection = null;
?>
