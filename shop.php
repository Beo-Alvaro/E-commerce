<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<!--- 
    FAVICON
---->

    <link rel="shortcut icon" href="favicon.svg" type="image/svg+xml">

<!---
    CSS LINK
---->

    <link rel="stylesheet" href="style.css">

<!---
    GOOGLE FONT LINK
---->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


</head>

<style>


.square {
  height: 100px;
  width: 100px;
  background-color: #555;
  margin: 5px;
}
</style>

<body>

<!---
    HEADER
---->

<header class="header">

    <div class="alert">
      <div class="container">
        <p class="alert-text">Upcomming Sale, Get the Newest Games</p>
      </div>
    </div>
    
    <div class="header-top" data-header>
      <div class="container">
    
        <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
          <span class="line line-1"></span>
          <span class="line line-2"></span>
          <span class="line line-3"></span>
        </button>
    
        <div class="input-wrapper">
          <input type="search" name="search" placeholder="Search product" class="search-field" autocomplete="off">
    
          <button class="search-submit" aria-label="search">
            <ion-icon name="search-outline" aria-hidden="true"></ion-icon>
          <!-- </button> -->
        </div>

        <img src="logo/logo.png" alt="Logo" class="logo">

        <!-- <a href="#" class="logo">
          <h2>COPGAMES</h2>
        </a> -->
    
        <div class="header-actions">
    
          <button class="header-action-btn" aria-label="user" value="click-user" name="click-user">
            <ion-icon name="person-outline" aria-hidden="true" aria-hidden="true"></ion-icon>
          </button>
    
          <button class="header-action-btn" aria-label="favourite item" value="click-fav" name="click-fav">
            <ion-icon name="star-outline" aria-hidden="true" aria-hidden="true"></ion-icon>
    
            <span class="btn-badge">0</span>
          </button>
    
          <button class="header-action-btn" aria-label="cart item" value="click-cart" name="click-cart">
            <data class="btn-text" value="0">$0.00</data>
    
            <ion-icon name="bag-add-outline" aria-hidden="true" aria-hidden="true"></ion-icon>
    
            <span class="btn-badge">0</span>
          </button>
    
        </div>
    
        <nav class="navbar">
          <ul class="navbar-list">
    
            <li>
              <a href="index.php" class="navbar-link has-after">Home</a>
            </li>
    
            <li>
              <a href="#trending" class="navbar-link has-after">Trending</a>
            </li>

            <li>
              <a href="allgames.php" class="navbar-link has-after">All Games</a>
            </li>
    
            <li>
              <a href="#shop" class="navbar-link has-after">Shop</a>
            </li>
    
          </ul>
        </nav>
    
      </div>
    </div>

</header>

<!--- Shop 
Display
-->




















<!---
    MOBILE NAV
---->

<div class="sidebar">
    <div class="mobile-navbar" data-navbar>

      <div class="wrapper">
        <a href="#" class="logo">
          <h2>NOTSTEAM</h2>
        </a>

        <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
          <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
        </button>
      </div>

      <ul class="navbar-list">

        <li>
          <a href="index.php" class="navbar-link" data-nav-link>Home</a>
        </li>

        <li>
          <a href="trending.php" class="navbar-link" data-nav-link>Trending</a>
        </li>

        <li>
          <a href="allgames.php" class="navbar-link" data-nav-link>All Games</a>
        </li>

        <li>
          <a href="shop.php" class="navbar-link" data-nav-link>Shop</a>
        </li>


      </ul>

    </div>

    <div class="overlay" data-nav-toggler data-overlay></div>
  </div>

  <!---
    FOOTER
---->

<footer class="footer" data-section>
    <div class="container">

      <div class="footer-top">

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Company</p>
          </li>

          <li>
            <p class="footer-list-text">
              Find a location nearest you. See <a href="#" class="link">Our Stores</a>
            </p>
          </li>

          <li>
            <p class="footer-list-text bold">+391 (0)35 2568 4593</p>
          </li>

          <li>
            <p class="footer-list-text">hello@domain.com</p>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Useful links</p>
          </li>

          <li>
            <a href="#" class="footer-link">New Products</a>
          </li>

          <li>
            <a href="#" class="footer-link">Best Sellers</a>
          </li>

          <li>
            <a href="#" class="footer-link">Bundle & Save</a>
          </li>

          <li>
            <a href="#" class="footer-link">Online Gift Card</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Infomation</p>
          </li>

          <li>
            <a href="#" class="footer-link">Start a Return</a>
          </li>

          <li>
            <a href="#" class="footer-link">Contact Us</a>
          </li>

          <li>
            <a href="#" class="footer-link">Shipping FAQ</a>
          </li>

          <li>
            <a href="#" class="footer-link">Terms & Conditions</a>
          </li>

          <li>
            <a href="#" class="footer-link">Privacy Policy</a>
          </li>

        </ul>

        <div class="footer-list">

          <p class="newsletter-title">Good emails.</p>

          <p class="newsletter-text">
            Enter your email below to be the first to know about new collections and product launches.
          </p>

          <form action="" class="newsletter-form">
            <input type="email" name="email_address" placeholder="Enter your email address" required
              class="email-field">

            <button type="submit" class="btn btn-primary">Subscribe</button>
          </form>

        </div>

      </div>

      <div class="footer-bottom">

        <div class="wrapper">

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-youtube"></ion-icon>
              </a>
            </li>

          </ul>
        </div>

      </div>

    </div>
</footer>


<!--- 
    BACK TO TOP
---->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="arrow-up" aria-hidden="true"></ion-icon>
  </a>


<!---
    JS LINK
---->

<script src="script.js" defer></script>


<!---
    ICON LINK
---->

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
</body>

</html>
</body>
</html>

