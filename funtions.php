<?php 

    include('connection.php');

function insertGame() {
    global $conn;

$selec_query="SELECT * FROM `game` ORDER BY gameName";
$result_query=mysqli_query($conn, $selec_query);
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

function addGames() {
  global $conn;

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
    $result_query=mysqli_query($conn,$insert_games);
    if($result_query) {
        echo"<script>alert('Successfully Submitted')</script>";
    }

}

}

function getIPAddress() {  
  //whether ip is from the share internet  
   if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
              $ip = $_SERVER['HTTP_CLIENT_IP'];  
      }  
  //whether ip is from the proxy  
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
              $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
   }  
//whether ip is from the remote address  
  else{  
           $ip = $_SERVER['REMOTE_ADDR'];  
   }  
   return $ip;  
}  
 



function cart() {
  if(isset($_GET['cart-game'])) {
    global $conn;

    $ip = getIPAddress();
    $game_id = $_GET['cart-game'];
    $select = "SELECT * FROM `cart` WHERE IPAdrress='$ip' AND cartID=$game_id";
    $result_query=mysqli_query($conn,$select);
    $num_rows = mysqli_num_rows($result_query);
    if($num_rows > 0) {
        echo"<script>alert('This game is already added')</script>";
        echo"<script>window.open('allgames.php','_self')</script>";
    }
    else {
      $insert_game="INSERT INTO `cart` (cartID, IPAdrress)
      VALUES ($game_id, '$ip')";
      $result_query=mysqli_query($conn, $insert_game);
      echo"<script>alert('Added to cart')</script>";
      echo"<script>window.open('allgames.php','_self')</script>";
    }
  }
}

function cart_item() {

    if(isset($_GET['cart-game'])) {
    global $conn;
    $ip = getIPAddress();
    $select = "SELECT * FROM `cart` WHERE IPAdrress='$ip'";
    $result_query=mysqli_query($conn,$select);
    $cart_item = mysqli_num_rows($result_query);
    } else {
      global $conn;
      $ip = getIPAddress();
      $select = "SELECT * FROM `cart` WHERE IPAdrress='$ip'";
      $result_query=mysqli_query($conn,$select);
      $cart_item = mysqli_num_rows($result_query);

    }
    echo $cart_item;

}


function total_cart_price() {
  global $conn;

  $get_ip = getIPAddress();
  $total = 0;
  $cart_query="SELECT * FROM `cart` WHERE IPAdrress=$get_ip";
  $result_query=mysqli_query($conn,$cart_query);
  while($row = mysqli_fetch_array($result_query)) {
    $game_id = $row['cartID'];
    $select_game="SELECT * FROM `game` WHERE gameID=$game_id";
    $result_game=mysqli_query($conn,$select_game);
    while($row_game = mysqli_fetch_array($result_game)) {
      $game_price = array($row_game['gamePrice']);
      $game_val = array_sum($game_price);

      $total += $game_val;

    }
  }
  echo $total;

}
?>