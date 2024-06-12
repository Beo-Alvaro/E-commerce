<?php
    include('connection.php');

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
    
        <div class="input-wrapper">
          <input type="search" name="search" placeholder="Search product" class="search-field" autocomplete="off">
    
          <button class="search-submit" aria-label="search">
            <ion-icon name="search-outline" aria-hidden="true"></ion-icon>
          </button>
        </div>
    
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
<?php 

$selec_query="SELECT * FROM 'game'";
$result_query=mysqli_query($con, $selec_query);
while($row=mysqli_fetch_assoc($result_query)) {
  $game_title     =  $row['game_title'];
  $game_desc      =  $row['game_desc'];
  $game_keyword   =  $row['game_keyword'];
  $game_genre     =  $row['game_genre'];
  $game_image     =  $row['game_image'];
  $game_price     =  $row['game_price'];  


  echo"<div class='title-wrapper' style='text-align: center; margin-top: 50px;'>
            <h2 class='h2 section-title'>ALL GAMES</h2>
            </div>


    <section class='section shop' id='shop' aria-label='shop' data-section>

        <div class='container' style='display: flex; gap:2%; flex-wrap:wrap;''>

          
              <div class='shop-card' style='width: 23%; min-width: 250px;'>

                <div class='card-banner img-holder' style='--width: 540; --height: 720;'>
                  <img src='gameposter/$game_image' width='540' height='720' loading='lazy'
                    alt='$game_title' class='img-cover'>

                  <div class='card-actions'>

                    <button class='action-btn' aria-label='add to cart' name='add-to-card'>
                      <ion-icon name='bag-add-outline' aria-hidden='true'></ion-icon>
                    </button>

                    <button class='action-btn' aria-label='add to whishlist'>
                      <ion-icon name='star-outline' aria-hidden='true'></ion-icon>
                    </button>

                    <button class='action-btn' aria-label='compare'>
                      <ion-icon name='repeat-outline' aria-hidden='true'></ion-icon>
                    </button>

                  </div>
                </div>

                <div class='card-content'>

                  <div class='price'>
                    <span class='spa'>$game_price</span>
                  </div>

                  <h3>
                    <a href='#' class='card-title'>$game_title</a>
                  </h3>

                  <div class='card-rating'>

                    <div class='rating-wrapper' aria-label='5 start rating'>
                      <ion-icon name='star' aria-hidden='true'></ion-icon>
                      <ion-icon name='star' aria-hidden='true'></ion-icon>
                      <ion-icon name='star' aria-hidden='true'></ion-icon>
                      <ion-icon name='star' aria-hidden='true'></ion-icon>
                      <ion-icon name='star' aria-hidden='true'></ion-icon>
                    </div>

                    <p class='rating-text'>5170 reviews</p>

                  </div>

                </div>

              </div>


        </div>
</section>";
}


          
?>




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