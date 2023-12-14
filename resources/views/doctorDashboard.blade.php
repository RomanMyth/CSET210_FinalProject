<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doctor Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/Updateddashboard.css') }}">
</head>

<body>
    <div class="scene">
        <div class="sun"></div>
        <div class="water"></div>
    </div>
    <header class="nohead">
        <div>Sunrise name place holder</div>
        <h1 class="boxed">Doctor Dashboard</h1>
        <div class="user-dropdown">
            <button id="btn2">Profile</button>
                {{-- <a href="#">{{ $First_Name }}</a> --}}
                {{-- <a href="#">{{ $Last_Name }}</a> --}}
            <form action="logout" method='POST' id="Logout" class="dropdown-content">
                @csrf
                <button type='Submit' id="logout-btn">Logout</button>
            </form>
        </div>
    </header>
    <div id="container">
        <div class="banner">
            {{-- just ignore this max I know youll probably see this but please this random div its actually important --}}
        </div>

        {{-- <br>
            <br>
            <h2>You are signed in as</h2>
            <h2>firstName</h2>
            <h2>lastname</h2> --}}
        <div id="hold">
            <div class="btn-con">
                <form action={{ url('/doctorsHome') }} method="get">
                    <button class="btn1">Doctors Home</button>
                </form>
                <form action={{ url('/patientOfDoctor') }} method="get">
                    <button class="btn1">Patient of Doctor</button>
                </form>
            </div>
            <div class="btn-con">
                <form action={{ url('/patients') }} method="get">
                    <button class="btn1">Patients</button>
                </form>
                <form action={{ url('/roster') }} method="get">
                    <button class="btn1">Roster</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
