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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

<div class="row">
    <div class="col-md-2 p-0">
        <ul class="navbar-nav  text-center ">
            <li class="nav-item bg-secondary ">
                <a class="nav-link " href="">My Profile</a>    
            </li>
            <li class="nav-item bg-dark">
                <a class="nav-link text-light" href="">Edit Account</a>    
            </li>
            <li class="nav-item bg-dark">
                <a class="nav-link text-light" href="">Logout</a>    
            </li>
        </ul>
    </div>
    <div>

    </div>
</div>


    
</body>
</html>




