<?php
session_start();

$users = [];

if (isset($_SESSION['users'])) {
    $users = $_SESSION['users'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = trim($_POST['first_name']);
    $lastName = trim($_POST['last_name']);
    $gmail = trim($_POST['gmail']);
    $age = trim($_POST['age']);
    $password = trim($_POST['password']);
    $gender = trim($_POST['gender']);

    if ($firstName !== '' && $lastName !== '' && $gmail !== '' && $password !== '' && $age !== '' && $gender !== '') {
        $users[$gmail] = [
            'first_name' => $firstName,
            'last_name' => $lastName,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'age' => $age,
            'gender' => $gender
        ];
        $_SESSION['users'] = $users;
        echo "<script>alert('Sign up successful!'); window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Please fill in all fields.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            display: flex; 
            justify-content: center; 
            align-items: center; 
            height: 100vh; 
            margin: 0; 
            background-color: #f4f4f4; 
        }
        .container {
            background-color: white; 
            border-radius: 10px; 
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); 
            padding: 20px; 
            width: 300px; 
        }
        h2 { 
            color: #00c6a9; 
            text-align: center; 
            margin-bottom: 20px; 
        }
        input, select {
            width: 100%; 
            padding: 10px; 
            margin: 10px 0; 
            border: 2px solid #00c6a9; 
            border-radius: 5px; 
            box-sizing: border-box; 
        }
        button {
            width: 100%; 
            padding: 10px; 
            background-color: #00c6a9; 
            border: none; 
            color: white; 
            font-size: 16px; 
            border-radius: 5px; 
            cursor: pointer; 
            transition: all 0.3s ease;
            margin-bottom: 3px;
        }
        button:hover {
            background-color: #009b8f;
            transform: scale(0.95);
        }
        button:focus {
            outline: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Sign Up</h2>
        <form method="POST">
            <input type="text" name="first_name" placeholder="First Name" required>
            <input type="text" name="last_name" placeholder="Last Name" required>
            <input type="email" name="gmail" placeholder="Gmail" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="number" name="age" placeholder="Age" required>
            <select name="gender" required>
                <option value="" disabled selected>Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
            <button type="submit">Submit</button>
        </form>
        <button onclick="window.location.href='index.php'">Back to Main Page</button>
    </div>
</body>
</html>