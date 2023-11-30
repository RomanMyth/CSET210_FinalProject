<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/bamboo.css/dist/dark.min.css">
    <title>Patients</title>
</head>
<body>
    <form method="POST">
    @csrf
    <h1>Patients</h1>
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