<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/bamboo.css/dist/dark.min.css">
    <title>Patients Home Page</title>
</head>
<body>
    <h1>Patients Home</h1>
    <form action="" method="">
        @csrf
        <label for="patientid">Patient ID</label>
        <input name="patientid" type="int">
        <br>
        <br>
        <label for="First_Name">Patient Name</label>
        <input name="First_Name" type="text" value="Jack Remo" readonly>
        <br>
        <br>
        <label for="date">Select Date</label>
        <input name="date" type="date" value ="<?php echo date('Y-m-d') ?>">
        <br>
        <br>
        <button>Enter</button>
    </form>

    <form action="" method="">
        <label for="First_Name">Doctor's Name</label>
        <input name="First_Name" type="text" value="Dr. John Smith" readonly>
        <br>
        <br>
        <label for="First_Name">Doctor's Appointment</label>
        <input name="First_Name" type="checkbox">
        <br>
        <br>
        <label for="First_Name">Caregiver's Name</label>
        <input name="First_Name" type="text" value="Mrs. Jane Doe" readonly>
        <br>
        <br>
        <label for="First_Name">Morning Medicine</label>
        <input name="First_Name" type="checkbox">
        <br>
        <br>
        <label for="First_Name">Afternoon Medicine</label>
        <input name="First_Name" type="checkbox">
        <br>
        <br>
        <label for="First_Name">Night Medicine</label>
        <input name="First_Name" type="checkbox">
        <br>
        <br>
        <label for="First_Name">Breakfast</label>
        <input name="First_Name" type="checkbox">
        <br>
        <br>
        <label for="First_Name">Lunch</label>
        <input name="First_Name" type="checkbox">
        <br>
        <br>
        <label for="First_Name">Dinner</label>
        <input name="First_Name" type="checkbox">
    </form>

    <form action={{ url('/') }} method="get">
        <button>Return to Home</button>
    </form>
</body>
</html>