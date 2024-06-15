<?php 
    include("connection.php");
    include("funtions.php")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

<body>

    <nav class="navbar" style="display: flex;
    justify-content: center;
    margin-top: 30px;
    margin-bottom: 100px;">
        <ul class="navbar-list" style="display: flex; list-style: none;gap: 45px; font-size:20px;">

            <li>
                <a href="index.php" class="navbar-link has-after" style="text-decoration: none;
  color: inherit;">Home</a>
            </li>


            <li>
                <a href="allgames.php" class="navbar-link has-after" style="text-decoration: none;
  color: inherit;">All Games</a>
            </li>


        </ul>
    </nav>

    <h3 class="text-center mb-5">CART ITEMS</h3>

    <form method="POST" action="">
        <table class="table table-bordered mt-5">

            <thead class="bg-info">

                <tr class="text-center">

                    <th>Game ID</th>
                    <th>Game Name</th>
                    <th>Game Price</th>
                    <th>Remove</th>
                    <th>Execute</th>

                </tr>

            </thead>

            <tbody class="bg-dark text-light">

                <?php 

$get_ip = getIPAddress();
  $total = 0;
  $cart_query="SELECT * FROM `cart` WHERE IPAdrress='$get_ip'";
  $result_query=mysqli_query($con,$cart_query);
  while($row = mysqli_fetch_array($result_query)) {
    $game_id = $row['cartID'];
    $select_game="SELECT * FROM `game` WHERE gameID='$game_id'";
    $result_game=mysqli_query($con,$select_game);
    while($row_game = mysqli_fetch_array($result_game)) {
      $per_price = $row_game['gamePrice'];
      $game_title = $row_game['gameName'];
      $game_price = array($row_game['gamePrice']);
      $game_val = array_sum($game_price);

      $total += $game_val;



?>
                <tr class='text-center'>

                    <td><?php echo $game_id; ?></td>
                    <td><?php echo $game_title; ?></td>
                    <td><?php echo $per_price; ?></td>
                    <td><input type="checkbox" name="removeitem[]" value="<?php echo $game_id ?>"></td>
                    <td><input type="submit" value="Delete" name="remove_game"></td>

                </tr>
                <?php
     }
  } 
?>
            </tbody>

        </table>

        <div class=" mb-4 mt-5 m-auto d-flex">
            <h4 class="px-3">Total:<strong>$<?php echo $total?>.00</strong></h3>
                <input type="submit" class="btn btn-dark px-3 mx-3 border-0" value="Checkout" name="checkout-game"
                    aria-label="Username" aria-describedby="addon-wrapping">
        </div>
    </form>
    <?php

    if(isset($_POST['remove_game'])) {
        foreach($_POST['removeitem'] as $remove_id) {
            $delete_query ="DELETE FROM `cart` WHERE cartID=$remove_id";
            $result = mysqli_query($con, $delete_query);
            if($result) {
                echo"<script>window.open('cart.php','_self')</script>";
            }
        
        }
    }

    if(isset($_POST['checkout-game'])) {
        $result = true;
            if($result) {
                $delete_query ="DELETE FROM `cart` ";
            $result = mysqli_query($con, $delete_query);
            if($result) {
                echo"<script>window.open('allgames.php')</script>";
            }
            }
            
        }
?>

</body>

</html>