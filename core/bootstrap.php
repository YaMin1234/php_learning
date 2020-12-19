<?php

require "functions.php";

App::bind("config",require "database/config.php");
// $config = require "database/config.php";
//configဆိုတဲ့ keyထဲမှာ config.phpကိုသိမ်း 
//App::get("config");//data တွေကိုပြန်လိုချင်ရင်keyနဲ့ပြန်ခေါ် 
App::bind("query",new QueryBuilder(
          Connection::make(App::get("config")['database'])));
// $query = new QueryBuilder(
//    Connection::make($config['database'])
//  );

//$queryကိုပြန်ခေါ်တဲ့နေရာတိုင်းမှာ $queryလို့ခေါ်မဲ့အစား App::get('query')လို့ပဲခေါ်ရ 
//bind() က ပါလာတဲ့ dataတွေကို App class ထဲကdatas arrayထဲမှာသိမ်း


//Dependency injection => container တစ်ခု data သိမ်းဖို့သုံး
//queryတွေ objတွေကို variableထဲထည့် မသုံးသင့် dependency ငြိနိုင်
//class အနေနဲ့သိမ်းရ  
//App class ကိုအသစ်ရေးလို့ မှာ terminal မှာcomposer dump-autoload ဆိုပြီးရေးရရ



?>