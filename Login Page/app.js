function togglePassword() {
    const passwordField = document.getElementById("password");
    const passwordType = passwordField.getAttribute("type") === "password" ? "text" : "password";
    passwordField.setAttribute("type", passwordType);
}
