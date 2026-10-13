<?php include('header.php'); ?>

<div class="auth-container">
    <h1 class="h3">Please Sign In</h1>

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