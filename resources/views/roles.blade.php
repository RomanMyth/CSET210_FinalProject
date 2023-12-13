<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/bamboo.css/dist/dark.min.css">
    <!--Style for header and form alerts-->
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <!--Functions for form alerts-->
    <script src="app.js"></script>
    <title>Roles</title>
    <style>

    </style>
</head>
<header>
    <h3>
        Sunrise Retirement Home
    </h3>
    <div class='header-btn-section'>
        <form action="back" method='POST'>
            @csrf
            <button type='Submit'>Back</button>
        </form>
    </div>
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
    <h1>Roles</h1>
    <br>
    <br>
    <h3>Browse though roles and their corresponding access levels, along with which pages they can view</h3>
    <table id="rolesTable">
        <tr id="titleRow" class="rolesRow">
            <td class='titleRowData'><strong>Role</strong></td>
            <td class='titleRowData'><strong>Access Level</strong></td>
        </tr>
        @foreach ($roles as $role)
        <tr>
            <td>{{ $role->Role_ID }}</td>
            <td>{{ $role->Role_Name }}</td>
        </tr>
    @endforeach
    </table>
    <form id="form" action="newRole" method="POST">
        @csrf
        <label for="newRole">New Role Name:</label>
        <input type="text" name="Role_Name" id="Role_Name">
        <br>
        <br>
        <button type="submit">Ok</button>
    </form>
    <br>
    <div class="cancelAlert">
        <button onclick="showAlert()">Cancel</button>

        <div id="overlay" onclick="hideAlert()"></div>
        <div id="alertBox">
            <p>Do you want to reset the form?</p>
            <button onclick="resetForm()">Reset</button>
            <button onclick="hideAlert()">Cancel</button>
        </div>
    </div>
    <br>
    <br>
    <table id="rolesTable">
        <tr id="titleRow" class="rolesRow">
            <td class='titleRowData'><strong>Page</strong></td>
            <td class='titleRowData'><strong>Required Role</strong></td>
        </tr>
        <tr id="titleRow" class="rolesRow">
            <td class='rowData'>Admin Dashboard</td>
            <td class='rowData'>Admin</td>
        </tr>
        <tr id="titleRow" class="rolesRow">
            <td class='rowData'>Supervisor Dashboard</td>
            <td class='rowData'>Supervisor</td>
        </tr>
        <tr id="titleRow" class="rolesRow">
            <td class='rowData'>Doctor Dashboard</td>
            <td class='rowData'>Doctor</td>
        </tr>
        <tr id="titleRow" class="rolesRow">
            <td class='rowData'>Caregiver Dashboard</td>
            <td class='rowData'>Caregiver</td>
        </tr>
        <tr id="titleRow" class="rolesRow">
            <td class='rowData'>Patient Dashboard</td>
            <td class='rowData'>Patient</td>
        </tr>
        <tr id="titleRow" class="rolesRow">
            <td class='rowData'>Registration Approval</td>
            <td class='rowData'>Admin, Supervisor</td>
        </tr>
        <tr id="titleRow" class="rolesRow">
            <td class='rowData'>Additional Information of Patient</td>
            <td class='rowData'>Admin, Supervisor</td>
        </tr>
        <tr id="titleRow" class="rolesRow">
            <td class='rowData'>Employees</td>
            <td class='rowData'>Admin, Supervisor</td>
        </tr>
        <tr id="titleRow" class="rolesRow">
            <td class='rowData'>Doctor's Appointment</td>
            <td class='rowData'>Admin, Supervisor</td>
        </tr>
        <tr id="titleRow" class="rolesRow">
            <td class='rowData'>Admin's Report</td>
            <td class='rowData'>Admin, Supervisor</td>
        </tr>
        <tr id="titleRow" class="rolesRow">
            <td class='rowData'>New Roster</td>
            <td class='rowData'>Admin, Supervisor</td>
        </tr>
        <tr id="titleRow" class="rolesRow">
            <td class='rowData'>Patients</td>
            <td class='rowData'>Admin, Supervisor, Doctor, Patient</td>
        </tr>
        <tr id="titleRow" class="rolesRow">
            <td class='rowData'>Roles</td>
            <td class='rowData'>Admin</td>
        </tr>
        <tr id="titleRow" class="rolesRow">
            <td class='rowData'>Payment</td>
            <td class='rowData'>Admin</td>
        </tr>
        <tr id="titleRow" class="rolesRow">
            <td class='rowData'>Doctor's Home</td>
            <td class='rowData'>Doctor</td>
        </tr>
        <tr id="titleRow" class="rolesRow">
            <td class='rowData'>Patient of Doctor</td>
            <td class='rowData'>Doctor</td>
        </tr>
        <tr id="titleRow" class="rolesRow">
            <td class='rowData'>Caregiver's Home</td>
            <td class='rowData'>Caregiver</td>
        </tr>
        <tr id="titleRow" class="rolesRow">
            <td class='rowData'>Patient's Home</td>
            <td class='rowData'>Patient</td>
        </tr>
        <tr id="titleRow" class="rolesRow">
            <td class='rowData'>Roster</td>
            <td class='rowData'>Any</td>
        </tr>
    </table>
    <br>
    <br>
</body>

</html>
