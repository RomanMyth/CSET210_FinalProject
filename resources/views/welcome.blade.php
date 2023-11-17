<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Words</h1>
    <form action={{ url('/testdone') }} method="post">
        @csrf
        <label>One</label>
        <input name="column1">
        <label>Two</label>
        <input name="column2">
        <button>Enter</button>
    </form>
</body>
</html>