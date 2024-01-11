<?php 
session_start();

include 'db/DB_Connect.php';

if (isset($_SESSION['isAdmin'])){
    header('Location: dashboard.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === "POST"){

    $user = $_POST['username'];
    $pass = $_POST['password'];
    
    try {
        $statement = $db->prepare("SELECT id, password FROM users WHERE username = :username");
        $statement->bindParam(':username', $user, PDO::PARAM_STR);
        $statement->execute();
    
        $res = $statement->fetch(PDO::FETCH_ASSOC);
        //var_dump($res)

        if($res && password_verify($pass, $res['password'])) {   

            $cookie_cons = base64_encode(json_encode(array("admin"=>0)));
            $_SESSION['isAdmin'] = $cookie_cons;
            setcookie("isAdmin", $cookie_cons, time() + 600, "/");

            header("Location: dashboard.php");
            exit();
        
        } else {
        
            $error_msg = "<script>alert('Invalid username or password.');</script>";
            echo $error_msg;
        
        }
    
    } catch (PDOException $e) {
        die('Query Failed:' . $e -> getMessage());
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Login</title>
    <style>
        body {
            background-color: #121212; /* Dark background color */
            color: #ffffff; /* Light text color */
            font-family: monospace;
        }
        .navbar-dark .navbar-nav .nav-link {
            color: #ffffff !important; /* Light text color for navbar links */
        }
        .navbar-dark .navbar-toggler-icon {
            background-color: #ffffff; /* Light color for the navbar toggler icon */
        }
        .card {
            background-color: #333333; /* Dark card background color */
            color: #ffffff; /* Light text color for card content */
        }
        .card-header {
            background-color: #212121; /* Dark card header background color */
            color: #ffffff; /* Light text color for card header */
        }
        .card-footer {
            background-color: #212121; /* Dark card footer background color */
            color: #ffffff; /* Light text color for card footer */
        }
        .btn-primary {
            background-color: #2196F3; /* Bootstrap primary color for the login button */
            border-color: #2196F3;
        }
        .btn-primary:hover {
            background-color: #0d8aed; /* Darker shade on hover */
            border-color: #0d8aed;
        }
        input.form-control {
            background-color: #444444; /* Dark color for input boxes */
            color: #ffffff; /* Light text color for input text */
            border: none;
            outline: none;
        }

        input.form-control:focus {
           box-shadow: none;
           background-color: #444444;
           color: white;
        }
        
        a {
            text-decoration: none;
        }

    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Brand</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
 

                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
 

                <li class="nav-item">
                    <a class="nav-link" href="#">APIs</a>
                </li>
 
            </ul>
            <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                    <a class="nav-link" href="signup.php">Signup</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li> 
   
            </ul>
        </div>
    </div>
</nav>

<!-- Login Form -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Login
                </div>
                <div class="card-body">
                    <!-- Your login form goes here -->
                    <form action="login.php" method="POST">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div align="center">
                            <button type="submit" class="btn btn-success">Login</button>
                        </div>
                    </form>                
                </div>
                
                <div align="center" class="card-footer text-muted">
                    <a href="javascript:alert('Contact administrator.')">Forgot Password?</a>
                </div>
                <div align="center" class="card-footer text-muted">
                    <a href="signup.php">Don't have an account? Signup.</a>
                </div>
            </div>
        </div>
    </div> 
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
