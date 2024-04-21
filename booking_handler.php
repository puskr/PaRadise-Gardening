<?php
// Include the database connection file
include 'db_connection.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate input data (you can add more validation as needed)
    $customer = $_POST['customer'];
    $service = $_POST['service'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    // Insert data into the database
    $query = "INSERT INTO bookings (customer_name, service, date, time_worked) VALUES ('$customer', '$service', '$date', '$time')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "Booking submitted successfully";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// Close database connection
mysqli_close($conn);
?>
