<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://unpkg.com/bamboo.css/dist/dark.min.css">
        <title>Registration Approval</title>
    </head>
    <body>
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
    </body>
</html>