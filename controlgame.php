<?php 
    include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<body>

<h3 class="text-center mb-5">USER CONTROL</h3>

<table class="table table-bordered mt-5">

    <thead class="bg-info">

        <tr class="text-center">

            <th>Game ID</th>
            <th>Game Name</th>
            <th>Game Category</th>
            <th>Game Picture</th>
            <th>Game Keyword</th>
            <th>Game Price</th>
            <th>Total Sold</th>
            <th>Edit</th>
            <th>Delete</th>



        </tr>

    </thead>

    <tbody class="bg-dark text-light">

<?php 

$get_games="SELECT * FROM `game`";
$result_query=mysqli_query($con, $get_games);
while($row=mysqli_fetch_assoc($result_query)) {
  $game_title     =  $row['gameName'];
  $game_desc      =  $row['gameDesciption'];
  $game_keyword   =  $row['gameKeyword'];
  $game_genre     =  $row['categoryID'];
  $game_image     =  $row['gamePicture'];
  $game_price     =  $row['gamePrice'];
  $game_id        =  $row['gameID']; 
?>
  <tr class='text-center'>
            
            <td><?php echo $game_id; ?></td>
            <td><?php echo $game_title; ?></td>
            <td><?php

                $get_genre="SELECT * FROM `category` WHERE categoryID=$game_genre";
                $result_genre=mysqli_query($con, $get_genre);
                while($row=mysqli_fetch_assoc($result_genre)) {
                    $genre_name = $row['categoryName'];
                }
                echo $genre_name;                    
            ?></td>
            <td><?php echo $game_image; ?></td>
            <td><?php echo $game_keyword; ?></td>
            <td><?php echo "$".$game_price.".00"; ?></td>
            <td>1</td>
            <td><a href="admin.php?edit_game=<?php echo $game_id?>"><i class='fa-solid fa-square-pen' ></i></a></td>
            <td><i class='fa fa-trash' aria-hidden='true'></i></td>

        </tr>"
<?php
}   
?>



        

    </tbody>

</table>

    
</body>
</html>




