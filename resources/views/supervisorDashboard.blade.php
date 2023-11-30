<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Supervisor Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>
    <div class="scene">
        <div class="sun"></div>
        <div class="water"></div>
<div class="hold3">
    <h1 class="boxed">Supervisor Dashboard</h1>
</div>
    
    {{-- <br>
    <br>
    <h2>You are signed in as</h2>
    <h2>firstName</h2>
    <h2>lastname</h2> --}}
    <div class="hold2">
        <div class="hold">
            <form action={{ url('/registrationApproval') }} method="get">
                <button id="btn1">Registration Approval</button>
            </form>
            <br>
            <br>
            <form action={{ url('/addInfoOfPatient') }} method="get">
                <button id="btn1">Additional Information of Patient</button>
            </form>
        </div>
        <div class="hold">
            <form action={{ url('/employee') }} method="get">
                <button id="btn1">Employee</button>
            </form>
            <br>
            <br>
            <form action={{ url('/doctAppt') }} method="get">
                <button id="btn1">Doctor's Appointment</button>
            </form>  
            <br>
            <br>
            <form action={{ url('/adminsReport') }} method="get">
                <button id="btn1">Admin's Report</button>
            </form>
        </div>
        <div class="hold">
            <form action={{ url('/patients') }} method="get">
                <button id="btn1">Patients</button>
            </form>
            <br>
            <br>
            <form action={{ url('/rosterNewRoster') }} method="get">
                <button id="btn1">Roster & New Roster</button>
            </form>
        </div>
    
   
    <br>
    <br>
    </div>
    
</div>
</body>
</html>