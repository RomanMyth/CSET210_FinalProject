<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <title>Login Page</title>
    <script>
  document.addEventListener("DOMContentLoaded", function () {
  const starsContainer = document.getElementById("stars");

  // Function to generate a random number within a range
  function getRandomNumber(min, max) {
    return Math.random() * (max - min) + min;
  }

  // Function to generate stars and add them to the starsContainer
  function generateStars() {
    for (let i = 0; i < 300; i++) {
      const star = document.createElement("div");
      star.className = "star";
      star.style.top = `${getRandomNumber(0, 100)}%`;
      star.style.left = `${getRandomNumber(0, 100)}%`;

      // Set a random delay for each star
      const delay = getRandomNumber(0, 5); // Adjust the range as needed
      star.style.animationDelay = `-${delay}s`;

      starsContainer.appendChild(star);
    }
  }

  generateStars();
});
      </script>
      <style>
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
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 300px;
      flex-direction: column;
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
    .lg{
        width: 100%;

    }

      </style>
</head>

<body>
    <div class="scene">
        <div class="moon"></div>
        <div class="ocean"></div>
        <div class="stars" id="stars"></div>
      </div>
    <div id="container" >
        <h1>Login</h2>
        <div class="hold"> 
            <form  action="Login" method="POST">
            @CSRF
            <div class="lg" >
                <label for="Email" id="font1">Email:</label>
                <br>
                <input type="text"  name="Email" required id="textbox">
                <br>
                <br>
            </div>
            <div class="lg">
                <label for="Password" id="font1">Password:</label>
                <br>
                <input type="password" name="Password" required id="textbox">
            </div>
            <br>
            <div class="lg">
                <button type="submit" id="btn1">Login</button>
            </div>
        </form>
        <br>
       
            <form class="lg" action={{ url('/') }} method="get">
                <div >
                    <button id="btn1">Return Home</button>
                </div>
            </form>
        
       

        </div>
       
    </div>
</body>

</html>
