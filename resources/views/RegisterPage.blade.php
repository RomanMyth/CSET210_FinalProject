<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/bamboo.css/dist/dark.min.css">

    <title>Register Page</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(function (){
            $("#role").change(function (){
                if(this.value == "Patient"){
                    $("#Patient-Fields").slideDown("slow");
                }
                else{
                    $("#Patient-Fields").slideUp("slow"); 
                }
            });
        });

    </script>
    <style>
        #Patient-Fields{
            display: none;
        }
    </style>
</head>

<body>
    <div class="register-container">
        <h2>Registration</h2>
        <form id="registrationForm" action="addToRegister" method="POST">
            @csrf
            <div class="form-group">
                <label for="role">Role:</label>
                <select id="role" name="role" required>
                    <option value="Admin">Admin</option>
                    <option value="Supervisor">Supervisor</option>
                    <option value="Doctor">Doctor</option>
                    <option value="Caregiver">Caregiver</option>
                    <option value="Patient">Patient</option>
                    <!-- Add other roles as needed -->
                </select>
            </div>
            <div class="form-group">
                <label for="firstName">First Name:</label>
                <input type="text" id="firstName" name="firstName" required>
            </div>
            <div class="form-group">
                <label for="lastName">Last Name:</label>
                <input type="text" id="lastName" name="lastName" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" required>
            </div>
            <div id="Patient-Fields">
                <div class="form-group">
                    <label for="Family_Code">Family Code (this will be used by your family members):</label>
                    <input type="number" id="family-code" name="Family_Code" >
                </div>
                <div class="form-group">
                    <label for="Emergency_Contact">Emergency Contact Name:</label>
                    <input type="text" id="emergency-contact" name="Emergency_Contact" >
                </div>
                <div class="form-group">
                    <label for="Emergency_Contact_Relation">Relation to Contact:</label>
                    <input type="text" id="emergency-contact-relation" name="Emergency_Contact_Relation" >
                </div>
            </div>
            <!-- Add more fields as needed -->
            <div class="form-group">
                <button type="submit" value="Register">Register</button>
            </div>
            <div class="form-group">
                <form action={{ url('/welcome') }} method="get">
                    <button>Return to Home Page</button>
                </form>
            </div>
        </form>
    </div>
</body>

</html>
