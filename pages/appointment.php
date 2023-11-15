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
                <?php 
                    include('includes/appointment-details.php');
                ?>
                <?php 
                    include('includes/my-information.php');
                ?>        
                <?php 
                    include('includes/review-submit.php');
                ?>
            </form>
        </div>
    </section>
    
</body>
</html>