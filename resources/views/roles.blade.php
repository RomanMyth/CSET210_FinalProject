<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/bamboo.css/dist/dark.min.css">
    <title>Roles</title>
</head>
<body>
    <form method="POST">
    @csrf
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
    <table id="rolesTable">
        <tr id="titleRow" class="rolesRow">
            <td class='titleRowData'><strong>Page</strong></td>
            <td class='titleRowData'><strong>Required Role</strong></td>
        </tr>
        <tr id="titleRow" class="rolesRow">
            <td class='rowData'>Registration Approval</td>
            <td class='rowData'>Admin, Supervisor</td>
        </tr>
        <tr id="titleRow" class="rolesRow">
            <td class='rowData'>Add Information to Patient</td>
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
            <td class='rowData'>All</td>
        </tr>
    </table>
    <br>
    <br>
</body>
</html>