<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('css/addcss.css') }}">
        <!--Style for form alerts-->
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <!--Functions for form alerts-->
        <script src="app.js"></script>
        <title>Additional Patient Information</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
            var patients = <?php echo $patients;?>;
            $(function(){
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
        </script>
        <style>
        #First-Name {
            display: none;
        }

        .New-Patient-Group {
            display: none;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 15px;
            text-align: center;
        }

        .user-dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 120px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .user-dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
    </head>
    <body>
        <div class="scene">
            <div class="sun"></div>
            </div>
            <header class="nohead">
            <div>
                Sunrise name place holder
            </div>
            <div>
                <h1 class="boxed">Addtional Patient Information</h1>
            </div>
        </div>
        <div id="container">
            <header>
              <h1>Addtional Patient Information Dashboard</h1>
              <div class="user-dropdown">
                <button id="btn2">Profile</button>
                 <div class="dropdown-content">
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Logout</a>
                 </div>
              </div>
          </header>
            <div id="hold">
                <div class="btn-con">
                    <br>
                <br>
                <form id="form" action="changePatientGroup" method="POST">
                    @csrf
                    Enter a Patients ID:
                    <input id="textbox" type="number" name="Patient_ID" id="Patient-ID">
                    <input type="text" name="First_Name" id="First-Name" readonly>
                    <br>
                    <br>
                    Current Group:
                    <input id="textbox" type="number" name="Patient_Group" id="Patient-Group" readonly>
                    <br>
                    <br>
                    Admission Date:
                    <input id="textbox" type="date" name="Addmission_Date" id="Addmission-Date" readonly>
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
                    <button onclick="resetForm()">Reset</button>
                    <button onclick="hideAlert()">Cancel</button>
                    </div>
                </div>
                </div>
                
            </div>
            
        </div>
        
    </body>
</html>