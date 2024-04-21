<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Form</title>
    <link rel="stylesheet" href="customer_form_css.css">
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
        }

        .container {
            text-align: center;
        }

        h1 {
            color: white;
            margin-bottom: 20px;
            font-size: 34px;
        }

        form {
            width: 300px;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        form label {
            display: block;
            margin-bottom: 10px;
            color: #000000;
        }

        form input[type="text"],
        form input[type="tel"] {
            width: calc(100% - 24px);
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #498536;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-bottom: 10px;
        }

        input[type="submit"]:hover {
            background-color: #366b28;
        }

        .home-button {
            background-color: #498536;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 12px;
            cursor: pointer;
            font-size: 16px;
            text-decoration: none;
        }

        .home-button:hover {
            background-color: #366b28;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Customer Form</h1>
        <form id="customerForm" action="customer_handler.php" method="POST">
            <label for="customerName">Customer Name:</label>
            <input type="text" id="customerName" name="customerName" required><br>
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required><br>
            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" required pattern="[0-9]{10}"><br>
            <input type="submit" value="Submit">
        </form>
        
        <a href="prghomepage.php" class="home-button">Go to Homepage</a>

    </div>

    <script src="customer_form_validation.js"></script>
</body>
</html>
