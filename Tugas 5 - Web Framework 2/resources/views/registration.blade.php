<!DOCTYPE html>
<html>
<head><title>Registration</title></head>
<body>
    <h2>Registration</h2>
    <form action="/register" method="POST">
        @csrf
        @if(session('success'))
            <p style="color: green;">{{ session('success') }}</p>
        @endif

        <label>Email</label><br>
        <input type="email" name="email" required><br><br>

        <label>Nama</label><br>
        <input type="text" name="name" required><br><br>

        <label>Password</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit">Register</button>
    </form>
    <br>
    <a href="/login">Sudah punya akun? Login</a> 
</body>
</html>