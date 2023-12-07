<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/bamboo.css/dist/dark.min.css">
    <title>Patients</title>
    <style>
        #First-Name {
            display: none;
        }

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
        <h1>Patient Dashboard</h1>
        <div class="user-dropdown">
            <button id="btn2">Profile</button>
            <div class="dropdown-content">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Logout</a>
            </div>
        </div>
    </header>
    <form method="POST">
        @csrf
        <br>
        <br>
        <h3>Browse though patients</h3>
        <table id="patientsTable">
            <tr id="titleRow" class="patientsRow">
                <td class='titleRowData'><strong>Patient ID</strong></td>
                <td class='titleRowData'><strong>Patient Name</strong></td>
                <td class='titleRowData'><strong>Patient Age</strong></td>
                <td class='titleRowData'><strong>Emergency Contact Number</strong></td>
                <td class='titleRowData'><strong>Emergency Contact Name</strong></td>
                <td class='titleRowData'><strong>Admission Date</strong></td>
            </tr>
            <tr id="titleRow" class="patientRow">
                <td class='rowData'>#123</td>
                <td class='rowData'>John Doe</td>
                <td class='rowData'>33</td>
                <td class='rowData'>1234567890</td>
                <td class='rowData'>Matt Doe</td>
                <td class='rowData'>11/22/33</td>
            </tr>
        </table>
        <form action="searchPastAppointments" method="post">
            <div class="form-group">
                <button type="submit" value="Submit">Search</button>
            </div>
            <div class="form-group">
                <label for="search"></label>
                <input type="text" id="text" name="search">
            </div>
        </form>
        <br>
        <br>
</body>

</html>
