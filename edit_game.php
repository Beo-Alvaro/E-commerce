<?php
    include('connection.php');
    include('funtions.php');

    if(isset($_GET['edit_game'])) {
        $game_id = $_GET['edit_game'];

        $get_game = "SELECT * FROM `game` WHERE gameID=$game_id";
        $result_query=mysqli_query($con, $get_game);
        $row=mysqli_fetch_assoc($result_query);
        $game_title     =  $row['gameName'];
        $game_desc      =  $row['gameDesciption'];
        $game_keyword   =  $row['gameKeyword'];
        $game_genre     =  $row['categoryID'];
        $game_image     =  $row['gamePicture'];
        $game_price     =  $row['gamePrice'];
        $game_id        =  $row['gameID'];

        $get_genre="SELECT * FROM `category` WHERE categoryID=$game_genre";
                $result_genre=mysqli_query($con, $get_genre);
                while($row=mysqli_fetch_assoc($result_genre)) {
                    $genre_name = $row['categoryName'];
                }
}
?>

<h3 class="text-center mb-5">EDIT GAME</h3>

<form action="" method="POST" class="mb-2" enctype="multipart/form-data">

    

    <div class="form-outline w-50 mb-4 mt-4 m-auto">
            <label for="game_title" class="form-label">Game Title</label>
            <input value="<?php echo $game_title?>" type="text" id="game_title" class="form-control" required="required" placeholder="Enter Game Title" name="game_title" aria-label="gamename" aria-describedby="addon-wrapping" autocomplete="off">
    </div>

    <div class="form-outline w-50 mb-4 mt-4 m-auto">
            <label for="game_desc" class="form-label">Game Description</label>
            <input value="<?php echo $game_desc?>" type="text" id="game_desc" class="form-control" placeholder="Enter Game Description" name="game_desc" aria-label="gamedesc" aria-describedby="addon-wrapping">
    </div>

    <div class="form-outline w-50 mb-4 mt-4 m-auto">
            <label for="game_keyword" class="form-label">Game Keyword</label>
            <input value="<?php echo $game_keyword?>" type="text" id="game_keyword" class="form-control" placeholder="Enter Game Keyword" name="game_keyword" aria-label="gamekey" aria-describedby="addon-wrapping">
    </div>

    <div class="form-outline w-50 mb-4 mt-4 m-auto">
            <label for="game_genre" class="form-label">Game Genre</label>
            <select name="game_genre" id="game_genre" class="form-select">
                <option value=""><?php echo $genre_name?></option>

                <?php 
                $select_all ="SELECT * FROM `category`";
                $result_cate = mysqli_query($con, $select_all);
                while($row_cate=mysqli_fetch_assoc($result_cate)) {

                    $category_name = $row_cate['categoryName'];
                    $category_id = $row_cate['categoryID'];

                    echo "<option value='$category_id'>$category_name</option>";

                }
                ?>
            </select>
           
    </div>

    <div class="form-outline w-50 mb-4 mt-4 m-auto">
            <label for="game_image" class="form-label">Upload Image</label>
            <input value="<?php echo $game_image?>" type="file" id="game_image" class="form-control" name="game_image" aria-label="gamedesc" aria-describedby="addon-wrapping">
    </div>

    <div class="form-outline w-50 mb-4 mt-4 m-auto">
            <label for="game_price" class="form-label">Game Price</label>
            <input value="<?php echo $game_price?>" type="text" id="game_price" class="form-control" placeholder="Enter Game Price" name="game_price" aria-label="gamedesc" aria-describedby="addon-wrapping">
    </div>


    <div class="form-outline w-50 mb-4 mt-4 m-auto">
         <div class="input-group flex-nowrap">
            <input type="submit" class="btn btn-dark px-3 my-3 border-0" value="Update" name="edit-game" 
            aria-label="Username" aria-describedby="addon-wrapping"> 
        </div>
    </div>
</form>
<?php 

if(isset($_POST['edit-game'])) {
       
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


        $update_game = "UPDATE `game` SET categoryID='$game_genre', gameName='$game_title', gameDesciption='$game_desc'
        , gamePrice='$game_price', gamePicture='$game_image', gameKeyword='$game_keyword' WHERE gameID=$game_id";

    $result_query=mysqli_query($con,$update_game);
    if($result_query) {
        echo"<script>alert('Successfully Updated')</script>";
    }

    }   
}
?>
