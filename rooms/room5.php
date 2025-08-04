<?php
require_once '../includes/config_session.inc.php';     // starts the sessions
require_once '../includes/login_view.inc.php';          // important for login
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="paymentForm.css">
    <link rel="stylesheet" href="all.css">
    <link rel="stylesheet" href="room5.css">
    <link rel="stylesheet" href="room6.css">
    <title>SummerCastle</title>
</head>
<body>

    <?php
        require_once "roomsHeader.php";
    ?>

    <section class="hotels">
        <div class="hotel-room">

            <?php 
                if (isset($_SESSION['user_id'])){   ?>
                    <div class="words">
                        <div class="words-1">
                            <div class="words-1-icon">
                                <img width="40" height="40" src="https://img.icons8.com/dotty/80/000000/castle.png" alt="castle"/>
                            </div>
                            <div class="words-1-words">
                                <h3>4.5 star Apartment</h3>
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

                        
                        <div class="forms">
                            <div class="p-detail">
                                <h4>Payment details</h4>
                            </div>
                            <form action="../includes/receipt.inc.php" class="action" method="post">                        
                            <div class="input-field">
                                <p>Full Name</p>
                                <input type="name" placeholder="Full Name" name="fullname" id="fullname" required>
                            </div>
                
                
                            <div class="input-field">
                                <p>Credit card number</p>
                                <input type="number" placeholder="xxxx xxxx xxxx xxxx" name="cardNum" id="cardnum" required>
                            </div>
            

                            <div class="input-box">
                                <div class="input-field">
                                    <p>Number of rooms</p>
                                    <input type="number" placeholder="Num of Rooms" name="roomNum" id="roomNum" required>
                                </div>
                
                                <div class="input-field">
                                    <p>Period of stay</p>
                                    <input type="number" placeholder="Days" name="stayPeriod" id="stayPeriod" required>
                                </div>
                            </div>

                            <div class="form-entry">
                                <button type="submit">Make payment</button>
                            </div>
                        </form>
                        </div>
                    </div>

                <?php }else { ?>

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
                                    <div class="btn"><a href="../entry/signup.php">Book</a></div>
                                </div>
                            </div>
                            <div class="ratings">
                                <div class="rating1"><h2>150k</h2><p>Capital raised</p></div>
                                <div class="rating2"><h2>65k</h2><p>Happy Customers</p></div>
                                <div class="rating3"><h2>20k</h2><p>Property Option</p></div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            

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
                    <div class="picture">
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

    <?php
        require_once "roomsFooter.php";
    ?>


</body>
</html>