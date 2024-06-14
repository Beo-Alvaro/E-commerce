<html>
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        
    </head>
    <body class= "login_body">
        <div class="login">
            
            <div class="rectangle" id="loginbody"> 
            <img src="logo/logo.png" alt="Logo" class="logo">
            </div>

            <form action="/connection.php" method="post">
                <input type = "text" id="login_username" name="login_username" placeholder="Enter your username">
                <input type = "text" id="pass_username" name="pass_username" placeholder="Enter your password">
                <input type = "submit" value="Login" id = "login_button" name="login_button">
            </form>
        </div>
    </body>
</html>
