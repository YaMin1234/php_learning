<?php
  $query->delete("users",["id"=>$_POST['id']]);
  header("location: /")
?>