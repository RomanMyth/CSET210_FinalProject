<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/bamboo.css/dist/dark.min.css">
    <title>Caregivers Home Page</title>
</head>
<body>
    <h1>Caregivers Home</h1>
    <br>
    <h2>Welcome, </h2>
    <h2>firstName</h2>
    <h2>lastname</h2>
    <br>
    <br>
    <h1>Unfilled Patients Checklists</h1>
    <form action="" method="">
        <table id="caregiverHomeTable">
            <tr id="titleRow" class="caregiverRow">
                <td class='titleRowData'><strong>Patient Name</strong></td>
                <td class='titleRowData'><strong>Morning Med</strong></td>
                <td class='titleRowData'><strong>Afternoon Med</strong></td>
                <td class='titleRowData'><strong>Night Med</strong></td>
                <td class='titleRowData'><strong>Breakfast</strong></td>
                <td class='titleRowData'><strong>Lunch</strong></td>
                <td class='titleRowData'><strong>Dinner</strong></td>
            </tr>
            <tr class="caregiverRow">
                <td class='rowData'>John Doe</td>
                <td class='rowData'>
                    <div class="form-group">
                        <input type="checkbox" id="checkbox" name="checkbox">
                    </div>
                </td>
                <td class='rowData'>
                    <div class="form-group">
                        <input type="checkbox" id="checkbox" name="checkbox">
                    </div>
                </td>
                <td class='rowData'>
                    <div class="form-group">
                        <input type="checkbox" id="checkbox" name="checkbox">
                    </div>
                </td>
                <td class='rowData'>
                    <div class="form-group">
                        <input type="checkbox" id="checkbox" name="checkbox">
                    </div>
                </td>
                <td class='rowData'>
                    <div class="form-group">
                        <input type="checkbox" id="checkbox" name="checkbox">
                    </div>
                </td>
                <td class='rowData'>
                    <div class="form-group">
                        <input type="checkbox" id="checkbox" name="checkbox">
                    </div>
                </td>
            </tr>
        </table>
        <button>Enter</button>
        <button>Cancel</button>
    </form>
    <br>
    <form action={{ url('/rosterNewRoster') }} method="get">
        <button>Roster</button>
    </form>
    <br>
    <br>
</body>
</html>