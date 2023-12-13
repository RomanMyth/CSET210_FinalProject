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
    <title>Doctor's Appointment</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>

        var patients = <?php echo $patients; ?>;
        var doctors = <?php echo json_encode($doctors); ?>;

        $(document).ready(function() {

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
            $("#date").change(function() {
                $("option").each(function(){
                    this.remove();
                });

                var date = this.value;
                var test = (doctors[Object.keys(doctors)[1]]);

                $("#doctor-select").fadeIn("slow");
                $("#doctor-select-label").fadeIn("slow");
                
                for(var i = 0; i<Object.keys(doctors).length;i++){
                    if(doctors[Object.keys(doctors)[i]]["date"]==date){
                        console.log(doctors[Object.keys(doctors)[i]]["first_name"]);
                        $('#doctor-select').append($('<option>', {
                            value: doctors[Object.keys(doctors)[i]]["doctor_id"],
                            text: doctors[Object.keys(doctors)[i]]["first_name"],
                        }));
                    }
                }
            });
        });
    </script>
</head>
<style>
    #First-Name{
        display: none;
    }
    #doctor-select, #doctor-select-label{
        display: none;
    }
</style>
<header>
    <h3>
        Sunrise Retirement Home
    </h3>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
    <button onclick="goBack()">Go Back</button>
    {{-- <div class='header-btn-section'>
        <form action="back" method='POST'>
            @csrf
            <button type='Submit'>Back</button>
        </form>
    </div> --}}
    <div class='header-btn-section'>
        <div class="user-dropdown">
            <button id="btn2">Profile</button>
            <div class="dropdown-content">
                {{-- <a href="#">{{ $First_Name }}</a> --}}
                {{-- <a href="#">{{ $Last_Name }}</a> --}}
                You exist!
            </div>
        </div>
    </div>
    <div class='header-btn-section'>
        <form action="logout" method='POST'>
            @csrf
            <button type='Submit'>Logout</button>
        </form>
    </div>
</header>

<body>
    <br>
    <br>
    <h3>Assign a patient to an available doctor on a specific date</h3>
    <form id="" action="createAppointment" method="POST">
        @csrf
        Enter a Patient's ID:
        <input type="number" name="Patient_ID" id="Patient-ID">
        <input style="margin-top: 5px" type="text" name="First_Name" value="{{ old("First-Name") }}" id="First-Name" readonly>
        {{-- only appears when patient id is entered --}}
        <br>
        <br>
        <label for="date">Select a date:</label>
        <input name="Date" type="date" id="date">
        <br>
        <br>
        <label for="doctor-select" id="doctor-select-label">Select a doctor:</label>
        <select name="Doctor_ID" id="doctor-select"></select>
        <br>
        <br>
        <button id="submit">Submit</button>
    </form>
    <br>
    <div class="cancelAlert">
        <button onclick="showAlert()">Cancel</button>

        <div id="overlay" onclick="hideAlert()"></div>
        <div id="alertBox">
            <p>Do you want to reset the form?</p>
            <button id="reset" onclick="resetForm()">Reset</button>
            <button onclick="hideAlert()">Cancel</button>
        </div>
    </div>
    <br>
    <br>
</body>

</html>
