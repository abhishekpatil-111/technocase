<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "abhi";
$database = "technocase";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    // Check if file is uploaded
    if (isset($_FILES["pdf_file"]) && $_FILES["pdf_file"]["error"] == UPLOAD_ERR_OK) {
        // Specify the directory where you want to store the PDF files
        $uploadDirectory = "uploads/";

        // Check if the directory exists, if not, create it
        if (!file_exists($uploadDirectory)) {
            mkdir($uploadDirectory, 0777, true);
        }

        // Generate a unique filename for the uploaded PDF file
        $pdfFileName = uniqid() . "_" . $_FILES["pdf_file"]["name"];
        $pdfFilePath = $uploadDirectory . $pdfFileName;

        // Move the uploaded PDF file to the specified directory
        if (move_uploaded_file($_FILES["pdf_file"]["tmp_name"], $pdfFilePath)) {
            try {
                // Create connection
                $connection = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
                // Set PDO to throw exceptions
                $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                // Prepare the SQL statement
                $stmt = $connection->prepare("INSERT INTO rulebook (pdf_content, pdf_name) VALUES (:pdf_content, :pdf_name)");
                
                // Bind parameters
                $stmt->bindParam(':pdf_content', $pdfFilePath, PDO::PARAM_STR);
                $stmt->bindParam(':pdf_name', $_FILES["pdf_file"]["name"], PDO::PARAM_STR);
                
                // Execute the statement
                $stmt->execute();
                
                echo "PDF file uploaded successfully.";
            } catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
            
            // Close the connection
            $connection = null;
        } else {
            echo "Error uploading file.";
        }
    } else {
        echo "Please upload a PDF file.";
    }
}
?>
