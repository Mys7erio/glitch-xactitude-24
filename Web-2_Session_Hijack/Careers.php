<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Careers</title>
    <style>
        body {
            background-color: #121212; 
            color: #ffffff;
            font-family: monospace;
        }
        .navbar-dark .navbar-nav .nav-link {
            color: #ffffff !important;
        }
        .navbar-dark .navbar-toggler-icon {
            background-color: #ffffff;
        }
        .card {
            background-color: #333333;
            color: #ffffff; 
            margin-bottom: 20px;
        }
        .card-header {
            background-color: #212121;
            color: #ffffff;
        }
        .card-body, .card-footer {
            background-color: #212121;
            color: #ffffff;
        }
        .btn-primary {
            background-color: #2196F3;
            border-color: #2196F3;
        }   
        .btn-primary:hover {
            background-color: #0d8aed;
            border-color: #0d8aed;
        }
        input.form-control {
            background-color: #444444;
            color: #ffffff;
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


        .glow-green {
            color: #fff; 
            text-shadow: 0 0 10px #00ff00, 0 0 20px #00ff00, 0 0 30px #00ff00; 
        }

        </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">Wheelbarrow</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">APIs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Careers.php">Careers</a>
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

<!-- Careers Section -->
<div class="container mt-5">
    <h2 class="text-center mb-5 glow-green">Work with us</h2>
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    <h5>Administrator/sysadmin<h5>
                </div>
                <div style="background-color:black" class="card-body">
                    <p>Looking for enthusiastic admins to join our company. Benefits include free food and biscuits.</p>
                    <p>Salary: N/A</p>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header">
                    <h5> HR Recruiter </h5> 
                </div>
                <div style="background-color:black" class="card-body">
                    <p>Young vibrant recruiters who knows how to create job descriptions are welcome to apply.</p>
                    <p>Salary: $31337</p>
                </div>
            </div>


        </div>
    </div> 
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
