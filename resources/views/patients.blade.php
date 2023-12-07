<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/bamboo.css/dist/dark.min.css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script src="app.js"></script>
    <title>Patients</title>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <header>
        <h1>Patient Dashboard</h1>
        <div class="user-dropdown">
            <button id="btn2">Profile</button>
            <div class="dropdown-content">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Logout</a>
            </div>
        </div>
    </header>


    <br>
    <br>
    <h3>Browse though patients</h3>
    <table>
        <tr>
            <th>Patient ID</th>
            <th>Patient_First_Name</th>
            <th>Patient_Last_Name</th>
            <th>Patient_Email</th>
            <th>Patient_Phone_Number</th>
        </tr>
        @foreach ($patients as $patient)
            <tr>
                <th>{{ $patient->Patient_ID }}</th>
                <th>{{ $patient->First_Name }}</th>
                <th>{{ $patient->Last_Name }}</th>
                <th>{{ $patient->dob }}</th>
                {{-- <th>{{ $patient->$patient_emergency_table->Emergency_Contact }}</th>
                    <th>{{ $patient->$patient_emergency_table->Contact_Relation }}</th> --}}
                <th>{{ $patient->Admission_Date }}</th>
            </tr>
        @endforeach
    </table>
    <br>

    <form action="searchPastAppointments" method="">
        <div class="form-group">
            <button type="submit" value="Submit">Search</button>
        </div>
        <div class="form-group">
            <label for="search"></label>
            <input type="text" id="text" name="search">
        </div>
    </form>
    <br>
    <br>



    <script>
        $(document).ready(function() {
            $('#searchPastAppointments').submit(function(e) {
                e.preventDefault();
                var searchText = $('input[name="search"]').val().toLowerCase();

                $('table tr:gt(0)').each(function() {
                    var found = false;
                    $(this).find('th').each(function() {
                        var cellText = $(this).text().toLowerCase();
                        if (cellText.indexOf(searchText) !== -1) {
                            found = true;
                            return false; // Break the loop if match found
                        }
                    });
                    if (found) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            });
        });
    </script>
</body>

</html>
