<?php
    include('connection.php');
    include('funtions.php');

?>


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
    
        <form action="" method="GET">

        <div class="input-wrapper">
          <input type="search" name="search" placeholder="Search product" class="search-field" autocomplete="off">

          <button class="search-submit" aria-label="search">
            <ion-icon name="search-outline" aria-hidden="true"></ion-icon>
          </button>
        </div>

        </form>
    
        <a href="#" class="logo">
          <h2>COPGAMES</h2>
        </a>
    
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
              <a href="allgames.php" class="navbar-link has-after">All Games</a>
            </li>

            
    
          </ul>
        </nav>
    
      </div>
    </div>
</header>

<!---
    ITEMS
---->
 

<section class='section shop' id='shop' aria-label='shop' data-section>

    <div class="genre"><button class="dropbtn">Genre</button>
      <div class="dropdown-content">
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
      </div>
    </div>

        <div class='container' style='display: flex; gap:2%; flex-wrap:wrap;''>

          <?php 
              insertGame();
          ?>

        </div>
</section>





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