<?php


// require "core/database/Connection.php";
// require "core/database/QueryBuilder.php";
// require "core/Router.php";
// require "core/Request.php";
//$db = Connection::make();

require "functions.php";
 $config = require "database/config.php";
$query = new QueryBuilder(
    Connection::make($config['database'])
);//connection make from connection.php and work query from querybuilder.php or second way=>$db = Connection::make();
                                                                                        //   $query = new QueryBuilder($db);



?>