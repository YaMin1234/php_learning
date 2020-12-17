<?php 

require "vendor/autoload.php";
//requireနဲ့bootstrap မှာ classတွေကို ခေါ်စရာမလို composerနဲ့ autoload လုပ်ခိုင်းမှာ ပထမ စလုပ်ရမှာက  composer.json fileဆောက် အဲ့ထဲမှာ
//autoload နဲ့classmapမှာ autoloading တက်ခိုင်းချင်တဲ့အရာအားလုံးကိုရေးရ project class file အားလူံးကို လုပ်စေချင်ရင် "./" ပဲရေးရ
//function ရေးထားတဲ့ fileတွေကိုတော့ autoload လုပ်မရလို့ require နဲ့ပဲခေါ်ပေး
//ပြီးရင် terminal မှာ composer install လို့ရိုက်
//ပြီးရင် vendor file ပေါ်လာ အဲ့ fileကိုခေါ်ချင်ရင် index.phpမှာ require "vendor/autoload.php" နဲ့ခေါ် 
//fileတွေထပ်ထည့်ရင် file name နဲ့ class nameတူ‌အောင်ပေးရ
//ထပ်ထည့်လိုက်တဲ့ file ကအလုပ်မလုပ်သေး အလုပ်လုပ်အောင် terminalမှာ composer dump-autoload ဆိုပြီး ရိုက်‌ပေးရရ 
require "core/bootstrap.php";


require Router::load("routes.php")
                ->direct(Request::uri(),$_SERVER['REQUEST_METHOD']);
?>