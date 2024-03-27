<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f8f8;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h2 {
            color: #e91e63;
            text-align: center;
        }

        form {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }

        label {
            display: block;
            margin: 10px 0 5px;
            color: #333;
            font-size: 16px;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 20px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        textarea {
            resize: vertical;
        }

        input[type="submit"] {
            background-color: #2196F3;
            color: #fff;
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #1565c0;
        }

        footer {
            margin-top: 30px;
            text-align: center;
        }

        footer a {
            color: #e91e63;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <h2>Contact Us</h2>

    <form action="https://formspree.io/f/xwkgqwwn" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <input type="submit" value="Submit">
    </form>

   

</body>
</html>
