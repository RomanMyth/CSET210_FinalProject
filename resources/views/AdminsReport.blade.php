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

    <div class='header-btn-section'>
        <form action="{{ URL::previous() }}" method='GET'>
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

<style>
    .highlight-red {
        outline: 1px solid red;
    }
</style>

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
                <form id="adminsReportForm" action='adminsReport' method="GET">
                    <label for="date" name="date">Select Date</label>
                    <input type="date" name="date" id="textbox">
                    <br>
                    <br>
                    <button type="submit" name="submit" class="btn1">Submit</button>
                </form>
            </div>

            <div class="btn-con2">
                <table id="patientsHomeTable">
                    <!-- Table headers -->
                    <tr id="titleRow" class="patientRow">
                        <th>Patient's Name</th>
                        <th>Doctor's Name</th>
                        <th>Caregivers ID?</th>
                        <th>Comment</th>
                        <th>Morning_Med</th>
                        <th>Afternoon_Med</th>
                        <th>Night_Med</th>


                        <!-- Add more headers as needed -->
                    </tr>

                    @foreach ($appointments as $appointment)
                        <tr>
                            <td>{{ $appointment->Patient_ID }}</td>
                            <td class="{{ $appointment->Doctor_ID ? '' : 'highlight-red' }}">
                                @if ($appointment->Doctor_ID)
                                    {{ $appointment->Doctor_ID }}
                                @else
                                    No Doctor Assigned
                                @endif
                            </td>
                            <td class="{{ $appointment->Patient_ID ? '' : 'highlight-red' }}">
                                @if ($appointment->Patient_ID)
                                    {{ $appointment->Patient_ID }}
                                @else
                                    No Caregiver Assigned
                                @endif
                            </td>
                            <td>{{ $appointment->Comment }}</td>
                            <td class="{{ $appointment->Morning_Med ? '' : 'highlight-red' }}">
                                @if ($appointment->Morning_Med)
                                    {{ $appointment->Morning_Med }}
                                @else
                                    No No morning Med Assigned
                                @endif
                            </td>
                            <td class="{{ $appointment->Afternoon_Med ? '' : 'highlight-red' }}">
                                @if ($appointment->Afternoon_Med)
                                    {{ $appointment->Afternoon_Med }}
                                @else
                                    No Afternoon Med Assigned
                                @endif
                            </td>
                            <td class="{{ $appointment->Night_Med ? '' : 'highlight-red' }}">
                                @if ($appointment->Night_Med)
                                    {{ $appointment->Night_Med }}
                                @else
                                    No Night Med Assigned
                                @endif
                            </td>
                            <!-- Display other patient data -->
                        </tr>
                    @endforeach



                </table>
            </div>
        </div>





    </div>

</body>

</html>
