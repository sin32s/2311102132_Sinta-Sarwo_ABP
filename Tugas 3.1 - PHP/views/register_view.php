<!DOCTYPE html>
<html>
<head><title>Register</title></head>
<body>
    <h2>Register</h2>
    <form method="POST" action="index.php?action=register">
        <label>Username</label><br>
        <input type="text" name="username" required><br><br>
        <label>Password</label><br>
        <input type="password" name="password" required><br><br>
        <button type="submit" name="send">Send</button>
    </form>
    
    <p><b><?php echo isset($message) ? $message : ''; ?></b></p>
    <a href="index.php?action=login">Login</a>
</body>
</html>