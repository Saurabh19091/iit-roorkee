<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Interface</title>
</head>
<body>
    <h1>Admin Interface</h1>

    <h2>Show Conserve Volt</h2>
    <form action="process.php" method="post">
        <label for="start_time">From:</label>
        <input type="time" id="start_time" name="start_time" required>

        <label for="end_time">To:</label>
        <input type="time" id="end_time" name="end_time" required>

        <button type="submit">Generate and Store Voltage</button>
    </form>

    <h2>Show Conserve Data</h2>
    <form action="view_data.php" method="get">
        <label for="start_date">From:</label>
        <input type="date" id="start_date" name="start_date" required>

        <label for="end_date">To:</label>
        <input type="date" id="end_date" name="end_date" required>

        <button type="submit">View Data</button>
    </form>
</body>
</html>
