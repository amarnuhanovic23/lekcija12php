<?php 

    require_once 'config.php';

    if (isset($_SESSION['user_id'])) {
        header('Location: dashboard.php');
        exit();
    }

include('header.php'); ?>

<div class="auth-container">
    <h1 class="h3">Please Sign In</h1>



    <?php if (isset($_GET['registered'])): ?>
        <div class="alert alert-success" role="alert">
            Registration successful! Please log in.
        </div>
    <?php endif; ?>

    <?php if (isset($_GET['error'])): ?>
        <div class="alert alert-danger" role="alert">
            Invalid username or password.
        </div>
    <?php endif; ?>

    <form action="loginlogic.php" method="POST">
        
            <label for="username" class="form-label">Username</label> 

            <input type="text" class="form-control" id="username" name="username" required placeholder="username">
        
        
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required placeholder="password">
        
        <button type="submit" name="submit" class="btn btn-primary btn-lg">Sign In</button>
    
    </form>

    <small>Don't have an account? <a href="signup.php">Sign Up!</a></small>

    <p class="text-muted">Digital School &copy; 2026</p>
    
</div>

<?php include('footer.php'); ?>