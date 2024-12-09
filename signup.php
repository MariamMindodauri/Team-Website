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
            background-color: #FFFFFF; 
        }
        .container {
            background-color: white; 
            border: 2px solid #D39B9B; 
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); 
            padding: 20px; 
            width: 700px; 
            height: 700px;
            display: flex; 
            flex-direction: column; 
            align-items: center; 
            justify-content: center; 
            text-align: center; 
            box-sizing: border-box; 

            /* Octagon shape using clip-path */
            clip-path: polygon(
                30% 0%, 70% 0%, 
                100% 30%, 100% 70%, 
                70% 100%, 30% 100%, 
                0% 70%, 0% 30%
            );
        }


        h2 { 
            color: #D39B9B; 
            text-align: center; 
            margin-bottom: 20px; 
        }
        input, select {
            width: 500px; 
            padding: 10px; 
            margin: 10px 0; 
            border: 2px solid #B8B8B8; 
            border-radius: 40px; 
            box-sizing: border-box; 
            font-size: 20px; 
            font-weight: 200;
            color: #4A4A4A;
        }
        button {
            width: 200px; 
            padding: 15px; 
            background-color: #C4C4C4; 
            border: none; 
            color: white; 
            font-size: 16px; 
            border-radius: 40px; 
            cursor: pointer; 
            transition: all 0.3s ease;
            margin-bottom: 3px;
        }
        button:hover {
            background-color: #D39B9B;
            transform: scale(0.95);
        }
        button:focus {
            outline: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>SIGN UP</h2>
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