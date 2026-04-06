<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
    <h2>Login</h2>
    <form action="/auth" method="POST">
        @csrf
        @if(session('error'))
            <p style="color: red;">{{ session('error') }}</p>
        @endif

        <label>Email</label><br>
        <input type="email" name="email" required><br><br>

        <label>Password</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit">Login</button>
    </form>
    <br>
    <a href="/registration">Belum punya akun? Register</a> 
</body>
</html>