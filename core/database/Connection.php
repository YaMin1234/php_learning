<?php
class Connection {
    public static function make($config)
    {
      
        try{
           return $db = new PDO(
           "{$config['host']};dbname={$config['dbName']}",
           $config['username'],
           $config['password']);//database connection
         }
         catch(PDOException $e)
         {
           echo $e->getMessage();//error message
         }
    }
}
?>