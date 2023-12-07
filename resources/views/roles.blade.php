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
    <title>Roles</title>
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
    <header>
        <h1>Admin Role Dashboard</h1>
        <div class="user-dropdown">
            <button id="btn2">Profile</button>
            <div class="dropdown-content">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Logout</a>
            </div>
        </div>
    </header>
    <h1>Roles</h1>
    <br>
    <br>
    <h3>Browse though roles ad their corresponding access levels, along with which pages they can view</h3>
    <table id="rolesTable">
        <tr id="titleRow" class="rolesRow">
            <td class='titleRowData'><strong>Role</strong></td>
            <td class='titleRowData'><strong>Access Level</strong></td>
        </tr>
        <tr id="titleRow" class="rolesRow">
            <td class='rowData'>Admin</td>
            <td class='rowData'>1</td>
        </tr>
        <tr id="titleRow" class="rolesRow">
            <td class='rowData'>Supervisor</td>
            <td class='rowData'>2</td>
        </tr>
        <tr id="titleRow" class="rolesRow">
            <td class='rowData'>Doctor</td>
            <td class='rowData'>3</td>
        </tr>
        <tr id="titleRow" class="rolesRow">
            <td class='rowData'>Caregiver</td>
            <td class='rowData'>4</td>
        </tr>
        <tr id="titleRow" class="rolesRow">
            <td class='rowData'>Patient</td>
            <td class='rowData'>5</td>
        </tr>
    </table>
    <form id="form" action="" method="">
        @csrf
        <label for="newRole">New Role</label>
        <input type="text" name="newRole" id="">
        <br>
        <br>
        <label for="accessLevel">Access Level</label>
        <input type="int" name="accessLevel" id="">
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
