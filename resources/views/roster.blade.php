<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/bamboo.css/dist/dark.min.css">
    <title>Roster</title>
    <style>
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
</head>

<body>
    <header>
        <h1>Roster Dashboard</h1>
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
    <h3>Select a secific date to browse through the schedule for that day</h3>
    <form action="" method="" id="rosterSearchForm">
        <label for="date">Date</label>
        <input type="date" name="date" id="">
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
            <td class=" rosterData">John Doe</td>
            <td class=" rosterData">Jane Smith</td>
            <td class=" rosterData">asdf</td>
            <td class=" rosterData">qwerty</td>
            <td class=" rosterData">zxcv</td>
            <td class=" rosterData">poiuyt</td>
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
    <form action={{ '/newRoster' }} method="GET">
        <button type="submit">New Roster (admin & sup only)</button>
    </form>
</body>

</html>
