<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Techocase Users</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .container {
      background-color: #ffffff;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h2 {
      color: #007bff;
    }
    table {
      width: 100%;
      border-collapse: collapse;
    }
    th, td {
      padding: 12px 15px;
      text-align: left;
      border-bottom: 1px solid #dee2e6;
    }
    th {
      background-color: #007bff;
      color: #ffffff;
    }
    tbody tr:hover {
      background-color: rgba(0, 123, 255, 0.1);
    }
  </style>
</head>
<body>

<div class="container mt-5">
  <h2 class="text-center mb-4">TOTAL SIGNED UP USERS</h2>
  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Contact No</th>
        </tr>
      </thead>
      <tbody>
        <?php
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

        // Fetch data from MySQL table
        $sql = "SELECT id, name, email, contact_no FROM signupuser";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // Output data of each row
          while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["contact_no"]."</td></tr>";
          }
        } else {
          echo "<tr><td colspan='4'>0 results</td></tr>";
        }

        // Close connection
        $conn->close();
        ?>
      </tbody>
    </table>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
