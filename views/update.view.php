<?php require "views/partials/heading.php" ?>
<h1>Update your Profile</h1>

<form action="update" method="post">
    <?php foreach($users as $user): ?>
      
          <input type ="hidden" value="<?= $user->id ?>" name="id">
            <div class="form-input">
            <label for=""> User Name</label>
            <input type="text" name="name" value="<?= $user->name ?>">
            </div>
            <div class="form-input">
            <label for="">Age</label>
            <input type="number" name="age" value="<?= $user->age ?>">
            </div>
            <input type="submit" value="Update" class="btn">
    <?php endforeach; ?>
</form>



<?php require "views/partials/footer.php" ?>