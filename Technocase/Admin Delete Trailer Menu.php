<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Queries</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Additional CSS styling */
        body {
            padding-top: 20px; /* Add some space at the top */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center mb-4">User Feedbacks</h2>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Query Type</th>
                        <th>Division</th>
                        <th>Concern</th>
                        <th>Created At</th>
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

                    // Fetch data from the table
                    $sql = "SELECT * FROM feedback";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // Output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>" . $row["id"] . "</td>
                                    <td>" . $row["name"] . "</td>
                                    <td>" . $row["query_type"] . "</td>
                                    <td>" . $row["division"] . "</td>
                                    <td>" . $row["concern"] . "</td>
                                    <td>" . $row["created_at"] . "</td>
                                </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6'>No Feedbacks to Show</td></tr>";
                    }
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
