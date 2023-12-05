<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://unpkg.com/bamboo.css/dist/dark.min.css">
        <title>Roster</title>
    </head>
    <body>
        <h1>Roster</h1>
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
        <form action={{ "/newRoster" }} method="GET">
            <button type="submit">New Roster (admin & sup only)</button>
        </form>
    </body>
</html>