<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>


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

<!-- Home Sections starts here -->


<section class="home">

<div class="swiper home-slider">
        <div class="w">
            <!-- Slides -->
            <div class="slide" style="background:url(images/home-slide-1.jpg) no-repeat">
                <div class="content">
                    <span>Explore, Discover, Travel</span>
                    <h3>Not Just Travel World but universe</h3>
                    <a href="Package.php" class="btn">Discover More</a>
                </div>
            </div>
            <div class="slide" style="background:url(images/home-slide-2.jpg) no-repeat">
                <div class="content">
                    <span>Explore, Discover, Travel</span>
                    <h3>Discover new places</h3>
                    <a href="Package.php" class="btn">Discover More</a>
                </div>
            </div>
            <div class="slide" style="background:url(images/home-slide-3.jpg) no-repeat">
                <div class="content">
                    <span>Explore, Discover, Travel</span>
                    <h3>Make your tour worthwhile</h3>
                    <a href="Package.php" class="btn">Discover More</a>
                </div>
            </div>
            <!-- Add more slides as needed -->
        </div>
    
    </div>

</section>




<!-- Home Sections ends here  -->

<!-- services sections starts here -->

        <section class="services">
        <h1 class="heading-title">About our services</h1>
        <div class="box-container">

        <div class="box">
           <img src="images/icon-1.png" alt="">
           <h3>adventure</h3>
        </div>

        <div class="box">
           <img src="images/icon-2.png" alt="">
           <h3>Tour guide</h3>
        </div>

        <div class="box">
           <img src="images/icon-3.png" alt="">
           <h3>Trekking</h3>
        </div>    

        <div class="box">
           <img src="images/icon-4.png" alt="">
           <h3>Campfire</h3>
        </div>  

        <div class="box">
           <img src="images/icon-5.png" alt="">
           <h3>Offroad</h3>
        </div>    

        <div class="box">
           <img src="images/icon-6.png" alt="">
           <h3>Camping</h3>
        </div>        
                


        </div>

        </section>

<!-- services sections starts here -->

<!-- Home about Section starts here -->

        <section class="home-about">

            <div class="image">
                <img src="images/about-img2.jpg" alt="">
            </div>

            <div class="content">
                <h3>About us </h3>
                    <p>Welcome to Nomad Travels, your passport to adventure! We are a passionate team of travel enthusiasts who believe that life is meant to be experienced to the fullest. Our mission is to ignite your wanderlust and curate unforgettable journeys that immerse you in the heart and soul of every destination.Embark on a voyage beyond the stars with Space Travels, your gateway to the cosmos. Our team of pioneers is dedicated to making space exploration accessible to all. We're not just about booking flights; we're about taking humanity to new frontiers</p>
                    <a href="about.php" class="btn">Read more</a>
            </div>

        </section>


<!-- Home about Section ends here -->

<!-- home package starts here -->

    <section class="home-packages">
        <h1 class="heading-title">Our Packages</h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="images/img-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Nomad Travels: Mountain Trekking</h3>
                    <p>At Nomad Travels, we believe that life's greatest adventures are waiting just beyond your comfort zone. If you're seeking thrilling experiences, breathtaking landscapes, and unforgettable journeys, you've come to the right place.</p>
                    <a href="Book.php" class="btn">Book now</a>
                </div>
            </div>


            <div class="box">
                <div class="image">
                    <img src="images/img-2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Nomad Travels: Paragliding and Paradiving</h3>
                    <p>Experience the thrill of a lifetime with Nomad Travels' Paragliding and Paradiving adventures. Soar through the skies like a bird as you paraglide over picturesque landscapes, feeling the rush of the wind in your hair and the world at your feet.</p>
                    <a href="Book.php" class="btn">Book now</a>
                </div>
            </div>

            
            <div class="box">
                <div class="image">
                    <img src="images/img-3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Nomad Travels: Ocean Deep Diving</h3>
                    <p>Take the plunge into the unknown with Nomad Travels' Ocean Deep Diving experiences. Dive into the depths of the ocean and uncover the mysteries of the underwater world, where vibrant coral reefs, mesmerizing marine life, and untouched shipwrecks await your exploration.</p>
                    <a href="Book.php" class="btn">Book now</a>
                </div>
            </div>

        </div>

        <div class="load-more">
        <a href="Package.php" class="btn">Load More</a>
        </div>


    </section>





<!-- home package ends here -->

<!-- home offer starts here -->

<section class="home-offer">
    <div class="content">
        <h3>Nomad Travels: Up to 50% Off Adventure Deals!</h3>
        <p>Embark on your dream adventure without breaking the bank! Nomad Travels is thrilled to offer you an exclusive opportunity to save big on your next journey. With discounts of up to    50% off on select adventure packages, your bucket-list destinations are now more affordable than ever.
           Whether you're seeking adrenaline-pumping adventures, cultural immersion, or serene escapes, we have a range of discounted packages tailored to your preferences. Don't miss out on this limited-time offer to explore the world, create lasting memories, and make your travel dreams a reality.</p>
           <a href="Book.php" class="btn">Book now</a>
    </div>
</section>



<!-- home offer ends here -->








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