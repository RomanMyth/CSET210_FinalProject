<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="{{ asset('css/adminreport.css') }}"> --}}
    <link rel="stylesheet" href="https://unpkg.com/bamboo.css/dist/dark.min.css">
    <!--Style for form alerts-->
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Admin Report</title>
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
    <div class="scene">
        <div class="sun"></div>
    </div>
    <div id="tag1">
        <h2>Check the missed patient activity for a specific day</h2>
    </div>
    <div id="tag2">
        <h2>Missed Patients Daily Checklists</h2>
    </div>
    <div id="container">


        <div id="hold1">


            <div class="btn-con1">
                <form id="adminsReportForm" action="" method="">
                    <label for="date" name="date">Select Date</label>
                    <input type="date" name="date" id="textbox">
                    <br>
                    <br>
                    <button type="submit" name="submit" class="btn1">Submit</button>
                </form>
            </div>

            <div class="btn-con2">
                <table id="patientsHomeTable">
                    <tr id="titleRow" class="patientRow">
                        <td class='titleRowData'><strong>Patient's Name</strong></td>
                        <td class='titleRowData'><strong>Doctor's Name</strong></td>
                        <td class='titleRowData'><strong>Doctor's Appointment</strong></td>
                        <td class='titleRowData'><strong>Caregiver's Name</strong></td>
                    </tr>
                    <br>
                    <br>
                    <tr id="titleRow" class="patientRow">
                        <td class='rowData'>John Doe</td>
                        <td class='rowData'>Jane Smith</td>
                        <td class='rowData'>11/22/33</td>
                        <td class='rowData'>Anne Smith</td>

                    </tr>
                    <br>
                    <br>
                    <br>
                    <tr>
                        <td class='titleRowData'><strong>Morning Med</strong></td>
                        <td class='titleRowData'><strong>Afternoon Med</strong></td>
                        <td class='titleRowData'><strong>Night Med</strong></td>
                        <td class='titleRowData'><strong>Breakfast</strong></td>
                        <td class='titleRowData'><strong>Lunch</strong></td>
                        <td class='titleRowData'><strong>Dinner</strong></td>
                    </tr>


                    <tr id="titleRow" class="patientRow">
                        <td class='rowData'>yes</td>
                        <td class='rowData'>no</td>
                        <td class='rowData'>no</td>
                        <td class='rowData'>yes</td>
                        <td class='rowData'>no</td>
                        <td class='rowData'>no</td>
                    </tr>
                </table>
            </div>
        </div>





    </div>

</body>

</html>
