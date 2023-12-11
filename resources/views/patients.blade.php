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
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
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
<body>
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
