<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include the database connection file
    include_once "db_connection.php"; // Update this with your actual database connection file

    // Escape user inputs for security
    $serviceName = mysqli_real_escape_string($conn, $_POST['serviceName']);
    $pricePerHour = mysqli_real_escape_string($conn, $_POST['pricePerHour']);

    // Attempt to insert the data into the database
    $sql = "INSERT INTO services (service_name, price_per_hour) VALUES ('$serviceName', '$pricePerHour')";

    if (mysqli_query($conn, $sql)) {
        echo "Service added successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
