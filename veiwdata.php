<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity Consumption Data</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Electricity Consumption Data</h2>

    <?php
    // Process form data for fetching data based on date range
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $start_date = date("Y-m-d", strtotime($_POST["start_date"]));
        $end_date = date("Y-m-d", strtotime($_POST["end_date"]));

        // Connect to the database (replace with your actual credentials)
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "electricity_db";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM electricity_data WHERE DATE(start_time) >= '$start_date' AND DATE(end_time) <= '$end_date'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>ID</th><th>Start Time</th><th>End Time</th><th>Voltage</th></tr>";

            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["start_time"] . "</td><td>" . $row["end_time"] . "</td><td>" . $row["voltage"] . "</td></tr>";
            }

            echo "</table>";
        } else {
            echo "No data available for the selected date range.";
        }

        $conn->close();
    }
    ?>

    <h3>Fetch Data by Date Range</h3>
    <form action="view_data.php" method="post">
        <label for="start_date">Start Date:</label>
        <input type="date" id="start_date" name="start_date" required>

        <label for="end_date">End Date:</label>
        <input type="date" id="end_date" name="end_date" required>

        <button type="submit">Fetch Data</button>
    </form>
</body>
</html>
