<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://unpkg.com/bamboo.css/dist/dark.min.css">
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
                    if(!patientExists){
                        $("#First-Name").slideUp("slow");
                            $(".New-Patient-Group").slideUp("slow");
                            $("#First-Name").val(null);
                            $("#Patient-Group").val(null);
                            $("#Addmission-Date").val(null);
                    }
                });
            });
        </script>
        <style>
            #First-Name{
                display: none;
            }
            .New-Patient-Group{           
                display: none;
            }
        </style>
    </head>
    <body>
        <h1>Addtional Patient Information</h1>
        <br>
        <br>
        <form action="changePatientGroup" method="POST">
            @csrf
            Enter a Patients ID:
            <input type="number" name="Patient_ID" id="Patient-ID">
            <input type="text" name="First_Name" id="First-Name" readonly>
            <br>
            <br>
            Current Group:
            <input type="number" name="Patient_Group" id="Patient-Group" readonly>
            <br>
            <br>
            Admission Date:
            <input type="date" name="Addmission_Date" id="Addmission-Date" readonly>
            <br>
            <label for="New-Patient-Group" class="New-Patient-Group">New Group For Patient:</label>
            <input type="number" class="New-Patient-Group" name="New-Patient-Group" min="1" max="4" required>
            <br>
            <button type="Submit">Change Patient's Group</button>
        </form>
    </body>
</html>