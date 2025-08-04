<?php
require_once '../includes/config_session.inc.php';     // starts the sessions
require_once '../includes/login_view.inc.php';         // important for login contents
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="all.css">
    <link rel="stylesheet" href="room2.css">
    <link rel="stylesheet" href="room3.css">
    <link rel="stylesheet" href="room4.css">
    <link rel="stylesheet" href="room5.css">
    <link rel="stylesheet" href="room6.css">
    <title>SummerCastle</title>
</head>
<body>

    <?php
        require_once "roomsHeader.php";
    ?>

    <section class="hotels">
        
        <!-------------------------- hotel-room 1----------------------------------------------------->
        <div class="hotel-room">
            <div class="words">
                <div class="words-1">
                    <div class="words-1-icon">
                        <img width="40" height="40" src="https://img.icons8.com/dotty/80/000000/castle.png" alt="castle"/>
                    </div>
                    <div class="words-1-words">
                        <h3>5 star Apartment</h3>
                    </div>
                </div>
                <div class="words-2">
                    <div class="words-2-words">
                        <p>Reserve Your Ideal Holiday</p>
                    </div>
                    <div class="words-2-image">
                        <div class="img1"></div>
                        <div class="img2"></div>
                        <div class="img3"></div>
                    </div>
                </div>

                <div class="acquainted">
                    <div class="word">
                        <p>Let's get acquainted!</p>
                    </div>
                    <div class="line">
                        <hr>
                    </div>
                </div>

                <div class="action">
                    <div class="comments">
                        <div class="comments-words">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Officiis placeat iusto officia molestias impedit. Voluptate, 
                                obcaecati.
                            </p>
                        </div>
                        <div class="comments-btn">

                            <?php 
                                if (isset($_SESSION['user_id'])){   ?>
                                <div class="btn"><a href="room1.php">Book</a></div>
                            <?php }else { ?>
                                <div class="btn"><a href="../entry/signup.php">Book</a></div>
                            <?php } ?>

                        </div>
                    </div>
                    <div class="ratings">
                        <div class="rating1"><h2>155k</h2><p>Capital raised</p></div>
                        <div class="rating2"><h2>70k</h2><p>Happy Customers</p></div>
                        <div class="rating3"><h2>40k</h2><p>Property Option</p></div>
                    </div>
                </div>
            </div>

            <div class="image">
                <div class="contact">
                    <div class="word"><a href="#">contact</a></div>
                    <div class="icon"><img width="22" height="22" src="https://img.icons8.com/puffy/32/user.png" alt="user"/></div>
                </div>
                <div class="location">
                    <div class="word">
                        <div class="locate"><h5>weslengthon, Sweden</h5></div>
                        <div class="link-pic">
                            <a href="../img/master-bedroom.jpg"><img width="25" height="25" src="https://img.icons8.com/pastel-glyph/128/FFFFFF/external-link--v1.png" alt="external-link--v1"/></a>
                        </div>
                    </div>
                    <a href="room1.php" class="room-link">
                        <div class="picture">
                        </div>
                    </a> 
                </div>
            </div>
        </div>

        <!-------------------------- hotel-room 2----------------------------------------------------->

        <div class="hotel-room">
            <div class="words">
                <div class="words-1">
                    <div class="words-1-icon">
                        <img width="40" height="40" src="https://img.icons8.com/dotty/80/000000/castle.png" alt="castle"/>
                    </div>
                    <div class="words-1-words">
                        <h3>4 star Apartment</h3>
                    </div>
                </div>
                <div class="words-2">
                    <div class="words-2-words">
                        <p>Comfort and finess</p>
                    </div>
                    <div class="words-2-image">
                        <div class="img1"></div>
                        <div class="img2"></div>
                        <div class="img3"></div>
                    </div>
                </div>

                <div class="acquainted">
                    <div class="word">
                        <p>Let's get acquainted!</p>
                    </div>
                    <div class="line">
                        <hr>
                    </div>
                </div>

                <div class="action">
                    <div class="comments">
                        <div class="comments-words">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Officiis placeat iusto officia molestias impedit. Voluptate, 
                                obcaecati.
                            </p>
                        </div>
                        <div class="comments-btn">

                            <?php 
                                if (isset($_SESSION['user_id'])){   ?>
                                <div class="btn"><a href="room2.php">Book</a></div>
                            <?php }else { ?>
                                <div class="btn"><a href="../entry/signup.php">Book</a></div>
                            <?php } ?>

                        </div>
                    </div>
                    <div class="ratings">
                        <div class="rating1"><h2>135k</h2><p>Capital raised</p></div>
                        <div class="rating2"><h2>40k</h2><p>Happy Customers</p></div>
                        <div class="rating3"><h2>39k</h2><p>Property Option</p></div>
                    </div>
                </div>
            </div>

            <div class="image2">
                <div class="contact">
                    <div class="word"><a href="#">contact</a></div>
                    <div class="icon"><img width="22" height="22" src="https://img.icons8.com/puffy/32/user.png" alt="user"/></div>
                </div>
                <div class="location">
                    <div class="word">
                        <div class="locate"><h5>weslengthon, Sweden</h5></div>
                        <div class="link-pic">
                            <a href="../img/modern-room1.jpg"><img width="25" height="25" src="https://img.icons8.com/pastel-glyph/128/FFFFFF/external-link--v1.png" alt="external-link--v1"/></a>
                        </div>
                    </div>
                    <a href="room2.php" class="room-link">
                        <div class="picture">
                        </div>
                    </a> 
                </div>
            </div>
        </div>

         <!-------------------------- hotel-room 3 ----------------------------------------------------->

        <div class="hotel-room">
            <div class="words">
                <div class="words-1">
                    <div class="words-1-icon">
                        <img width="40" height="40" src="https://img.icons8.com/dotty/80/000000/castle.png" alt="castle"/>
                    </div>
                    <div class="words-1-words">
                        <h3>3 star Apartment</h3>
                    </div>
                </div>
                <div class="words-2">
                    <div class="words-2-words">
                        <p>Modern Yet Exotic</p>
                    </div>
                    <div class="words-2-image">
                        <div class="img1"></div>
                        <div class="img2"></div>
                        <div class="img3"></div>
                    </div>
                </div>

                <div class="acquainted">
                    <div class="word">
                        <p>Let's get acquainted!</p>
                    </div>
                    <div class="line">
                        <hr>
                    </div>
                </div>

                <div class="action">
                    <div class="comments">
                        <div class="comments-words">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Officiis placeat iusto officia molestias impedit. Voluptate, 
                                obcaecati.
                            </p>
                        </div>
                        <div class="comments-btn">

                            <?php 
                                if (isset($_SESSION['user_id'])){   ?>
                                <div class="btn"><a href="room3.php">Book</a></div>
                            <?php }else { ?>
                                <div class="btn"><a href="../entry/signup.php">Book</a></div>
                            <?php } ?>

                        </div>
                    </div>
                    <div class="ratings">
                        <div class="rating1"><h2>105k</h2><p>Capital raised</p></div>
                        <div class="rating2"><h2>20k</h2><p>Happy Customers</p></div>
                        <div class="rating3"><h2>25k</h2><p>Property Option</p></div>
                    </div>
                </div>
            </div>

            <div class="image3">
                <div class="contact">
                    <div class="word"><a href="#">contact</a></div>
                    <div class="icon"><img width="22" height="22" src="https://img.icons8.com/puffy/32/user.png" alt="user"/></div>
                </div>
                <div class="location">
                    <div class="word">
                        <div class="locate"><h5>weslengthon, Sweden</h5></div>
                        <div class="link-pic">
                            <a href="../img/Bed.jpg"><img width="25" height="25" src="https://img.icons8.com/pastel-glyph/128/FFFFFF/external-link--v1.png" alt="external-link--v1"/></a>
                        </div>
                    </div>
                    <a href="room3.php" class="room-link">
                        <div class="picture">
                        </div>
                    </a>    
                </div>
            </div>
        </div>


        <!-------------------------- hotel-room 4----------------------------------------------------->

        <div class="hotel-room">
            <div class="words">
                <div class="words-1">
                    <div class="words-1-icon">
                        <img width="40" height="40" src="https://img.icons8.com/dotty/80/000000/castle.png" alt="castle"/>
                    </div>
                    <div class="words-1-words">
                        <h3>4 star Apartment</h3>
                    </div>
                </div>
                <div class="words-2">
                    <div class="words-2-words">
                        <p>Immersion In Comfort</p>
                    </div>
                    <div class="words-2-image">
                        <div class="img1"></div>
                        <div class="img2"></div>
                        <div class="img3"></div>
                    </div>
                </div>

                <div class="acquainted">
                    <div class="word">
                        <p>Let's get acquainted!</p>
                    </div>
                    <div class="line">
                        <hr>
                    </div>
                </div>

                <div class="action">
                    <div class="comments">
                        <div class="comments-words">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Officiis placeat iusto officia molestias impedit. Voluptate, 
                                obcaecati.
                            </p>
                        </div>
                        <div class="comments-btn">

                        <?php 
                            if (isset($_SESSION['user_id'])){   ?>
                            <div class="btn"><a href="room4.php">Book</a></div>
                        <?php }else { ?>
                            <div class="btn"><a href="../entry/signup.php">Book</a></div>
                        <?php } ?>

                        </div>
                    </div>
                    <div class="ratings">
                        <div class="rating1"><h2>130k</h2><p>Capital raised</p></div>
                        <div class="rating2"><h2>60k</h2><p>Happy Customers</p></div>
                        <div class="rating3"><h2>35k</h2><p>Property Option</p></div>
                    </div>
                </div>
            </div>



            <div class="image4">
                <div class="contact">
                    <div class="word"><a href="#">contact</a></div>
                    <div class="icon"><img width="22" height="22" src="https://img.icons8.com/puffy/32/user.png" alt="user"/></div>
                </div>
                <div class="location">
                    <div class="word">
                        <div class="locate"><h5>weslengthon, Sweden</h5></div>
                        <div class="link-pic">
                            <a href="../img/modern-room2.jpg"><img width="25" height="25" src="https://img.icons8.com/pastel-glyph/128/FFFFFF/external-link--v1.png" alt="external-link--v1"/></a>
                        </div>
                    </div>
                    <a href="room4.php" class="room-link">
                        <div class="picture">
                        </div>
                    </a> 
                </div>
            </div>
        </div>



        <!-------------------------- hotel-room 5 ----------------------------------------------------->

        <div class="hotel-room">
            <div class="words">
                <div class="words-1">
                    <div class="words-1-icon">
                        <img width="40" height="40" src="https://img.icons8.com/dotty/80/000000/castle.png" alt="castle"/>
                    </div>
                    <div class="words-1-words">
                        <h3>4.5 star Apartment</h3>
                    </div>
                </div>
                <div class="words-2">
                    <div class="words-2-words">
                        <p>Fancy and Prestigous</p>
                    </div>
                    <div class="words-2-image">
                        <div class="img1"></div>
                        <div class="img2"></div>
                        <div class="img3"></div>
                    </div>
                </div>

                <div class="acquainted">
                    <div class="word">
                        <p>Let's get acquainted!</p>
                    </div>
                    <div class="line">
                        <hr>
                    </div>
                </div>

                <div class="action">
                    <div class="comments">
                        <div class="comments-words">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Officiis placeat iusto officia molestias impedit. Voluptate, 
                                obcaecati.
                            </p>
                        </div>
                        <div class="comments-btn">

                            <?php 
                                if (isset($_SESSION['user_id'])){   ?>
                                <div class="btn"><a href="room5.php">Book</a></div>
                            <?php }else { ?>
                                <div class="btn"><a href="../entry/signup.php">Book</a></div>
                            <?php } ?>

                        </div>
                    </div>
                    <div class="ratings">
                        <div class="rating1"><h2>150k</h2><p>Capital raised</p></div>
                        <div class="rating2"><h2>65k</h2><p>Happy Customers</p></div>
                        <div class="rating3"><h2>20k</h2><p>Property Option</p></div>
                    </div>
                </div>
            </div>

            <div class="image5">
                <div class="contact">
                    <div class="word"><a href="#">contact</a></div>
                    <div class="icon"><img width="22" height="22" src="https://img.icons8.com/puffy/32/user.png" alt="user"/></div>
                </div>
                <div class="location">
                    <div class="word">
                        <div class="locate"><h5>weslengthon, Sweden</h5></div>
                        <div class="link-pic">
                            <a href="../img/modern-room3.jpg"><img width="25" height="25" src="https://img.icons8.com/pastel-glyph/128/FFFFFF/external-link--v1.png" alt="external-link--v1"/></a>
                        </div>
                    </div>
                    <a href="room5.php" class="room-link">
                        <div class="picture">
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-------------------------- hotel-room 6 ----------------------------------------------------->

        <div class="hotel-room">
            <div class="words">
                <div class="words-1">
                    <div class="words-1-icon">
                        <img width="40" height="40" src="https://img.icons8.com/dotty/80/000000/castle.png" alt="castle"/>
                    </div>
                    <div class="words-1-words">
                        <h3>5 star Apartment</h3>
                    </div>
                </div>
                <div class="words-2">
                    <div class="words-2-words">
                        <p>Our Royalty Special</p>
                    </div>
                    <div class="words-2-image">
                        <div class="img1"></div>
                        <div class="img2"></div>
                        <div class="img3"></div>
                    </div>
                </div>

                <div class="acquainted">
                    <div class="word">
                        <p>Let's get acquainted!</p>
                    </div>
                    <div class="line">
                        <hr>
                    </div>
                </div>

                <div class="action">
                    <div class="comments">
                        <div class="comments-words">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Officiis placeat iusto officia molestias impedit. Voluptate, 
                                obcaecati.
                            </p>
                        </div>
                        <div class="comments-btn">

                            <?php 
                                if (isset($_SESSION['user_id'])){   ?>
                                <div class="btn"><a href="room6.php">Book</a></div>
                            <?php }else { ?>
                                <div class="btn"><a href="../entry/signup.php">Book</a></div>
                            <?php } ?>

                        </div>
                    </div>
                    <div class="ratings">
                        <div class="rating1"><h2>150k</h2><p>Capital raised</p></div>
                        <div class="rating2"><h2>65k</h2><p>Happy Customers</p></div>
                        <div class="rating3"><h2>20k</h2><p>Property Option</p></div>
                    </div>
                </div>
            </div>

            <div class="image6">
                <div class="contact">
                    <div class="word"><a href="#">contact</a></div>
                    <div class="icon"><img width="22" height="22" src="https://img.icons8.com/puffy/32/user.png" alt="user"/></div>
                </div>
                <div class="location">
                    <div class="word">
                        <div class="locate"><h5>weslengthon, Sweden</h5></div>
                        <div class="link-pic">
                            <a href="../img/master-bedroom3.jpg"><img width="25" height="25" src="https://img.icons8.com/pastel-glyph/128/FFFFFF/external-link--v1.png" alt="external-link--v1"/></a>
                        </div>
                    </div>
                    <a href="room6.php" class="room-link">
                        <div class="picture">
                        </div>
                    </a>
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