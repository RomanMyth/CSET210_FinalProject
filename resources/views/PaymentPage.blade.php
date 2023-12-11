<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="stylesheet" href="https://unpkg.com/bamboo.css/dist/dark.min.css"> --}}
    <!--Style for form alerts-->
    <link rel="stylesheet" href="css/addcss.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <!--Functions for form alerts-->
    <script src="app.js"></script>
    <title>Payment Page</title>
    <style>
        header {
            background-color: #333;
            color: #fff;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="scene">
        <div class="sun"></div>
    </div>
    <header>
        <h3>
            Sunrise Retirement Home
        </h3>
        <div class='header-btn-section'>
            <form action="back" method='POST'>
                @csrf
                <button type='Submit'>Back</button>
            </form>
        </div>
        <div class='header-btn-section'>
            <div class="user-dropdown">
                <button id="btn2">Profile</button>
                <div class="dropdown-content">
                    {{-- <a href="#">{{ $First_Name }}</a> --}}
                    {{-- <a href="#">{{ $Last_Name }}</a> --}}
                    You exist!
                </div>
            </div>
            <<<<<<< HEAD </div>
                <div class='header-btn-section'>
                    <form action="logout" method='POST'>
                        @csrf
                        <button type='Submit'>Logout</button>
                    </form>
                </div>
    </header>

    <body>
        =======
        <div class='header-btn-section'>
            <form action="logout" method='POST'>
                @csrf
                <button type='Submit'>Logout</button>
            </form>
        </div>
        </header>
        >>>>>>> 6e0a9bd027ffafb525f164479298869fdb653742
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
                <br>
                <div class="form-group">
                    <input type="submit" value="Update" id="btn-pay2">
                </div>
            </div>

        </div>

        </div>
    </body>

</html>
