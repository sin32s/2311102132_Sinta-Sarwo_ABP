<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
    <h2>Login</h2>
    <form method="POST" action="index.php?action=login">
        <label>Username</label><br>
        <input type="text" name="username" required><br><br>
        <label>Password</label><br>
        <input type="password" name="password" required><br><br>
        <button type="submit" name="login_btn">Login</button>
    </form>
    
    <p><b><?php echo isset($message) ? $message : ''; ?></b></p>
    <a href="index.php?action=register">Register</a>
</body>
</html>