<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://unpkg.com/bamboo.css/dist/dark.min.css">
        <title>Employees</title>
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
        <h1>Employees</h1>
        <br>
        <br>
        <h3>Browse though employees</h3>
        <table>
            <tr>
                <th>Employee ID</th>
                <th>Employee Name</th>
                <th>Role</th>
                <th>Salary</th>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <th>{{ $user->id }}</th>
                    <th>{{ $user->First_Name }}</th>
                    <th>{{ $user->Role_ID }}</th>
                    <th>{{ $user->Salary }}</th>
                </tr>
            @endforeach
            {{-- @foreach($admins as $admin)
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
            @endforeach --}}
        </table>
        <form id='employeeSearchForm' action="" method="">
            <label for="search">Search</label>
            <input type="text" name="search" id="">
            <br>
            <br>
            <button type="submit">Enter</button>
        </form>
        <br>
        <h3>Change employee salary (admin only)</h3>
        <br>
        <br>
        <form id='employeeForm' action="" method="">
            <label for="empID">Employee ID</label>
            <input type="number" name="empID" id="">
            <br>
            <br>
            <label for="salary">New salary</label>
            <input type="number" name="salary" id="">
            <br>
            <br>
            <button type="submit">Change</button>
        </form>
        <br>
        <form id='employeeCancelForm' action="" method="">
            <button type="submit">Cancel</button>
        </form>
    </body>
</html>