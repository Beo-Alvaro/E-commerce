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
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">


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
                        <input type="search" name="search-field" placeholder="Search product" class="search-field"
                            autocomplete="off">

                        <input type="submit" name="search-btn" value="Search" class="button-submit">
                    </div>

                </form>

                <a href="#" class="logo">
                    <h2>COPGAMES</h2>
                </a>

                <div class="header-actions">

                    <button class="header-action-btn" aria-label="user" value="click-user" name="click-user">
                        <a href="login.php">
                            <ion-icon name="person-outline" aria-hidden="true" aria-hidden="true"></ion-icon>
                        </a>
                    </button>

                    <button class="header-action-btn" aria-label="favourite item" value="click-fav" name="click-fav">
                        <a href="cart.php">
                            <ion-icon name="star-outline" aria-hidden="true" aria-hidden="true"></ion-icon>
                        </a>

                        <span class="btn-badge">0</span>
                    </button>

                    <button class="header-action-btn" aria-label="cart item" value="click-cart" name="click-cart">
                        <data class="btn-text" value="0">$0.00</data>

                        <a href="cart.php">
                            <ion-icon name="bag-add-outline" aria-hidden="true" aria-hidden="true"></ion-icon>
                        </a>

                        <span class="btn-badge">0</span>
                    </button>

                </div>

                <nav class="navbar">
                    <ul class="navbar-list">

                        <li>
                            <a href="#" class="navbar-link has-after">Home</a>
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
                    <a href="#home" class="navbar-link" data-nav-link>Home</a>
                </li>

                <li>
                    <a href="#trending" class="navbar-link" data-nav-link>Trending</a>
                </li>

                <li>
                    <a href="#allgames" class="navbar-link" data-nav-link>All Games</a>
                </li>

                <li>
                    <a href="#shop" class="navbar-link" data-nav-link>Shop</a>
                </li>


            </ul>

        </div>

        <div class="overlay" data-nav-toggler data-overlay></div>
    </div>





    <main>
        <article>


            <!---
    HERO
---->

            <section class="section hero" id="home" aria-label="hero" data-section>
                <div class="container">

                    <ul class="has-scrollbar">

                        <li class="scrollbar-item">
                            <div class="hero-card has-bg-image"
                                style="background-image: url('gameposter/ls-game4.jpg')">

                                <div class="card-content">

                                    <h1 class="h1 hero-title">
                                        Discover <br>
                                        Awesome Games
                                    </h1>

                                    <p class="hero-text">
                                        Discovering games on our website is an adventure in itself. Dive into a world
                                        where endless entertainment awaits at your fingertips
                                    </p>

                                    <a href="#" class="btn btn-primary">Get Started</a>

                                </div>

                            </div>
                        </li>

                        <li class="scrollbar-item">
                            <div class="hero-card has-bg-image"
                                style="background-image: url('gameposter/ls-game3.jpg')">

                                <div class="card-content">

                                    <h1 class="h1 hero-title">
                                        BE <br>IMMERSED
                                    </h1>

                                    <p class="hero-text">
                                        Explore curated collections of the latest and greatest titles across genres,
                                        from action-packed adventures to mind-bending puzzles
                                    </p>

                                    <a href="#" class="btn btn-primary">Get Started</a>

                                </div>

                            </div>
                        </li>

                        <li class="scrollbar-item">
                            <div class="hero-card has-bg-image"
                                style="background-image: url('gameposter/ls-game2.jpg')">

                                <div class="card-content">

                                    <h1 class="h1 hero-title">
                                        Embark <br>
                                        on your journey
                                    </h1>

                                    <p class="hero-text">
                                        Whether you're a seasoned gamer or just starting your journey, embark on an
                                        exploration of discovery and delight
                                    </p>


                                    <a href="#" class="btn btn-primary">Get Started</a>

                                </div>

                            </div>
                        </li>

                    </ul>

                </div>
            </section>

            <!---
    TRENDING
---->
            <section class="section trending" style="padding-block: 50px;">
                <div class="wrapper">
                    <h2 class="h2 section-title" style="margin-bottom: 55px">Trending</h2>
                    <div class="card__container">
                        <?php
        if(!isset($_GET['categ'])) {
$selec_query="SELECT * FROM `game` ORDER BY views DESC";
$counter = 0;
$result_query=mysqli_query($con, $selec_query);
if($counter >=0){
while($row=mysqli_fetch_assoc($result_query)) {
  $game_title     =  $row['gameName'];
  $game_desc      =  $row['gameDesciption'];
  $game_keyword   =  $row['gameKeyword'];
  $game_genre     =  $row['categoryID'];
  $game_image     =  $row['gamePicture'];
  $game_price     =  $row['gamePrice'];
  $game_id        =  $row['gameID'];
  $game_view        =  $row['views'];
  $counter++;
  if($counter == 4) {
    break;
  }



           echo" <article class='card__article'>
                <img src='gameposter/$game_image' alt='genshin impact' class='card__img'>
                <div class='card__info'>
                    <span class='card__description'>TOP GAME</span>
                    <h2 class='card__title'>$game_title</h2>
                    <a href='' class='card__button'>Get now</a>
                </div>
            </article>";
          }
        }
      }
            ?>
                    </div>

                </div>
            </section>

            <!---
    SHOP
---->
            <section class="section shop" id="shop" aria-label="shop" data-section>

                <div class="container">

                    <div class="title-wrapper">
                        <h2 class="h2 section-title">High Rating</h2>

                        <a href="#" class="btn-link">
                            <span class="span">View All</span>

                            <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                        </a>
                    </div>

                    <ul class="has-scrollbar">

                        <?php 
              insertGame();
              getGame();
                ?>

                </div>

                </ul>
                </div>
                </div>
            </section>

            <section class="section shop" id="shop" aria-label="shop" data-section>
                <div class="container">

                    <div class="title-wrapper">
                        <h2 class="h2 section-title">Sale Now</h2>

                        <a href="#" class="btn-link">
                            <span class="span">View All</span>

                            <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                        </a>
                    </div>

                    <ul class="has-scrollbar">

                        <li class="scrollbar-item">
                            <div class="shop-card">

                                <div class="card-banner img-holder" style="--width: 540; --height: 720;">
                                    <img src="gameposter/mhw.jpg" width="540" height="720" loading="lazy"
                                        alt="Monster Hunter World" class="img-cover">

                                    <span class="badge" aria-label="20% off">-30%</span>

                                    <div class="card-actions">

                                        <button class="action-btn" aria-label="add to cart">
                                            <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                                        </button>

                                        <button class="action-btn" aria-label="add to whishlist">
                                            <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                        </button>

                                        <button class="action-btn" aria-label="compare">
                                            <ion-icon name="repeat-outline" aria-hidden="true"></ion-icon>
                                        </button>

                                    </div>
                                </div>

                                <div class="card-content">

                                    <div class="price">
                                        <del class="del">$50.00</del>

                                        <span class="span">$35.00</span>
                                    </div>

                                    <h3>
                                        <a href="#" class="card-title">Monster Hunter World</a>
                                    </h3>

                                    <div class="card-rating">

                                        <div class="rating-wrapper" aria-label="5 start rating">
                                            <ion-icon name="star" aria-hidden="true"></ion-icon>
                                            <ion-icon name="star" aria-hidden="true"></ion-icon>
                                            <ion-icon name="star" aria-hidden="true"></ion-icon>
                                            <ion-icon name="star" aria-hidden="true"></ion-icon>
                                            <ion-icon name="star" aria-hidden="true"></ion-icon>
                                        </div>

                                        <p class="rating-text">5170 reviews</p>

                                    </div>

                                </div>

                            </div>
                        </li>

                        <li class="scrollbar-item">
                            <div class="shop-card">

                                <div class="card-banner img-holder" style="--width: 540; --height: 720;">
                                    <img src="gameposter/lc.jpg" width="540" height="720" loading="lazy"
                                        alt="letha company" class="img-cover">

                                    <span class="badge" aria-label="20% off">-30%</span>

                                    <div class="card-actions">

                                        <button class="action-btn" aria-label="add to cart">
                                            <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                                        </button>

                                        <button class="action-btn" aria-label="add to whishlist">
                                            <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                        </button>

                                        <button class="action-btn" aria-label="compare">
                                            <ion-icon name="repeat-outline" aria-hidden="true"></ion-icon>
                                        </button>

                                    </div>
                                </div>

                                <div class="card-content">

                                    <div class="price">
                                        <del class="del">$20.00</del>
                                        <span class="span">$14.00</span>
                                    </div>

                                    <h3>
                                        <a href="#" class="card-title">Lethal Company</a>
                                    </h3>

                                    <div class="card-rating">

                                        <div class="rating-wrapper" aria-label="5 start rating">
                                            <ion-icon name="star" aria-hidden="true"></ion-icon>
                                            <ion-icon name="star" aria-hidden="true"></ion-icon>
                                            <ion-icon name="star" aria-hidden="true"></ion-icon>
                                            <ion-icon name="star" aria-hidden="true"></ion-icon>
                                            <ion-icon name="star" aria-hidden="true"></ion-icon>
                                        </div>

                                        <p class="rating-text">5170 reviews</p>

                                    </div>

                                </div>

                            </div>
                        </li>

                        <li class="scrollbar-item">
                            <div class="shop-card">

                                <div class="card-banner img-holder" style="--width: 540; --height: 720;">
                                    <img src="gameposter/tr.jpg" width="540" height="720" loading="lazy" alt="Terraria"
                                        class="img-cover">

                                    <span class="badge" aria-label="20% off">-30%</span>

                                    <div class="card-actions">

                                        <button class="action-btn" aria-label="add to cart">
                                            <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                                        </button>

                                        <button class="action-btn" aria-label="add to whishlist">
                                            <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                        </button>

                                        <button class="action-btn" aria-label="compare">
                                            <ion-icon name="repeat-outline" aria-hidden="true"></ion-icon>
                                        </button>

                                    </div>
                                </div>

                                <div class="card-content">

                                    <div class="price">
                                        <del class="del">$15.00</del>
                                        <span class="span">$11.00</span>
                                    </div>

                                    <h3>
                                        <a href="#" class="card-title">Terraria</a>
                                    </h3>

                                    <div class="card-rating">

                                        <div class="rating-wrapper" aria-label="5 start rating">
                                            <ion-icon name="star" aria-hidden="true"></ion-icon>
                                            <ion-icon name="star" aria-hidden="true"></ion-icon>
                                            <ion-icon name="star" aria-hidden="true"></ion-icon>
                                            <ion-icon name="star" aria-hidden="true"></ion-icon>
                                            <ion-icon name="star" aria-hidden="true"></ion-icon>
                                        </div>

                                        <p class="rating-text">5170 reviews</p>

                                    </div>

                                </div>

                            </div>
                        </li>

                        <li class="scrollbar-item">
                            <div class="shop-card">

                                <div class="card-banner img-holder" style="--width: 540; --height: 720;">
                                    <img src="gameposter/tk8.jpg" width="540" height="720" loading="lazy" alt="Tekken 8"
                                        class="img-cover">

                                    <span class="badge" aria-label="20% off">-30%</span>

                                    <div class="card-actions">

                                        <button class="action-btn" aria-label="add to cart">
                                            <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                                        </button>

                                        <button class="action-btn" aria-label="add to whishlist">
                                            <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                        </button>

                                        <button class="action-btn" aria-label="compare">
                                            <ion-icon name="repeat-outline" aria-hidden="true"></ion-icon>
                                        </button>

                                    </div>
                                </div>

                                <div class="card-content">

                                    <div class="price">
                                        <del class="del">$80.00</del>
                                        <span class="span">$56.00</span>
                                    </div>

                                    <h3>
                                        <a href="#" class="card-title">Tekken 8</a>
                                    </h3>

                                    <div class="card-rating">

                                        <div class="rating-wrapper" aria-label="5 start rating">
                                            <ion-icon name="star" aria-hidden="true"></ion-icon>
                                            <ion-icon name="star" aria-hidden="true"></ion-icon>
                                            <ion-icon name="star" aria-hidden="true"></ion-icon>
                                            <ion-icon name="star" aria-hidden="true"></ion-icon>
                                            <ion-icon name="star" aria-hidden="true"></ion-icon>
                                        </div>

                                        <p class="rating-text">5170 reviews</p>

                                    </div>

                                </div>

                            </div>
                        </li>

                        <li class="scrollbar-item">
                            <div class="shop-card">

                                <div class="card-banner img-holder" style="--width: 540; --height: 720;">
                                    <img src="gameposter/mex.jpg" width="540" height="720" loading="lazy"
                                        alt="Metro Exodus" class="img-cover">

                                    <span class="badge" aria-label="20% off">-30%</span>

                                    <div class="card-actions">

                                        <button class="action-btn" aria-label="add to cart">
                                            <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                                        </button>

                                        <button class="action-btn" aria-label="add to whishlist">
                                            <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                        </button>

                                        <button class="action-btn" aria-label="compare">
                                            <ion-icon name="repeat-outline" aria-hidden="true"></ion-icon>
                                        </button>

                                    </div>
                                </div>

                                <div class="card-content">

                                    <div class="price">
                                        <del class="del">$40.00</del>

                                        <span class="span">$28.00</span>
                                    </div>

                                    <h3>
                                        <a href="#" class="card-title">Metro Exodus</a>
                                    </h3>

                                    <div class="card-rating">

                                        <div class="rating-wrapper" aria-label="5 start rating">
                                            <ion-icon name="star" aria-hidden="true"></ion-icon>
                                            <ion-icon name="star" aria-hidden="true"></ion-icon>
                                            <ion-icon name="star" aria-hidden="true"></ion-icon>
                                            <ion-icon name="star" aria-hidden="true"></ion-icon>
                                            <ion-icon name="star" aria-hidden="true"></ion-icon>
                                        </div>

                                        <p class="rating-text">5170 reviews</p>

                                    </div>

                                </div>

                            </div>
                        </li>

                        <li class="scrollbar-item">
                            <div class="shop-card">

                                <div class="card-banner img-holder" style="--width: 540; --height: 720;">
                                    <img src="gameposter/sk.jpg" width="540" height="720" loading="lazy" alt="Skyrim"
                                        class="img-cover">

                                    <span class="badge" aria-label="20% off">-30%</span>

                                    <div class="card-actions">

                                        <button class="action-btn" aria-label="add to cart">
                                            <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                                        </button>

                                        <button class="action-btn" aria-label="add to whishlist">
                                            <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                        </button>

                                        <button class="action-btn" aria-label="compare">
                                            <ion-icon name="repeat-outline" aria-hidden="true"></ion-icon>
                                        </button>

                                    </div>
                                </div>

                                <div class="card-content">

                                    <div class="price">
                                        <del class="del">$45.00</del>
                                        <span class="span">$31.00</span>
                                    </div>

                                    <h3>
                                        <a href="#" class="card-title">Skyrim</a>
                                    </h3>

                                    <div class="card-rating">

                                        <div class="rating-wrapper" aria-label="5 start rating">
                                            <ion-icon name="star" aria-hidden="true"></ion-icon>
                                            <ion-icon name="star" aria-hidden="true"></ion-icon>
                                            <ion-icon name="star" aria-hidden="true"></ion-icon>
                                            <ion-icon name="star" aria-hidden="true"></ion-icon>
                                            <ion-icon name="star" aria-hidden="true"></ion-icon>
                                        </div>

                                        <p class="rating-text">5170 reviews</p>

                                    </div>

                                </div>

                            </div>
                        </li>

                    </ul>

                </div>
            </section>

            <?php 

  cart();
?>


            <!---
    FEATURE
---->

            <section class="section feature" aria-label="feature" data-section>
                <div class="container">

                    <h2 class="h2-large section-title">What We Provide</h2>

                    <ul class="flex-list">

                        <li class="flex-item">
                            <div class="feature-card">

                                <h3 class="h3 card-title">Extensive Game Library</h3>

                                <p class="card-text">
                                    Our website offers an extensive library of games spanning various genres and
                                    platforms, ensuring there's something for every type of gamer.
                                </p>

                            </div>
                        </li>

                        <li class="flex-item">
                            <div class="feature-card">

                                <h3 class="h3 card-title">Personalized Recommendations</h3>

                                <p class="card-text">
                                    Utilizing advanced algorithms, we deliver personalized game recommendations tailored
                                    to each user's gaming history, preferences, and interests.
                                </p>

                            </div>
                        </li>

                        <li class="flex-item">
                            <div class="feature-card">

                                <h3 class="h3 card-title">Community Engagement</h3>

                                <p class="card-text">
                                    We foster a vibrant gaming community where users can connect, share experiences, and
                                    discover new games through discussions, reviews, and user-generated content
                                </p>

                            </div>
                        </li>

                    </ul>

                </div>
            </section>


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
                                Enter your email below to be the first to know about new collections and product
                                launches.
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