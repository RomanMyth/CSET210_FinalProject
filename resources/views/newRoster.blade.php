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
        <title>New Roster</title>
        <style>

        </style>
        <script>

            </script>
    </head>
    <body>
        <h1>New Roster</h1>
        <br>
        <br>
        <h3>Select a secific date and then choose the given names for each position for that day</h3>
        <form id='form' action="NewSchedule" method="POST">
            <label for="date">Date</label>
            <input type="date" name="Date" id="">
            <br>
            <br>
            <label for="supervisor">Supervisor</label>
            <select name="Supervisor_ID" id="newRosterSupervisorDropdown"></select>
            <br>
            <br>
            <label for="doctor">Doctor</label>
            <select name="Doctor_ID" id="newRosterDoctorDropdown"></select>
            <br>
            <br>
            <label for="Caregiver1">Caregiver 1</label>
            <select name="Caregiver1" id="newRosterCaregiver1Dropdown"></select>
            <br>
            <br>
            <label for="Caregiver2">Caregiver 2</label>
            <select name="Caregiver2" id="newRosterCaregiver2Dropdown"></select>
            <br>
            <br>
            <label for="Caregiver3">Caregiver 3</label>
            <select name="Caregiver3" id="newRosterCaregiver3Dropdown"></select>
            <br>
            <br>
            <label for="Caregiver4">Caregiver 4</label>
            <select name="Caregiver4" id="newRosterCaregiver4Dropdown"></select>
            <br>
            <br>
            <button type="submit">Create Schedule</button>
            <br>
            <br>
        </form>
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
    </body>
</html>