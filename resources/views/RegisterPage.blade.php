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
                <label for="First_Name">First Name:</label>
                <input type="text" id="First_Name" name="First_Name" required>
            </div>
            <div class="form-group">
                <label for="Last_Name">Last Name:</label>
                <input type="text" id="Last_Name" name="Last_Name" required>
            </div>
            <div class="form-group">
                <label for="Email">Email:</label>
                <input type="Email" id="Email" name="Email" required>
            </div>
            <div class="form-group">
                <label for="Phone">Phone:</label>
                <input type="tel" id="Phone" name="Phone" required>
            </div>
            <div class="form-group">
                <label for="Password">Password:</label>
                <input type="Password" id="Password" name="Password" required>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" required>
            </div>
            <div id="Patient-Fields">
                <div class="form-group">
                    <label for="Family_Code">Family Code (this will be used by your family members):</label>
                    <input type="number" id="family-code" name="Family_Code" value={{ $FamilyCode }} readonly>
                </div>
                <div class="form-group">
                    <label for="Emergency_Contact">Emergency Contact Name:</label>
                    <input type="text" id="emergency-contact" name="Emergency_Contact" >
                </div>
                <div class="form-group">
                    <label for="Contact_Relation">Relation to Contact:</label>
                    <input type="text" id="emergency-contact-relation" name="Contact_Relation" >
                </div>
            </div>
            <!-- Add more fields as needed -->
            <div class="form-group">
                <button type="submit" value="Register">Register</button>
            </div>
        </form>
        <div class="form-group">
            <form action={{ url('/welcome') }} method="get">
                <button>Return to Home Page</button>
            </form>
        </div>
    </div>
</body>

</html>
