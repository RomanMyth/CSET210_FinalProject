<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap');
      body {
        margin: 0;
        overflow: hidden;
        width: 100%;
        height: 100%;
        position: absolute;
        z-index: -1;
      }

      .scene {
        position: relative;
        width: 100vw;
        height: 100vh;
        background: radial-gradient(circle at 50% 50%, #ff6b6b, #ffb6c1, #87ceeb); /* More radiant sky colors */
        z-index: -1; /* Set a higher z-index for the background */
      }

      .sun {
        position: absolute;
        bottom: 50%;
        left: 50%;
        transform: translate(-50%, 50%);
        width: 150px; /* Adjusted size of the sun */
        height: 150px; /* Adjusted size of the sun */
        background: radial-gradient(circle at 50% 50%, #ffd700, transparent); /* Different color for the sun */
        border-radius: 50%;
        animation: ripple 3s infinite ease-in-out; /* Add ripple animation */
        z-index: -2; /* Set a higher z-index for the sun */
      }

      .water {
        position: absolute;
        width: 100%;
        height: 44%;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: rgba(255, 255, 255, .1); /* Adjusted water colors to create a reflection effect */
        overflow: hidden;
        box-shadow: inset 0 1px 4px -3px white;
        z-index: -2; /* Set a higher z-index for the water */
      }

      @keyframes ripple {
        0% {
          box-shadow: 0 0 0 0px rgba(255, 215, 0, 0.7);
        }
        50% {
          box-shadow: 0 0 0 50px rgba(255, 215, 0, 0);
        }
        100% {
          box-shadow: 0 0 0 0px rgba(255, 215, 0, 0.7);
        }
      }

      h1,
      h2,
      button {
        position: relative;
        display:flex;
        z-index: 3; /* Set a higher z-index for other elements */
      }
      .hold{
      border-color: 1px solid black;
      padding-right: 50px;
      padding-left:30px;
      border-radius: 10px;
      background-color: rgba(134, 184, 224, 0.2);
      border: #000 1px solid;
      box-shadow: 5px 5px 10px rgb(240, 110, 245);
      width: 20%;
      display: flex;
      justify-content: center;
      flex-direction: column;
      align-items: left;
      z-index: 1;
      margin-left: 30px;
      margin-top: 50px;
      margin-bottom: 50px
    }
    #btn1{
    width: 85%;
      height: 30px;
      border: 2px solid black;
      border-radius: 5px;
      background-color: transparent;
      color: black; 
            font-size: 20px; 
      text-shadow: h-shadow v-shadow blur-radius color;
    }
    .hold2{
        display: flex;
        height: 100%;
    }
    </style>
</head>
<body>
  <div class="scene">
    <div class="sun"></div>
    <div class="water"></div>
    <div class="hold2">
       <div class="hold">

  <h1>Admin Dashboard</h1>
  <br>
  <h2>You are signed in as</h2>
  <h2>First Name</h2>
  <h2>Last Name</h2>
  <form action={{ url('/viewRegisters') }} method="get">
      <button id="btn1">Registration Approval</button>
  </form>
  <br>
  
  <form action={{ url('/additionalPatientInfo') }} method="get">
      <button id="btn1">Additional Information of Patient</button>
  </form>
  <br>
  
  <form action={{ url('/viewEmployees') }} method="get">
      <button id="btn1">Employee</button>
  </form>
  <br>
  
  <form action={{ url('/doctAppt') }} method="get">
      <button id="btn1">Doctor's Appointment</button>
  </form>
  <br>
  
  <form action={{ url('/adminsReport') }} method="get">
      <button id="btn1">Admin's Report</button>
  </form>
  <br>
  
  <form action={{ url('/patients') }} method="get">
      <button id="btn1">Patients</button>
  </form>
  
  <br>
  <form action={{ url('/roles') }} method="get">
      <button id="btn1">Roles</button>
  </form>
  
  <br>
  <form action={{ url('/rosterNewRoster') }} method="get">
      <button id="btn1">Roster & New Roster</button>
  </form>
  
  <br>
  <form action={{ url('/payment') }} method="get">
      <button id="btn1">Payment</button>
  </form>
  <br>
</div> 
    </div>
 
</div>
</body>
</html>
