<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://unpkg.com/bamboo.css/dist/dark.min.css">
        <title>New Roster</title>
        <style>
            /*Cancel alert styling below*/
            .alert {
                padding: 20px;
                background-color: #f44336; /* Red */
                color: white;
                margin-bottom: 15px;
            }
            
            .closebtn {
                margin-left: 15px;
                color: white;
                font-weight: bold;
                float: right;
                font-size: 22px;
                line-height: 20px;
                cursor: pointer;
                transition: 0.3s;
            }
            
            .closebtn:hover {
                color: black;
            }
        </style>
    </head>
    <body>
        <h1>New Roster</h1>
        <br>
        <br>
        <h3>Select a secific date and then choose the given names for each position for that day</h3>
        <form action="" method="">
            <label for="date">Date</label>
            <input type="date" name="date" id="">
            <br>
            <br>
            <label for="supervisor">Supervisor</label>
            <select name="supervisor" id="newRosterSupervisorDropdown"></select>
            <br>
            <br>
            <label for="doctor">Doctor</label>
            <select name="doctor" id="newRosterDoctorDropdown"></select>
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
            <button type="submit">Ok</button>
            <div class="alert">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                This is an alert box.
              </div>
        </form>
        <br>
    </body>
</html>