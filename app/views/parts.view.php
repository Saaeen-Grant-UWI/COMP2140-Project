<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/assets/css/parts.css"> 
    <title>Contact</title>
</head>

<!-- header not functioning -->
<header> 
    <div class="container">
    <p><a href="index.php" style="text-decoration: none; color: inherit;">GramacAuto</a></p>
        <div class="call-to-action-container">
            <a href="login.php" class="login-btn">Login</a>
            <a href="register.php" class="register-btn">Register</a>
            <a href="parts.php" class="contact-btn">Contact</a>
        </div>
    </div>
</header>


<body>     
    <div class="contact">
        <h1>We have everything you need, Contact Us!</h1>
          <form id="contactForm">
              <label for="name">Name:</label>
              <input type="text" id="name" name="name" required>

              <label for="email">Email:</label>
              <input type="email" id="email" name="email" required>

              <label for="inquiry">Need a Part? Ask us!:</label>
              <textarea id="inquiry" name="inquiry" rows="8" required></textarea>

              <button type="button" onclick="submitForm()">Submit</button>
            </form>
        <div id="response"></div>
    </div>

    <script src="../../public/assets/javascript/parts.js"></script>
</body>
</html>
