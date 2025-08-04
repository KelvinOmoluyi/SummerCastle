<?php
require_once '../includes/config_session.inc.php';     // starts the sessions
require_once '../includes/contact_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/contact.css">
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
                <a href="account.php">
                <div class="burger-icon">
                    <img width="30" height="30" src="https://img.icons8.com/glyph-neue/64/FFFFFF/.png" alt="Account"/>
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
                <a href="../entry/contact.php">
                    <div class="burger-icon">
                        <img width="30" height="30" src="https://img.icons8.com/parakeet-line/48/FFFFFF/bed.png" alt="rooms"/>
                    </div>
                    <div class="icon-name">
                        <p>Contact</p>
                    </div>
                </a>
            </li>

            <li>
                <a href="../includes/logout.inc.php">
                    <div class="burger-icon">
                        <img width="30" height="30" src="https://img.icons8.com/glyph-neue/64/FFFFFF/login-rounded-right.png" alt="Log out"/>
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
                        <li><a href="account.php">Account</a></li>
                        <li><a href="../rooms/all.php">Rooms</a></li>
                        <li><a href="../rooms/contact.php">Contact</a></li>
                    </ul>
    
                    <span class="active-nav"></span>
                </div>
                <div class="join">
                    <li><a href="../includes/logout.inc.php">Log out</a></li>
                </div>
                <!-- Burger menu coding-->
                <div class="burger-menu-btn"></div>
            </nav>
        </div>
    </header>

    
<div class="home-contents aligner">
        <div class="intro">
            <h1>Summer Castle</h1>
            <br>
            <br>
            <h2>- Contact Page -</h2>
                <br>
                <?php send_contact_sent(); ?>
        </div>
    </div>
</section>

<?php } else {   ?>
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
                <a href="account.php">
                <div class="burger-icon">
                    <img width="30" height="30" src="https://img.icons8.com/glyph-neue/64/FFFFFF/about.png" alt="account"/>
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
                <a href="../entry/contact.php">
                    <div class="burger-icon">
                        <img width="30" height="30" src="https://img.icons8.com/parakeet-line/48/FFFFFF/bed.png" alt="rooms"/>
                    </div>
                    <div class="icon-name">
                        <p>Contact</p>
                    </div>
                </a>
            </li>

            <li>
                <a href="../entry/signup.php">
                    <div class="burger-icon">
                        <img width="30" height="30" src="https://img.icons8.com/dotty/80/FFFFFF/client-management.png" alt="sign up"/>
                    </div>
                    <div class="icon-name">
                        <p>Sign up</p>
                    </div>
                </a>
            </li>

            <li>
                <a href="../entry/signin.php">
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
                        <li><a href="account.php">Account</a></li>
                        <li><a href="../rooms/all.php">Rooms</a></li>
                        <li><a href="../entry/contact.php">Contact</a></li>
                    </ul>
    
                    <span class="active-nav"></span>
                </div>
                <div class="join">
                        <li><a href="../entry/signup.php">Sign up</a></li>
                        <li><a href="../entry/signin.php">Sign in</a></li>
                </div>
                <!-- Burger menu coding-->
                <div class="burger-menu-btn"></div>
            </nav>
        </div>
    </header>

    
    <div class="home-contents aligner">
            <div class="intro">
                <h1>Summer Castle</h1>
                <br>
                <br>
                <h2>- Contact Page -</h2>
                <br>
                <?php send_contact_sent(); ?>
            </div>
        </div>
</section>
<?php } ?>
    
    
    <section class="about">
        <div class="nav-shader"></div>
        </div>
        <div class="contact-icons">
            <div class="icon">
                <div class="img1"></div>
                <h4>Phone: +234 816 113 1024</h4>
            </div>
            <div class="icon">
                <div class="img2"></div>
                <h4>Whatsapp: +234 816 113 1024</h4>
            </div>
            <div class="icon">
                <div class="img3">
                </div>
                <h4>email: kaylordwebmessages@gmail.com</h4>
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
    </section>


    <section class="contact" id="contact">
        <h2 class="heading">Contact <span>Me!</span></h2>
        <form action="../includes/contact.inc.php" class="action" method="post">
            <div class="input-box">
                <div class="input-field">
                    <input type="text" placeholder="Full Name" name="name" id="name" required>
                    <span class="focus"></span>
                    <!-- <div class="error-message"><p>Full name can't be blank</p></div> -->
                </div>

                <div class="input-field">
                    <input type="email" placeholder="Email Address" name="email" id="email" required>
                    <span class="focus"></span>
                    <!-- <div class="error-message"><p>Email address can't be blank</p></div> -->
                </div>
            </div>


            <div class="input-box">
                <div class="input-field">
                    <input type="number" placeholder="Mobile Number" name="phone" id="phone" required>
                    <span class="focus"></span>
                    <!-- <div class="error-message"><p>Mobile number can't be blank</p></div> -->
                </div>

                <div class="input-field">
                    <input type="text" placeholder="Email Subject" name="subject" id="subject" required>
                    <span class="focus"></span>
                    <!-- <div class="error-message"><p>Email subject can't be blank</p></div> -->
                </div>
            </div>


            <div class="textarea-field">
                <textarea name = "message" id="message" placeholder="Your message..." required></textarea>
                <span class="focus"></span>
            </div>
            <!-- <div class="error-message"><p>Message can't be blank</p></div> -->

            <div class="btn-box btns">
                <button type="submit" class="btn">submit</button>
            </div>
        </form>

    </section>
    <?php
        require_once "entryFooter.php";
    ?>

</body>
</html>