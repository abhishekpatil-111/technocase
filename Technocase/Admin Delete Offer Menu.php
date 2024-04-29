<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PDF Management</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
  <h2 class="mb-4">PDF Management</h2>

  <!-- List PDF files from database -->
  <h4>PDFs from database:</h4>
  <ul class="list-group mb-4">
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
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo '<li class="list-group-item">' . $row['pdf_name'] . ' <button class="btn btn-danger btn-sm ml-2" onclick="confirmDelete(' . $row['id'] . ')">Delete</button></li>';
        }
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    
    // Close the connection
    $connection = null;
    ?>
  </ul>
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="confirmDeleteModalLabel">Confirm Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete this PDF file?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Delete</button>
      </div>
    </div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
  function confirmDelete(id) {
    $('#confirmDeleteModal').modal('show');

    $('#confirmDeleteBtn').on('click', function() {
      // Call a function to delete the PDF file from the database
      deletePDF(id);
    });
  }

  function deletePDF(id) {
    // Perform AJAX request to delete the PDF file from the database
    $.ajax({
      url: 'delete.php',
      method: 'POST',
      data: {id: id},
      success: function(response) {
        // Reload the page to reflect the changes
        window.location.reload();
      },
      error: function(xhr, status, error) {
        console.error(xhr.responseText);
        alert('Error deleting PDF file. Please try again.');
      }
    });
  }
</script>

</body>
</html>
