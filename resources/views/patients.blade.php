<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/bamboo.css/dist/dark.min.css">
    <title>Patients</title>
    <style>
        #First-Name {
            display: none;
        }
    </style>
    <<<<<<< HEAD=======<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#search').submit(function(e) {
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
    >>>>>>> 5cc0f99fac2e2151f121a3fa9a3d370c28d3783b
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
            <tr id="titleRow" class="patientRow">
                <td class='rowData'>#123</td>
                <td class='rowData'>John Doe</td>
                <td class='rowData'>33</td>
                <td class='rowData'>1234567890</td>
                <td class='rowData'>Matt Doe</td>
                <td class='rowData'>11/22/33</td>
            </tr>
    </table>
    {{-- <br> --}}


    <form id='search' action="" method="">
        <label for="search">Search</label>
        <input type="text" name="search" id="">
        <br>
        <br>
        <button type="submit">Enter</button>
    </form>
    <br>
    <br>
</body>

</html>
