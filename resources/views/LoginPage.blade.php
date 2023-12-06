<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/bamboo.css/dist/dark.min.css">
    <!--Style for form alerts-->
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <!--Functions for form alerts-->
    <script src="app.js"></script>
    <title>Login Page</title>

</head>

<body>
    <div class="login-container">
        <h2>Login</h2>
        <form id="form" class="" action="Login" method="POST">
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
        <div class="cancelAlert">
            <button onclick="showAlert()">Cancel</button>

            <div id="overlay" onclick="hideAlert()"></div>
            <div id="alertBox">
            <p>Do you want to reset the form?</p>
            <button onclick="resetForm()">Reset</button>
            <button onclick="hideAlert()">Cancel</button>
            </div>
        </div>
        <form action={{ url('/') }} method="get">
            <button>Return to Home Page</button>
        </form>
    </div>
</body>

</html>
