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
$router->post("add","controllers/addData.php");
$router->post("edit","controllers/editData.php");
$router->post("update","controllers/updateData.php");
$router->post("delete","controllers/deleteData.php");
//get => user က URL bar မှာ route ရိုက်တာ
//post => form ကနေ တဆင့် ပို့ပေးတာ
//get ကို website page ပြချင်ရင်သုံး
// post ကို databaseထဲ dataတွေထထည့်ရင်သုံး
?>