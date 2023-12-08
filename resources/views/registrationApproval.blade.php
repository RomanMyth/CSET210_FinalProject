<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://unpkg.com/bamboo.css/dist/dark.min.css">
        <!--Style for form alerts-->
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <!--Functions for form alerts-->
        <script src="app.js"></script>
        <title>Registration Approval</title>
        <script>
            checkIfMsgSent();
        </script>
         <style>
        header {
            background-color: #333;
            color: #fff;
            padding: 15px;
            text-align: center;
        }

        .user-dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 120px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .user-dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
    </head>
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
                <input type="text" name="Role_ID" value={{ $supervisor->Role_ID }} readonly>
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
