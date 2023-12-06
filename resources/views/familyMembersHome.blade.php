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
    <title>Family Member's Home</title>
</head>
<body>
    <h1>Family Member's Home</h1>
    <br>
    <br>
    <h3>Please enter the date, your family code, and your
        patient ID to view all patient details
    </h3>
    <form id="form" action="" method="">
        <label for="date" name="date">Select Date</label>
        <input type="date" name="date">
        <br>
        <br>
        <label for="familyCode">Family Code</label>
        <input type="text" name="familyCode" id="">
        <br>
        <br>
        <label for="patientID">Patient ID</label>
        <input type="text" name="patientID" id="">
        <br>
        <br>
        <button type="submit" name="submit">Ok</button>
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
    <h1>Patient Details (hidden until info above is entered)</h1>
    <table id="familyMembersHomeTable">
        <tr id="titleRow" class="familyRow">
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
        <tr id="titleRow" class="familyRow">
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
    <form action={{ url('/') }} method="get">
        <button>Return to Home</button>
    </form>

</body>
</html>