// JavaScript validation
document.getElementById("serviceForm").addEventListener("submit", function(event) {
    var serviceName = document.getElementById("serviceName").value;
    var pricePerHour = document.getElementById("pricePerHour").value;

    // Validate service name
    if (serviceName.trim() === "") {
        alert("Please enter service name");
        event.preventDefault();
        return false;
    }

    // Validate price per hour
    if (isNaN(pricePerHour) || parseFloat(pricePerHour) <= 0) {
        alert("Please enter a valid price per hour");
        event.preventDefault();
        return false;
    }

    // Validation passed
    return true;
});
