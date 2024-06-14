<html>
<?php
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        require_once('connection.php');
        $errors = array();
        if(!empty($_POST['login_username'])){
            $userName = mysqli_real_escape_string($con, trim($_POST['login_username']));
        }else{
            $errors[] = "You forgot to enter your username";
        }
        if(!empty($_POST['pass_username'])){
            $userPass = mysqli_real_escape_string($con, trim($_POST['pass_username']));
        }else{
            $errors[] = "You forgot to enter your password";
        }
        if(empty($errors)){
            $query = "SELECT * FROM customerUser WHERE (userName='$userName'&& userPass = '$userPass')";
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result)==1){
                session_start();
                $_SESSION = mysqli_fetch_array($result,MYSQLI_ASSOC);
                if($_SESSION['accountType'] == 'user'){
                    header('location: index.php');
                    exit();
                }elseif($_SESSION['accountType'] == 'admin'){
                    header('location: admin.php');
                    exit();
                }
            }else{
                echo '<script> alert("No matched Login Credentials")</script>';
            }
        }
    }

    ?>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style3.css">

</head>

<body class="login_body">
    <div class="login">

        <div class="rectangle" id="loginbody">
            <img src="logo/logo.png" alt="Logo" class="logo">
        </div>

        <form action="login.php" method="post">
            <input type="text" id="login_username" name="login_username" placeholder="Enter your username">
            <input type="password" id="pass_username" name="pass_username" placeholder="Enter your password" required>
            <input type="submit" value="Login" id="login_button" name="login_button">
        </form>
    </div>
</body>

</html>