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
    </style>
</head>

<body>
    <header>
        <h1>Doctor Appointment Dashboard</h1>
        <div class="user-dropdown">
            <button id="btn2">Profile</button>
            <div class="dropdown-content">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Logout</a>
            </div>
        </div>
    </header>
    <form id="form" action="" method="POST">
        @csrf
        <br>
        <br>
        <h3>Assign a patient to an available doctor on a specific date</h3>
        <form id="form" action="" method="">
            Enter a Patient's ID:
            <input type="number" name="Patient_ID" id="Patient-ID">
            <input style="margin-top: 5px" type="text" name="First_Name" id="First-Name" readonly>
            {{-- only appears when patient id is entered --}}
            <br>
            <br>
            <label for="date">Select a date:</label>
            <input name="date" type="date">
            <br>
            <br>
            <label for="">Select a doctor:</label>
            <select name="Doctor" id="">

            </select>
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

    </form>
</body>

</html>
