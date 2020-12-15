<?php

// $router->register( [
//     "" => "controllers/IndexController.php",
//     "about" => "controllers/AboutController.php",
//     "contact" => "controllers/ContactController.php",
//     "orders" => "controllers/OrderController.php",
//     "customers" => "controllers/CustomerController.php",
//     "name" => "controllers/add-name.php",

// ]);

$router->get("","controllers/IndexController.php");
$router->get("about","controllers/AboutController.php");
$router->get("contact","controllers/ContactController.php");
$router->get("orders","controllers/OrderController.php");
$router->get("customers","controllers/CustomerController.php");
$router->post("name","controllers/add-name.php");
//get => user က URL bar မှာ route ရိုက်တာ
//post => form ကနေ တဆင့် ပို့ပေးတာ
?>