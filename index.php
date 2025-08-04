<?php
require_once 'includes/config_session.inc.php';     // starts the sessions
require_once 'includes/login_view.inc.php';
require_once 'includes/signup_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!---------------------------- SEO meta data --------------------------->
    <meta name="description" content="Jemash Resources Limited is your partner in delivering high-tier recruitment, outsourcing, training, and management services to build winning teams, streamline operations, and upskill your workforce. Our contacts jemashresources@gmail.com, +234 906 141 8241">  
    <meta name="robots" content="index, follow, max-image-preview:large"> 
    <link rel="canonical" href="https://jemashresourcesltd.com/">

    <!-- Open Graph (OG) Metadata for Social Media Sharing -->
    <meta property="og:locale" content="en_US">
    <meta property="og:site_name" content="Jemash Resources Limited">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Jemash Resources Limited">
    <meta property="og:description" content="Jemash Resources Limited is your partner in delivering high-tier recruitment, outsourcing, training, and management services to build winning teams, streamline operations, and upskill your workforce. Our contacts jemashresources@gmail.com, +234 906 141 8241">
    <meta property="og:url" content="https://jemashresourcesltd.com/">
    <meta property="og:image" content="https://jemashresources.com/img/Jemash-logo.png">
    <meta property="og:image:alt" content="Jemash Resources - Professional HR Solutions">

    <!-- Twitter Card Metadata -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Jemash Resources Limited | Recruitment, Outsourcing & HR Solutions">
    <meta name="twitter:description" content="Leveraging businesses success with expert recruitment, outsourcing, and management services.">
    <meta name="twitter:image" content="https://jemashresources.com/uploads/jemash-banner.png">

    <!-- Author & Additional SEO Enhancements -->
    <meta name="author" content="Jemash Resources Limited">
    <meta name="keywords" content="Recruitment, Outsourcing, HR Services, Talent Acquisition, Business Solutions, Training, Workforce Management">

    <!---------------------------------- SEO meta data -------------------------------->

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/index.css">
    <title>SummerCastle</title>
</head>

<body>
        <?php 
            if (isset($_SESSION['user_id'])){   ?>
                <!--Burger menu starts-->
                <div class="glass-menu">
                    <nav class="burger-menu">
                        <ul>
                            <li>
                                <a href="index.php">
                                    <div class="burger-icon">
                                        <img width="30" height="30" src="https://img.icons8.com/glyph-neue/64/FFFFFF/home-page.png" alt="home-page"/>
                                    </div>
                                    <div class="icon-name">
                                        <p>Home</p>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="entry/account.php">
                                <div class="burger-icon">
                                    <img width="30" height="30" src="https://img.icons8.com/glyph-neue/64/FFFFFF/about.png" alt="about"/>
                                </div>
                                <div class="icon-name">
                                    <p>Account</p>
                                </div>
                                </a>
                            </li>

                            <li>
                                <a href="rooms/all.php">
                                    <div class="burger-icon">
                                        <img width="30" height="30" src="https://img.icons8.com/parakeet-line/48/FFFFFF/bed.png" alt="rooms"/>
                                    </div>
                                    <div class="icon-name">
                                        <p>Rooms</p>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="entry/contact.php">
                                    <div class="burger-icon">
                                        <img width="30" height="30" src="https://img.icons8.com/parakeet-line/48/FFFFFF/bed.png" alt="rooms"/>
                                    </div>
                                    <div class="icon-name">
                                        <p>Contact</p>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="includes/logout.inc.php">
                                    <div class="burger-icon">
                                        <img width="30" height="30" src="https://img.icons8.com/glyph-neue/64/FFFFFF/login-rounded-right.png" alt="sign in"/>
                                    </div>
                                    <div class="icon-name">
                                        <p>Log out</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!--Burger menu stops-->
            
                <div id="header">
                    <nav class="navbar">
                        <div class="icon">
                            <img width="60" height="60" src="https://img.icons8.com/dotty/80/FFFFFF/castle.png" alt="castle"/>
                        </div>
                        <div class="links">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="entry/account.php">Account</a></li>
                                <li><a href="rooms/all.php">Rooms</a></li>
                                <li><a href="entry/contact.php">Contact</a></li>
                            </ul>
            
                            <span class="active-nav"></span>
                        </div>
                        <div class="join">
                            <li><a href="includes/logout.inc.php">Log out</a></li>
                        </div>
                        <!-- Burger menu coding-->
                        <div class="burger-menu-btn"></div>
                    </nav>
                </div>
        <?php }else { ?>
        
            <!--Burger menu starts-->
            <div class="glass-menu">
                <nav class="burger-menu">
                    <ul>
                        <li>
                            <a href="index.php">
                                <div class="burger-icon">
                                    <img width="30" height="30" src="https://img.icons8.com/glyph-neue/64/FFFFFF/home-page.png" alt="home-page"/>
                                </div>
                                <div class="icon-name">
                                    <p>Home</p>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="entry/account.php">
                            <div class="burger-icon">
                                <img width="30" height="30" src="https://img.icons8.com/glyph-neue/64/FFFFFF/about.png" alt="account"/>
                            </div>
                            <div class="icon-name">
                                <p>Account</p>
                            </div>
                            </a>
                        </li>

                        <li>
                            <a href="rooms/all.php">
                                <div class="burger-icon">
                                    <img width="30" height="30" src="https://img.icons8.com/parakeet-line/48/FFFFFF/bed.png" alt="rooms"/>
                                </div>
                                <div class="icon-name">
                                    <p>Rooms</p>
                                </div>
                            </a>
                        </li>
                        
                        <li>
                            <a href="entry/contact.php">
                                <div class="burger-icon">
                                    <img width="30" height="30" src="https://img.icons8.com/parakeet-line/48/FFFFFF/bed.png" alt="rooms"/>
                                </div>
                                <div class="icon-name">
                                    <p>Contact</p>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="entry/signup.php">
                                <div class="burger-icon">
                                    <img width="30" height="30" src="https://img.icons8.com/dotty/80/FFFFFF/client-management.png" alt="sign up"/>
                                </div>
                                <div class="icon-name">
                                    <p>Sign up</p>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="entry/signin.php">
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
        
            <div id="header">
                <nav class="navbar">
                    <div class="icon">
                        <img width="60" height="60" src="https://img.icons8.com/dotty/80/FFFFFF/castle.png" alt="castle"/>
                    </div>
                    <div class="links">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="entry/account.php">Account</a></li>
                            <li><a href="rooms/all.php">Rooms</a></li>
                            <li><a href="entry/contact.php">Contact</a></li>
                        </ul>
        
                        <span class="active-nav"></span>
                    </div>
                    <div class="join">
                        <li><a href="entry/signup.php">Sign up</a></li>
                        <li><a href="entry/signin.php">Sign in</a></li>
                    </div>
                    <!-- Burger menu coding-->
                    <div class="burger-menu-btn"></div>
                </nav>
            </div>
            <?php } ?>

    <section class="home">
        <div class="home-contents aligner">
            <div class="intro">
                <h1>Summer Castle</h1>
                <?php output_username(); ?>
            </div>
        </div>
    </section>



    <section class="about">
        <div class="nav-shader"></div>
        <div class="about-contents">
            <div class="left-content">
                <div class="words">
                    <h3>Choose from a variety of rooms tailored to suit your needs, 
                        offering comfort and elegance for every stay.
                    </h3>
                    <br>
                    <p>Celebrate the festive season in style! Shop now for exclusive 
                        deals and gifts that make this holiday truly special. 
                   </p>
                   <div class="rating">
                    <div class="rating-l1">
                        <h3>225+</h3>
                        <p>Country ratings.</p>
                        <br>
                        <br>
                        <br>
                        <h3>225+</h3>
                        <p>Customer ratings.</p>
                    </div>
                    <div class="rating-l2">
                        <h3>225+</h3>
                        <p>Booking.</p>
                        <br>
                        <br>
                        <br>
                        <h3>225+</h3>
                        <p>Hotels.</p>
                    </div>
                   </div>
                </div>

                <div class="browse-pic">
                    <a href="rooms/all.php">Browse rooms</a>
                </div>
            </div>
            <div class="right-content">
                <div class="pics">
                    <div class="vertical-pics">
                        <div class="darken-effect">
                            <a href="rooms/room1.php">
                                <div class="link">
                                    <img width="45" height="45" src="https://img.icons8.com/pastel-glyph/128/FFFFFF/external-link--v1.png" alt="external-link--v1"/>
                                </div>
                            </a>
                        </div>
                    </div>
                    
                    <div class="horizontal-pics">
                        <div class="base-pic">
                            <div class="base-img">
                                <div class="darken-effect">
                                    <a href="rooms/room2.php">
                                        <div class="link">
                                            <img width="45" height="45" src="https://img.icons8.com/pastel-glyph/128/FFFFFF/external-link--v1.png" alt="external-link--v1"/>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="base-img">
                                <div class="darken-effect">
                                    <a href="rooms/room3.php">
                                        <div class="link">
                                            <img width="45" height="45" src="https://img.icons8.com/pastel-glyph/128/FFFFFF/external-link--v1.png" alt="external-link--v1"/>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="base-pic">
                            <div class="base-img2">
                                <div class="darken-effect">
                                    <a href="rooms/room4.php">
                                        <div class="link">
                                            <img width="45" height="45" src="https://img.icons8.com/pastel-glyph/128/FFFFFF/external-link--v1.png" alt="external-link--v1"/>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="base-img2">
                                <div class="darken-effect">
                                    <a href="rooms/room5.php">
                                        <div class="link">
                                            <img width="45" height="45" src="https://img.icons8.com/pastel-glyph/128/FFFFFF/external-link--v1.png" alt="external-link--v1"/>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="vertical-pics2">
                        <div class="darken-effect">
                            <a href="rooms/room6.php">
                                <div class="link">
                                    <img width="45" height="45" src="https://img.icons8.com/pastel-glyph/128/FFFFFF/external-link--v1.png" alt="external-link--v1"/>
                                </div>
                            </a>
                        </div>
                    </div>
                    
                </div>

            </div>
        </div>
    </section>

    <section class="offers aligner">
        <hr class="offers-hr">
        <div class="promo">
            <div class="big-words">
                <div class="b-words1"><h3>Big <br> Promo</h3></div>
                <div class="b-words2"><h2>Limited Time Offer <br>Book Now and Save Big!</h2></div>
            </div>
            <div class="small-words">
                <div class="s-words"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Qui veritatis provident consectetur magni reiciendis esse accusantium nulla 
                    ipsa, quisquam assumenda? accusantium nulla ipsa, quisquam assumenda? 
                    accusantium nulla ipsa, quisquam assumenda?</p></div>
                <div class="promo-book"><a href="rooms/all.php">Book Now!</a></div>
            </div>
        </div>

        <div class="explore">
            <div class="explore1">
                <div class="e1-pic">
                    <div class="darken-effect">
                        <a href="img/laughing.jpg">
                            <div class="link">
                                <img width="45" height="45" src="https://img.icons8.com/pastel-glyph/128/FFFFFF/external-link--v1.png" alt="external-link--v1"/>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="e1-words">
                    <h3>Let's Explore Together</h3>
                    <div class="u-promo">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                            Similique cum facilis ducimus consequatur neque rem voluptate 
                            nisi doloribus, architecto deserunt nesciunt officiis inventore
                        </p>
                    </div>
                </div>
            </div>
            <div class="explore2">
                <div class="e2-words">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                        Similique cum facilis ducimus consequatur neque rem voluptate 
                        nisi doloribus, architecto deserunt nesciunt officiis inventore
                    </p>
                    <div class="u-promo">
                        <h4>Ultimate Promo</h4>
                    </div>
                </div>
                <div class="e2-pic">
                    <div class="darken-effect">
                        <a href="img/airplane-wings.jpg">
                            <div class="link">
                                <img width="45" height="45" src="https://img.icons8.com/pastel-glyph/128/FFFFFF/external-link--v1.png" alt="external-link--v1"/>
                            </div>
                        </a>
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

    <script src="js/main.js"></script>

</body>
</body>
</html>