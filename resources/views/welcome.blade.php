<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/bamboo.css/dist/dark.min.css">
    <title>Old Home Page</title>
</head>
<body>
    <h1>Welcome to retirement home!</h1>
    <form action={{ url('/LoginPage') }} method="get">
        @csrf
        <button>Log in</button>
    </form>
    <form action={{ url('/RegisterPage') }} method="get">
        @csrf
        <button>Register</button>
    </form>
</body>
</html>