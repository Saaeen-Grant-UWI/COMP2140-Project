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
            <input type="email" placeholder = "Enter Email Address" name = "email" required>
            <input type="password" placeholder="Enter Password" name="password" required>
            <button type="submit">Login</button>
            </form>
            <a href="register.php">I do not have an account</a>
        </div>
    </section>

</body>
</html>