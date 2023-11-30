<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/bamboo.css/dist/dark.min.css">
    <title>Doctor's Appointment</title>
</head>
<body>
    <form method="POST">
    @csrf
    <h1>Doctor's Appointment</h1>
    <br>
    <br>
    <h3>Assign a patient to an available doctor on a specific date</h3>
    <form id="doctApptForm" action="" method="">
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
        <button id="cancel">Cancel</button>
    </form>
   <br>
   <br>

    </form>
</body>
</html>