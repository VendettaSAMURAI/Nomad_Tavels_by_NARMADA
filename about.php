<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>


    <!-- swiper css link is here -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>

    <!-- Font code link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom css File link -->
    <link rel="stylesheet" href="CSS Styles/styles.css">

</head>
<body>
    
<!-- header starts from here  -->

<Section class="Header">
    <a href="home.php" class="logo">Nomad Travels </a>


    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="package.php">package</a>
        <a href="Book.php">Book</a>
    </nav>

<div id="menu-btn" class="fas fa-bars"></div>
<script>
        // Get a reference to the menu button element
        const menuBtn = document.getElementById('menu-btn');

        // Add a click event listener to toggle the 'fa-times' class and rotate the icon
        menuBtn.addEventListener('click', function() {
            menuBtn.classList.toggle('fa-times');
        });
    </script>



</Section>

<!-- header section ends here -->

<div class="heading" style="background:url(Images/header-bg-1.jpg) no-repeat">
    <h1>About us</h1>
</div>

<!-- about section starts here -->

        <section class="about">
            <div class="image">
                <img src="images/NARMADA.png" alt="">
            </div>

            <div class="content">
                <h3>Why us</h3>
                <p>Why choose Nomad Travels? Because we're more than just a travel company; we're your passport to extraordinary experiences. With our expert team, tailor-made adventures, unwavering commitment to safety and sustainability, and a passion for travel that knows no bounds, we're here to turn your travel dreams into reality. Join us, and let your adventure begin."</p>
                <div class="icons-container">
                     <div class="icons">
                        <i class="fas fa-map"></i>
                        <span>Top destinations</span>
                    </div> 
                     <div class="icons">
                        <i class="fas fa-hand-holding-usd"></i>
                        <span>affordable price</span>
                    </div> 
                    <div class="icons">
                        <i class="fas fa-headset"></i>
                        <span>24/7 Our guide service</span>
                    </div> 
                </div>
            </div>


        </section>




<!-- about section ends  here -->

<!-- reviews section starts here -->

<section class="reviews">

        <div class="swiper-container reviews-slider">
            
            <div class="swiper-wrapper">


                <div class="swiper-slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>I recently embarked on an exciting adventure with Nomad Travels, and I must say it was an unforgettable experience! From the moment I booked my trip to the day I returned home, the Nomad Travels team exceeded my expectations in several ways.The itinerary they crafted was diverse and allowed me to explore a variety of landscapes and cultures. Whether I was hiking through lush rainforests, sipping coffee in a bustling market, or gazing at the stars from a remote desert camp, each day brought something new and exhilarating.</p>
                    <h3>John deo</h3>
                    <span>Traveler</span>
                    <img src="images/pic-1.jpg" alt="">
                </div>


                <div class="swiper-slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>I recently had the opportunity to embark on a journey with Nomad Travels, and it was truly a unique and enriching experience! As a celebrity, I often find it challenging to have authentic travel experiences without drawing attention, but Nomad Travels provided me with the perfect blend of privacy and adventure.
                    One of the aspects that stood out most during my trip was the exceptional level of privacy and discretion they offered. They understood and respected my need for anonymity, allowing me to explore each destination without the constant interruptions of paparazzi and fans. It was a breath of fresh air to be able to immerse myself in the local culture without feeling like I was constantly in the public eye.</p>
                    <h3>Salena gomez</h3>
                    <span>Traveler</span>
                    <img src="images/pic-2.jpg" alt="">
                </div>

                <div class="swiper-slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>I recently embarked on an exciting adventure with Nomad Travels, and I must say it was an unforgettable experience! From the moment I booked my trip to the day I returned home, the Nomad Travels team exceeded my expectations in several ways.The itinerary they crafted was diverse and allowed me to explore a variety of landscapes and cultures. Whether I was hiking through lush rainforests, sipping coffee in a bustling market, or gazing at the stars from a remote desert camp, each day brought something new and exhilarating.</p>
                    <h3>Richard Nixon</h3>
                    <span>Traveler</span>
                    <img src="images/pic-3.jpg" alt="">
                </div>



            </div>
            <div class="swiper-pagination"></div>
        </div>


</section>



<!-- reviews section ends here -->











<!-- footer section starts from here -->

        <section class="footer">


        <div class="box-container">

            <div class="box">
            <h3>Quick access Links</h3>
            <a href="home.php"> <i class="fas fa-angle-right"></i>home</a>
            <a href="about.php"> <i class="fas fa-angle-right"></i>about</a>
            <a href="package.php"> <i class="fas fa-angle-right"></i>package</a>
            <a href="Book.php"> <i class="fas fa-angle-right"></i>Book</a>
            </div>

            <div class="box">
            <h3>Extra access Links</h3>
            <a href="#"> <i class="fas fa-angle-right"></i>Queries</a>
            <a href="#"> <i class="fas fa-angle-right"></i>About us</a>
            <a href="#"> <i class="fas fa-angle-right"></i>Data and protection,privacy policy</a>
            <a href="#"> <i class="fas fa-angle-right"></i>Terms and Conditions of our company</a>
            </div>

            <div class="box">
            <h3>Contact Information</h3>
            <a href="#"> <i class="fas fa-phone"></i>+09211-23233</a>
            <a href="#"> <i class="fas fa-phone"></i>+09211-23433</a>
            <a href="#"> <i class="fas fa-envelope"></i>NarmadaCorporate@gmail.com</a>
            <a href="#"> <i class="fas fa-map"></i>Zurich, Switzerland 190009</a>
            </div>

            <div class="box">
                <h3>Follow us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
                <a href="#"><i class="fab fa-twitter"></i>Twitter</a>
                <a href="#"><i class="fab fa-instagram"></i>Instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i>Linkedin</a>
            </div>

        </div>


        <div class="credit">Created by <span>Aviral Birthare</span>| All rights reserved by NarmadaTechnology&logistics</div>

        </section>

<!-- footer section end here -->







<!-- Custom swiper script is here -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<!-- Custom javascript file is here -->
<script src="Java Script/Script.js"></script>
</body>
</html>