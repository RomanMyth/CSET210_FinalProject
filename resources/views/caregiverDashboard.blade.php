<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Caregiver Dashboard</title>
        <link rel="stylesheet" href="{{ asset('css/UpdatedDashboard.css') }}">
    </head>
    <body>
        <div class="scene">
            <div class="sun"></div>
            <div class="water"></div>
        </div>
        <div id="container">
            <div class="banner">
                <h1 class="boxed">Caregiver Dashboard</h1>
            </div>
            <div id="hold">
                <div class="btn-con">
                    <form action={{ url('/registrationApproval') }} method="get">
                        <button class="btn1">Caregiver's Home</button>
                    </form>
                </div>
                <div class="btn-con">
                    <form action={{ url('/additionalPatientInfo') }} method="get">
                        <button class="btn1">Caregiver's Patients</button>
                    </form>
                </div>
                <div class="btn-con">
                    <form action={{ url('/employee') }} method="get">
                        <button class="btn1">Roster</button>
                    </form>
                </div>
            </div>  
                {{-- <h2>You are signed in as</h2>
                <h2>First Name</h2>
                <h2>Last Name</h2>  he wants this as like a drop down thing at the side--}}
        </div>  
    </body>
</html>
