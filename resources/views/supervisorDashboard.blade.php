<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Supervisor Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/UpdatedDashboard.css') }}">
</head>

<body>
    <div class="scene">
        <div class="sun"></div>
        <div class="water"></div>
    </div>
    <div id="container">
        <header class="nohead">
            <div>Sunrise name place holder</div>
            <h1 class="boxed">Supervisor Dashboard</h1>
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
        <div id="hold">
            <div class="btn-con">
                <form action={{ url('/viewRegisters') }} method="get">
                    <button class="btn1">Registration Approval</button>
                </form>
                <form action={{ url('/additionalPatientInfo') }} method="get">
                    <button class="btn1">Additional Information of Patient</button>
                </form>
            </div>
            <div class="btn-con">
                <form action={{ url('/viewEmployees') }} method="get">
                    <button class="btn1">Employee</button>
                </form>
                <form action={{ url('/DoctorsAppointment') }} method="get">
                    <button class="btn1">Doctor's Appointment</button>
                </form>
                <form action={{ url('/adminsReport') }} method="get">
                    <button class="btn1">Admin's Report</button>
                </form>
            </div>
            <div class="btn-con">
                <form action={{ url('/patients') }} method="get">
                    <button class="btn1">Patients</button>
                </form>
                <form action={{ url('/roster') }} method="get">
                    <button class="btn1">Roster & New Roster</button>
                </form>
            </div>
        </div>
        {{-- <h2>You are signed in as</h2>
            <h2>First Name</h2>
            <h2>Last Name</h2>  he wants this as like a drop down thing at the side --}}
    </div>
</body>

</html>
