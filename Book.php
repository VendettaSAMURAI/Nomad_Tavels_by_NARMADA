<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>


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

<div class="heading" style="background:url(Images/header-bg-3.jpg) no-repeat">
    <h1>Book now</h1>
</div>


<section class="booking-section">
  <h2>Book Your Adventure</h2>
  <form id="booking-form">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
    </div>

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
    </div>

    <div class="form-group">
      <label for="phone">Phone:</label>
      <input type="tel" id="phone" name="phone" required>
    </div>

    <div class="form-group">
      <label for="tour">Select a Tour:</label>
      <select id="tour" name="tour" required>
        <option value="tour1">Tour 1</option>
        <option value="tour2">Tour 2</option>
        <option value="tour3">Tour 3</option>
      </select>
    </div>

    <div class="form-group">
      <label for="date">Select a Date:</label>
      <input type="date" id="date" name="date" required>
    </div>

    <div class="form-group">
      <label for="message">Additional Message:</label>
      <textarea id="message" name="message" rows="4"></textarea>
    </div>

    <div class="form-group">
      <button type="submit">Book Now</button>
    </div>
  </form>
</section>











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