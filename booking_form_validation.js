// Form validation script
document.getElementById('bookingForm').addEventListener('submit', function(event) {
    var customer = document.getElementById('customer').value;
    var service = document.getElementById('service').value;
    var date = document.getElementById('date').value;
    var time = document.getElementById('time').value;

    if (customer === '' || service === '' || date === '' || time === '') {
        alert('Please fill in all fields');
        event.preventDefault();
    }
});
