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
    <title>Doctor's Appointment</title>
</head>
<body>
    <form id="form" method="POST">
    @csrf
    <h1>Doctor's Appointment</h1>
    <br>
    <br>
    <h3>Assign a patient to an available doctor on a specific date</h3>
    <form id="form" action="" method="">
        <label for="PatientID">Patient ID</label>
        <input name="PatientID" type="int">
        <br>
        <br>
        <label for="name">Patient name</label>
        <input name="name" type="text" readonly>  
        {{-- only appears when patient id is entered --}}
        <br>
        <br>
        <label for="date">Date</label>
        <input name="date" type="date">
        <br>
        <br>
        <label for="">Doctor</label>
        <select name="Doctor" id="">

        </select>
        <br>
        <br>
        <button id="submit">Submit</button>
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
   <br>
   <br>

    </form>
</body>
</html>