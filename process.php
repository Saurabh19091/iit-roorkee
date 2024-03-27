<?php
// Connect to the database (replace with your actual credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "electricity_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data for generating and storing voltage
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $start_time = $_POST["start_time"];
    $end_time = $_POST["end_time"];

    // Convert time to datetime format
    $current_date = date("Y-m-d");
    $start_datetime = "$current_date $start_time";
    $end_datetime = "$current_date $end_time";

    // Check if data for the current date and time range already exists
    $check_sql = "SELECT * FROM electricity_data WHERE start_time >= '$start_datetime' AND end_time <= '$end_datetime'";
    $check_result = $conn->query($check_sql);

    if ($check_result->num_rows > 0) {
        // If data already exists, update the voltage
        $update_sql = "UPDATE electricity_data SET voltage = voltage + " . (rand(100, 300) / 10.0) . " WHERE start_time >= '$start_datetime' AND end_time <= '$end_datetime'";
        
        if ($conn->query($update_sql) === TRUE) {
            echo "Voltage data updated successfully.";
        } else {
            echo "Error updating voltage data: " . $conn->error;
        }
    } else {
        // If data doesn't exist, insert a new record
        $voltage = rand(100, 300) / 10.0;
        $insert_sql = "INSERT INTO electricity_data (start_time, end_time, voltage) VALUES ('$start_datetime', '$end_datetime', $voltage)";
        
        if ($conn->query($insert_sql) === TRUE) {
            echo "Voltage data recorded successfully.";
        } else {
            echo "Error recording voltage data: " . $conn->error;
        }
    }
}

$conn->close();
?>
