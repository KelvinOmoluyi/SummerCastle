<?php
require_once '../includes/config_session.inc.php';     // starts the sessions
require_once '../includes/account_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/about.css">
    <link rel="stylesheet" href="../css/account.css">
    <title>SummerCastle</title>
</head>
<body>
    
    <?php 
        require_once "entryHeader.php"   ?>
    

            
        <?php if (isset($_SESSION['user_id'])) { ?>

            <?php
                require_once "entryHeader.php";
            ?>

            <section class="account-section">
                <div class="account">
                    <div class="pic">
                    </div>
                    <?php 
                        output_details();
                    ?>
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

        <?php } else { ?>
            <div class="about">
                <div class="big-words">
                    <h1>Restricted page!</h1>
                </div>
                <div class="medium-words">
                    <h4>You have to contact the website developer to receive futher access :)</h4>
                </div>
                <div class="small-words">
                    <p>Pls enjoy viewing other pages on this website, thank you for your understanding.</p>
                </div>
            </div>
        <?php } ?>




    <script src="../js/main.js"></script>


</body>
</html>