<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://unpkg.com/bamboo.css/dist/dark.min.css">
        <!--Style for form alerts and header-->
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <!--Functions for form alerts-->
        <script src="app.js"></script>
        <title>Registration Approval</title>
    </head>
<header>
    <h3>
        Sunrise Retirement Home
    </h3>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
    <button onclick="goBack()">Go Back</button>
    {{-- <div class='header-btn-section'>
            <form action="back" method='POST'>
                @csrf
                <button type='Submit'>Back</button>
            </form>
        </div> --}}
    <div class='header-btn-section'>
        <div class="user-dropdown">
            <button id="btn2">Profile</button>
            <div class="dropdown-content">
                {{-- <a href="#">{{ $First_Name }}</a> --}}
                {{-- <a href="#">{{ $Last_Name }}</a> --}}
                You exist!
            </div>
        </div>
    </div>
    <div class='header-btn-section'>
        <form action="logout" method='POST'>
            @csrf
            <button type='Submit'>Logout</button>
        </form>
    </div>
</header>

<body>
    {{-- @if (isset($denied))
            echo "test";
        
        @else
        echo "not set";
        @endif --}}
        <h1>Registration Approval</h1>
        <br>
        <br>
        <h2>Admins</h2>
        @foreach($admins as $admin)
            <form action='Register' method="POST">
                @csrf
                <div>Name: </div>
                <div>{{ $admin->First_Name }}</div>
                <br>
                <div>Role: </div>
                <input type="text" name="Role_ID" value={{ $admin->Role_ID }} readonly>
                <input type="hidden" name="Email" value={{ $admin->Email }}>
                <br>
                <br>
                <button type="submit">Approve</button>
            </form>
            <form action="deniedRegister" method="post">
                @csrf
                <input type="hidden" name="Role_ID" value={{ $admin->Role_ID }}>
                <input type="hidden" name="Email" value={{ $admin->Email }}>
                <button onclick="" id="deny" type="submit">Deny</button>
            </form>
        @endforeach
        <h2>Supervisors</h2>
        @foreach($supervisors as $supervisor)
            <form action='Register' method="POST">
                @csrf
                <div>Name: </div>
                <div>{{ $supervisor->First_Name }}</div>
                <br>
                <div>Role: </div>
                <input type="text" name="Role_ID" value={{ $supervisor->Role_ID }} readonly>
                <input type="hidden" name="Email" value={{ $supervisor->Email }}>
                <br>
                <br>
                <button type="submit">Approve</button>
            </form>
            <form action="deniedRegister" method="post">
                @csrf
                <input type="hidden" name="Role_ID" value={{ $supervisor->Role_ID }}>
                <input type="hidden" name="Email" value={{ $supervisor->Email }}>
                <button onclick="" id="deny" type="submit">Deny</button>
            </form>
        @endforeach
        <h2>Doctors</h2>
        @foreach($doctors as $doctor)
            <form action='Register' method="POST">
                @csrf
                <div>Name: </div>
                <div>{{ $doctor->First_Name }}</div>
                <br>
                <div>Role: </div>
                <input type="text" name="Role_ID" value={{ $doctor->Role_ID }} readonly>
                <input type="hidden" name="Email" value={{ $doctor->Email }}>
                <br>
                <br>
                <button type="submit">Approve</button>
            </form>
            <form action="deniedRegister" method="post">
                @csrf
                <input type="hidden" name="Role_ID" value={{ $doctor->Role_ID }}>
                <input type="hidden" name="Email" value={{ $doctor->Email }}>
                <button onclick="" id="deny" type="submit">Deny</button>
            </form>
        @endforeach
        <h2>Caregivers</h2>
        @foreach($caregivers as $caregiver)
            <form action='Register' method="POST">
                @csrf
                <div>Name: </div>
                <div>{{ $caregiver->First_Name }}</div>
                <br>
                <div>Role: </div>
                <input type="text" name="Role_ID" value={{ $caregiver->Role_ID }} readonly>
                <input type="hidden" name="Email" value={{ $caregiver->Email }}>
                <br>
                <br>
                <button type="submit">Approve</button>
            </form>
            <form action="deniedRegister" method="post">
                @csrf
                <input type="hidden" name="Role_ID" value={{ $caregiver->Role_ID }}>
                <input type="hidden" name="Email" value={{ $caregiver->Email }}>
                <button onclick="" id="deny" type="submit">Deny</button>
            </form>
        @endforeach
        <h2>Patients</h2>
        @foreach($patients as $patient)
            <form action='Register' method="POST">
                @csrf
                <div>Name: </div>
                <div>{{ $patient->First_Name }}</div>
                <br>
                <div>Role: </div>
                <input type="text" name="Role_ID" value={{ $patient->Role_ID }} readonly>
                <input type="hidden" name="Email" value={{ $patient->Email }}>
                <br>
                <br>
                <button type="submit">Approve</button>
            </form>
            <form action="deniedRegister" method="post">
                @csrf
                <input type="hidden" name="Role_ID" value={{ $patient->Role_ID }}>
                <input type="hidden" name="Email" value={{ $patient->Email }}>
                <button onclick="" id="deny" type="submit">Deny</button>
            </form>
        @endforeach
        <div class="cancelAlert">
            <div id="overlay" onclick="hideAlert()"></div>
            <div id="alertBox">
            <p>User denial successful</p>
            <button onclick="hideAlert()">Ok</button>
        </div>
    </div>
</body>

</html>
