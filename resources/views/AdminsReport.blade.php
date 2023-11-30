<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/bamboo.css/dist/dark.min.css">
    <title>Admin Report</title>
</head>
<body>
    <h1>Admin Report</h1>
    <br>
    <br>
    <h3>Check the missed patient activity for a specific day</h3>
    <form id="adminsReportForm" action="" method="">
        <label for="date" name="date">Select Date</label>
        <input type="date" name="date">
        <br>
        <br>
        <button type="submit" name="submit">Submit</button>
    </form>
    <h1>Missed Patients Daily Checklists</h1>
    <table id="patientsHomeTable">
        <tr id="titleRow" class="patientRow">
            <td class='titleRowData'><strong>Patient's Name</strong></td>
            <td class='titleRowData'><strong>Doctor's Name</strong></td>
            <td class='titleRowData'><strong>Doctor's Appointment</strong></td>
            <td class='titleRowData'><strong>Caregiver's Name</strong></td>
            <td class='titleRowData'><strong>Morning Med</strong></td>
            <td class='titleRowData'><strong>Afternoon Med</strong></td>
            <td class='titleRowData'><strong>Night Med</strong></td>
            <td class='titleRowData'><strong>Breakfast</strong></td>
            <td class='titleRowData'><strong>Lunch</strong></td>
            <td class='titleRowData'><strong>Dinner</strong></td>
        </tr>
        <tr id="titleRow" class="patientRow">
            <td class='rowData'>John Doe</td>
            <td class='rowData'>Jane Smith</td>
            <td class='rowData'>11/22/33</td>
            <td class='rowData'>Anne Smith</td>
            <td class='rowData'>yes</td>
            <td class='rowData'>no</td>
            <td class='rowData'>no</td>
            <td class='rowData'>yes</td>
            <td class='rowData'>no</td>
            <td class='rowData'>no</td>
        </tr>
    </table>

</body>
</html>