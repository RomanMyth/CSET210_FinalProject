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
    <form action="searchPastAppointments" method="post">
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
</body>

</html>
