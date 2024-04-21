// JavaScript validation
document.getElementById("customerForm").addEventListener("submit", function(event) {
    var customername = document.getElementById("customername").value;
    var address = document.getElementById("address").value;
    var phone = document.getElementById("phone").value;

    // Validate customer name
    if (customerName.trim() === "") {
        alert("Please enter customer name");
        event.preventDefault();
        return false;
    }

    // Validate address
    if (address.trim() === "") {
        alert("Please enter address");
        event.preventDefault();
        return false;
    }

    // Validate phone
    var phonePattern = /^[0-9]{10}$/;
    if (!phonePattern.test(phone)) {
        alert("Please enter a valid phone number (10 digits)");
        event.preventDefault();
        return false;
    }

    // Validation passed
    return true;
});
