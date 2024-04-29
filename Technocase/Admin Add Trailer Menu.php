<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Participants</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Additional CSS styling */
        body {
            padding-top: 20px;
            /* Add some space at the top */
            background-color: #f8f9fa;
            /* Set background color */
        }

        .container {
            background-color: #ffffff;
            /* Set container background color */
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #007bff;
            /* Set heading color */
            text-align: center;
            margin-bottom: 20px;
            /* Add some space below the heading */
        }
        span{
            color: black;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
        }

        th {
            background-color: #007bff;
            /* Set table header background color */
            color: #ffffff;
            /* Set table header text color */
        }

        tbody tr:hover {
            background-color: rgba(52, 58, 64, 0.1);
            /* Set hover background color */
        }
    </style>
</head>

<body>
    <div class="container">
        <h2><span>&lt;TECHNOCASE/&gt;</span> PARTICIPANTS DETAILS</h2>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="thead">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Event Name</th>
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
                    $sql = "SELECT * FROM eventregistrations";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // Output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>" . $row["id"] . "</td>
                                    <td>" . $row["name"] . "</td>
                                    <td>" . $row["email"] . "</td>
                                    <td>" . $row["Event_Name"] . "</td>
                                    <td>" . $row["division"] . "</td>
                                    <td>" . $row["concern"] . "</td>
                                    <td>" . $row["created_at"] . "</td>
                                </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='7'>0 results</td></tr>";
                    }
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>