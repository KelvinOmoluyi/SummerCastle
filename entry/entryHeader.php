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
                <a href="../entry/account.php">
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
                        <li><a href="../entry/contact.php">Contact</a></li>
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
</section>
<?php } ?>