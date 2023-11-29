function submitForm() {
    // Get form values
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var inquiry = document.getElementById("inquiry").value;

    // Display response
    var responseElement = document.getElementById("response");
    responseElement.innerHTML = "Thank you, " + name + "! Your inquiry has been submitted. We will contact you at " + email + " as soon as possible.";

    document.getElementById("name").value = "";
    document.getElementById("email").value = "";
    document.getElementById("inquiry").value = "";
}

