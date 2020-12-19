<?php



// $router->get("","controllers/IndexController.php");
// $router->get("about","controllers/AboutController.php");
// $router->get("contact","controllers/ContactController.php");
// $router->get("orders","controllers/OrderController.php");
// $router->get("customers","controllers/CustomerController.php");
// $router->post("add","controllers/addData.php");
// $router->post("edit","controllers/editData.php");
// $router->post("update","controllers/updateData.php");
// $router->post("delete","controllers/deleteData.php");
//get => user က URL bar မှာ route ရိုက်တာ
//post => form ကနေ တဆင့် ပို့ပေးတာ
//get ကို website page ပြချင်ရင်သုံး
// post ကို databaseထဲ dataတွေထထည့်ရင်သုံး

$router->get("","PagesController@home");
$router->get("about","PagesController@about");
$router->get("contact","PagesController@contact");
$router->get("orders","PagesController@order");
$router->get("customers","PagesController@customer");
$router->post("add","PagesController@addNew");
$router->post("edit","PagesController@edit");
$router->post("update","PagesController@update");
$router->post("delete","PagesController@delete");








$router->get("users","UserController@index");
?>