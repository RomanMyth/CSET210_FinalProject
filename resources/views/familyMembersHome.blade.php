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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>

        var patients = <?php echo $patients; ?>;

        $(document).ready(function() {
            console.log(patients);
            // $("#Patient-ID").change(function() {
            //     var patientExists = false;
            //     for (const patient of patients) {
            //         if (this.value == patient[Object.keys(patient)[0]]) {
            //             $("#First-Name").val(patient[Object.keys(patient)[1]]).fadeIn('slow');
            //             $("#First-Name").slideDown("slow");
            //             patientExists = true;
            //             break;
            //         } else {
            //             patientExists = false;
            //         }
            //     }
            //     if (!patientExists) {
            //         $("#First-Name").slideUp("slow");
            //         $("#First-Name").val(null);
            //     }
            // });
            $('#submit').click(function(){
                for(var i = 0; i < Object.keys(patients).length; i++){
                    // console.log(typeof(patients[Object.keys(patients)[i]]['Family_Code']))
                    // console.log($('#familyCode').val());
                    // console.log(patients[Object.keys(patients)[i]]['Family_Code']);
                    if($('#familyCode').val() == patients[Object.keys(patients)[i]]['Family_Code'] && $('#patientID').val() == patients[Object.keys(patients)[i]]['Patient_ID']){
                        // console.log("test");
                        console.log(patients[Object.keys(patients)[i]]['Family_Code']);
                    }
                }
            });
            // $("#date").change(function() {
            //     $("option").each(function(){
            //         this.remove();
            //     });

            //     var date = this.value;
            //     var test = (doctors[Object.keys(doctors)[1]]);

            //     $("#doctor-select").fadeIn("slow");
            //     $("#doctor-select-label").fadeIn("slow");
                
            //     for(var i = 0; i<Object.keys(doctors).length;i++){
            //         if(doctors[Object.keys(doctors)[i]]["date"]==date){
            //             console.log(doctors[Object.keys(doctors)[i]]["first_name"]);
            //             $('#doctor-select').append($('<option>', {
            //                 value: doctors[Object.keys(doctors)[i]]["doctor_id"],
            //                 text: doctors[Object.keys(doctors)[i]]["first_name"],
            //             }));
            //         }
            //     }
            // });
        });
    </script>
</head>
<body>
    <h1>Family Member's Home</h1>
    <br>
    <br>
    <h3>Please enter the date, your family code, and your
        patient ID to view all patient details
    </h3>
    <label for="date" name="date">Select Date</label>
    <input type="date" name="date" id="date">
    <br>
    <br>
    <label for="familyCode">Family Code</label>
    <input type="number" name="familyCode" id="familyCode">
    <br>
    <br>
    <label for="patientID">Patient ID</label>
    <input type="number" name="patientID" id="patientID">
    <br>
    <br>
    <button id="submit" type="button" name="submit">Ok</button>
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
    <div id="patient-details-section">
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
    </div>
    <form action={{ url('/') }} method="get">
        <button>Return to Home</button>
    </form>

</body>
</html>