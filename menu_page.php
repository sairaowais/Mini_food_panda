<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Food_menu</title>

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="menu.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
 

<style>
        body {
  margin:0px;
  padding:0px;
}
.modal {
  display:none;
  position: fixed;
  z-index: 1000;
  left: 0; top: 0;
 height: 500px;
  width: 100%; height: 100%;
  background: rgba(0,0,0,0.5);
}
.modal-content {
  background: #fff;
  width: 400px;
  max-height:80vh;  /* screen ke andar rahe */
  overflow-y: auto;   /* andar scroll hoga */
  margin: 5% auto;
  padding: 20px;
  border-radius: 12px;
  position: relative;
}
/************************* */
.small-overlay{
  display:none;
  margin-top:20px;
}

.blur{
  filter: blur(5px);
  pointer-events:none;
}

/********************** */
.close {
  position: absolute;
  right: 15px;
  top: 10px;
  cursor: pointer;
  font-size: 22px;
  font-weight: bold;
  background: #f1f1f1;
  width: 35px;
  height: 35px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: 0.3s;
}

.close:hover {
  background:  #ff2b85;
  color: white;
  transform: rotate(90deg);
}
.item-img {
  width: 100%;
  border-radius: 10px;
}

.price {
  font-weight: bold;
  margin: 10px 0;
}

/* TEXTAREA FIX */
textarea {
  width: 100%;
  min-height: 80px;   /* important */
  padding: 10px;
  margin-top: 10px;
  border-radius: 8px;
  border: 1px solid #ff2b85;
  resize: none;       /* optional */
}

/* SELECT FIX */
select {
  width: 100%;
  height: 40px;
  padding: 8px;
  margin-top: 10px;
  border-radius: 8px;
  border: 1px solid #ff2b85;
}
#s1 option:hover{
  color: #ff2b85;
}
.qty-box {
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 15px 0;
}

.qty-box button {
  width: 35px;
  height: 35px;
  border-radius: 50%;
  border: none;
  background: #eee;
  font-size: 18px;
  cursor: pointer;
}

.qty-box span {
  margin: 0 15px;
  font-size: 18px;
}

.add-btn {
  width: 100%;
  padding: 12px;
  background: #ff4f9a;
  color: white;
  border: none;
  border-radius: 8px;
  cursor: pointer;
}


/* ================= SIDEBAR CART ================= */

.cart-sidebar{
  position: fixed;
  top: 0;
  right: -450px;
  width: 400px;
  height: 100%;
  background: white;
  box-shadow: -2px 0 10px rgba(0,0,0,0.2);
  z-index: 2000;
  transition: 0.4s;
  display: flex;
  flex-direction: column;
}

.cart-sidebar.active{
  right: 0;
}

.cart-header{
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px;
  border-bottom: 1px solid #ddd;
}

.close-cart{
  font-size: 30px;
  cursor: pointer;
}

#cartItems{
  flex: 1;
  overflow-y: auto;
  padding: 15px;
}

.cart-item{
  display: flex;
  gap: 10px;
  margin-bottom: 20px;
  border-bottom: 1px solid #eee;
  padding-bottom: 10px;
}

.cart-item img{
  width: 80px;
  height: 80px;
  object-fit: cover;
  border-radius: 10px;
}

.cart-details h5{
  margin: 0;
}

.cart-footer{
  padding: 20px;
  border-top: 1px solid #ddd;
}

.checkout-btn{
  width: 100%;
  padding: 12px;
  border: none;
  background: #ff2b85;
  color: white;
  border-radius: 10px;
  font-size: 18px;
}

</style>
</head>

<body>




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


<!-- ================= FAST FOOD ================= -->
<div class="container my-5 category-wrapper position-relative">
  <h2 class="category-title">Fast Food</h2>

  <!-- Large Cards -->
  <div class="row g-4 large-row">
    <div class="col-md-4">
      <div class="card large-card" data-target="pizza">
        <img src="chessee_pizza.webp" class="card-img-top">
        <div class="card-body">
          <h6 class="res-name">Chessee pizza</h6>
          <div class="details">
            <span>Fast Food</span>
             <span>⏱ 30–40 min</span>
          </div>
          <div class="price">From Rs.1200</div>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card large-card" data-target="burger">
        <img src="Nashville_Special.webp" class="card-img-top">
        <div class="card-body">
          <h6 class="res-name">Zinger Special</h6>
          <div class="details">
            <span>Fast Food</span>
             <span>⏱ 20–30 min</span>
          </div>
          <div class="price">From Rs.450</div>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card large-card" data-target="fries">
        <img src="Mozzarella_Sticks.jpg" class="card-img-top">
        <div class="card-body">
          <h6 class="res-name">Mozzarella Sticks</h6>
          <div class="details">
            <span>Fast Food</span>
              <span>⏱ 35–45 min</span>
          </div>
          <div class="price">From Rs.350</div>
        </div>
      </div>
    </div>
  </div>




<div class="small-overlay fast-overlay">
<div class="back-arrow">&times;</div>

<div class="row g-3 justify-content-center">

  <!-- 🔴 PIZZA (3 cards) -->
  <div class="col-6 col-md-3 small-card pizza"
       data-name="NewYorker Supreme"
       data-price="1200"
       data-img="NewYorker_Supreme.webp">
    <div class="card food-card">
      <img src="NewYorker_Supreme.webp">
      <div class="card-body text-center">NewYorker Supreme</div>
    </div>
  </div>

  <div class="col-6 col-md-3 small-card pizza"
       data-name="Chicken Mexicana Pizza"
       data-price="1300"
       data-img="Chicken_Mexicana_Pizza.webp">
    <div class="card food-card">
      <img src="Chicken_Mexicana_Pizza.webp">
      <div class="card-body text-center">Chicken Mexicana Pizza</div>
    </div>
  </div>

  <div class="col-6 col-md-3 small-card pizza"
       data-name="Vegetables Pizza"
       data-price="1100"
       data-img="Vegetables_Pizza.webp">
    <div class="card food-card">
      <img src="Vegetables_Pizza.webp">
      <div class="card-body text-center">Vegetables Pizza</div>
    </div>
  </div>

  <!-- 🔴 BURGER (3 cards) -->
  <div class="col-6 col-md-3 small-card burger"
       data-name="Club Sandwich"
       data-price="450"
       data-img="Club_Sandwich.webp">
    <div class="card food-card">
      <img src="Club_Sandwich.webp">
      <div class="card-body text-center">Club Sandwich</div>
    </div>
  </div>

  <div class="col-6 col-md-3 small-card burger"
       data-name="Zinger Burger"
       data-price="500"
       data-img="burger.webp">
    <div class="card food-card">
      <img src="burger.webp">
      <div class="card-body text-center">Zinger Burger</div>
    </div>
  </div>

  <div class="col-6 col-md-3 small-card burger"
       data-name="Beef Burger"
       data-price="650"
       data-img="bur.webp">
    <div class="card food-card">
      <img src="bur.webp">
      <div class="card-body text-center">Beef Burger</div>
    </div>
  </div>

  <!-- 🔴 FRIES (3 cards) -->
  <div class="col-6 col-md-3 small-card fries"
       data-name="Chicken Chips"
       data-price="350"
       data-img="chiken_chips.webp">
    <div class="card food-card">
      <img src="chiken_chips.webp">
      <div class="card-body text-center">Chicken Chips</div>
    </div>
  </div>

  <div class="col-6 col-md-3 small-card fries"
       data-name="Loaded Buffalo Fries"
       data-price="400"
       data-img="Loaded_Buffalo_Fries.webp">
    <div class="card food-card">
      <img src="Loaded_Buffalo_Fries.webp">
      <div class="card-body text-center">Loaded Buffalo Fries</div>
    </div>
  </div>

  <div class="col-6 col-md-3 small-card fries"
       data-name="Fries Box"
       data-price="300"
       data-img="fries.webp">
    <div class="card food-card">
      <img src="fries.webp">
      <div class="card-body text-center">Fries Box</div>
    </div>
  </div>


  

</div>
</div>
</div>



<!-- ================= DESI FOOD ================= -->
<div class="container my-5 category-wrapper position-relative">
  <h2 class="category-title">DESI FOOD </h2>

  <!-- Large Cards -->
  <div class="row g-4 large-row">
    <div class="col-md-4">
      <div class="card large-card" data-target="pizza">
        <img src="paratha_with_kabab.webp" class="card-img-top">
        <div class="card-body">
          <h6 class="res-name">Paratha with egg</h6>
          <div class="details">
            <span>Desi Food</span>
              <span>⏱ 30–40 min</span>
          </div>
          <div class="price">From Rs.400</div>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card large-card" data-target="burger">
        <img src="desi_chiken_karahi.webp" class="card-img-top">
        <div class="card-body">
          <h6 class="res-name">Desi chiken karahi</h6>
          <div class="details">
            <span>Desi Food</span>
            <span>⏱ 20–30 min</span>
          </div>
          <div class="price">From Rs.950</div>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card large-card" data-target="fries">
        <img src="double_chiken_biryani.webp" class="card-img-top">
        <div class="card-body">
          <h6 class="res-name">Double chiken biryani</h6>
          <div class="details">
            <span>Desi Food</span>
             <span>⏱ 35–45 min</span>
          </div>
          <div class="price">From Rs.450</div>
        </div>
      </div>
    </div>
  </div>

<!-- ================= DESI food small cards ================= -->

<div class="small-overlay desi-overlay">
  <div class="back-arrow">&times;</div>
<div class="row g-3 justify-content-center">
  <div class="col-6 col-md-3 small-card desi pizza"
     data-name="Paratha"
     data-price="150"
     data-img="paratha.webp">
  <div class="card food-card">
    <img src="paratha.webp">
    <div class="card-body text-center">Paratha</div>
  </div>
</div>

<div class="col-6 col-md-3 small-card desi pizza"
     data-name="Pizza Cheese Paratha"
     data-price="300"
     data-img="Pizza_Cheese_Paratha.webp">
  <div class="card food-card">
    <img src="Pizza_Cheese_Paratha.webp">
    <div class="card-body text-center">Pizza Cheese Paratha</div>
  </div>
</div>

<div class="col-6 col-md-3 small-card desi pizza"
     data-name="Tandoori Paratha"
     data-price="200"
     data-img="Tandori_Paratha.webp">
  <div class="card food-card">
    <img src="Tandori_Paratha.webp">
    <div class="card-body text-center">Tandoori Paratha</div>
  </div>
</div>

<div class="col-6 col-md-3 small-card desi burger"
     data-name="Chicken Kabab"
     data-price="350"
     data-img="chicken_kabab.webp">
  <div class="card food-card">
    <img src="chicken_kabab.webp">
    <div class="card-body text-center">Chicken Kabab</div>
  </div>
</div>

<div class="col-6 col-md-3 small-card desi burger"
     data-name="Creamy Garlic Chicken"
     data-price="500"
     data-img="Creamy_Garlic_Chicken.webp">
  <div class="card food-card">
    <img src="Creamy_Garlic_Chicken.webp">
    <div class="card-body text-center">Creamy Garlic Chicken</div>
  </div>
</div>

<div class="col-6 col-md-3 small-card desi burger"
     data-name="Desi Chicken Karahi"
     data-price="950"
     data-img="desi_chiken_karahi.webp">
  <div class="card food-card">
    <img src="desi_chiken_karahi.webp">
    <div class="card-body text-center">Chicken Karahi</div>
  </div>
</div>

<div class="col-6 col-md-3 small-card desi fries"
     data-name="Chicken Biryani"
     data-price="300"
     data-img="chiken_biryani.webp">
  <div class="card food-card">
    <img src="chiken_biryani.webp">
    <div class="card-body text-center">Chicken Biryani</div>
  </div>
</div>

<div class="col-6 col-md-3 small-card desi fries"
     data-name="Special Chicken Biryani"
     data-price="450"
     data-img="Special_Chicken_Biryani.webp">
  <div class="card food-card">
    <img src="Special_Chicken_Biryani.webp">
    <div class="card-body text-center">Special Chicken Biryani</div>
  </div>
</div>

<div class="col-6 col-md-3 small-card desi fries"
     data-name="Beef Afgani Kofta"
     data-price="600"
     data-img="beef_afgani_kofta.webp">
  <div class="card food-card">
    <img src="beef_afgani_kofta.webp">
    <div class="card-body text-center">Beef Kofta</div>
  </div>
</div>
</div>
</div>
</div>

<!-- ================= CHINESE FOOD ================= -->
<div class="container my-5 category-wrapper position-relative">
  <h2 class="category-title">CHINESE FOOD</h2>

  <!-- Large Cards -->
  <div class="row g-4 large-row">
    <div class="col-md-4">
      <div class="card large-card" data-target="pizza">
        <img src="special_chow_mein.webp" class="card-img-top">
        <div class="card-body">
          <h6 class="res-name">Special chow mein</h6>
          <div class="details">
            <span>Chinese Food</span>
            <span>⏱ 30–40 min</span>
          </div>
          <div class="price">From Rs.700</div>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card large-card" data-target="burger">
        <img src="chines_pasta.webp" class="card-img-top">
        <div class="card-body">
          <h6 class="res-name">Chines pasta</h6>
          <div class="details">
            <span>Chinese Food</span>
            <span>⏱ 20–30 min</span>
          </div>
          <div class="price">From Rs.700</div>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card large-card" data-target="fries">
        <img src="Butter_Noodles.webp" class="card-img-top">
        <div class="card-body">
          <h6 class="res-name">Butter Noodles</h6>
          <div class="details">
            <span>Chinese Food</span>
            <span>⏱ 35–45 min</span>
          </div>
          <div class="price">From Rs.650</div>
        </div>
      </div>
    </div>
  </div>


<div class="small-overlay chinese-overlay">
<div class="back-arrow">&times;</div>
<div class="row g-3 justify-content-center">
  <!-- Chinese Small Cards with proper data attributes for Cart -->
  <div class="col-6 col-md-3 small-card pizza" data-name="Chicken Chilli" data-price="700" data-img="Chicken_Chilli_Dry_&_Rice.webp">
    <div class="card food-card"><img src="Chicken_Chilli_Dry_&_Rice.webp"><div class="card-body text-center">Chicken Chilli</div></div>
  </div>
  <div class="col-6 col-md-3 small-card burger" data-name="Chinese Chips" data-price="250" data-img="chips.jpg">
    <div class="card food-card"><img src="chips.jpg"><div class="card-body text-center">Chinese Chips</div></div>
  </div>
  <div class="col-6 col-md-3 small-card fries" data-name="Drunken Noodles" data-price="650" data-img="Drunken_Noodles.webp">
    <div class="card food-card"><img src="Drunken_Noodles.webp"><div class="card-body text-center">Drunken Noodles</div></div>
  </div>
  <div class="col-6 col-md-3 small-card pizza" data-name="Special Chow Mein" data-price="800" data-img="Baoxiang_Special_Chow_Mein.webp">
    <div class="card food-card"><img src="Baoxiang_Special_Chow_Mein.webp"><div class="card-body text-center">Special Chow Mein</div></div>
  </div>
  <div class="col-6 col-md-3 small-card burger" data-name="Chicken Parmesan" data-price="900" data-img="Chicken_Parmesan.webp">
    <div class="card food-card"><img src="Chicken_Parmesan.webp"><div class="card-body text-center">Chicken Parmesan</div></div>
  </div>
  <div class="col-6 col-md-3 small-card fries" data-name="Alfredo Pasta" data-price="750" data-img="Fettuccine_Alfredo_Pasta.webp">
    <div class="card food-card"><img src="Fettuccine_Alfredo_Pasta.webp"><div class="card-body text-center">Alfredo Pasta</div></div>
  </div>
  <div class="col-6 col-md-3 small-card pizza" data-name="Chicken Chow Mein" data-price="600" data-img="Chicken_Chow_Mein.webp">
    <div class="card food-card"><img src="Chicken_Chow_Mein.webp"><div class="card-body text-center">Chicken Chow Mein</div></div>
  </div>
  <div class="col-6 col-md-3 small-card burger" data-name="Loaded Fries" data-price="400" data-img="Loaded_Fries.webp">
    <div class="card food-card"><img src="Loaded_Fries.webp"><div class="card-body text-center">Loaded Fries</div></div>
  </div>
  <div class="col-6 col-md-3 small-card fries" data-name="Fettucine Alfredo" data-price="850" data-img="Chicken_Fettucine_Alfredo.webp">
    <div class="card food-card"><img src="Chicken_Fettucine_Alfredo.webp"><div class="card-body text-center">Fettucine Alfredo</div></div>
  </div>
</div>
</div>
</div>



<!-- ================= DESSERTS ================= -->
<div class="container my-5 category-wrapper position-relative">
  <h2 class="category-title">Desserts</h2>

  <!-- Large Cards -->
  <div class="row g-4 large-row">

    <div class="col-md-4">
      <div class="card large-card" data-target="cake">
        <img src="chocolate_cake.jpg" class="card-img-top">
        <div class="card-body">
          <h6 class="res-name">Chocolate cake</h6>
          <div class="details">
            <span>Sweets</span>
            <span>⏱ 30–40 min</span>
          </div>
          <div class="price">From Rs.1200</div>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card large-card" data-target="cupcake">
        <img src="cream_cup_cake.webp" class="card-img-top">
        <div class="card-body">
          <h6 class="res-name">Cream cup cake</h6>
          <div class="details">
            <span>Sweets</span>
            <span>⏱ 20–30 min</span>
          </div>
          <div class="price">From Rs.450</div>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card large-card" data-target="doublepack">
        <img src="double_pack.jpg" class="card-img-top">
        <div class="card-body">
          <h6 class="res-name">Double pack</h6>
          <div class="details">
            <span>Sweets</span>
            <span>⏱ 35–45 min</span>
          </div>
          <div class="price">From Rs.700</div>
        </div>
      </div>
    </div>

  </div>

  <!-- ================= SMALL CARDS ================= -->
  <div class="small-overlay dessert-overlay">
    <div class="back-arrow">&times;</div>

    <div class="row g-3 justify-content-center">

      <!-- 🍫 CAKE GROUP -->
      <div class="col-6 col-md-3 small-card cake"
        data-name="Creamy Cake"
        data-price="1200"
        data-img="creamy_cake.png">
        <div class="card food-card">
          <img src="creamy_cake.png">
          <div class="card-body text-center">Creamy Cake</div>
        </div>
      </div>

      <div class="col-6 col-md-3 small-card cake"
        data-name="birthday_cake_chocoo.jpgs"
        data-price="1300"
        data-img="birthday_cake_chocoo.jpg">
        <div class="card food-card">
          <img src="birthday_cake_chocoo.jpg">
          <div class="card-body text-center">Fudge Cake</div>
        </div>
      </div>

      <div class="col-6 col-md-3 small-card cake"
        data-name="strawberry_cake.png "
        data-price="1400"
        data-img="strawberry_cake.png">
        <div class="card food-card">
          <img src="strawberry_cake.png">
          <div class="card-body text-center">Strawberry cake</div>
        </div>
      </div>

      <!-- 🧁 CUPCAKE GROUP -->
      <div class="col-6 col-md-3 small-card cupcake"
        data-name="Vanilla Cup Cake"
        data-price="150"
        data-img="cream_cup_cake.webp">
        <div class="card food-card">
          <img src="cream_cup_cake.webp">
          <div class="card-body text-center">Vanilla Cup Cake</div>
        </div>
      </div>

      <div class="col-6 col-md-3 small-card cupcake"
        data-name="Chocolate Cup Cake"
        data-price="180"
        data-img="Chocolate_Cupcake.webp">
        <div class="card food-card">
          <img src="Chocolate_Cupcake.webp">
          <div class="card-body text-center">Chocolate Cupcake</div>
        </div>
      </div>

      <div class="col-6 col-md-3 small-card cupcake"
        data-name="Strawberry Cup Cake"
        data-price="200"
        data-img="cup_cake.webp">
        <div class="card food-card">
          <img src="cup_cake.webp">
          <div class="card-body text-center">Strawberry Cupcake</div>
        </div>
      </div>

      <!-- 🍰 DOUBLE PACK GROUP -->
      <div class="col-6 col-md-3 small-card doublepack"
        data-name="Molten_Lava.webp Classic"
        data-price="700"
        data-img="Molten_Lava.webp">
        <div class="card food-card">
          <img src="Molten_Lava.webp">
          <div class="card-body text-center">Double Pack</div>
        </div>
      </div>

      <div class="col-6 col-md-3 small-card doublepack"
        data-name="Chocolate Double Pack"
        data-price="750"
        data-img="Chocolate_Cupcake_With_Buttercream.webp">
        <div class="card food-card">
          <img src="Chocolate_Cupcake_With_Buttercream.webp">
          <div class="card-body text-center">Choco Pack</div>
        </div>
      </div>

      <div class="col-6 col-md-3 small-card doublepack"
        data-name="fudg_brownie.webp"
        data-price="900"
        data-img="fudg_brownie.webp">
        <div class="card food-card">
          <img src="fudg_brownie.webp">
          <div class="card-body text-center">Family Pack</div>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- ================= BEVERAGES ================= -->
<div class="container my-5 category-wrapper position-relative">
  <h2 class="category-title">Beverages</h2>

  <!-- Large Cards -->
  <div class="row g-4 large-row">

    <div class="col-md-4">
      <div class="card large-card" data-target="colada">
        <img src="Blue_Colada.webp" class="card-img-top">
        <div class="card-body">
          <h6 class="res-name">Blue Colada</h6>
          <div class="details">
            <span>Juices</span>
            <span>⏱ 30–40 min</span>
          </div>
          <div class="price">From Rs.300</div>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card large-card" data-target="coffee">
        <img src="capuccino.jpg" class="card-img-top">
        <div class="card-body">
          <h6 class="res-name">Cappuccino</h6>
          <div class="details">
            <span>Tea & Coffee</span>
            <span>⏱ 20–30 min</span>
          </div>
          <div class="price">From Rs.350</div>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card large-card" data-target="shake">
        <img src="bubble_smooch.webp" class="card-img-top">
        <div class="card-body">
          <h6 class="res-name">Bubble Smooch</h6>
          <div class="details">
            <span>Chocolate Shakes</span>
            <span>⏱ 35–45 min</span>
          </div>
          <div class="price">From Rs.300</div>
        </div>
      </div>
    </div>

  </div>

  <!-- ================= SMALL CARDS ================= -->
  <div class="small-overlay beverage-overlay">
    <div class="back-arrow">&times;</div>

    <div class="row g-3 justify-content-center">

      <!-- 🥤 COLADA (3 cards) -->
      <div class="col-6 col-md-3 small-card colada"
        data-name="Pina Colada"
        data-price="300"
        data-img="Pina_Colada.webp">
        <div class="card food-card">
          <img src="Pina_Colada.webp">
          <div class="card-body text-center">Pina Colada</div>
        </div>
      </div>

      <div class="col-6 col-md-3 small-card colada"
        data-name="apple_juice"
        data-price="320"
        data-img="apple_juice.webp">
        <div class="card food-card">
          <img src="apple_juice.webp">
          <div class="card-body text-center">Apple Colada</div>
        </div>
      </div>

      <div class="col-6 col-md-3 small-card colada"
        data-name="Strawberry Colada"
        data-price="340"
        data-img="strawbery_smothie.webp">
        <div class="card food-card">
          <img src="strawbery_smothie.webp">
          <div class="card-body text-center">Strawberry Colada</div>
        </div>
      </div>

      <!-- ☕ COFFEE (3 cards) -->
      <div class="col-6 col-md-3 small-card coffee"
        data-name="Cold Coffee"
        data-price="350"
        data-img="Blended_Cold_Coffee.webp">
        <div class="card food-card">
          <img src="Blended_Cold_Coffee.webp">
          <div class="card-body text-center">Cold Coffee</div>
        </div>
      </div>

      <div class="col-6 col-md-3 small-card coffee"
        data-name="coffe"
        data-price="300"
        data-img="coffe.jpg">
        <div class="card food-card">
          <img src="coffe.jpg">
          <div class="card-body text-center">Espresso</div>
        </div>
      </div>

      <div class="col-6 col-md-3 small-card coffee"
        data-name="capuccino"
        data-price="380"
        data-img="capuccino.jpg">
        <div class="card food-card">
          <img src="capuccino.jpg">
          <div class="card-body text-center">Capuccino</div>
        </div>
      </div>

      <!-- 🍫 SHAKE (3 cards) -->
      <div class="col-6 col-md-3 small-card shake"
        data-name="Chocolate Shake"
        data-price="300"
        data-img="chocolate_shake.webp">
        <div class="card food-card">
          <img src="chocolate_shake.webp">
          <div class="card-body text-center">Chocolate Shake</div>
        </div>
      </div>

      <div class="col-6 col-md-3 small-card shake"
        data-name="Shake_Oreo"
        data-price="400"
        data-img="Shake_Oreo.webp">
        <div class="card food-card">
          <img src="Shake_Oreo.webp">
          <div class="card-body text-center">Oreo Shake</div>
        </div>
      </div>

      <div class="col-6 col-md-3 small-card shake"
        data-name="frozen_hot_chocolate"
        data-price="350"
        data-img="frozen_hot_chocolate.png">
        <div class="card food-card">
          <img src="frozen_hot_chocolate.png">
          <div class="card-body text-center">frozen hot chocolate</div>
        </div>
      </div>

    </div>
  </div>
</div>

  <!-- ================= SMALL CARDS ================= -->
  <div class="small-overlay beverage-overlay">

    <div class="back-arrow">&times;</div>

    <div class="row g-3 justify-content-center">

      <!-- COLADA -->
      <div class="col-6 col-md-3 small-card colada"
        data-name="Pina Colada"
        data-price="300"
        data-img="Pina_Colada.webp">
        <div class="card food-card">
          <img src="Pina_Colada.webp">
          <div class="card-body text-center">Pina Colada</div>
        </div>
      </div>

      <!-- COFFEE -->
      <div class="col-6 col-md-3 small-card coffee"
        data-name="Blended Cold Coffee"
        data-price="350"
        data-img="Blended_Cold_Coffee.webp">
        <div class="card food-card">
          <img src="Blended_Cold_Coffee.webp">
          <div class="card-body text-center">Cold Coffee</div>
        </div>
      </div>

      <!-- SHAKE -->
      <div class="col-6 col-md-3 small-card shake"
        data-name="Chocolate Shake"
        data-price="300"
        data-img="chocolate_shake.webp">
        <div class="card food-card">
          <img src="chocolate_shake.webp">
          <div class="card-body text-center">Chocolate Shake</div>
        </div>
      </div>

    </div>
  </div>
</div>


<!-- ADD TO CART MODAL -->
<div class="modal" id="cartModal">

  <form class="modal-content" id="cartForm">

    <span class="close" onclick="closeModal()">&times;</span>

    <img id="modalImg" src="" class="item-img">

    <h2 id="itemName"></h2>

    <input type="hidden"
    name="item_name"
    id="hiddenItemName">

    <p class="price">
      Rs. <span id="itemPrice"></span>
    </p>

    <input type="hidden"
    name="item_price"
    id="hiddenItemPrice">

    <h6>
      <b>Special instructions</b>
    </h6>

    <p>
      Special requests are subject to the restaurant's approval.
      Tell us here!
    </p>

    <textarea
    name="special_instruction"
    placeholder="e.g. No mayo"></textarea>

    <label>
      If this item is not available
    </label>

    <select id="s1"
    name="unavailable_action">

      <option>
        Remove it from my order
      </option>

      <option>
        Cancel the entire order
      </option>

      <option>
        Call me
      </option>

    </select>

    <div class="qty-box">

      <input type="hidden"
      name="quantity"
      id="hiddenQty"
      value="1">

      <button type="button"
      onclick="decrease()">−</button>

      <span id="qty">1</span>

      <button type="button"
      onclick="increase()">+</button>

    </div>

    <button type="submit"
    class="add-btn">

      Add to cart

    </button>

  </form>

</div>


<!-- ================= SIDEBAR CART ================= -->

<div class="cart-sidebar" id="cartSidebar">

  <div class="cart-header">
    <h3>Your Items</h3>
    <span class="close-cart" onclick="closeCart()">×</span>
  </div>

  <div id="cartItems"></div>

  <div class="cart-footer">

    <h4>
      Total: Rs.
      <span id="cartTotal">0</span>
    </h4>

<button type="button"
class="checkout-btn"
onclick="saveCart()">

Confirm Order

</button>
      
  

  </div>

</div>


<!----add card html code end ---->

<!----add  new card from add item table  ---->
<div class="container my-5">

    <h2 class="category-title">
        Newly Added Items
    </h2>

    <div class="row g-4">

    <?php

    include 'db.php';

    $query = mysqli_query($conn,"
    SELECT *
    FROM add_items
    ORDER BY item_id DESC
    ");

    while($row = mysqli_fetch_assoc($query))
    {
    ?>

        <div class="col-md-4">

            <div class="card large-card">

                <img src="uploads/<?php echo $row['image']; ?>"
                     class="card-img-top"
                     style="height:250px;object-fit:cover;">

                <div class="card-body">

                    <h6 class="res-name">
                        <?php echo $row['item_name']; ?>
                    </h6>

                    <div class="details">

                        <span>
                            <?php echo $row['category']; ?>
                        </span>

                        <span>
                            time:
                          ⏱ <?php echo $row['delivery_time']; ?>

                            
                        </span>

                    </div>

                    <div class="price">

                        Rs.
                        <?php echo $row['price']; ?>

                    </div>

                </div>

            </div>

        </div>

    <?php
    }
    ?>

    </div>

</div>




<!----add  new card from add item table  ---->

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

<!-- ================= COMMON JS ================= -->

<script>

document.querySelectorAll('.category-wrapper').forEach(category => {

  const largeCards = category.querySelectorAll('.large-card');
  const overlay = category.querySelector('.small-overlay');
  const smallCards = category.querySelectorAll('.small-card');
  const largeRow = category.querySelector('.large-row');
  const backArrow = category.querySelector('.back-arrow');

  // safety check
  if(!overlay || !backArrow || !largeRow) return;

  // LARGE CARD CLICK
  largeCards.forEach(card => {

    card.addEventListener('click', () => {

      const target = card.dataset.target;

      overlay.style.display = 'block';

      largeRow.classList.add('blur');

      // hide all cards
      smallCards.forEach(sc => {
        sc.style.display = 'none';
      });

      // show target cards
      overlay.querySelectorAll('.small-card.' + target)
      .forEach(sc => {
        sc.style.display = 'block';
      });

    });

  });

  // BACK BUTTON
  backArrow.addEventListener('click', () => {

    overlay.style.display = 'none';

    largeRow.classList.remove('blur');

  });

});






// ================= MODAL =================

let quantity = 1;

const modal = document.getElementById("cartModal");

function openModal(){
  modal.style.display = "block";
}

function closeModal(){
  modal.style.display = "none";
}

// outside click
window.addEventListener("click", (e)=>{

  if(e.target === modal){
    closeModal();
  }

});

// quantity increase
function increase(){

  quantity++;

  document.getElementById("qty").innerText = quantity;
  document.getElementById("hiddenQty").value = quantity;

}

// quantity decrease
function decrease(){

  if(quantity > 1){

    quantity--;

    document.getElementById("qty").innerText = quantity;
    document.getElementById("hiddenQty").value = quantity;

  }

}


// SMALL CARD CLICK
document.querySelectorAll(".small-card").forEach(card => {

  card.addEventListener("click", () => {

    const name = card.dataset.name;
    const price = card.dataset.price;
    const img = card.dataset.img;

    if(!name || !price || !img) return;

    document.getElementById("itemName").innerText = name;

    document.getElementById("itemPrice").innerText = price;
    //update code 3 lines
    document.getElementById("hiddenItemName").value = name;

document.getElementById("hiddenItemPrice").value = price;

document.getElementById("hiddenQty").value = quantity;

    document.getElementById("modalImg").src = img;

    quantity = 1;

    document.getElementById("qty").innerText = quantity;

    openModal();

  });

});


// ================= SIDEBAR CART =================

let cart = [];

const cartSidebar = document.getElementById("cartSidebar");
const cartItems = document.getElementById("cartItems");
const cartTotal = document.getElementById("cartTotal");

// OPEN CART
function openCart(){
  cartSidebar.classList.add("active");
}

// CLOSE CART
function closeCart(){
  cartSidebar.classList.remove("active");
}

// FORM SUBMIT
document.getElementById("cartForm")
.addEventListener("submit", function(e){

  e.preventDefault();

  const name =
  document.getElementById("hiddenItemName").value;

  const price =
  parseInt(document.getElementById("hiddenItemPrice").value);

  const qty =
  parseInt(document.getElementById("hiddenQty").value);

  const img =
  document.getElementById("modalImg").src;

  // NEW
  const specialInstruction =
  document.querySelector("textarea[name='special_instruction']").value;

  const unavailableAction =
  document.querySelector("select[name='unavailable_action']").value;

  const existing =
  cart.find(item => item.name === name);

  if(existing){

    existing.quantity += qty;

  }else{

    cart.push({

      name:name,

      price:price,

      quantity:qty,

      img:img,

      special_instruction:specialInstruction,

      unavailable_action:unavailableAction

    });

  }

  console.log(cart);

  updateCart();

  openCart();

  closeModal();

});


function updateCart(){

  cartItems.innerHTML = "";

  let total = 0;

  cart.forEach((item,index)=>{

    total += item.price * item.quantity;

    cartItems.innerHTML += `

      <div class="cart-item">

        <img src="${item.img}">

        <div class="cart-details">

          <h5>${item.name}</h5>

          <p>Rs. ${item.price}</p>

          <p>Qty: ${item.quantity}</p>

          <h6>
            Rs. ${item.price * item.quantity}
          </h6>

          <button type="button"
onclick="removeItem(${index})">

            Remove

          </button>

        </div>

      </div>

    `;

  });

  cartTotal.innerText = total;

  localStorage.setItem(
    "foodCart",
    JSON.stringify(cart)
  );

}

if(cart.length === 0){

    closeCart();

}
function removeItem(index){

  cart.splice(index,1);

  updateCart();

}



// ================= SAVE CART TO DATABASE =================//
function saveCart(){

    // Check empty cart
    if(cart.length === 0){

        alert("Cart is empty");

        return;
    }

    fetch("save_cart.php", {

        method: "POST",

        headers:{
            "Content-Type":"application/json"
        },

        body: JSON.stringify(cart)

    })

    .then(res => res.text())

    .then(data => {

        // SUCCESS MESSAGE
        alert(data);

        // CLEAR ARRAY
        cart = [];

        // CLEAR HTML
        cartItems.innerHTML = "";

        // RESET TOTAL
        cartTotal.innerText = "0";

        // REMOVE LOCAL STORAGE
        localStorage.removeItem("foodCart");

        // HIDE SIDEBAR
        closeCart();

    })

    .catch(error => {

        console.log(error);

        alert("Something went wrong");

    });

}

window.onload = function(){

    const savedCart = localStorage.getItem("foodCart");

    if(savedCart){

        cart = JSON.parse(savedCart);

        updateCart();
    }

}

</script>
</body>
</html>
