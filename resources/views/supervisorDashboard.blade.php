<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/bamboo.css/dist/dark.min.css">
    <title>Supervisor Dashboard</title>
</head>
<body>
    <h1>Supervisor Dashboard</h1>
    <br>
    <br>
    <h2>You are signed in as</h2>
    <h2>firstName</h2>
    <h2>lastname</h2>
    <form action={{ url('/registrationApproval') }} method="get">
        <button>Registration Approval</button>
    </form>
    <br>
    <br>
    <form action={{ url('/addInfoOfPatient') }} method="get">
        <button>Additional Information of Patient</button>
    </form>
    <br>
    <br>
    <form action={{ url('/employee') }} method="get">
        <button>Employee</button>
    </form>
    <br>
    <br>
    <form action={{ url('/doctAppt') }} method="get">
        <button>Doctor's Appointment</button>
    </form>
    <br>
    <br>
    <form action={{ url('/adminsReport') }} method="get">
        <button>Admin's Report</button>
    </form>
    <br>
    <br>
    <form action={{ url('/patients') }} method="get">
        <button>Patients</button>
    </form>
    <br>
    <br>
    <form action={{ url('/rosterNewRoster') }} method="get">
        <button>Roster & New Roster</button>
    </form>
    <br>
    <br>
</body>
</html>