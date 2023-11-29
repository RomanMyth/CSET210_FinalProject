<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/bamboo.css/dist/dark.min.css">
    <title>Doctors Home</title>
</head>
<body>
    <h1>Doctor's Home</h1>
    <br>
    <br>
    <h2>You are signed in as Dr.</h2>
    <h2>firstName</h2>
    <h2>lastname</h2>
    <br>
    <br>
    <h1>Past Appointments</h1>
    <table id="docHomeTable">
        <tr id="titleRow" class="docRow">
            <td class='titleRowData'></td>
            <td class='titleRowData'><strong>Patient Name</strong></td>
            <td class='titleRowData'><strong>Appointment Date</strong></td>
            <td class='titleRowData'><strong>Comment</strong></td>
            <td class='titleRowData'><strong>Morning Med</strong></td>
            <td class='titleRowData'><strong>Afternoon Med</strong></td>
            <td class='titleRowData'><strong>Night Med</strong></td>
        </tr>
        <tr id="titleRow" class="docRow">
            <td class='titleRowData'>
                <form action={{ url('/patientOfDoc') }} method="get">
                    <button>Info</button>
                </form>
            </td>
            <td class='rowData'>John Doe</td>
            <td class='rowData'>11/22/33</td>
            <td class='rowData'>He deed</td>
            <td class='rowData'>yes</td>
            <td class='rowData'>no</td>
            <td class='rowData'>no</td>
        </tr>
        <tr id="titleRow" class="docRow">
            <td class='rowData'>
                <form action={{ url('/patientOfDoc') }} method="get">
                    <button>Info</button>
                </form>
            </td>
            <td class='rowData'>John Doe</td>
            <td class='rowData'>11/22/33</td>
            <td class='rowData'>He deed</td>
            <td class='rowData'>yes</td>
            <td class='rowData'>no</td>
            <td class='rowData'>no</td>
        </tr>
    </table>
    <form action="searchPastAppointments" method="post">
        <div class="form-group">
            <button type="submit" value="Submit">Search</button>
        </div>
        <div class="form-group">
            <label for="search"></label>
            <input type="text" id="text" name="text">
        </div>
    </form>
    <br>
    <br>
    <h1>Future Appointments</h1>
    <p>Search for all your upcoming patient appointments from today until a specified date</p>
    <form id="appointmentsForm" action="appointmentsForm" mehtod="POST">
        <div class="form-group">
            <label for="date">Future Date</label>
            <input type="date" id="date" name="date">
        </div>
        <br>
        <div class="form-group">
            <button type="submit" value="Submit">Search</button>
        </div>
    </form>
    <br>
    <table id="docHomeTable">
        <tr id="titleRow" class="docRow">
            <td class='titleRowData'><strong>Patient Name</strong></td>
            <td class='titleRowData'><strong>Appointment Date</strong></td>
        </tr>
        <tr id="titleRow" class="docRow">
            <td class='titleRowData'>John Doe</td>
            <td class='titleRowData'>11/22/33</td>
        </tr>
    </table>
    <br>
    <br>
    <form action={{ url('/patients') }} method="get">
        <button>Patients</button>
    </form>
    <br>
    <form action={{ url('/rosterNewRoster') }} method="get">
        <button>Roster</button>
    </form>
    <br>
    <br>
</body>
</html>