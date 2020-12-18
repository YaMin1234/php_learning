<?php

//$users = $query->selectById("users",["id"=>$_POST['id']]);
$users = App::get('query')->selectById("users",["id"=>$_POST['id']]);

require("views/update.view.php");

?>