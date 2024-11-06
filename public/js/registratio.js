document.addEventListener("DOMContentLoaded", function () {
  // Add any necessary

  document
    .getElementById("registrationForm")
    .addEventListener("submit", function (event) {
      event.preventDefault();

      const firstName = document.getElementById("firstName").value.trim();
      const lastName = document.getElementById("lastName").value.trim();
      const email = document.getElementById("email").value.trim();
      const password = document.getElementById("password").value.trim();
      const confirmPassword = document
        .getElementById("confirmPassword")
        .value.trim();
      const errorMessage = document.getElementById("error-message");

      errorMessage.textContent = "";

      // Simple password matching check
      if (password !== confirmPassword) {
        errorMessage.textContent = "Passwords do not match.";
        return;
      }

      // Simple validation for other fields
      if (
        firstName === "" ||
        lastName === "" ||
        email === "" ||
        password === ""
      ) {
        errorMessage.textContent = "All fields are required.";
        return;
      }

      // Success message (You can submit form data to the server here)
      alert("Registration successful!");
    });
});
