<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/bamboo.css/dist/dark.min.css">

    <title>Register Page</title>
</head>

<body>
    <div class="register-container">
        <h2>Registration</h2>
        <form id="registrationForm" action="register.php" method="POST">
            <div class="form-group">
                <label for="role">Role:</label>
                <select id="role" name="role" required>
                    <option value="Admin">Admin</option>
                    <option value="Supervisor">Supervisor</option>
                    <option value="Doctor">Doctor</option>
                    <option value="Caregiver">Caregiver</option>
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
            <!-- Add more fields as needed -->
            <div class="form-group">
                <input type="submit" value="Register">
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
