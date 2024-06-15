
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once('connection.php');
    $errors = array();

    if (!empty($_POST['add-fname'])) {
        $userfname = trim($_POST['add-fname']);
    } else {
        $errors[] = "no fname input";
    }

    if (!empty($_POST['add-lname'])) {
        $userlname = trim($_POST['add-lname']);
    } else {
        $errors[] = "no lname input";
    }

    if (!empty($_POST['add-username'])) {
        $userusername = trim($_POST['add-username']);
    } else {
        $errors[] = "no username input";
    }

    if (!empty($_POST['add-email'])) {
        $useremail = trim($_POST['add-email']);
    } else {
        $errors[] = "no email input";
    }

    if (!empty($_POST['add-password'])) {
        $userpassword = trim($_POST['add-password']);
    } else {
        $errors[] = "no password input";
    }

    if (!empty($_POST['add-accounttype'])) {
        $userType = trim($_POST['add-accounttype']);
    } else {
        $errors[] = "no account type input";
    }

    if (empty($errors)) {
        try {
            $stmt = $con->prepare("INSERT INTO customerUser (userFname, userLname, userName, userEmail, userPass, accountType) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssss", $userfname, $userlname, $userusername, $useremail, $userpassword, $userType);

            if ($stmt->execute()) {
                echo '<script> alert("User added successfully"); window.location.href="admin.php"; </script>';
            } else {
                throw new Exception($stmt->error);
            }

            $stmt->close();
        } catch (mysqli_sql_exception $e) {
            if ($e->getCode() == 1062) {
                echo '<script> alert("Error: Duplicate entry. The username or email already exists."); window.location.href="admin.php?adduser"; </script>';
            } else {
                echo '<script> alert("Error: ' . $e->getMessage() . '"); window.location.href="admin.php"; </script>';
            }
        } catch (Exception $e) {
            echo '<script> alert("Error: ' . $e->getMessage() . '"); window.location.href="admin.php"; </script>';
        }
    } else {
        foreach ($errors as $error) {
            echo '<script> alert("' . $error . '"); </script>';
        }
    }
}
?>



<form action="" method="POST" class="mb-2">

    <h3 class="text-center mb-5">ADD USER/STAFF</h3>

    <div class="form-outline w-50 mb-4 mt-4 m-auto">
        <div class="input-group flex-nowrap">
            <input type="text" class="form-control" placeholder="First Name" name="add-fname" aria-label="Username"
                aria-describedby="addon-wrapping">
        </div>
    </div>

    <div class="form-outline w-50 mb-4 mt-4 m-auto">
        <div class="input-group flex-nowrap">
            <input type="text" class="form-control" placeholder="Last Name" name="add-lname" aria-label="Last Name"
                aria-describedby="addon-wrapping">
        </div>
    </div>

    <div class="form-outline w-50 mb-4 mt-4 m-auto">
        <div class="input-group flex-nowrap">
            <input type="text" class="form-control" placeholder="Username" name="add-username" aria-label="username"
                aria-describedby="addon-wrapping">
        </div>
    </div>

    <div class="form-outline w-50 mb-4 mt-4 m-auto">
        <div class="input-group flex-nowrap">
            <input type="text" class="form-control" placeholder="Email" name="add-email" aria-label="email"
                aria-describedby="addon-wrapping">
        </div>
    </div>

    <div class="form-outline w-50 mb-4 mt-4 m-auto">
        <div class="input-group flex-nowrap">
            <input type="text" class="form-control" placeholder="Password" name="add-password" aria-label="Password"
                aria-describedby="addon-wrapping">
        </div>
    </div>

    <div class="form-outline w-50 mb-4 mt-4 m-auto">
        <div class="input-group flex-nowrap">
            <select type="text" class="form-select" placeholder="Account Type" name="add-accounttype"
                aria-label="Account Type" aria-describedby="addon-wrapping">
                <option value="user">USER</option>
                <option value="staff">STAFF</option>
            </select>
        </div>
    </div>

    <div class="form-outline w-50 mb-4 mt-4 m-auto">
        <div class="input-group flex-nowrap">
            <input type="submit" class="btn btn-dark px-3 my-3 border-0" value="Submit" name="submit-user"
                aria-label="Username" aria-describedby="addon-wrapping">
        </div>
    </div>
</form>
