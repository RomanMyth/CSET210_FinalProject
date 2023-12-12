<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/bamboo.css/dist/dark.min.css">
    <!--Style for header and form alerts-->
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Roster</title>
    <style>

    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#date").change(function(){
                $('#rosterSearchForm').submit();
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
    <br>
    <br>
    <h3>Select a secific date to browse through the schedule for that day</h3>
    <form action="{{ url('/Roster') }}" method="GET" id="rosterSearchForm">
        <label for="date">Date</label>
        <input type="date" name="Date" id="date" value="{{ $users[0]->Date }}">
    </form>
    <br>
    <br>
    <table id='rosterTable'>
        <tr class="rosterTitleRow rosterRow">
            <td class="rosterTitleData rosterData"><strong></strong></td>
            <td class="rosterTitleData rosterData"><strong>Supervisor</strong></td>
            <td class="rosterTitleData rosterData"><strong>Doctor</strong></td>
            <td class="rosterTitleData rosterData"><strong>Caregiver 1</strong></td>
            <td class="rosterTitleData rosterData"><strong>Caregiver 2</strong></td>
            <td class="rosterTitleData rosterData"><strong>Caregiver 3</strong></td>
            <td class="rosterTitleData rosterData"><strong>Caregiver 4</strong></td>
        </tr>
        <tr class=" rosterRow">
            <td class=" rosterData"><strong>Name</strong></td>
            <td class=" rosterData">{{ $users[0]->Supervisor }}</td>
            <td class=" rosterData">{{ $users[0]->Doctor }}</td>
            <td class=" rosterData">{{ $users[0]->Caregiver1}}</td>
            <td class=" rosterData">{{ $users[0]->Caregiver2 }}</td>
            <td class=" rosterData">{{ $users[0]->Caregiver3 }}</td>
            <td class=" rosterData">{{ $users[0]->Caregiver4 }}</td>
        </tr>
        <tr class=" rosterRow">
            <td class=" rosterData"><strong>Patient Group</strong></td>
            <td class=" rosterData"></td>
            <td class=" rosterData"></td>
            <td class=" rosterData">1</td>
            <td class=" rosterData">2</td>
            <td class=" rosterData">3</td>
            <td class=" rosterData">4</td>
        </tr>
    </table>
    @if($_SESSION['role'] == 1 || $_SESSION['role'] == 3)
        <form action={{ '/newRoster' }} method="GET">
            <button type="submit">New Roster (admin & sup only)</button>
        </form>
    @endif
</body>

</html>
