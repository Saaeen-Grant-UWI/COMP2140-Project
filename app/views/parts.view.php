<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../public/assets/javascript/message2.js"></script>
    <link rel="stylesheet" href="../public/assets/css/global.css">

</head>
<body>

    <?php 
        $this->view('includes/header');
    ?>

    <div class="parts">
        <div class="container">
            <form id="message-form2" action="">
                <h1>Need a Part? Ask us!:</h1>
                <input type="text" placeholder="Enter Name Here">
                <input type="email" placeholder="Enter Email Here">
                <textarea name="" id="" cols="30" rows="10"  placeholder="Enter Inquiry Here"></textarea>
                
                <button id="send-btn2" type="button">Submit</button>
            </form>
        </div>
    </div>
    
</body>
</html>