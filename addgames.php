<?php
    if(isset($_POST['submit-game'])) {

    }
?>

<h3 class="text-center mb-5">ADD GAMES</h3>

<form action="" method="POST" class="mb-2" enctype="multipart/form-data">

    

    <div class="form-outline w-50 mb-4 mt-4 m-auto">
            <label for="game_title" class="form-label">Game Title</label>
            <input type="text" id="game_title" class="form-control" required="required  " placeholder="Enter Game Title" name="add-game" aria-label="gamename" aria-describedby="addon-wrapping" autocomplete="off">
    </div>

    <div class="form-outline w-50 mb-4 mt-4 m-auto">
            <label for="game_desc" class="form-label">Game Description</label>
            <input type="text" class="form-control" placeholder="Enter Game Description" name="add-desc" aria-label="gamedesc" aria-describedby="addon-wrapping">
    </div>

    <div class="form-outline w-50 mb-4 mt-4 m-auto">
            <label for="game_keyword" class="form-label">Game Keyword</label>
            <input type="text" class="form-control" placeholder="Enter Game Keyword" name="add-keyword" aria-label="gamekey" aria-describedby="addon-wrapping">
    </div>

    <div class="form-outline w-50 mb-4 mt-4 m-auto">
            <label for="game_genre" class="form-label">Game Genre</label>
            <select name="add-genre" id="game_genre" class="form-select">
                <option value="">Select Genre</option>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
            </select>
    </div>

    <div class="form-outline w-50 mb-4 mt-4 m-auto">
            <label for="game_image" class="form-label">Upload Image</label>
            <input type="file" class="form-control" name="add-img" aria-label="gamedesc" aria-describedby="addon-wrapping">
    </div>

    <div class="form-outline w-50 mb-4 mt-4 m-auto">
            <label for="game_price" class="form-label">Game Price</label>
            <input type="text" class="form-control" placeholder="Enter Game Price" name="add-price" aria-label="gamedesc" aria-describedby="addon-wrapping">
    </div>


    <div class="form-outline w-50 mb-4 mt-4 m-auto">
         <div class="input-group flex-nowrap">
            <input type="submit" class="btn btn-dark px-3 my-3 border-0" value="Submit" name="submit-game" 
            aria-label="Username" aria-describedby="addon-wrapping"> 
        </div>
    </div>
</form>