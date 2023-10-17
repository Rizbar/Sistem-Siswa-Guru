<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="css/login.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>Login</h1>

        <div class="input">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <label for="UserRole">Login sebagai</label>
                <select id="UserRole" name="UserRole">
                    <option value="Siswa">Siswa</option>
                    <option value="Guru">Guru</option>
                    <option value="Admin">Admin</option>
                </select>

                <label for="username">Username</label>
                <input type="text" id="username" name="username">

                <label for="password">Password</label>
                <input type="password" id="password" name="password">
                
                <button type="submit" class="button">Login</button>
            </form>
        </div>

        <p>Belum ada akun? <a href="{{ route('register') }}">Register akun di sini</a></p>
    </div>
</body>

</html>
