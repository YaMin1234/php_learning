<?php
    $query->insert([
        "name"=>$_POST['name'],
        "age" =>$_POST['age']
    ],"users");

    header("location: /")
?>