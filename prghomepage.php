<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PR Gardening Business</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #000000; /* Set background color to black */
            color: #ffffff; /* Set text color to white */
            font-family: Arial, sans-serif; /* Specify font family */
            display: flex; /* Use flexbox */
            flex-direction: column; /* Arrange content vertically */
            justify-content: center; /* Center content horizontally */
            align-items: center; /* Center content vertically */
            height: 100vh; /* Set full viewport height */
        }

        h1 {
            text-align: center; /* Center-align the heading */
            margin-top: 20px; /* Add some top margin */
        }

        #logo-container {
            margin-bottom: 20px; /* Add bottom margin to the logo container */
        }

        #logo-container img {
            display: block; /* Ensure the image is displayed as a block element */
            margin: 0 auto; /* Center the image horizontally */
            width: 200px; /* Set the width of the logo */
            height: auto; /* Maintain aspect ratio */
        }

        ul {
            list-style-type: none; /* Remove default list styles */
            padding: 0;
            margin: 0;
            display: flex; /* Display list items in a row */
            justify-content: center; /* Center-align list items horizontally */
        }

        li {
            margin: 20px; /* Add some margin between list items */
        }

        a {
            text-decoration: none; /* Remove underline from links */
            color: #ffffff; /* Set link color to white */
            padding: 10px 20px; /* Add padding to links */
            border: 1px solid #ffffff; /* Add border to links */
            border-radius: 5px; /* Add border radius to links */
            transition: background-color 0.3s ease; /* Add smooth transition */
        }

        /* Custom hover styles for each link */
        a:hover {
            background-color: #498536; /* Change hover background color */
        }

        /* Custom hover style for the booking link */
        #booking-link:hover {
            background-color: #498536; /* Green color on hover */
        }

        /* Custom hover style for the customer link */
        #customer-link:hover {
            background-color: #498536; /* Orange color on hover */
        }

        /* Custom hover style for the service link */
        #service-link:hover {
            background-color: #498536; /* Blue color on hover */
        }
    </style>
</head>
<body>
    <div id="logo-container">
        <img src="logo.png" alt="Logo">
    </div>
    <h1>Welcome to PaRadise Gardening</h1>
    <ul>
        <li><a id="booking-link" href="booking.php">Booking</a></li>
        <li><a id="customer-link" href="customer_form.php">Customer</a></li>
        <li><a id="service-link" href="service_form.php">Service</a></li>
    </ul>
</body>
</html>
