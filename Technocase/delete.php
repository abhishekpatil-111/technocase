<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "abhi";
$database = "technocase";

// Check if the ID is set and valid
if (isset($_POST['id']) && is_numeric($_POST['id'])) {
    try {
        // Create connection
        $connection = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        // Set PDO to throw exceptions
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // Prepare the SQL statement
        $stmt = $connection->prepare("DELETE FROM rulebook WHERE id = :id");
        
        // Bind parameters
        $stmt->bindParam(':id', $_POST['id'], PDO::PARAM_INT);
        
        // Execute the statement
        $stmt->execute();
        
        // Return success message
        echo "PDF file deleted successfully.";
    } catch(PDOException $e) {
        // Return error message
        echo "Error: " . $e->getMessage();
    }
    
    // Close the connection
    $connection = null;
}
?>
