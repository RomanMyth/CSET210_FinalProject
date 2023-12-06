<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sunrise Retirement Home</title>
  <style>
@import url('https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap');
      body {
      margin: 0;
      overflow: hidden;
      background-color: #0d47a1; /* Initial background color (night) */
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: background-color 2s ease;
    }

    .center {
      position: absolute;
      top: 70%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 50px;
      height: 50px;
      background-color: transparent; /* Center object color */
      border-radius: 50%;
    }

    .orbit-container {
      position: absolute;
      top:15%;
      width: 120%;
      height: 170%;
      transform: translate(-50%, -50%);
      z-index: -1;
      animation: rotateOrbit 32s linear infinite; /* 16s for each full orbit */
    }

    .sun, .moon {
      position: absolute;
      width: 100px;
      height: 100px;
      border-radius: 50%;
      transform: translate(-50%, -50%);
    }

    .sun {
      background-color: #FFEB3B; /* Sun color */
      top: 0;
      left: 50%;
      animation: rotateSun 16s linear infinite;
    }

    .moon {
      background-color: #FFFFFF; /* Moon color */
      top: 100%;
      left: 50%;
      animation: rotateMoon 16s linear infinite;
    }

    @keyframes rotateSun {
      0%, 100% { transform: translate(-50%, -50%) rotate(0deg); }
      100% { transform: translate(-50%, -50%) rotate(360deg); }
    }

    @keyframes rotateMoon {
      0%, 100% { transform: translate(-50%, -50%) rotate(180deg); }
      100% { transform: translate(-50%, -50%) rotate(540deg); }
    }

    @keyframes rotateOrbit {
      0%, 100% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
    #btn1{
      width: 100%;
      height: 70px;
      border: 2px solid black;
      border-radius: 5px;
      background-color: transparent;
      color: white; 
            font-size: 25px; 
            text-shadow: -2px 2px 0 #000, 
                          2px 2px 0 #000, 
                         2px -2px 0 #000, 
                        -2px -2px 0 #000;
      text-shadow: h-shadow v-shadow blur-radius color;
    }
    #btn1:hover{
    background-color:#0d47a1
    }
    .hold{
      border-color: 1px solid black;
      padding: 70px;
      border-radius: 10px;
      background-color: rgba(0, 0, 0, .2);
      border: #000 2px solid;
      box-shadow: 5px 5px 10px black;
    }
    h1{
      font-family: 'DM Serif Display', serif;
      text-shadow: h-shadow v-shadow blur-radius color;
      color: white; 
            font-size: 35px; 
            text-shadow: -1px 1px 0 #000, 
                          1px 1px 0 #000, 
                         1px -1px 0 #000, 
                        -1px -1px 0 #000;
    }
  </style>
</head>
<body>

  <div class="center"></div>
  <div class="orbit-container">
    <div class="sun"></div>
    <div class="moon"></div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const body = document.body;

      function updateDayNight() {
        const sun = document.querySelector('.sun');
        const moon = document.querySelector('.moon');

        // Calculate the position of the sun and moon in the orbit
        const rotation = window.getComputedStyle(document.querySelector('.orbit-container')).transform;
        const values = rotation.split('(')[1].split(')')[0].split(',');
        const angle = Math.round(Math.atan2(values[1], values[0]) * (180 / Math.PI));

        // Update background color based on the sun/moon position
        if (angle < 90 && angle > -90) {
          body.style.backgroundColor = '#87CEEB'; // Day background color
        } else {
          body.style.backgroundColor = '#0d47a1'; // Night background color
        }
      }

      setInterval(updateDayNight, 100); // Check and update every 100 milliseconds
    });
  </script>

</head>
<body>
  <div class="hold">
     <h1>Welcome to the retirement home!</h1>
    <br>
    <form action={{ url('/LoginPage') }} method="get">
        @csrf
        <br>
        <button id="btn1">User Log in</button>
    </form>
    <form action={{ url('/RegisterPage') }} method="get">
        @csrf
        <br>
        <button id="btn1">Register</button>
    </form>
    <form action={{ url('/familyMembersHome') }} method="get">
      @csrf
      <br>
      <button id="btn1">Family Member Log in</button>
  </form>
  </div>
   
</body>
</html>
