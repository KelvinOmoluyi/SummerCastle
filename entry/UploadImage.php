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
        if (!isset($_SESSION['user_id'])){   ?>
            <!--Burger menu starts-->
            <div class="glass-menu">
                <nav class="burger-menu">
                    <ul>
                        <li>
                            <a href="../index.php">
                                <div class="burger-icon">
                                    <img width="30" height="30" src="https://img.icons8.com/glyph-neue/64/FFFFFF/home-page.png" alt="home-page"/>
                                </div>
                                <div class="icon-name">
                                    <p>Home</p>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="about.html">
                            <div class="burger-icon">
                                <img width="30" height="30" src="https://img.icons8.com/glyph-neue/64/FFFFFF/about.png" alt="about"/>
                            </div>
                            <div class="icon-name">
                                <p>Account</p>
                            </div>
                            </a>
                        </li>

                        <li>
                            <a href="../rooms/all.php">
                                <div class="burger-icon">
                                    <img width="30" height="30" src="https://img.icons8.com/parakeet-line/48/FFFFFF/bed.png" alt="rooms"/>
                                </div>
                                <div class="icon-name">
                                    <p>Rooms</p>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="signup.php">
                                <div class="burger-icon">
                                    <img width="30" height="30" src="https://img.icons8.com/dotty/80/FFFFFF/client-management.png" alt="sign up"/>
                                </div>
                                <div class="icon-name">
                                    <p>Sign up</p>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="signin.php">
                                <div class="burger-icon">
                                    <img width="30" height="30" src="https://img.icons8.com/glyph-neue/64/FFFFFF/login-rounded-right.png" alt="sign in"/>
                                </div>
                                <div class="icon-name">
                                    <p>Sign in</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!--Burger menu stops-->

            <section class="home">
                <header id="header">
                    <div class="nav-box">
                        <nav class="navbar">
                            <div class="icon">
                                <img width="60" height="60" src="https://img.icons8.com/dotty/80/FFFFFF/castle.png" alt="castle"/>
                            </div>
                            <div class="links">
                                <ul>
                                    <li><a href="../index.php">Home</a></li>
                                    <li><a href="about.html">Account</a></li>
                                    <li><a href="../rooms/all.php">Rooms</a></li>
                                </ul>
                
                                <span class="active-nav"></span>
                            </div>
                            <div class="join">
                                <li><a href="signup.php">Sign up</a></li>
                                <li><a href="signin.php">Sign in</a></li>
                            </div>
                            <!-- Burger menu coding-->
                            <div class="burger-menu-btn"></div>
                        </nav>
                    </div>
                </header>
            </section>
    

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

        <?php }elseif (isset($_SESSION['user_id'])) { ?>

            <?php
                require_once "entryHeader.php";
            ?>

            <section class="account-section">
                <div class="account">
                    <div class="pic">
                    </div>
                    <div class="details">
                        <?php 
                            user_pic();
                        ?>
                        <form action="../includes/upload.inc.php" method="POST" enctype="multipart/form-data">
                            <input type="file" name="file">
                            <br>
                            <br>
                            <p>Avoid changing pictures too much</p>
                            <div class="form-entry">
                                <button type="submit" name="submit">Upload</button>
                            </div>
                        </form>
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

        <?php } ?>



    <script src="../js/main.js"></script>


</body>
</html>