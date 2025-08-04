<?php 
    require_once "../includes/config_session.inc.php";
    require_once "../includes/receipt_view.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="receipt.css">
    <title>Summercastle</title>
</head>
<body>

    <?php
        require_once "roomsHeader.php";
    ?>

    <section class="receipt-section">
        <div class="receipt">
            <div class="pic"></div>
            <div class="details">
                <div class="word">
                    <h3>Payment success!</h>
                    <div class="mark"></div>
                </div>
                <?php 
                    output_receipt();
                ?>
                
                <div class="trouble-con">
                    <div class="form-entry">
                        <a href="../index.php">Okay</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    


    <!-- Footer section -->
    <footer class="footer">
        <div class="f-div">
            <div class="f-div-1">
                <img width="60" height="60" src="https://img.icons8.com/dotty/80/FFFFFF/castle.png" alt="castle"/>
                <h3>Summer <br> Resort</h3>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, consequatur 
                perferendis delectus ex tenetur amet. Ipsam recusandae nulla illum voluptates.
            </p>
            <div class="s-media-icons">
                <div class="icons"><i class='bx bxl-facebook'></i></div>
                <div class="icons"><i class='bx bxl-instagram'></i></div>
                <div class="icons"><i class='bx bxl-youtube'></i></div>
            </div>
        </div>
        <div class="f-div no2">
            <div class="f-about">
                <h4>About</h4>
                <p>. Lorem ipsum</p>
                <p>. Lorem, ipsum dol</p>
                <p>. Lorem ipsum et</p>
                <p>. Lorem ipsum</p>
                <p>. Lorem ipsum</p>
                <p>. Lorem ipsum</p>
            </div>
            <div class="f-service">
                <h4>About</h4>
                <p>. Lorem ipsum</p>
                <p>. Lorem, ipsum dol</p>
                <p>. Lorem ipsum et</p>
                <p>. Lorem ipsum</p>
                <p>. Lorem ipsum</p>
                <p>. Lorem ipsum</p>
            </div>
        </div>
        <div class="f-div no3">
            <h4>Patronize Us</h4>
            <p>Lorem ipsum, dolor sit amet</p>
            <p>Lorem, ipsum dolor.</p>
        </div>
    </footer>


    <?php
        require_once "roomsFooter.php";
    ?>
    
</body>
</html>