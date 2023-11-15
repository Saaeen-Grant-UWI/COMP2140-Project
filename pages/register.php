<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
        include('includes/header.php');
    ?>
    
    <section>
        <div class="container">
            <form action="">
            <input type="text" placeholder = "Enter First Name" name = "f-name" required>
            <input type="text" placeholder = "Enter Last Name" name = "l-name" required>
            <input type="email" placeholder = "Enter Email Address" name = "l-name" required>
            <input type="password" placeholder="Enter Password" name="password" required>
            <input type="password" placeholder="Enter Password" name="confirm-password" required>
            <button type="submit">Register</button>
            </form>
            <a href="login.php">I already have an account</a>
        </div>
    </section>

</body>
</html>