<?php require "views/partials/heading.php" ?>

<h1>User Lists</h1>
<ul>
<?php foreach($users as $user):?>
  <li>Name ~ <?= $user->name?></li>
  <li>Age  ~ <?= $user->age ?></li>
   <form action="edit" method="post">
      <input type ="hidden" value="<?= $user->id ?>" name="id">
      <input type="submit" value="Update" class="updateBtn">
   </form>
   <form action="delete" method="post">
      <input type ="hidden" value="<?= $user->id ?>" name="id">
      <input type="submit" value="Delete" onclick="deleteRecord()" class="deleteBtn">
   </form>
   <?php endforeach;?>
</ul>

<h1>Submit your Profile</h1>

<form action="add" method="post">
<div class="form-input">
   <label for=""> User Name</label>
   <input type="text" name="name">
</div>
<div class="form-input">
   <label for="">Age</label>
   <input type="number" name="age">
</div>
   <input type="submit" value="Add New" class="btn">
</form>

<script>
    function deleteRecord()
   {
      let y = window.confirm("Are you sure to delete this record");
      window.alert(y);
   }
</script>


<?php require "views/partials/footer.php" ?>
