<?php
session_start();

$users = isset($_SESSION['users']) ? $_SESSION['users'] : [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $gmail = trim($_POST['gmail']);
    $password = trim($_POST['password']);

    if (isset($users[$gmail]) && password_verify($password, $users[$gmail]['password'])) {
        // Store the user's name and last name in the session
        $_SESSION['user_name'] = $users[$gmail]['name'];
        $_SESSION['user_last_name'] = $users[$gmail]['last_name'];

        // Redirect after successful login
        echo "<script>alert('Logged in successfully!'); window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Invalid username or password.');</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            display: flex; 
            flex-direction: column; 
            align-items: center; 
            justify-content: center; 
            height: 100vh; 
            background-color: #f4f4f4; 
            margin: 0; 
        }
        h2 { 
            color: #00c6a9; 
            margin-bottom: 20px; 
        }
        input {
            width: 300px; 
            padding: 10px; 
            margin: 10px 0; 
            border: 2px solid #00c6a9; 
            border-radius: 5px; 
            box-sizing: border-box; 
        }
        button {
            width: 300px; 
            padding: 10px; 
            background-color: #00c6a9; 
            border: none; 
            color: white; 
            font-size: 16px; 
            border-radius: 5px; 
            cursor: pointer; 
            transition: all 0.3s ease; 
        }
        button:hover {
            background-color: #009b8f; 
            transform: scale(0.95); 
        }
    </style>
</head>
<body>
    <h2>Log In</h2>
    <form method="POST">
        <input type="email" name="gmail" placeholder="Gmail" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Submit</button>
    </form>
    <button onclick="window.location.href='index.php'">Back to Main Page</button>
</body>
</html>