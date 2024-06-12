<?php
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        require_once('connection.php');
        $errors = array();
        if(!empty($_POST['add-game'])){
            $gameName = mysqli_real_escape_string($conn, trim($_POST['add-game']));
        }else{
        $errors[] = "no game input";
        }

        if(!empty($_POST['add-desc'])){
            $gameDesc = mysqli_real_escape_string($conn, trim($_POST['add-desc']));
        }else{
        $errors[] = "no desc input";
        }

        if(!empty($_POST['add-price'])){
            $gamePrice = mysqli_real_escape_string($conn, trim($_POST['add-price']));
        }else{
        $errors[] = "no price input";
        }
        
        if(!empty($_POST['add-category'])){
            $gameCategory = mysqli_real_escape_string($conn, trim($_POST['add-category']));
        }else{
        $errors[] = "no category chosen";
        }

        if(empty($errors)){
            $query = "INSERT INTO game(gameName, gameDesciption, gamePrice, categoryID) VALUES ('$gameName','$gameDesc','$gamePrice','$gameCategory')";
            $result = mysqli_query($conn,$query);
            echo '<script> alert("Game added successfully");
            window.location.href="admin.php"; </script>';
            
        }   
    }
?>


<form action="admin.php?addgames" method="POST" class="mb-2" enctype="multipart/form-data">

    <h3>ADD GAMES</h3>

    <div class="input w-90 mb-2">
        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-reciept"></i>
            </span>
            <input type="text" class="form-control" placeholder="Name" name="add-game" aria-label="Username"
                aria-describedby="addon-wrapping">
        </div>

        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-reciept"></i>
            </span>
            <textarea class="form-control" placeholder="Desciption" name="add-desc" aria-label="Username"
                aria-describedby="addon-wrapping" col="30" rows="5"></textarea>
        </div>

        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-reciept"></i>
            </span>
            <input type="text" class="form-control" placeholder="Price" name="add-price" aria-label="Username"
                aria-describedby="addon-wrapping">
        </div>

        <!-- <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-reciept"></i>
            </span>
            <input type="file" class="form-control" placeholder="Image" name="add-picture" aria-label="Username"
                aria-describedby="addon-wrapping">
        </div> -->

        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-reciept"></i>
            </span>
            <select class="form-control" placeholder="Name" name="add-category" aria-label="Username"
                aria-describedby="addon-wrapping">
                <option value=""> choose category </option>
                <?php
                require_once('connection.php');
                $query = "SELECT * FROM category";
                $result = mysqli_query($conn,$query);
                while($row = mysqli_fetch_assoc($result)){
                    echo '<option value='.$row['categoryID'].'>'.$row['categoryName'].'</option>';
            }
            ?>
            </select>

        </div>
    </div>

    <div class="input w-90 mb-2">
        <div class="input-group flex-nowrap">
            <input type="submit" class="btn btn-dark p-2 my-3 border-0" value="Submit" name="submit-game"
                aria-label="Username" aria-describedby="addon-wrapping">
        </div>
    </div>
</form>