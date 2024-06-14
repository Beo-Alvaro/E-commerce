<?php

    include("connection.php");

    if(isset($_GET['delete_game'])) {
        $delete_game = $_GET['delete_game'];

        $delete_query="DELETE FROM `game` WHERE gameID=$delete_game";
        $result_query=mysqli_query($con, $delete_query);
        if($result_query) {
            echo"<script>alert('Successfully Deleted')</script>";
            echo"<script>window.open('admin.php?control-game','_self')</script>";
        }
    }

?>