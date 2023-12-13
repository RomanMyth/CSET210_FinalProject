<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {{-- <link rel="stylesheet" href="{{ asset('css/addcss.css') }}"> --}}
        <link rel="stylesheet" href="https://unpkg.com/bamboo.css/dist/dark.min.css">
        <!--Style for form alerts-->
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <!--Functions for form alerts-->
        <title>Additional Patient Information</title>
        <style>
            #First-Name{
                display: none;
            }
        </style>
        <script src="app.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
            var patients = <?php echo $patients;?>;
            $(document).ready(function(){
                $("#Patient-ID").change(function(){
                    var patientExists = false;
                    for (const patient of patients){
                        if(this.value == patient[Object.keys(patient)[0]]){
                            $("#First-Name").val(patient[Object.keys(patient)[1]]).fadeIn('slow');
                            $("#Patient-Group").val(patient[Object.keys(patient)[8]]);
                            $("#Addmission-Date").val(patient[Object.keys(patient)[9]]);
                            $("#First-Name").slideDown("slow");
                            $(".New-Patient-Group").slideDown("slow");
                            patientExists = true;
                            break;
                        }
                        else{
                            patientExists = false;
                        }
                    }
                    if (!patientExists) {
                        $("#First-Name").slideUp("slow");
                        $(".New-Patient-Group").slideUp("slow");
                        $("#First-Name").val(null);
                        $("#Patient-Group").val(null);
                        $("#Addmission-Date").val(null);
                    }
                });

                $("#reset").click(function() {
                    $("#First-Name").slideUp("slow");
                    $("#New-Patient-Group").slideUp("slow");
                    $("#New-Patient-Group-Input").slideUp("slow");
                });
            });
        </script>
    </head>
    <body>
        <div class="scene">
            <div class="sun"></div>
        </div>
        <header>
            <h3>
                Sunrise Retirement Home
            </h3>
            <div class='header-btn-section'>
                <form action="back" method='POST'>
                    @csrf
                    <button type='Submit'>Back</button>
                </form>
            </div>
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
          <div id="container">
            <div class="banner">
            {{-- just ignore this max I know youll probably see this but please this random div its actually important --}}
            </div>
            <div id="hold">
                <div class="btn-con">
                    <br>
                <br>
                <form id="form" action="changePatientGroup" method="POST">
                    @csrf
                    Enter a Patients ID:
                    <input class="textbox" type="number" name="Patient_ID" id="Patient-ID">
                    <input type="text" name="First_Name" id="First-Name" readonly>
                    <br>
                    <br>
                    Current Group:
                    <input class="textbox" type="number" name="Patient_Group" id="Patient-Group" readonly>
                    <br>
                    <br>
                    Admission Date:
                    <input class="textbox" type="date" name="Addmission_Date" id="Addmission-Date" readonly>
                    <br>
                    <label for="New-Patient-Group" class="New-Patient-Group">New Group For Patient:</label>
                    <input type="number" class="New-Patient-Group" name="New-Patient-Group" min="1" max="4" required>
                    <br>
                    <button type="Submit"  class="btn1">Change Patient's Group</button>
                </form>
                <div class="cancelAlert">
                    <button onclick="showAlert()" id="btn2" >Cancel</button>
                    <div id="overlay" onclick="hideAlert()"></div>
                    <div id="alertBox">
                    <p>Do you want to reset the form?</p>
                    <button id="reset" onclick="resetForm()">Reset</button>
                    <button onclick="hideAlert()">Cancel</button>
                    </div>
                </div>
                </div>
                
            </div>
            
        </div>
        
    </body>
</html>