<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="css/login.css" rel="stylesheet">
<head>

<body>
    <div class="container">
        <h1>User Login</h1>

        <div class="input">
            <form>
                <label for="UserID">Login sebagai</label>
                <select id="UserID" name="UserID">
                    <option value="Mahasiswa">Mahasiswa</option>
                    <option value="Guru">Guru</option>
                    <option value="Admin">Admin</option>
                </select>

                <label for="fname">Username</label>
                <input type="text" id="fname" name="fname">
                <label for="pass">Password</label>

                <input type="text" id="pass" name="pass">
            </form>
        </div>

        <div class="buttoncontainer">
        <input type="button" class="button" value="Input Button">
        </div>

    </div>
<body>

<html>