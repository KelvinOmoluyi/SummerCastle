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
    <link rel="stylesheet" href="../css/adminAccount.css">
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
            <!-- <div class="top-segment">
                <div class="admin-name">
                    <div class="img">
                    <?php 
                        output_pic();
                    ?>
                    </div>
                    <?php 
                        output_admin_name();
                    ?>
                </div>
                <div class="date">
                    <?php 
                        date_default_timezone_set('Africa/Lagos');
                    ?>
                    <h4>Date: <?php echo date('d-m-y')?></h4>
                </div>
            </div> -->
            
            <div class="body-segment">
                <div class="details">
                    <div class="acc-pic">
                        <?php 
                            output_pic();
                        ?>
                    </div>  
                    <form action="../includes/upload.inc.php" method="POST" enctype="multipart/form-data">
                        <input type="file" name="file">
                        <br>
                        <br>
                        <div class="form-entry">
                            <button type="submit" name="submit">Upload</button>
                        </div>
                    </form>
                </div>
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