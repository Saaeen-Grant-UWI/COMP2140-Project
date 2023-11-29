function submitForm() {
    // Get form values
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var inquiry = document.getElementById("inquiry").value;

    // Check if any of the fields is empty
    if (name === "" || email === "" || inquiry === "") {
        alert("Please fill out all fields before submitting the form.");
        return; // Stop the form submission
    }

    // Display response
    var responseElement = document.getElementById("response");
    responseElement.innerHTML = "Thank you, " + name + "! Your inquiry has been submitted. We will contact you at " + email + " as soon as possible.";

    // Clear form fields
    document.getElementById("name").value = "";
    document.getElementById("email").value = "";
    document.getElementById("inquiry").value = "";
}
