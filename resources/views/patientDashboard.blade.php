<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Patient Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>
    <div class="scene">
        <div class="sun"></div>
        <div class="water"></div>
<div class="hold3">
    <h1 class="boxed">Patient Dashboard</h1>
</div>
    
    {{-- <br>
    <br>
    <h2>You are signed in as</h2>
    <h2>firstName</h2>
    <h2>lastname</h2> --}}
    <div class="hold2">
        <div class="hold">
            <form action={{ url('/patientsHome') }} method="get">
                <button id="btn1">Patients Home</button>
            </form>
            <br>
            <br>
            <form action={{ url('/rosterNewRoster') }} method="get">
                <button id="btn1">Roster</button>
            </form>
        </div>
    <br>
    <br>
    </div>
    
</div>
</body>
</html>