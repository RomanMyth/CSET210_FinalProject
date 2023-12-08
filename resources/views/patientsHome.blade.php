<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/bamboo.css/dist/dark.min.css">
    <title>Patients Home Page</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        var patients = <?php echo $patients; ?>;
        $(function() {
            $("#Patient-ID").change(function() {
                var patientExists = false;
                for (const patient of patients) {
                    if (this.value == patient[Object.keys(patient)[0]]) {
                        $("#First-Name").val(patient[Object.keys(patient)[1]]).fadeIn('slow');
                        $("#First-Name").slideDown("slow");
                        patientExists = true;
                        break;
                    } else {
                        patientExists = false;
                    }
                }
                if (!patientExists) {
                    $("#First-Name").slideUp("slow");
                    $("#First-Name").val(null);
                }
            });
            $("#reset").click(function() {
                $("#First-Name").slideUp("slow");
            });
        });
    </script>
    <style>
        #First-Name {
            display: none;
        }
    </style>
</head>

<body>
    <div class="scene">
        <div class="sun"></div>
        <div class="water"></div>
        <div class="hold3">
            <h1 class="boxed">Patient Home Page</h1>
        </div>
        <div class="hold holdcenter">
            <br>
            {{-- <h2>You are signed in as</h2>
              <h2>First Name</h2>
              <h2>Last Name</h2>  he wants this as like a drop down thing at the side --}}
            <form action="" method="">
                @csrf
                <label class="holdlabel" for="patientid">Your Patient ID:</label>
                <input name="patientid" type="int" value="#456" readonly>
                <br>
                <br>
                <label for="First_Name">Your Patient Name:</label>
                <input name="First_Name" type="text" value="Jack Remo" readonly>
                <br>
                <br>
                <h3>Find your daily checklist for a specific date</h3>
                <label for="date">Select Date</label>
                <input name="date" type="date" value ="<?php echo date('Y-m-d'); ?>">
                <br>
                <br>
                <button>Enter</button>
            </form>
            <br>
            <br>
            <h1>Your Daily Checklist</h1>
            <table id="patientsHomeTable">
                <tr id="titleRow" class="patientRow">
                    <td class='titleRowData rowData'><strong>Doctor's Name</strong></td>
                    <td class='titleRowData rowData'><strong>Doctor's Appointment</strong></td>
                    <td class='titleRowData rowData'><strong>Caregiver's Name</strong></td>
                    <td class='titleRowData rowData'><strong>Morning Med</strong></td>
                    <td class='titleRowData rowData'><strong>Afternoon Med</strong></td>
                    <td class='titleRowData rowData'><strong>Night Med</strong></td>
                    <td class='titleRowData rowData'><strong>Breakfast</strong></td>
                    <td class='titleRowData rowData'><strong>Lunch</strong></td>
                    <td class='titleRowData rowData'><strong>Dinner</strong></td>
                </tr>
                <tr id="Row" class="patientRow">
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
            <br>
        </div>

    </div>



</body>

</html>
