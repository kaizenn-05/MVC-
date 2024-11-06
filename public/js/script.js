document
  .getElementById("contactForm")
  .addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent form from submitting normally

    // Display confirmation message
    document.getElementById("confirmationMessage").classList.remove("hidden");

    // Clear form fields
    event.target.reset();
  });
