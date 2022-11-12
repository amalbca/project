<?php
session_start();
if (!isset($_SESSION['userId'])) {
    header("location: loginhtml");
} else {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <link rel="stylesheet" href="css/style.css">

    </head>

    <body>

        <header class="header">

            <div id="menu-btn" class="fas fa-bars"></div>

            <a href="F:\rent a car\login.html" class="logo"> <span>Rent a car</span>online </a>

            <nav class="navbar">
                <a href="#home">home</a>
                <a href="#vehicles">vehicles</a>
                <a href="#services">services</a>
                <a href="#featured">featured</a>
                <a href="#reviews">reviews</a>
                <a href="#contact">contact</a>
            </nav>

            <div id="login-btn">
                <button class="btn"><a href="logoutUser.php"><?php
                                                                echo $_SESSION['userName'];
                                                                echo " logout?";
                                                                ?></a></button>

                <i class="far fa-user"></i>
            </div>

        </header>

        <div class="login-form-container">

            <span id="close-login-form" class="fas fa-times"></span>

            <form action="">
                <h3>user login</h3>
                <input type="email" placeholder="email" class="box">
                <input type="password" placeholder="password" class="box">
                <p> forget your password <a href="#">click here</a> </p>
                <input type="submit" value="login" class="btn">
                <p>or login with</p>
                <div class="buttons">
                    <a href="#" class="btn"> google </a>
                    <a href="#" class="btn"> facebook </a>
                </div>
                <p> don't have an account <a href="#">create one</a> </p>
            </form>

        </div>

        <section class="home" id="home">

            <h3 data-speed="-2" class="home-parallax">PICK A CAR</h3>

            <img data-speed="5" class="home-parallax" src="image/home-img.png" alt="">

            <a data-speed="7" href="#" class="btn home-parallax">explore cars</a>

        </section>

        <form action="userHome.php">
            <input placeholder="search here" type="text" name="name">
            <input type="submit" value="search">
        </form> 

        <?php
        if(isset($_GET['name'])){
            $name = $_GET['name'];
            $conn = mysqli_connect("localhost", "root", "", "rent_a_car") or die(mysqli_connect_error());
            $avaibleCars = mysqli_query($conn,"
            SELECT * FROM `cars_table` WHERE isBooked is false AND name like '%$name%'
            ");
            foreach($avaibleCars as $car){
                foreach($car as $key => $value){
                    $$key = $value;
                }
                
                
                echo "
                <h1>$name</h1>
                <img src=\"Uploads/$fileName\" width = 300 height=300>
                <p>$number<p>
                <p>$rate<p>
                <p>$insurence<p>
                <p>$car_condition<p>
                <p>$color<p>
                <p>$model_year<p>
                <a href=\"confirmBooking.php?carId=$id\">Book</a>
                ";
            }
        }
            ?>
    



        <section class="vehicles" id="vehicles">

            <h1 class="heading"> available <span>vehicles</span> </h1>


            <?php
            $conn = mysqli_connect("localhost", "root", "", "rent_a_car") or die(mysqli_connect_error());
            $avaibleCars = mysqli_query($conn,"
            SELECT * FROM `cars_table` WHERE isBooked is false
            ");
            foreach($avaibleCars as $car){
                foreach($car as $key => $value){
                    $$key = $value;
                }
                
                
                echo "
                <h1>$name</h1>
                <img src=\"Uploads/$fileName\" width = 300 height=300>
                <p>$number<p>
                <p>$rate<p>
                <p>$insurence<p>
                <p>$car_condition<p>
                <p>$color<p>
                <p>$model_year<p>
                <a href=\"confirmBooking.php?carId=$id\">Book</a>
                ";
            }
            ?>
            
        </section>

        <section class="services" id="services">

            <h1 class="heading"> our <span>services</span> </h1>

            <div class="box-container">




                <div class="box">
                    <i class="fas fa-car-crash"></i>
                    <h3>car insurance</h3>
                    <p>Terms and conitions are applied for any accident cases.</p>
                    <a href="#" class="btn"> read more</a>
                </div>

                <div class="box">
                    <i class="fas fa-car-battery"></i>
                    <h3>Break down report</h3>
                    <p>Report the problems when traveling</p>
                    <a href="#" class="btn"> read more</a>
                </div>


            </div>

        </section>

        <section class="featured" id="featured">

            <h1 class="heading"> <span>featured</span> cars </h1>

            <div class="swiper featured-slider">

                <div class="swiper-wrapper">

                    <div class="swiper-slide box">
                        <img src="image/car-1.png" alt="">
                        <div class="content">
                            <h3>new Swift</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="price">5000/-</div>
                            <a href="#" class="btn">check out</a>
                        </div>
                    </div>

                    <div class="swiper-slide box">
                        <img src="image/car-2.png" alt="">
                        <div class="content">
                            <h3>new KIA SELTOS</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="price">6000/-</div>
                            <a href="#" class="btn">check out</a>
                        </div>
                    </div>

                    <div class="swiper-slide box">
                        <img src="image/car-3.png" alt="">
                        <div class="content">
                            <h3>KIA SONET</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="price">5500/-</div>
                            <a href="#" class="btn">check out</a>
                        </div>
                    </div>

                    <div class="swiper-slide box">
                        <img src="image/car-4.png" alt="">
                        <div class="content">
                            <h3>new model</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="price">55,000/-</div>
                            <a href="#" class="btn">check out</a>
                        </div>
                    </div>

                </div>

                <div class="swiper-pagination"></div>

            </div>

            <div class="swiper featured-slider">

                <div class="swiper-wrapper">

                    <div class="swiper-slide box">
                        <img src="image/car-5.png" alt="">
                        <div class="content">
                            <h3>new model</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="price">55,000/-</div>
                            <a href="#" class="btn">check out</a>
                        </div>
                    </div>

                    <div class="swiper-slide box">
                        <img src="image/car-6.png" alt="">
                        <div class="content">
                            <h3>new model</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="price">55,000/-</div>
                            <a href="#" class="btn">check out</a>
                        </div>
                    </div>

                    <div class="swiper-slide box">
                        <img src="image/car-7.png" alt="">
                        <div class="content">
                            <h3>new model</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="price">55,000/-</div>
                            <a href="#" class="btn">check out</a>
                        </div>
                    </div>

                    <div class="swiper-slide box">
                        <img src="image/car-8.png" alt="">
                        <div class="content">
                            <h3>new model</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="price">55,000/-</div>
                            <a href="#" class="btn">check out</a>
                        </div>
                    </div>

                </div>

                <div class="swiper-pagination"></div>

            </div>

        </section>

        <section class="newsletter">

            <h3>subscribe for latest updates</h3>

            <form action="">
                <input type="email" placeholder="enter your email">
                <input type="submit" value="subscribe">
            </form>

        </section>

        <section class="reviews" id="reviews">


            <div class="swiper review-slider">

                <div class="swiper-wrapper">

                    <div class="swiper-slide box">
                        <div class="content">

                        </div>
                    </div>

                    <div class="swiper-slide box">
                        <div class="content">

                        </div>
                    </div>

                    <div class="swiper-slide box">
                        <div class="content">
                        </div>
                    </div>

                    <div class="swiper-slide box">
                        <div class="content">
                        </div>
                    </div>

                    <div class="swiper-slide box">
                        <div class="content">

                        </div>
                    </div>

                    <div class="swiper-slide box">
                        <div class="content">


                        </div>
                    </div>

                </div>

                <div class="swiper-pagination"></div>

            </div>

        </section>

        <section class="contact" id="contact">

            <h1 class="heading"><span>contact</span> us</h1>

            <div class="row">


                <form action="">
                    <h3>get in touch</h3>
                    <input type="text" placeholder="your name" class="box">
                    <input type="email" placeholder="your email" class="box">
                    <input type="tel" placeholder="subject" class="box">
                    <textarea placeholder="your message" class="box" cols="30" rows="10"></textarea>
                    <input type="submit" value="send message" class="btn">
                </form>

            </div>

        </section>

        <section class="footer" id="footer">

            <div class="box-container">

                <div class="box">
                    <h3>our branches</h3>
                    <a href="#"> <i class="fas fa-map-marker-alt"></i> idukki </a>
                    <a href="#"> <i class="fas fa-map-marker-alt"></i> kottayam </a>
                    <a href="#"> <i class="fas fa-map-marker-alt"></i> kollam </a>
                    <a href="#"> <i class="fas fa-map-marker-alt"></i> kochi </a>
                    <a href="#"> <i class="fas fa-map-marker-alt"></i> thiruvadapuram </a>
                </div>

                <div class="box">
                    <h3>quick links</h3>
                    <a href="#"> <i class="fas fa-arrow-right"></i> home </a>
                    <a href="#"> <i class="fas fa-arrow-right"></i> vehicles </a>
                    <a href="#"> <i class="fas fa-arrow-right"></i> services </a>
                    <a href="#"> <i class="fas fa-arrow-right"></i> featured </a>
                    <a href="#"> <i class="fas fa-arrow-right"></i> reviews </a>
                    <a href="#"> <i class="fas fa-arrow-right"></i> contact </a>
                </div>

                <div class="box">
                    <h3>contact info</h3>
                    <a href="#"> <i class="fas fa-phone"></i> +917025532153 </a>
                    <a href="#"> <i class="fas fa-phone"></i> +91 903754685 </a>
                    <a href="#"> <i class="fas fa-envelope"></i> rentacar@gmail.com </a>
                    <a href="#"> <i class="fas fa-map-marker-alt"></i> kerala, india - 685508 </a>
                </div>

                <div class="box">
                    <h3>contact info</h3>
                    <a href="https://www.facebook.com/carrentalkochi"> <i class="fab fa-facebook-f"></i> facebook </a>
                    <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                    <a href="#"> <i class="fab fa-instagram"></i> instagram </a>

                </div>

            </div>

            <div class="credit"> created by Abin Thomas & Amal Sathesh | all rights reserved </div>

        </section>










        <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

        <script src="js/script.js"></script>

    </body>

    </html>
<?php }
