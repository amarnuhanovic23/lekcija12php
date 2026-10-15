<?php

    require_once 'config.php';

    if (!isset($_SESSION['user_id'])) {
        header('Location: login.php');
        exit();
    }

    $username = htmlspecialchars($_SESSION['username'], ENT_QUOTES, 'UTF-8');

    $name = htmlspecialchars($_SESSION['name'], ENT_QUOTES, 'UTF-8');




include('header.php'); ?>

<nav class="navbar navbar-dark navbar-expand-lg bg-dark">
    <div class="container-fluid">

        <a class="navbar-brand" href="dashboard.php">Digital School</a>

        <div class="navbar-nav ms-auto">
            <a class="nav-link" href="login.php">Sign Out</a>
        </div>
       
        
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        
        <nav class="col-md-3 col-lg-2 sidebar p-0">
            
            <a class="fw-bold" href="dashboard.php">Dashboard</a>
                
              
            <a  href="login.php">Log In</a>
                
              
            <a href="signup.php">Sign Up</a>
               

             
        </nav>


        <main class="col-md-9 col-lg-10 dashboard-content">
        
            <h1>Dashboard</h1>

            <p>Welcome to Digital School!</p>

            <div class ="card mt-4">
                <div class="card-body">
                    <h5 class="card-title">Welcome!</h5>

                    <p class="card-text">This is our Bootstrap dashboard! </p>

                    <a href="signup.php" class="btn btn-primary">Create Account</a>

                </div>
            </div>
        </main>
    </div>
</div>

<?php include('footer.php'); ?>