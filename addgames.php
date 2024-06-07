<?php
    if(isset($_POST['submit-game'])) {

    }
?>


<form action="" method="POST" class="mb-2">

    <h3>ADD GAMES</h3>

    <div class="input w-90 mb-2">
        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-reciept"></i>
            </span>
            <input type="text" class="form-control" placeholder="Name" name="add-game" aria-label="Username" aria-describedby="addon-wrapping">
        </div>
    </div>

    <div class="input w-90 mb-2">
         <div class="input-group flex-nowrap">
            <input type="submit" class="btn btn-dark p-2 my-3 border-0" value="Submit" name="submit-game" 
            aria-label="Username" aria-describedby="addon-wrapping"> 
        </div>
    </div>
</form>