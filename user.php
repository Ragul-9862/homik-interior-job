
<head>
<link rel="stylesheet" href="css/style.css" />
<link rel="shortcut icon" href="./images/favicon.ico" />
<link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon" />
</head>
<?php
// Start session
session_start();

// Database connection
$servername = "localhost";
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "homik"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Prevent SQL injection
    $user = mysqli_real_escape_string($conn, $user);
    $pass = mysqli_real_escape_string($conn, $pass);

    // Hash the password
    $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

    // Insert user data into the database
    $sql = "INSERT INTO users (user_name, password) VALUES ('$user','$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        // Store username in session
        $_SESSION['username'] = $user;

        // Redirect to Amazon India after successful sign-up or login
        header("Location: https://www.amazon.in");
        exit(); // Ensure no further code is executed after redirect
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homik - Interior Job Factory</title>
    <style>
        /* Basic reset */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        /* Full-page layout */
        body {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #e9ecef;
        }

        /* Split container */
        .container {
            display: flex;
            width: 80%; /* Responsive width */
            max-width: 900px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        /* Left banner section */
        .banner {
            flex: 1;
            background-image: url('./images/home/login.png');
            background-size: cover;
            background-position: center;
            display: none; /* Hidden on small screens */
        }

        /* Login form section */
        .form-container {
            flex: 1;
            padding: 40px;
        }

        /* Form title */
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        /* Labels */
        label {
            display: block;
            margin-bottom: 8px;
            color: #666;
        }

        /* Input fields */
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        /* Submit button */
        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        /* Submit button hover effect */
        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                width: 90%; /* Adjust width on smaller screens */
            }

            .banner {
                display: none;
            }

            .form-container {
                padding: 20px;
            }
        }

        @media (min-width: 769px) {
            .banner {
                display: block;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Left Banner Section -->
        <div class="banner"></div>

        <!-- Login Form Section -->
        <div class="form-container">
            <h2>User Login In</h2>
            <form method="POST" action="">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <input type="submit" class="btn btn-success" value="Login">
            </form>
        </div>
    </div>
</body>

</html>
