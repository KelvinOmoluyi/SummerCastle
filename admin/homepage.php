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
            <div class="top-segment">
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
            </div>

            <div class="middle-segments">
                <div class="info-boards">
                    <?php display_new_daily_users(); ?>
                    <p>Daily New users</p>
                </div>
                <div class="info-boards">
                    <?php all_users(); ?>
                    <p>Number of All users</p>
                </div>
                <div class="info-boards">
                    <?php daily_receipts(); ?>
                    <p>Daily Rooms sold</p>
                </div>
                <div class="info-boards">
                    <?php all_receipts(); ?>
                    <p>Total Rooms sold</p>
                </div>
            </div>

            

            <?php $messages = $_SESSION["all_messages"]; ?>

            <div class="middle-content">
                    <?php if (!empty($messages)): ?>
                        <?php foreach ($messages as $message): ?>
                            <div class="message-block">
                                <div class="message-header">
                                    <h4>From: <?= htmlspecialchars($message['username']) ?> </h4>
                                    <h4>Email: <?= htmlspecialchars($message['email']) ?> </h4>
                                    <h4>Phone: <?= htmlspecialchars($message['phone']) ?></h4>
                                </div>
                                <div>
                                    <h4>Subject: <?= htmlspecialchars($message['subject']) ?></h4>
                                </div>
                                <div class="message-content">
                                    <p><?= nl2br(htmlspecialchars($message['content'])) ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p>No messages found.</p>
                    <?php endif; ?>
                </div>
        </section>
    </section>

    
    <?php require_once "adminFooter.php" ?>
    
</body>
</html>

<?php } else { ?>
    <h1>404 Error page</h1>
    <h2>You are not authorized to acccess this page :(</h2>
<?php } ?>