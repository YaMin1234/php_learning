<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            background-color: grey;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>
    <ul>
       <li>Task title is <?= $tasks['title']; ?></li>
       <li>Task Due date is<?= $tasks['due']; ?></li>
       <?php
         echo $tasks['complete'] ? "Complete" : "Incomplete" ;
       ?>
    </ul>
        

</body>
</html>