<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/bamboo.css/dist/dark.min.css">
    <!--Style for form alerts-->
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <!--Functions for form alerts-->
    <script src="app.js"></script>
    <title>Payment Page</title>
    <style>
        header {
            background-color: #333;
            color: #fff;
            padding: 15px;
            text-align: center;
        }

        .user-dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 120px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .user-dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>

<body>
    <header>
        <h1>Admin Payment Dashboard</h1>
        <div class="user-dropdown">
            <button id="btn2">Profile</button>
            <div class="dropdown-content">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Logout</a>
            </div>
        </div>
    </header>
    <div class="payment-container">
        <h2>Payment</h2>
        <form id="form" action="process_payment.php" method="POST">
            <div class="form-group">
                <label for="patientID">Patient ID:</label>
                <input type="text" id="patientID" name="patientID" required>
            </div>
            <div class="form-group">
                <label for="totalDue">Total Due ($):</label>
                <input type="number" id="totalDue" name="totalDue" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="newPayment">New Payment ($):</label>
                <input type="number" id="newPayment" name="newPayment" step="0.01" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Submit Payment">
            </div>
        </form>
        <br>
        <div class="cancelAlert">
            <button onclick="showAlert()">Cancel</button>

            <div id="overlay" onclick="hideAlert()"></div>
            <div id="alertBox">
                <p>Do you want to reset the form?</p>
                <button onclick="resetForm()">Reset</button>
                <button onclick="hideAlert()">Cancel</button>
            </div>
        </div>
        <br>
        <div class="form-group">
            <input type="submit" value="Update">
        </div>
    </div>
</body>

</html>
