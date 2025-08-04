<?php  
require_once '../includes/config_session.inc.php';     // starts the sessions 
?>

<?php if (isset($_SESSION['admin'])){                    // checks if you are logged as admin
require_once '../includes/admin_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/homepage.css">
    <link rel="stylesheet" href="../css/users.css">
    <title>SummerCastle</title>
</head>
<body>
    <?php 
        require_once "adminResHeader.php";
    ?>

    <section class="body-section">
        <section class="dashboard">
            <div class="logo">
                <div class="logo-pic"><img width="40" height="40" src="https://img.icons8.com/dotty/80/FFFFFF/castle.png" alt="castle"/></div>
                <div class="word"><h4>SummerCastle</h4></div>
            </div>
            <div class="logo-line"></div>
            <?php require_once "adminHeader.php" ?>
        </section>

        <section class="contents">
            <div class="body-segment">
                <?php
                require_once "../includes/users.inc.php";
                ?>
            </div>
        </section>
    </section>

    
    <?php require_once "adminFooter.php" ?>
    
</body>
</html>

<?php } else { ?>
    <h1>404</h1>
    <h1>Error page</h1>
<?php } ?>