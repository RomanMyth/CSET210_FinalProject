<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/bamboo.css/dist/dark.min.css">
    <!--Style for form alerts-->
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <!--Functions for form alerts-->
    <script src="app.js"></script>
    <title>Caregivers Home Page</title>
</head>
<style>
    #First-Name {
        display: none;
    }

    .New-Patient-Group {
        display: none;
    }

    header {
        background-color: #333;
        color: #fff;
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
<body>
    <h1>Caregivers Home</h1>
    <br>
    <h2>Welcome, </h2>
    <h2>firstName</h2>
    <h2>lastname</h2>
    <br>
    <br>
    <h1>Unfilled Patients Checklists</h1>
    <form id="form" action="" method="">
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
            @foreach ($patients as $patient)
                <tr class="caregiverRow">
                    <td class="rowData">{{ $patient->First_Name }}</td>
                    <td class="rowData">
                        <div class="form-group">
                            @if ($patient->Morning_Med == NULL || $patient->Morning_Med == "No")
                                <input type="checkbox" id="checkbox" name="Morning_Med">
                            @else
                                <input type="checkbox" id="checkbox" name="Morning_Med" checked>
                            @endif
                        </div>
                    </td>
                    <td class="rowData">
                        <div class="form-group">
                            @if ($patient->Afternoon_Med == NULL || $patient->Afternoon_Med == "No")
                                <input type="checkbox" id="checkbox" name="Afternoon_Med">
                            @else
                                <input type="checkbox" id="checkbox" name="Afternoon_Med" checked>
                            @endif
                        </div>
                    </td>
                    <td class="rowData">
                        <div class="form-group">
                            @if ($patient->Night_Med == NULL || $patient->Night_Med == "No")
                                <input type="checkbox" id="checkbox" name="Night_Med">
                            @else
                                <input type="checkbox" id="checkbox" name="Night_Med" checked>
                            @endif
                        </div>
                    </td>
                    <td class="rowData">
                        <div class="form-group">
                            @if ($patient->Breakfast == NULL || $patient->Breakfast == "No")
                                <input type="checkbox" id="checkbox" name="Breakfast">
                            @else
                                <input type="checkbox" id="checkbox" name="Breakfast" checked>
                            @endif
                        </div>
                    </td>
                    <td class="rowData">
                        <div class="form-group">
                            @if ($patient->Lunch == NULL || $patient->Lunch == "No")
                                <input type="checkbox" id="checkbox" name="Lunch">
                            @else
                                <input type="checkbox" id="checkbox" name="Lunch" checked>
                            @endif
                        </div>
                    </td>
                    <td class="rowData">
                        <div class="form-group">
                            @if ($patient->Dinner == NULL || $patient->Dinner == "No")
                                <input type="checkbox" id="checkbox" name="Dinner">
                            @else
                                <input type="checkbox" id="checkbox" name="Dinner" checked>
                            @endif
                        </div>
                    </td>
                </tr>

            @endforeach
        </table>
        <button>Enter</button>
    </form>
    <br>
    <div class="cancelAlert">
        <button onclick="showAlert()">Cancel</button>

        <div id="overlay" onclick="hideAlert()"></div>
        <div id="alertBox">
        <p>Do you want to reset the form?</p>
        <button onclick="resetForm()">Reset</button>
        <button onclick="hideAlert()">Cancel</button>
        </div>
    </div>
</body>
</html>