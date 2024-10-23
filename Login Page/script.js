const passwordField = document.getElementById('password');
const togglePasswordImg = document.getElementById('togglePasswordImg');

togglePasswordImg.addEventListener('click', function() {
    if (passwordField.type === 'password') {
        passwordField.type = 'text'; // Show the password
        togglePasswordImg.src = 'visible.png'; // Change to visible icon
        togglePasswordImg.alt = 'Hide Password'; // Change alt text
    } else {
        passwordField.type = 'password'; // Hide the password
        togglePasswordImg.src = 'hidden.png'; // Change to hidden icon
        togglePasswordImg.alt = 'Show Password'; // Change alt text
    }
});