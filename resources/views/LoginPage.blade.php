<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/bamboo.css/dist/dark.min.css">
    <title>Login Page</title>

</head>

<body>
    <div class="login-container">
        <h2>Login</h2>
        <form id="loginForm" action="Login" method="POST">
            @CSRF
            <div class="form-group">
                <label for="Email">Email:</label>
                <input type="text" id="email" name="Email" required>
            </div>
            <div class="form-group">
                <label for="Password">Password:</label>
                <input type="password" id="password" name="Password" required>
            </div>
            <div class="form-group">
                <button type="submit">Login</button>
            </div>
        </form>
        <br>
        <form action={{ url('/') }} method="get">
            <button>Return to Home Page</button>
        </form>
    </div>
</body>

</html>
