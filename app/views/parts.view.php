<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../public/assets/css/global.css">

</head>
<body>

    <?php 
        $this->view('includes/header');
    ?>

    <div class="parts-list">
        <div class="container">
            <?php for ($i = 1;$i <= 5; $i++) : ?>
                <div class="part-listing">
                    <h2>Part</h2>
                    <p>Origin</p>
                    <p>Description</p>
                    <p>stock</p>
                    <h3>$0.00</h3>  
                    <input type="number" placeholder="Number of Parts">
                    <button class="part-request">Request Part</button>
                </div>
            <?php endfor ?>
        </div>
    </div>

    <?php 
        $this->view('includes/footer');
    ?>
    
</body>
</html>