<?php

include('db.php');

if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string(
        $conn,
        $_POST['name']
    );

    $email = mysqli_real_escape_string(
        $conn,
        $_POST['email']
    );

    $subject = mysqli_real_escape_string(
        $conn,
        $_POST['subject']
    );

    $message = mysqli_real_escape_string(
        $conn,
        $_POST['message']
    );


    $sql = "INSERT INTO contact_messages
    (name,email,subject,message)

    VALUES

    ('$name','$email','$subject','$message')";


    if(mysqli_query($conn,$sql)){

        echo "<script>

            alert('Message Sent Successfully');

            window.location.href='contact.php';

        </script>";

    }else{

        echo "Database Error";

    }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="contact.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
 
</head>
<body>

<!-- Navbar -->


  <!-- ================= SECOND NAVBAR ================= -->
<nav class="second-navbar navbar navbar-expand-lg">

  <div class="container-fluid1">

    <!-- MOBILE TOGGLE -->
    <button class="navbar-toggler ms-auto" type="button"
      data-bs-toggle="collapse" data-bs-target="#secondNav">
      ☰
    </button>

    <!-- NAV LINKS -->
    <div class="collapse navbar-collapse justify-content-center" id="secondNav">
      <ul class="navbar-nav text-center">
        
       
<li class="nav-item">
  <a class="nav-link" href="landing_page.php">Home</a>
</li>


        <!-- DROPDOWN -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="test.php" id="menuDropdown"
            role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menu
          </a>
           <ul class="dropdown-menu text-center">
            <li><a class="dropdown-item" href="menu_page.php">Fast Food</a></li>
            <li><a class="dropdown-item" href="menu_page.php">Desi Food</a></li> 
            <li><a class="dropdown-item" href="menu_page.php">Chinese</a></li>
            <li><a class="dropdown-item" href="menu_page.php">Beverages</a></li>
            <li><a class="dropdown-item" href="menu_page.php">Desserts</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="specials_page.php">Specials</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="restaurants.php">Restaurants</a>
    </li>

     <li class="nav-item">
     <a class="nav-link" href="contact.php">Contact</a>
    </li>

      </ul>
    </div>

  </div>
</nav>

<!-- Navbar -->

<nav class="navbar navbar-expand-sm">
    <div class="container-fluid">

        <!-- Left Side Image -->
   <a class="navbar-brand" href="#">
    <img src="logo.webp" alt="Logo"><h1 class="name">Mini Foodpanda</h1>
</a>



        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Right Side Search -->
        <div class="collapse navbar-collapse justify-content-end mt-5" id="navbarContent">
            <form class="d-flex flex-sm-row flex-column">
                <input class="form-control search-input me-sm-2" type="search" placeholder="Search">
                <button class="btn search-btn" type="submit">Search</button>
            </form>
        </div>

    </div>
</nav>
  
<!--- nav div end -->

    
<section class="contact-page">
  <div class="container">

    <!-- HEADER -->
    <h1>Contact Us</h1>
    <p class="intro">We'd love to hear from you. Send us a message and we’ll get back to you soon.</p>

    <div class="row">

      <!-- CONTACT FORM -->
      <div class="col-md-6">
        <form class="contact-form" method="POST">
          <input type="text" name="name" placeholder="Your Name" required>
          <input type="email" name="email" placeholder="Your Email" required>
          <input type="text" name="subject" placeholder="Subject">
          <textarea name="message" rows="6" placeholder="Your Message" required></textarea>
  <button type="submit" name="submit">
    Send Message
</button>
        </form>
      </div>

      <!-- CONTACT DETAILS -->
      <div class="col-md-6 contact-details">
        <h3>Contact Details</h3>
        <p>📍 123 Main Street, City, Country</p>
        <p>📧 123@SS.com.com</p>
        <p>📞 +11111111110</p>

        <!-- SOCIAL LINKS -->
        <div class="social-links">
          <a href="#" target="_blank">🌐</a>
          <a href="#" target="_blank">📘</a>
          <a href="#" target="_blank">📸</a>
        </div>

        <!-- GOOGLE MAP -->
        <div class="map mt-4">
          <iframe src="https://maps.google.com/maps?q=New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed" allowfullscreen></iframe>
        </div>
      </div>

    </div>
  </div>
</section>



<!-- Footer Start -->
<footer class="food-footer text-white pt-4">
    <div class="container">
        <div class="row text-center text-md-start">

            <!-- About -->
            <div class="col-md-4 mb-3">
                <h5>Online Food Order</h5>
                <p>Fresh & delicious food delivered at your doorstep.</p>
            </div>

            <!-- Links -->
            <div class="col-md-4 mb-3">
                <h5>Quick Links</h5>
                 <ul class="list-unstyled">
                    <li><a href="landing_page.php">Home</a></li>
                    <li><a href="menu_page.php">Menu</a></li>
                    <li><a href="specials_page.php">Specials</a></li>
                    <li><a href="restaurants.php">Restaurants</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>

            <!-- Social Icons -->
            <div class="col-md-4 mb-3 text-center">
                <h5>Follow Us</h5>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>

        </div>

        <hr class="border-light">

        <div class="text-center pb-2">
            <p class="mb-0">© 2025 Online Food Order. All Rights Reserved.</p>
        </div>
    </div>
</footer>
<!-- Footer End -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>



</body>
</html>

