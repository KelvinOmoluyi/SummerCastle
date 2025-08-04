<?php
require_once '../includes/config_session.inc.php';     // starts the sessions
require_once '../includes/signup_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/signup.css">
    <title>SummerCastle</title>
</head>
<body>

    <?php
        require_once "entryHeader.php";
    ?>
    
    <section class="signup-section">
        <div class="signup">
            <div class="words">
                <div class="invite">
                    <div class="logo">
                        <p>Summer Castle | SignUp page</p>
                    </div>
                    <div class="intro">
                        <h3>Start your journey with us</h3>
                        <p>Discover the world at its best, explore new culture and community
                            at affordable price
                        </p>
                    </div>
                </div>
                <div class="comments">
                    <div class="comments-word">
                        <p>Summer Castle is one of the best travel and hotel company i've ever known.</p>
                    </div>
                    <div class="comments-picture">
                        <div class="comments-picture-pic"></div>
                        <div class="comments-picture-name">
                            <p class="name">Laura A. Brown</p>
                            <p>Journalist</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="entry">
                <div class="questions">
                    <h4>Have an account?</h4>
                    <div class="link"><a href="signin.php">Sign in</a></div>
                </div>

                <div class="forms">
                    <form  action="../includes/signup.inc.php" class="action" method="post">
                        <?php
                            signup_inputs();
                        ?>

                        <?php
                            check_signup_errors();
                        ?>

                        <div class="form-entry">
                            <button type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php
    require_once "entryFooter.php";
?>

</body>
</html>