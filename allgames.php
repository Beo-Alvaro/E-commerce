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
    <link rel="stylesheet" href="style2.css">

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
    
        <form action="search-game.php" method="GET">

        <div class="input-wrapper">
        <input type="search" name="search-field" placeholder="Search product" class="search-field" autocomplete="off">

        <input type="submit" name="search-btn" value="Search" class="button-submit">
        </div>

        </form>
    
        <a href="#" class="logo">
          <h2>COPGAMES</h2>
        </a>
    
        <div class="header-actions">
    
          <button class="header-action-btn" aria-label="user" value="click-user" name="click-user">
            <a href="login.php"><ion-icon name="person-outline" aria-hidden="true" aria-hidden="true"></ion-icon></a>
          </button>
    
          <button class="header-action-btn" aria-label="favourite item" value="click-fav" name="click-fav">
            <ion-icon name="star-outline" aria-hidden="true" aria-hidden="true"></ion-icon>
    
            <span class="btn-badge">0</span>
          </button>
    
          <button class="header-action-btn" aria-label="cart item" value="click-cart" name="click-cart">
            <data class="btn-text" value="0">$0.00</data>
    
            <a href="cart.php"><ion-icon name="bag-add-outline" aria-hidden="true" aria-hidden="true"></ion-icon></a>
    
            <span class="btn-badge"><?php cart_item();?></span>
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


    <div class="dropdown">
      <button class="dropbtn">Choose Category</button>
      <div class="dropdown-content">

      <?php 

        $select_game = "SELECT * FROM `category`";
        $result = mysqli_query($con, $select_game);
        while($row=mysqli_fetch_assoc($result)) {
          $game_categ=$row['categoryName'];
          $categ_id=$row['categoryID'];
          echo"<a href='allgames.php?categ=$categ_id'>$game_categ</a>";
        }
?>

      </div>
    </div>

        <div class='container' style='display: flex; gap:2%; flex-wrap:wrap;''>

          <?php 
              if(!isset($_GET['categ'])) {
                $selec_query="SELECT * FROM `game` ORDER BY gameName";
                $result_query=mysqli_query($con, $selec_query);
                while($row=mysqli_fetch_assoc($result_query)) {
                  $game_title     =  $row['gameName'];
                  $game_desc      =  $row['gameDesciption'];
                  $game_keyword   =  $row['gameKeyword'];
                  $game_genre     =  $row['categoryID'];
                  $game_image     =  $row['gamePicture'];
                  $game_price     =  $row['gamePrice'];
                  $game_id        =  $row['gameID'];
                
                
                
                  echo"
                
                          
                              <div class='shop-card' style='width: 23%; min-width: 250px;'>
                
                                <div class='card-banner img-holder' style='--width: 540; --height: 720;'>
                                  <img src='gameposter/$game_image' width='540' height='720' loading='lazy'
                                    alt='$game_title' class='img-cover'>
                
                                  <div class='card-actions'>
                
                                    <button class='action-btn' aria-label='add to cart' name='add-to-cart'>
                                      <a href='allgames.php?cart-game=$game_id'><ion-icon name='bag-add-outline' aria-hidden='true' aria-hidden='true'></ion-icon></a>
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
                                    <span class='spa'>$$game_price.00</span>
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
                
                              </div>";
                
                
                }
                }
              getGame();
          ?>

        </div>
</section>

<?php 

  cart();
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