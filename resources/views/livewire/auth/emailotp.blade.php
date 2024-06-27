<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; /* Set a light background color */
            padding-top: 50px; /* Adjust spacing from the top */
        }
        .card {
            border: none; /* Remove card border */
            border-radius: 10px; /* Add rounded corners */
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1); /* Add shadow */
        }
        .card-header {
            background-color: #007bff; /* Header background color */
            color: #fff; /* Header text color */
            border-radius: 10px 10px 0 0; /* Rounded top corners */
            text-align: center; /* Center align text */
            padding: 10px 0; /* Padding for header */
        }
        .form-group label {
            font-weight: bold; /* Bold labels */
        }
        .btn-primary {
            width: 100%; /* Full width button */
            margin-top: 20px; /* Add some space between button and form */
        }
        .btn-primary:hover {
            background-color: #0056b3; /* Hover color */
            border-color: #0056b3; /* Hover color */
        }
        .card-body {
            padding: 20px; /* Add padding inside card body */
        }
        .mt-5 {
            margin-top: 50px; /* Increase top margin for spacing */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0">OTP Verification</h3>
                    </div>
                    <div class="card-body">
                        <form >
                            @csrf
                            <div class="form-group">
                                <label for="otp">Enter OTP</label>
                                <input wire:model="otp" type="text" class="form-control" id="otp" name="otp" placeholder="Enter OTP" required>
                            </div>
                            
                            <button wire:click.prevent="verify()" class="btn btn-primary btn-block">Verify OTP</button>
                        </form>
                        <hr>
                        <form >
                            @csrf
                            
                            <button  wire:click.prevent="resend()" class="btn btn-outline-primary btn-block mt-3">Resend OTP</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
