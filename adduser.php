<?php
    if(isset($_POST['submit-user'])) {

    }
?>


<form action="" method="POST" class="mb-2">

    <h3>ADD USER</h3>

    <div class="input w-90 mb-4 mt-4">
        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-reciept"></i>
            </span>
            <input type="text" class="form-control" placeholder="First Name" name="add-fname" aria-label="Username" aria-describedby="addon-wrapping">
        </div>
    </div>

    <div class="input w-90 mb-4">
        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-reciept"></i>
            </span>
            <input type="text" class="form-control" placeholder="Last Name" name="add-lname" aria-label="Last Name" aria-describedby="addon-wrapping">
        </div>
    </div>

    <div class="input w-90 mb-4">
        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-reciept"></i>
            </span>
            <input type="text" class="form-control" placeholder="Username" name="add-username" aria-label="username" aria-describedby="addon-wrapping">
        </div>
    </div>

    <div class="input w-90 mb-4">
        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-reciept"></i>
            </span>
            <input type="text" class="form-control" placeholder="Email" name="add-email" aria-label="email" aria-describedby="addon-wrapping">
        </div>
    </div>

    <div class="input w-90 mb-4">
        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-reciept"></i>
            </span>
            <input type="text" class="form-control" placeholder="Password" name="add-password" aria-label="Password" aria-describedby="addon-wrapping">
        </div>
    </div>

    <div class="input w-90 mb-4">
         <div class="input-group flex-nowrap">
            <input type="submit" class="btn btn-dark p-2 my-3 border-0" value="Submit" name="submit-user" 
            aria-label="Username" aria-describedby="addon-wrapping"> 
        </div>
    </div>
</form>