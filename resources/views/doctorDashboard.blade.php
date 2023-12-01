<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doctor Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>
    <div class="scene">
        <div class="sun"></div>
        <div class="water"></div>
<div class="hold3">
    <h1 class="boxed">Doctor Dashboard</h1>
</div>
    
    {{-- <br>
    <br>
    <h2>You are signed in as</h2>
    <h2>firstName</h2>
    <h2>lastname</h2> --}}
    <div class="hold2">
        <div class="hold">
            <form action={{ url('/doctorsHome') }} method="get">
                <button id="btn1">Doctors Home</button>
            </form>
            <br>
            <br>
            <form action={{ url('/patientOfDoc') }} method="get">
                <button id="btn1">Patient of Doctor</button>
            </form>
        </div>
        <div class="hold">
            <form action={{ url('/patients') }} method="get">
                <button id="btn1">Patients</button>
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