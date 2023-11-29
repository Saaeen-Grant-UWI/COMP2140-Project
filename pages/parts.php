<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stylesheet/parts.css">
    <title>Contact Form</title>
</head>
<body>

    <?php 
        include('includes/header.php');
    ?>
    
    <div class="contact">
        <h1>We have everything you need, Contact Us!</h1>
          <form id="contactForm">
              <label for="name">Name:</label>
              <input type="text" id="name" name="name" required>

              <label for="email">Email:</label>
              <input type="email" id="email" name="email" required>

              <label for="inquiry">Ask us, we have it!:</label>
              <textarea id="inquiry" name="inquiry" rows="8" required></textarea>

              <button type="button" onclick="submitForm()">Submit</button>
            </form>


        <div id="response"></div>
    </div>

    <script src="parts.js"></script>
</body>
</html>
