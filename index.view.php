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
        <?php foreach($persons as $key=>$value):?>
            <li><?= $key."=>".$value ?></li>
        <?php endforeach; ?>
    </ul>
        

</body>
</html>