<?php
// Include the database connection file
include 'db_connection.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate input data
    $customerName = isset($_POST["customerName"]) ? $_POST["customerName"] : "";
    $address = isset($_POST["address"]) ? $_POST["address"] : "";
    $phone = isset($_POST["phone"]) ? $_POST["phone"] : "";

    // Prepare an insert statement
    $query = "INSERT INTO customers (customer_name, address, phone) VALUES ('$customerName', '$address', '$phone')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "New customer record added successfully";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);
}
?>
