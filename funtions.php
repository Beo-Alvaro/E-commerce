<?php 

    include('connection.php');

function insertGame() {
    global $con;

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

              </div>


        </div>
</section>";
}

}

function addGames() {
  global $con;

  if(isset($_POST['submit-game'])) {
       
    $game_title     =  $_POST['game_title'];
    $game_desc      =  $_POST['game_desc'];
    $game_keyword   =  $_POST['game_keyword'];
    $game_genre     =  $_POST['game_genre'];
    $game_image     =  $_FILES['game_image']['name'];
    $temp_image     =  $_FILES['game_image']['tmp_name'];
    $game_price     =  $_POST['game_price'];

    if($game_title=="" or $game_desc=="" or $game_keyword=="" or $game_genre=="" or $game_image=="" or
    $game_price=="") {
        echo"<script>alert('Please fill out the available fields')</script>";
        exit();
    }
    else {
        move_uploaded_file($temp_image,"gameposter/$game_image");
    }
    $insert_games="INSERT INTO `game`(gameName, gameDesciption, gamePrice, categoryID, gamePicture, gameKeyword)
    VALUES ('$game_title','$game_desc',$game_price,$game_genre,'$game_image', '$game_keyword')";
    $result_query=mysqli_query($con,$insert_games);
    if($result_query) {
        echo"<script>alert('Successfully Submitted')</script>";
    }

}

}

?>