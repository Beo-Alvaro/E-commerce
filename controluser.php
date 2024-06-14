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

                <th>User ID</th>
                <th>User First name</th>
                <th>User Last name</th>
                <th>Username</th>
                <th>User Email</th>
                <th>Account Type</th>
                <th>Edit</th>
                <th>Delete</th>



            </tr>

        </thead>

        <tbody class="bg-dark text-light">

            <?php 

$get_user="SELECT * FROM `customeruser`";
$result_query=mysqli_query($con, $get_user);
while($row=mysqli_fetch_assoc($result_query)) {
  $userID         =  $row['userID'];
  $userFname      =  $row['userFname'];
  $userLname      =  $row['userLname'];
  $userName       =  $row['userName'];
  $userEmail      =  $row['userEmail'];
  $accountType    =  $row['accountType']; 
?>
            <tr class='text-center'>

                <td><?php echo $userID; ?></td>
                <td><?php echo $userFname; ?></td>
                <td><?php echo $userLname; ?></td>
                <td><?php echo $userName; ?></td>
                <td><?php echo $userEmail; ?></td>
                <td><?php echo $accountType; ?></td>
                <td><a href="admin.php?edit_game=<?php echo $userID?>"><i class='fa-solid fa-square-pen'></i></a></td>
                <td><a href="admin.php?delete_game=<?php echo $userID?>"><i class='fa fa-trash'
                            aria-hidden='true'></i></a></td>

            </tr>
            <?php
}   
?>
        </tbody>

    </table>


</body>

</html>