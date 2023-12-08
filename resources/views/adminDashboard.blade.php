<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/UpdatedDashboard.css') }}">
</head>

<body>
    <div class="scene">
        <div class="sun"></div>
        <div class="water"></div>
    </div>
    <header class="nohead">
        <div>
            Sunrise name place holder
        </div>
        <div>
            <h1 class="boxed">Admin Dashboard</h1>
        </div>

        <div class="user-dropdown">
            <button id="btn2">Profile</button>
            <div class="dropdown-content">
                {{-- <a href="#">{{ $First_Name }}</a>
                <a href="#">{{ $Last_Name }}</a> --}}
                <a href="#">Logout</a>
            </div>
        </div>
    </header>
    <div id="container">
        <div class="banner">
            {{-- just ignore this max I know youll probably see this but please this random div its actually important --}}
        </div>
        <div id="hold">
            <div class="btn-con">
                <form action={{ url('/viewRegisters') }} method="get">
                    <button class="btn1">Registration Approval</button>
                </form>
                <form action={{ url('/additionalPatientInfo') }} method="get">
                    <button class="btn1">Additional Information of Patient</button>
                </form>
                <form action={{ url('/viewEmployees') }} method="get">
                    <button class="btn1">Employee</button>
                </form>
            </div>
            <div class="btn-con">
              <form action={{ url('/DoctorsAppointment') }} method="get">
                <button class="btn1">Doctor's Appointment</button>
              </form>
              <form action={{ url('/adminsReport') }} method="get">
                <button class="btn1">Admin's Report</button>
              </form>
              <form action={{ url('/patients') }} method="get">
                <button class="btn1">Patients</button>
              </form>
            </div>
            <div class="btn-con">
                <form action={{ url('/roles') }} method="get">
                    <button class="btn1">Roles</button>
                </form>
                <form action={{ url('/roster') }} method="get">
                    <button class="btn1">Roster & New Roster</button>
                </form>
                <form action={{ url('/payment') }} method="get">
                    <button class="btn1">Payment</button>
                </form>
            </div>
        </div>
        {{-- <h2>You are signed in as</h2>
            <h2>First Name</h2>
            <h2>Last Name</h2>  he wants this as like a drop down thing at the side --}}
    </div>
</body>

</html>
