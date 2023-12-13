<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <!--Style for form alerts and header-->
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <!--Functions for form alerts-->
    <script src="app.js"></script>
    <title>Register Page</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
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
        $(function() {
            $("#role").change(function() {
                if (this.value == "Patient") {
                    $("#Patient-Fields").slideDown("slow");
                } else {
                    $("#Patient-Fields").slideUp("slow");
                }
            });
        });
    </script>
    <style>
        #Patient-Fields {
            display: none;
        }
        #btn1{
      width: 100%;
      height: 50px;
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
        margin-top: 5px;
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
      height: 800px;
      flex-direction: column;
      width: 400px;
      margin-bottom: 30px;
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
    .lg2{
        width: 100%;
        height: 27px;
        border-radius: 5px;
    }
    .marg{
        margin-bottom: 10px;
    }
    #btn2{
      width: 400px;
      height: 50px;
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
      padding-left: 90px;
      padding-right: 90px;
      margin-top: 10px;
    }
    #btn2:hover{
    background-color:#0d47a1
    }
    </style>
</head>

<body>
    <div class="scene">
        {{-- <div class="moon"></div> --}}

        <div class="stars" id="stars"></div>
    </div>
    <div id="container">

        <div class="hold">
            <h1>Registration</h1>
            <form id="form" action="addToRegister" method="POST" class="lg">
                @csrf
                <div class="marg">
                    <label for="Role_ID" id="font1">Role:</label>
                    <select id="role" name="Role_ID" class="lg2" required>
                        <option value="Admin">Admin</option>
                        <option value="Supervisor">Supervisor</option>
                        <option value="Doctor">Doctor</option>
                        <option value="Caregiver">Caregiver</option>
                        <option value="Patient">Patient</option>
                        <!-- Add other roles as needed -->
                    </select>
                </div>
                <div class="marg">
                    <label for="First_Name" id="font1">First Name:</label>
                    <br>
                    <input type="text" id="First_Name" name="First_Name" value='{{ old("First_Name") }}' required class="lg2">
                </div>
                <div class="marg">
                    <label for="Last_Name" id="font1">Last Name:</label>
                    <br>
                    <input type="text" id="Last_Name" name="Last_Name" required class="lg2">
                </div>
                <div class="marg">
                    <label for="Email" id="font1">Email:</label>
                    <br>
                    <input type="Email" id="Email" name="Email" required class="lg2">
                </div>
                <div class="marg">
                    <label for="Phone" id="font1">Phone:</label>
                    <br>
                    <input type="tel" id="Phone" name="Phone" required class="lg2">
                </div>
                <div class="marg">
                    <label for="Password" id="font1">Password:</label>
                    <br>
                    <input type="Password" id="Password" name="Password" required class="lg2">
                </div>
                <div class="marg">
                    <label for="dob" id="font1">Date of Birth:</label>
                    <br>
                    <input type="date" id="dob" name="dob" required class="lg2">
                </div>
                <div id="Patient-Fields">
                    <div class="marg">
                        <label for="Family_Code" id="font1">Family Code (this will be used by your family
                            members):</label>
                        <br>
                        <input type="number" id="family-code" name="Family_Code" value={{ $FamilyCode }} readonly>
                    </div>
                    <div class="marg">
                        <label for="Emergency_Contact" id="font1">Emergency Contact Name:</label>
                        <br>
                        <input type="text" id="emergency-contact" name="Emergency_Contact" class="lg2">
                    </div>
                    <div class="marg">
                        <label for="Contact_Relation" id="font1">Relation to Contact:</label>
                        <br>
                        <input type="text" id="emergency-contact-relation" name="Contact_Relation" class="lg2">
                    </div>
                </div>
                <br>
                <!-- Add more fields as needed -->
                <div class="lg">
                    <button type="submit" value="Register" id="btn1">Register</button>
                </div>
            </form>
        <div class="cancelAlert" >
            <button onclick="showAlert()" id="btn2">Cancel</button>
            
            <div id="overlay" onclick="hideAlert()"></div>
            <div id="alertBox">
            <p>Do you want to reset the form?</p>
            <button onclick="resetForm()">Reset</button>
            <button onclick="hideAlert()">Cancel</button>
            </div>
        </div>
        <div class="form-group">
            <form action={{ url('/welcome') }} method="get">
                <button id="btn2">Return Home</button>
            </form>
        </div>

        </div>
    </div>
</body>

</html>
