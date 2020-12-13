<?php

function dd($data)
{
    echo "<pre>";
    die(var_dump($data));
}

function dbconnection()
{
    try{
       return $db = new PDO("mysql:host=localhost;dbname=php_learning","root","");//database connection
    }
    catch(PDOException $e)
    {
      echo $e->getMessage();//error message
    }
}

function fetchTasks($db)
{
    $statement = $db->prepare("select * from tasks");
    $statement->execute();
    return$tasks = $statement->fetchAll(PDO::FETCH_OBJ);//return data  as stdclass obj  or fetchALL(PDO::Fetch_obj)=>return data as associative array
}
?>