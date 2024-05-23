<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        <?php include "style.css" ?>
    </style>
    <title>Notsteam</title>
</head>
<body>
<div class="screen">
    <div class="container-fluid p-0">

        <nav class="navbar navbar-expand-lg bg-dark navbar-dark ">
            <div class="container-fluid">
                <a class="navbar-brand ml-auto" href="#">Login</a>
            </div>
        </nav>

        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Notsteam</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">ALL GAMES</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">CATEGORIES</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">ABOUT</a>
                        </li>
                    </ul>
                <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary" type="submit">Search</button>
              </form>
            </div>
          </div>
        </nav>
    </div>
        <div class="container-fluid px-5 py-5">
            <div class="container-fluid border border-2 border-dark">
                <p class="fs-3 px-5 py-5 text-center m-0"><b>Discover Awesome Games</b></p>
            </div>
        </div>
        <div class="wrapper">
            <h3>Trending Games</h3>
            <div class="card__container">
                <article class="card__article">
                    <img src="gameposter/genshin.jpg" alt="genshin impact" class="card__img">
                    <div class="card__info">
                        <span class="card__categ">RPG Stunning Graphics</span>
                        <h2 class="card__title">Genshin Impact</h2>
                        <a href="#" class="card__button">Download now</a>
                    </div>
                </article>

                <article class="card__article">
                    <img src="gameposter/bloodborne.jpg" alt="" class="card__img">
                    <div class="card__info">
                        <span class="card__description">Action Dark Fantasy</span>
                        <h2 class="card__title">Bloodborne</h2>
                        <a href="#" class="card__button">Download now</a>
                    </div>
                </article>

                <article class="card__article">
                    <img src="gameposter/wuthering.jpg" alt="" class="card__img">
                    <div class="card__info">
                        <span class="card__description">Open World Action-Combat</span>
                        <h2 class="card__title">Wuthering Waves</h2>
                        <a href="#" class="card__button">Download now</a>
                    </div>
                </article>
            </div>
        </div>
        <h3 id="expl">Explore Games</h3>
        <div class="con">
            <div class="con__genre grid-row--span bg-dark">
                <h4>Browse By Genre</h4>
                <div class="con__info">
                    <ul class="con__place">
                        <li class="con__select"><a href="" class="con__link">Action</a></li>
                        <li class="con__select"><a href="" class="con__link">Adventure</a></li>
                        <li class="con__select"><a href="" class="con__link">Role-Playing</a></li>
                        <li class="con__select"><a href="" class="con__link">Strategy</a></li>
                        <li class="con__select"><a href="" class="con__link">Sports</a></li>
                        <li class="con__select"><a href="" class="con__link">Racing</a></li>
                        <li class="con__select"><a href="" class="con__link">Simulation</a></li>
                        <li class="con__select"><a href="" class="con__link">Puzzle</a></li>
                        <li class="con__select"><a href="" class="con__link">Music</a></li>
                    </ul>
                </div>
            </div>
            <div class="span">
                <div class="cont">
                    <div class="cards">
                        <div class="front">
                            <img src="gameposter/darksouls1.jpg" alt="" class="Image">
                        </div>
                        <div class="con__games">
                            <h3>Dark Souls 1</h2>
                            <button class="con__button">View More</button>
                        </div>
                    </div>
                </div>
                <div class="cont">
                    <div class="cards">
                        <div class="front">
                            <img src="gameposter/stellarblade.jpg" alt="" class="Image">
                        </div>
                        <div class="con__games">
                            <h3>Stellar Blade</h2>
                            <button class="con__button">View More</button>
                        </div>
                    </div>
                </div>
                <div class="cont">
                    <div class="cards">
                        <div class="front">
                            <img src="gameposter/pvz.jpg" alt="" class="Image">
                        </div>
                        <div class="con__games">
                            <h3>Plants Vs Zombies</h2>
                            <button class="con__button">View More</button>
                        </div>
                    </div>
                </div>
                <div class="cont">
                    <div class="cards">
                        <div class="front">
                            <img src="gameposter/gtt.jpg" alt="" class="Image">
                        </div>
                        <div class="con__games">
                            <h3>Ghost Of Tsushima</h2>
                            <button class="con__button">View More</button>
                        </div>
                    </div>
                </div>
                <div class="cont">
                    <div class="cards">
                        <div class="front">
                            <img src="gameposter/rdr.jpg" alt="" class="Image">
                        </div>
                        <div class="con__games">
                            <h3>Red Dead Redemption</h2>
                            <button class="con__button">View More</button>
                        </div>
                    </div>
                </div>
                <div class="cont">
                    <div class="cards">
                        <div class="front">
                            <img src="gameposter/l4d2.jpg" alt="" class="Image">
                        </div>
                        <div class="con__games">
                            <h3>Left 4 Dead 2</h2>
                            <button class="con__button">View More</button>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
            

    </div>
                
                
           
</div>  
</div>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
