<?php
    // $query->insert([
    //     "name"=>$_POST['name'],
    //     "age" =>$_POST['age']
    // ],"users");

    App::get("query")->insert([
        "name"=>$_POST['name'],
        "age" =>$_POST['age']
    ],"users");
    header("location: /")
?>