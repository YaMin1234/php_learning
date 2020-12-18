<?php

function dd($data)
{
    echo "<pre>";
    die(var_dump($data));
}

function view($name,$data=[])
{
    extract($data);
    return require "views/$name.view.php";
}
//extract က associative array ကို variable အနေနဲ့ပြောင်းလဲပေး ဉပမာ associative array ထဲမှာ users ဆိုရင် $usersဆိုတဲ့ variable အဖြစ်‌ပြောင်းလဲသွားပြီး view မှာလဲ$usersနဲ့ပဲအလုပ်လုပ်
    //$users = $query->selectAll("users"); <= extract method အလုပ်လုပ်ပုံ
    //viewဆိုတဲ့ function ကိုခေါ်သုံးရင် databaseထဲက dataတွေကို ဆွဲမထုတ်တဲ့အခါမျိုးလဲ ရှိလို့ $dataထဲမှာ array အလွတ်ထည့်ပေးရ nullထည့်လို့မရ extract methodက associative array ပဲလက်ခံလို့ arrayပဲ ထည့်ပေး
 
?>