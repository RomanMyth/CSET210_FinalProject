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
        <title>Patient of Doctor</title>
    </head>
    <body>
        <h1>Patient of Doctor</h1>
        <br>
        <br>
        <h3>These prescriptions below of your only patient are from oldest to newest</h3>
        <br>
        <table id='patientOfDoctorTable'>
            <tr class='patOfDocRow patOfDocTitleRow'>
                <td class='patOfDocData patOfDocTitleData'>Date</td>
                <td class='patOfDocData patOfDocTitleData'>Comment</td>
                <td class='patOfDocData patOfDocTitleData'>Morning Med</td>
                <td class='patOfDocData patOfDocTitleData'>Afternoon Med</td>
                <td class='patOfDocData patOfDocTitleData'>Night Med</td>
            </tr>
            <tr class='patOfDocRow'>
                <td class='patOfDocData'>11/22/33</td>
                <td class='patOfDocData'>He took them</td>
                <td class='patOfDocData'>Yes</td>
                <td class='patOfDocData'>no</td>
                <td class='patOfDocData'>no</td>
            </tr>
        </table>
        <br>
        <br>
        <h3>New prescription</h3>
        <br>
        <p>Fill in the form below to create a new prescription for your patient</p>
        <form id="form" action="" method="">
            <label for="comment">Comment:</label>
            <input type="text" name="comment" id="">
            <br>
            <br>
            <label for="morningMed">Morning Med</label>
            <input type="text" name="morningMed" id="">
            <br>
            <br>
            <label for="afternoonMed">Afternoon Med</label>
            <input type="text" name="afternoonMed" id="">
            <br>
            <br>
            <label for="nightMed">Night Med</label>
            <input type="text" name="nightMed" id="">
            <br>
            <br>
            <button type="submit" name="submit">Ok</button>
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