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
    <h1><?= "Hello ".htmlspecialchars($_GET['name']); ?></h1>
        <!-- getting variable from URL and htmlspecialchars=>checking whether include html tags and then this tags convert to string-->

</body>
</html>