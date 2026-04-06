<!DOCTYPE html>
<html>
<head><title>Home</title></head>
<body>
    <h1>Selamat datang, {{ Auth::user()->name }}</h1> 
    <br>
    <a href="/logout">
        <button type="button">Logout</button>
    </a> 
</body>
</html>