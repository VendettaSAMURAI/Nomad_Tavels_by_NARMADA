<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Packages</title>


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

<div class="heading" style="background:url(Images/header-bg-2.jpg) no-repeat">
    <h1>Packages</h1>
</div>

<section class="packages">
  <div class="package">
    <img src="images/package-1.jpg" alt="Package 1">
    <h3>Adventure in Chicago</h3>
    <p>Experience the vibrant city of Chicago with our guided tour. Discover iconic landmarks, savor local cuisine, and immerse yourself in the city's rich culture.</p>
    <span>$1,499</span>
    <a href="#" class="btn">Book Now</a>
  </div>

  <div class="package">
    <img src="images/package-2.jpg" alt="Package 2">
    <h3>Adventure in New York</h3>
    <p>Experience the iconic city of New York with our guided tour. Explore famous landmarks, taste diverse cuisine, and soak in the vibrant energy of the Big Apple.</p>
    <span>$1,199</span>
    <a href="#" class="btn">Book Now</a>
  </div>

  <div class="package">
    <img src="images/package-3.jpg" alt="Package 3">
    <h3>Adventure in Tokyo</h3>
    <p>Discover the vibrant city of Tokyo with our guided tour. Immerse yourself in Japanese culture, visit historic temples, and savor delicious sushi.</p>
    <span>$1,799</span>
    <a href="#" class="btn">Book Now</a>
  </div>
</section>

<section class="upcoming-space-tours">
  <div class="tour">
    <img src="images/tour-1.jpg" alt="Space Tour 1">
    <h3>Upcoming Space Tour 1</h3>
    <p>Embark on a journey to the cosmos with our upcoming space tour. Witness breathtaking views of planets and stars.</p>
    <a href="tour-details.html" class="btn">Learn More</a>
  </div>

  <div class="tour">
    <img src="images/tour-2.jpg" alt="Space Tour 2">
    <h3>Upcoming Space Tour 2</h3>
    <p>Experience zero-gravity in our exclusive space tour. Float among the stars and see Earth from a whole new perspective.</p>
    <a href="tour-details.html" class="btn">Learn More</a>
  </div>

 









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