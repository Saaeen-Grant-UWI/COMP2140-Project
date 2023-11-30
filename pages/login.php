<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stylesheet/login.css"> 

    <title>Document</title>
</head>
<body>
    
    <?php 
        include('includes/header.php');
    ?>

    <section>
        <div class="login-container">
            <form action="">
            <h1>Login</h1>
            <label for="email"><b>Email</b></label>
            <input type="email" placeholder = "Enter Email Address" name = "email" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>
            <button type="submit">Login</button>
            </form>
            <a href="register.php">I do not have an account</a>
        </div>
    </section>

</body>
</html>