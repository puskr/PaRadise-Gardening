<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Form</title>
    <link rel="stylesheet" href="service_form_css.css">
    <style>
        body {
            background-color: #000000; /* Set background color to black */
            color: #ffffff; /* Set text color to white */
            padding-top: 20px; /* Add padding to top of body */
            display: flex; /* Use flexbox */
            justify-content: center; /* Center horizontally */
            align-items: center; /* Center vertically */
            height: 100vh; /* Take up full viewport height */
            text-align: center; /* Center-align text */
            flex-direction: column; /* Align items vertically */
        }

        h1 {
            color: #ffffff; /* Set text color of h1 to white */
            margin-bottom: 20px; /* Add margin below the h1 */
        }

        form {
            width: 300px; /* Adjust width as needed */
            background-color: #ffffff; /* Set background color of form to white */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.1); /* Adjust shadow color */
        }

        /* Override text color inside the form */
        form * {
            color: #000000; /* Set text color inside form to black */
        }

        input[type="text"],
        input[type="number"] {
            width: calc(100% - 24px); /* Adjust input width */
            padding: 10px; /* Adjust padding */
            margin-bottom: 20px; /* Add space between text boxes */
            border: 1px solid #ccc; /* Add border */
            border-radius: 5px; /* Add border radius */
            box-sizing: border-box; /* Include padding and border in input's total width */
            font-size: 16px; /* Set font size */
        }

        input[type="submit"] {
            width: 100%; /* Set button width to 100% */
            padding: 12px; /* Add padding */
            background-color: #498536; /* Set background color */
            color: #fff; /* Set text color */
            border: none; /* Remove border */
            border-radius: 5px; /* Add border radius */
            cursor: pointer; /* Change cursor to pointer on hover */
            font-size: 16px; /* Set font size */
        }

        input[type="submit"]:hover {
            background-color: #366b28; /* Change hover color */
        }

        .home-button {
            background-color: #498536; /* Set button background color to green */
            color: #ffffff; /* Set button text color to white */
            border: none; /* Remove button border */
            border-radius: 5px; /* Add border radius */
            padding: 10px 20px; /* Add padding */
            margin-top: 20px; /* Add margin above the button */
            cursor: pointer; /* Change cursor to pointer on hover */
            font-size: 16px; /* Set font size */
        }

        .home-button:hover {
            background-color: #366b28; /* Change hover color */
        }
    </style>
</head>
<body>

    <h1>Service Form</h1>
    <form id="serviceForm" action="service_handler.php" method="POST">
        <label for="serviceName">Service Name:</label>
        <input type="text" id="serviceName" name="serviceName" required><br>
        <label for="pricePerHour">Price per Hour:</label>
        <input type="number" id="pricePerHour" name="pricePerHour" min="0" step="any" required><br>
        <input type="submit" value="Submit">
    </form>

    <a class="home-button" href="prghomepage.php">Go to Homepage</a>

    <script src="service_form_validation.js"></script>
</body>
</html>
