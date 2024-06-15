<?php

    include("connection.php");

    if(isset($_GET['delete_user'])) {
        $delete_user = $_GET['delete_user'];

        $delete_query="DELETE FROM `customeruser` WHERE userID=$delete_user";
        $result_query=mysqli_query($con, $delete_query);
        if($result_query) {
            echo"<script>alert('Successfully Deleted')</script>";
            echo"<script>window.open('admin.php?control-user','_self')</script>";
        }
    }

?>