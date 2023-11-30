<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/bamboo.css/dist/dark.min.css">
    <title>Patients Home Page</title>
</head>
<body>
    <h1>Patients Home</h1>
    <br>
    <h2>Welcome, </h2>
    <h2>firstName</h2>
    <h2>lastname</h2>
    <form action="" method="">
        @csrf
        <label for="patientid">Your Patient ID:</label>
        <input name="patientid" type="int" value="#456" readonly>
        <br>
        <br>
        <label for="First_Name">Your Patient Name:</label>
        <input name="First_Name" type="text" value="Jack Remo" readonly>
        <br>
        <br>
        <h3>Find your daily checklist for a specific date</h3>
        <label for="date">Select Date</label>
        <input name="date" type="date" value ="<?php echo date('Y-m-d') ?>">
        <br>
        <br>
        <button>Enter</button>
    </form>
    <br>
    <br>
    <h1>Your Daily Checklist</h1>
    <table id="patientsHomeTable">
        <tr id="titleRow" class="patientRow">
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
    <br>
    <form action={{ url('/rosterNewRoster') }} method="get">
        <button>Roster</button>
    </form>
    <br>
    <br>
</body>
</html>