<?php require "views/partials/heading.php" ?>


    <h1>My Schedule</h1>
    <ul>
    <?php foreach($tasks as $task): ?>
        <li>
            <?php 
                if($task->complete){
                echo "<strike>$task->description</strike>";
                }
                else{
                    echo $task->description;
                }
            ?>
        </li>
     <?php endforeach?>
     </ul><hr>
     <h1>Users List</h1>
     <ul>
    <?php foreach($users as $user): ?>
        <li>
          Name is  <?= $user->name ?>
          Age  is  <?= $user->age  ?>
        </li>
     <?php endforeach?>
     </ul>
<?php require "views/partials/footer.php" ?>
