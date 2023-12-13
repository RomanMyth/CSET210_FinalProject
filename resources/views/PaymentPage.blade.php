<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/bamboo.css/dist/dark.min.css">
    <!--Style for form alerts-->
    {{-- <link rel="stylesheet" href="css/addcss.css" type="text/css"> --}}
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
    <div class="payment-container">
        <h2>Payment</h2>
        <form  action="{{ url('/payment') }}" method="GET" name="paymentForm" id="paymentForm">

            @csrf
            <div class="form-group">
                <label for="patientID">Patient ID:</label>
                <input type="text" id="patientID" name="patientID" onkeyup="findPatientAmount()" value="{{ empty($data) ? '' : $data->Patient_ID }}">
            </div>
            <div class="form-group">
                <label for="totalDue">Total Due ($):</label>
                <input type="number" id="totalDue" name="totalDue" step="0.01" value="{{ empty($data) ? '' : $data->Payment_Amount }}">
            </div>
            <div class="form-group">
                <label for="newPayment">New Payment ($):</label>
                <input type="number" id="newPayment" name="newPayment" step="0.01">
            </div>

            
            
        </form>

        <div class="form-group">
            <input type="submit" value="Submit Payment" onclick="changeAmount()">
        </div>

      
        <br>
        <div class="cancelAlert">
            <button onclick="showAlert()">Cancel</button>
                <div id="overlay" onclick="hideAlert()"></div>
                <div class="form-group" id="alertBox">
                    <p>Do you want to reset the form?</p>
                    <button onclick="resetForm()">Reset</button>
                    <button onclick="hideAlert()">Cancel</button>
                </div>
                <br>

                <form action="{{ url('/updatePayment') }}" method="post">
                    @csrf
                    <div class="form-group" >
                        <input type="text" id="amountDue2" name="amountDue" value="{{ empty($data) ? '' : $data->Payment_Amount }}" hidden>
                        <input type="text" id="patientID2" name="patientID"  value="{{ empty($data) ? '' : $data->Patient_ID }}" hidden>
                        <input type="submit" value="Update" id="btn-pay2">
                    </div>
                </form>
            </div>
    </div>
    <script>

        //Relaoding the whole page when refresed
        window.onload = function () 
        {
            
            history.replaceState({}, document.title, window.location.pathname);
            document.getElementById('paymentForm').reset();
 
        };

        //Function to calculate the change amount
        function changeAmount(){
                  var previousAmount = document.getElementById('totalDue')
                  var newAmount = document.getElementById('newPayment')
                  var previousAmount2 = document.getElementById('amountDue2')

                  var value1 = parseFloat(previousAmount.value) || 0;
                  var value2 = parseFloat(newAmount.value) || 0;

                  var difference = value1 - value2;

                  previousAmount.value = difference;
                  previousAmount2.value = difference;

                  newAmount.value='';
        }

        //Grab patient row from payments
        function findPatientAmount() {
                    var patientID = document.querySelector('#patientID').value;

                   
        
                    if (patientID.length >= 1 && patientID.length <= 100000 )  {
                        document.getElementById('paymentForm').submit();
                    }
                }
    </script>
</body>

</html>
