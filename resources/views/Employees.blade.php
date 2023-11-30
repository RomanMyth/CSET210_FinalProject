<html>
    <head>
        <style>
            table{
                width: 500px;
                height: 500px;
            }
            tr{
                width: 100px;
                height: 25px;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th>Employee ID</th>
                <th>Employee Name</th>
                <th>Role</th>
                <th>Salary</th>
            </tr>
            @foreach($admins as $admin)
                <tr>
                    <th>{{ $admin->Admin_ID }}</th>
                    <th>{{ $admin->First_Name}}</th>
                    <th>Admin</th>
                    <th>None</th>
                </tr>
            @endforeach
            @foreach($supervisors as $supervisor)
                <tr>
                    <th>{{ $supervisor->Supervisor_ID }}</th>
                    <th>{{ $supervisor->First_Name}}</th>
                    <th>Supervisor</th>
                    <th>{{ $supervisor->Salary }}</th>
                </tr>
            @endforeach
            @foreach($doctors as $doctor)
                <tr>
                    <th>{{ $doctor->Doctor_ID }}</th>
                    <th>{{ $doctor->First_Name}}</th>
                    <th>Doctor</th>
                    <th>{{ $doctor->Salary }}</th>
                </tr>
            @endforeach
            @foreach($caregivers as $caregiver)
                <tr>
                    <th>{{ $caregiver->Caregiver_ID }}</th>
                    <th>{{ $caregiver->First_Name}}</th>
                    <th>Caregiver</th>
                    <th>{{ $caregiver->Salary }}</th>
                </tr>
            @endforeach
        </table>
    </body>
</html>