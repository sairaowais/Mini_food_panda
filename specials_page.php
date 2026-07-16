<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Speacials</title>

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

<style>

body {
    background: #f6f6f6;
    font-family: Arial, sans-serif;
}

/* Reset */
body, html {
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
}


/* ================= SECOND NAVBAR ================= */
nav.second-navbar {
  overflow: visible; /* important */
}


.container-fluid1
{
 background: #f3f2f2;
  position:fixed;
  width:100%;
  top: 0;
  z-index: 2000;
  padding: 6px 0;


}


/* NAV ITEMS */
.second-navbar .navbar-nav {
  gap: 60px; /* desktop spacing */
}

/* LINKS */
.second-navbar .nav-link {
  color: #000 !important;
  font-weight: 600;
  padding: 8px 0;
  transition: 0.3s;
}

.second-navbar .nav-link:hover,
.second-navbar .nav-link.active {
  color: #fc0786 !important;
}

/* DROPDOWN */
.dropdown-menu {
  border-radius: 6px;
}

.dropdown-item {
  font-weight: 500;
}

/* ================= MOBILE FIX ================= */
@media (max-width: 768px) {

  .second-navbar {
    padding: 8px 0;
  }

  .second-navbar .navbar-nav {
    gap: 12px; /* reduce height */
  }

  .second-navbar .nav-item {
    padding: 4px 0;
  }

  .second-navbar .navbar-collapse {
    background: #f8f9fa;
  }

  .dropdown-menu {
    position:relative;
    float: none;
    width: 100%;
     background-color: #e4e1e2;
  }

  .dropdown-item {
    text-align: center;
  }
}

/* Dropdown Menu Items */
.dropdown-menu li {
  padding: 10px;
  cursor: pointer;
  background-color: #fdfeff;
}



/* Navbar */
.navbar {
    position: relative;
    background: #ff4f9a;
    padding-top: 0px;
    padding-bottom: 0px;
}

/* Logo fix */
.navbar-brand {
    display: flex;
    align-items: center; /* vertically center logo */
}

.navbar-brand img {
    height: 130px;        /* DESKTOP size */
    width: auto;

    max-height: none;
     z-index: 2000;
}

.name {
  color: #fbfafa; /* thoda dark red */
  margin-top: 45px; /* thoda neechay shift */
  margin-left: 50px; /* center align, optional */
  font-weight: bold; /* thoda bold */
  
}


/* Search */
.search-input {
    width: 200px;
}

.search-btn {
    background-color: #862e5a;
    color: white;
    border: none;
}

.search-btn:hover {
    background-color: #e60073;
}

/* Tablet */
@media (max-width: 768px) {
    .navbar-brand img {
        height: 70px;
    }
}

/* Mobile */
@media (max-width: 576px) {
    .navbar-brand img {
        height: 75px;
    }

    .search-input {
        width: 100%;
        margin-bottom: 0px;
    }
}
/* nav div end */

/* Board wrapper */
.pin-board {
    position: relative;
}

/* Red pin */
.pin {
    position: absolute;
    top: -9px;
    left: 50%;
    width: 14px;
    height: 14px;
    background: crimson;
    border-radius: 50%;
    transform: translateX(-50%);
    z-index: 10;
    box-shadow: 0 2px 5px rgba(0,0,0,0.3);
}

/* Swinging paper */
.swing-card {
    background:#fff;
    padding: 18px;
    border-radius: 6px;
    box-shadow: 0 30px 40px rgba(0,0,0,0.18);
    transform-origin: top center;
    will-change: transform;
}


.swing-card img {
    width: 360px;
    max-width: 100%;
    display: block;
    border-radius: 4px;
}

/* Mobile */
@media (max-width: 768px) {
    .swing-card img {
        width: 100%;
    }
}

.location_btn{
padding: 12px 25px;
    border: none;
    background: #ff4d94;
    color: white;
    font-size: 16px;
    border-radius: 25px;
    cursor: pointer;
}

.location_btn:hover {
    background: #e60073;
}

/*********banner div start ************/

.banner-wrapper {
    padding: 0 15px; /* mobile sides space */
}

.banner {
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: #ffd6e7; /* light pink */
    padding: 20px;
    border-radius: 20px;
    max-width: 1000px;
    margin: 20px auto;
}

.banner img {
    width: 200px;
    max-width: 100%;
}

.banner-content {
    padding-left: 20px;
}

.banner-content h1 {
    margin: 0;
    color: #b30059;
    font-size: 32px;
}

.banner-content p {
    font-size: 18px;
    color: #333;
    margin: 10px 0;
}

.banner-content button {
    padding: 12px 25px;
    border: none;
    background: #ff4d94;
    color: white;
    font-size: 16px;
    border-radius: 25px;
    cursor: pointer;
}

.banner-content button:hover {
    background: #e60073;
}

/* Responsive */
@media (max-width: 768px) {
    .banner {
        flex-direction: column;
        text-align: center;
    }

    .banner-content {
        padding-left: 0;
        margin-top: 15px;
    }

    .banner-content h1 {
        font-size: 26px;
    }
}

/*********banner div end ************/




/*  start  footer div***********/  
.food-footer {
    position: relative;
    background: #ff4f9a; /* Pink theme */
}

.food-footer h5 {
    font-weight: bold;
    margin-bottom: 15px;
}

.food-footer a {
    color: white;
    text-decoration: none;
}

.food-footer a:hover {
    text-decoration: underline;
}

/* Social Icons */
.social-icons a {
    display: inline-block;
    width: 40px;
    height: 40px;
    background: white;
    color: #ff4f9a;
    border-radius: 50%;
    line-height: 40px;
    margin: 5px;
    transition: 0.3s;
    font-size: 18px;
}

.social-icons a:hover {
    background: #ff1f7a;
    color: white;
}

/* Mobile Center Alignment */
@media (max-width: 576px) {
    .food-footer {
        text-align: center;
    }
}
/* end footer div***********/  
/*////////left side pic///////////*/




/*////////end left side pic///////////*/
</style>



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

<!--- first div start -->
 
<div class="container">
  <div class="row align-items-center min-vh-100">

    <!-- ✅ TEXT COLUMN (NO ANIMATION) -->
    <div class="col-md-6">
      <h1 class="fw-bold">Freebie weekly</h1>
      <p> <b>
        weekly Speacials</b></p> 
          <p>
        curious? freebie friday changes weekly-check
         with your server for the surprise. Daily Dough deals
         keep the weekend fun and testy,
      </p>
      <button class="location_btn">LOCATION</button>
    </div>

    <!-- ✅ IMAGE COLUMN (ANIMATION ONLY HERE) -->
    <div class="col-md-6 d-flex justify-content-center">
      <div class="pin-board">
        <span class="pin"></span>
        <div class="swing-card">
          <img src="Chicken_Malai_Boti.webp" alt="">
        </div>
      </div>
    </div>

  </div>
</div>

<!--- end first div-->

<!--- second div start -->
<div class="container">
  <div class="row align-items-center min-vh-100">

    <!-- IMAGE LEFT -->
    <div class="col-md-6 order-md-1 order-1 d-flex justify-content-center">
      <div class="pin-board">
        <span class="pin"></span>
        <div class="swing-card">
          <img src="Pasta_Rolls.png" alt="">
        </div>
      </div>
    </div>

    <!-- TEXT RIGHT -->
  
    <div class="col-md-6 order-md-2 order-2">
      <h1 class="fw-bold">Spicy Feast Weekend</h1>
<p><b>Cheesy Meat Pasta Rolls</b><br>
Tender pasta rolls stuffed with savory meat sauce and topped with melted cheese – a heavenly bite every time! 🍝🧀</p>

      <button class="location_btn">LOCATION</button>
    </div>

  </div>
</div>

<!--- end second div -->

<!--- third div start -->

<div class="container">
  <div class="row align-items-center min-vh-100">

    <!-- ✅ TEXT COLUMN (NO ANIMATION) -->
    <div class="col-md-6">
      <h1 class="fw-bold">Delight weekend</h1>
    <p><b>Crunchy Chicken Delight</b><br>
Golden, crispy fried chicken drumsticks topped with spicy sauce and fresh herbs – a flavor explosion in every bite! 🍗🔥</p>


      <button class="location_btn">LOCATION</button>
    </div>

    <!-- ✅ IMAGE COLUMN (ANIMATION ONLY HERE) -->
    <div class="col-md-6 d-flex justify-content-center">
      <div class="pin-board">
        <span class="pin"></span>
        <div class="swing-card">
          <img src="Rtmf_Drummets.webp" alt="">
        </div>
      </div>
    </div>

  </div>
</div>

<!--- end third div -->



<div class="banner-wrapper">
    <div class="banner">
        <!-- Delivery Boy Image -->
        <img src="riding_girl.png" alt="Delivery Boy">

        <!-- Text Content -->
        <div class="banner-content">
            <h1>Flat 30% OFF 🎉</h1>
            <p>Hungry already? 😋  
            Enjoy fresh food and lightning-fast delivery with exciting discounts!</p>
            <button>Order Now</button>
        </div>
    </div>
</div>




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

<script> 

const cards = document.querySelectorAll(".swing-card");

let angle = 0;

function swing() {
    angle += 0.02;

    cards.forEach((card, index) => {
        const rotate = Math.sin(angle + index) * 6;
        const drop   = Math.cos(angle + index) * 4;

        card.style.transform = `
            translateY(${drop}px)
            rotateZ(${rotate}deg)
        `;
    });

    requestAnimationFrame(swing);
}

swing();


</script>

</body>
</html>
