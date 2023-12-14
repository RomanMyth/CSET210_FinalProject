<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/bamboo.css/dist/dark.min.css">
    <!--Style for form alerts-->
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Doctors Home</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
    <h1>Doctor's Home</h1>
    <br>
    <br>
    <h2>Past Appointments</h2>
    <table id="">
        <tr id="titleRow" class="docRow">
            <td class='titleRowData'></td>
            <td class='titleRowData'><strong>Patient Name</strong></td>
            <td class='titleRowData'><strong>Appointment Date</strong></td>
            <td class='titleRowData'><strong>Comment</strong></td>
            <td class='titleRowData'><strong>Morning Med</strong></td>
            <td class='titleRowData'><strong>Afternoon Med</strong></td>
            <td class='titleRowData'><strong>Night Med</strong></td>
        </tr>
        @foreach ($appointments as $appointment)
        <tr>
            <th>                
                <form action={{ url('/patientOfDoc') }} method="get">
                    <button>Info</button>
                </form>
            </th>
            <th>{{ $appointment->First_Name }}</th>
            <th>{{ $appointment->Date }}</th>
            <th>{{ $appointment->Comment }}</th>
            <th>{{ $appointment->Morning_Med }}</th>
            <th>{{ $appointment->Afternoon_Med }}</th>
            <th>{{ $appointment->Night_Med }}</th>
        </tr>
        @endforeach
    </table>
    <form id="search" action="" method="">
        <div class="form-group">
            <label for="search"></label>
            <input type="text" id="text" name="search">
        </div>
        <br>
        <div class="form-group">
            <button id="search" type="submit" name="search" value="Submit">Search</button>
        </div>
    </form>
    <br>
    <br>
    {{-- <h1>Future Appointments</h1>
    <p>Search for all your upcoming patient appointments from today until a specified date</p>
    <form id="appointmentsForm" action="" mehtod="">
        <div class="form-group">
            <label for="date">Future Date</label>
            <input type="date" id="inputDate" name="date">
        </div>
        <br>
        <div class="form-group">
            <button onclick="filterTable()" type="button" value="">Search</button>
        </div>
    </form>
    <br>
    <table id="dataTable">
        <tr id="titleRow" class="docRow">
            <td class='titleRowData'><strong>Patient Name</strong></td>
            <td class='titleRowData'><strong>Appointment Date</strong></td>
        </tr>
        @foreach ($appointments as $appointment)
        <tr>
            <th>{{ $appointment->First_Name }}</th>
            <th>{{ $appointment->Date }}</th>
        </tr>
        @endforeach
    </table>
    <br>
    <br> --}}
</body>
</html>