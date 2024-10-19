document.getElementById("electraButton").addEventListener("click", function() {
    window.location.href = "Login Page\index.html";  
});

document.getElementById('scrollToAbout').addEventListener('click', function() {
    document.getElementById('about').scrollIntoView({ behavior: 'smooth' });
});