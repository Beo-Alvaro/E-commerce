<?php
    /*require_once('connection.php');
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
            move_uploaded_file($temp_image,"/gameposter/$game_image");
        }


        $insert_games="INSERT INTO 'game'(gameName, gameDescription, gamePrice, categoryID, gamePicture)
        VALUES ('$game_title','$game_desc','$game_price','$game_genre','$game_image')";
        $result_query=mysqli_query($con,$insert_games);
        if($result_query) {
            echo"<script>alert('Successfully Submitted')</script>";
        }*/
        if ($_SERVER["REQUEST_METHOD"]=="POST"){
            require_once('connection.php');
            $errors = array();
            if(!empty($_POST['add-title'])){
                $gameName = mysqli_real_escape_string($conn, trim($_POST['add-title']));
            }else{
            $errors[] = "no title input";
            }
    
            if(!empty($_POST['game_desc'])){
                $gameDesc = mysqli_real_escape_string($conn, trim($_POST['game_desc']));
            }else{
            $errors[] = "no desc input";
            }

            if(!empty($_POST['add-keyword'])){
                $gameKey = mysqli_real_escape_string($conn, trim($_POST['add-keyword']));
            }else{
            $errors[] = "no keyword chosen";
            }
            
            if(!empty($_POST['add-img'])){
                $gameImg = mysqli_real_escape_string($conn, trim($_POST['add-img']));
            }else{
            $errors[] = "no img chosen";
            }
            
            if(!empty($_POST['add-category'])){
                $gameCategory = mysqli_real_escape_string($conn, trim($_POST['add-category']));
            }else{
            $errors[] = "no category chosen";
            }

            if(!empty($_POST['add-price'])){
                $gamePrice = mysqli_real_escape_string($conn, trim($_POST['add-price']));
            }else{
            $errors[] = "no price input";
            }
    
            if(empty($errors)){
                $query = "INSERT INTO game(gameName, gameDesciption, gameKey, gamePicture, categoryID, gamePrice) VALUES ('$gameName','$gameDesc','$gameKey','$gameImg','$gameCategory','$gamePrice')";
                $result = mysqli_query($conn,$query);
                echo '<script> alert("Game added successfully");
                window.location.href="admin.php"; </script>';
    
            }
        }
    
?>

<h3 class="text-center mb-5">ADD GAMES</h3>

<form action="" method="POST" class="mb-2" enctype="multipart/form-data">



    <div class="form-outline w-50 mb-4 mt-4 m-auto">
        <label for="game_title" class="form-label">Game Title</label>
        <input type="text" id="game_title" class="form-control" required="required  " placeholder="Enter Game Title"
            name="game-title" aria-label="gamename" aria-describedby="addon-wrapping" autocomplete="off">
    </div>

    <div class="form-outline w-50 mb-4 mt-4 m-auto">
        <label for="game_desc" class="form-label">Game Description</label>
        <input type="text" id="game_desc" class="form-control" placeholder="Enter Game Description" name="game_desc"
            aria-label="gamedesc" aria-describedby="addon-wrapping">
    </div>

    <div class="form-outline w-50 mb-4 mt-4 m-auto">
        <label for="game_keyword" class="form-label">Game Keyword</label>
        <input type="text" id="game_keyword" class="form-control" placeholder="Enter Game Keyword" name="game-keyword"
            aria-label="gamekey" aria-describedby="addon-wrapping">
    </div>

    <div class="form-outline w-50 mb-4 mt-4 m-auto">
        <label for="game_genre" class="form-label">Game Genre</label>
        <select class="form-control" placeholder="Name" name="add-category" aria-label="gameCategory"
            aria-describedby="addon-wrapping">
            <option value=""> Choose Genre </option>
            <?php
                require_once('connection.php');
                $query = "SELECT * FROM category";
                $result = mysqli_query($conn,$query);
                while($row = mysqli_fetch_assoc($result)){
                    echo '<option value='.$row['categoryID'].'>'.$row['categoryName'].'</option>';
            }
            ?>
        </select>

        <div class="form-outline w-50 mb-4 mt-4 m-auto">
            <label for="game_image" class="form-label">Upload Image</label>
            <input type="file" id="game_image" class="form-control" name="game_image" aria-label="gameimg"
                aria-describedby="addon-wrapping">
        </div>

        <div class="form-outline w-50 mb-4 mt-4 m-auto">
            <label for="game_price" class="form-label">Game Price</label>
            <input type="text" id="game_price" class="form-control" placeholder="Enter Game Price" name="game_price"
                aria-label="gameprice" aria-describedby="addon-wrapping">
        </div>

        <div class="input w-90 mb-2">
            <div class="input-group flex-nowrap">
                <input type="submit" class="btn btn-dark p-2 my-3 border-0" value="Submit" name="submit-game"
                    aria-label="Username" aria-describedby="addon-wrapping">
            </div>
        </div>
</form>