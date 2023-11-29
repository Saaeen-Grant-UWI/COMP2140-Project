<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stylesheet/register.css"> 
    <title>Register</title>
</head>
<body>
    
    <?php 
        include('includes/header.php');
    ?>
    
    <section>
        <div class="register-container">
            <form action="">
                <h1>Register</h1>
                <!-- <p>Please fill in this form to create an account.</p> -->
                <label for="f-name"><b>First Name</b></label>
                <input type="text" placeholder = "Enter First Name" name = "f-name" required>
                
                <label for="l-name"><b>Last Name</b></label>
                <input type="text" placeholder = "Enter Last Name" name = "l-name" required>
                
                <label for="email"><b>Email</b></label>
                <input type="email" placeholder = "Enter Email Address" name = "email" required>
                
                <label for="phone"><b>Phone Number</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>
                
                <label for="password"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="confirm-password" required>
                
                <button type="submit">Register</button>
            </form>
            <a href="login.php">I already have an account</a>
        </div>
    </section>

</body>
</html>