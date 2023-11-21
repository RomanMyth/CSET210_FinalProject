<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/bamboo.css/dist/dark.min.css">
    <title>Document</title>
</head>
<body>
    <form method="POST">
    @csrf
    <h1>Doctor's Appointment</h1>
    <br>
    <br>
    <label for="PatientID">Patient ID</label>
    <input name="date" type="text">
    <br>
    <br>
    <label for="">Patient name</label>
    <input name="date" type="text">  
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

    </form>
</body>
</html>