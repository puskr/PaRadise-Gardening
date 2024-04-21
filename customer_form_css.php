/* CSS styles for customer form */
/* Reset default margin and padding */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

/* Container styles */
.container {
    max-width: 400px;
    margin: 20px;
    padding: 40px;
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

/* Heading styles */
h1 {
    text-align: center;
    margin-bottom: 20px;
    color: #333333;
}

/* Form styles */
form {
    text-align: left;
}

/* Label styles */
label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
    color: #333333;
}

/* Input styles */
input[type="text"],
input[type="tel"] {
    width: calc(100% - 24px); /* Adjusted width to accommodate padding */
    padding: 12px; /* Increased padding */
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

/* Submit button styles */
input[type="submit"] {
    width: 100%;
    padding: 12px;
    background-color: #007bff;
    color: #ffffff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

/* Error message styles */
.error-message {
    color: #ff0000;
    margin-top: 5px;
    font-size: 14px;
}
