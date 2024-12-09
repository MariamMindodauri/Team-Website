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
            background-color: white; 
            margin: 0; 
        }
        
        .container {
            background-color: white; 
            border: 2px solid #D39B9B; 
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); 
            width: 1100px; 
            height: 300px; 
            padding: 20px;
            display: flex; 
            flex-direction: column; 
            align-items: center; 
            justify-content: center; 
            text-align: center; 
            box-sizing: border-box;

            /* Octagon shape */
            clip-path: polygon(
                30% 0%, 70% 0%, 
                100% 30%, 100% 70%, 
                70% 100%, 30% 100%, 
                0% 70%, 0% 30%
            );
        }

        h2 { 
            color: #D39B9B; 
            margin-bottom: 20px; 
            font-size: 24px;
        }

        input {
            width: 400px; 
            padding: 15px; 
            margin: 10px 0; 
            border: 2px solid #B8B8B8; 
            border-radius: 40px; 
            font-size: 18px; 
            color: #4A4A4A;
            box-sizing: border-box;
        }

        button {
            width: 200px; 
            padding: 15px; 
            background-color: #C4C4C4; 
            border: none; 
            color: white; 
            font-size: 18px; 
            border-radius: 40px; 
            cursor: pointer; 
            transition: all 0.3s ease;
            margin-top: 10px;
        }

        button:hover {
            background-color: #D39B9B; 
            transform: scale(0.95);
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Log In</h2>
        <form method="POST">
            <input type="email" name="gmail" placeholder="Gmail" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Submit</button>
        </form>
        <button onclick="window.location.href='index.php'">Back to Main Page</button>
    </div>
</body>
</html>
