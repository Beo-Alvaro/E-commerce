<?php
    include('connection.php');
    include('funtions.php');

    if(isset($_GET['edit_user'])) {
        $user_id = $_GET['edit_user'];

        $get_user = "SELECT * FROM `customerUser` WHERE userID=$user_id";
        $result_query=mysqli_query($con, $get_user);
        $row=mysqli_fetch_assoc($result_query);
        $userID     =  $row['userID'];
        $userFname      =  $row['userFname'];
        $userLname   =  $row['userLname'];
        $userName     =  $row['userName'];
        $userEmail     =  $row['userEmail'];
        $accountType     =  $row['accountType'];
    }
?>

<h3 class="text-center mb-5">EDIT USER</h3>

<form action="" method="POST" class="mb-2" enctype="multipart/form-data">



    <div class="form-outline w-50 mb-4 mt-4 m-auto">
        <label for="userID" class="form-label">userID</label>
        <input value="<?php echo $userID?>" type="text" id="userID" class="form-control" required="required"
            placeholder="Enter userID" name="userID" aria-label="userID" aria-describedby="addon-wrapping"
            autocomplete="off">
    </div>

    <div class="form-outline w-50 mb-4 mt-4 m-auto">
        <label for="userFname" class="form-label">userFname</label>
        <input value="<?php echo $userFname?>" type="text" id="userFname" class="form-control"
            placeholder="Enter user first name" name="userFname" aria-label="userFname"
            aria-describedby="addon-wrapping">
    </div>

    <div class="form-outline w-50 mb-4 mt-4 m-auto">
        <label for="userLname" class="form-label">userLname</label>
        <input value="<?php echo $userLname?>" type="text" id="userLname" class="form-control"
            placeholder="EnteruserLname" name="userLname" aria-label="userLname" aria-describedby="addon-wrapping">
    </div>

    <div class="form-outline w-50 mb-4 mt-4 m-auto">
        <label for="userName" class="form-label">userName</label>
        <input value="<?php echo $userName?>" type="text" id="userName" class="form-control" placeholder="userName"
            name="userName" aria-label="userName" aria-describedby="addon-wrapping">
    </div>

    <div class="form-outline w-50 mb-4 mt-4 m-auto">
        <label for="userEmail" class="form-label">userEmail</label>
        <input value="<?php echo $userEmail?>" type="file" id="userEmail" class="form-control" name="userEmail"
            aria-label="userEmail" aria-describedby="addon-wrapping">
    </div>

    <div class="form-outline w-50 mb-4 mt-4 m-auto">
        <label for="accountType" class="form-label">accountType</label>
        <input value="<?php echo $accountType?>" type="text" id="accountType" class="form-control"
            placeholder="Enter user Price" name="accountType" aria-label="accountType"
            aria-describedby="addon-wrapping">
    </div>

</form>
<?php 

if(isset($_POST['edit-user'])) {
       
    $userID     =  $_POST['userID'];
    $userFname      =  $_POST['userFname'];
    $userLname   =  $_POST['userLname'];
    $userName     =  $_POST['userName'];
    $userEmail     =  $_POST['userEmail'];
    $accountType     =  $_POST['accountType'];

    if($userID=="" or $userFname=="" or $userLname=="" or $userName=="" or $userEmail=="" or
    $accountType=="") {
        echo"<script>alert('Please fill out the available fields')</script>";
        exit();
    }
    else {
        


        $update_user = "UPDATE `user` SET userID='$userID', userFname='$userFname'
        , userLname='$userLname', userEmail='$userEmail', accountType='$accountType' WHERE userID=$userID";

    $result_query=mysqli_query($con,$update_user);
    if($result_query) {
        echo"<script>alert('Successfully Updated')</script>";
    }

    }   
}
?>