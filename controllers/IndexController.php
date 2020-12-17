<?php
$tasks = $query->selectAll("tasks");
$users = $query->selectAll("users");

view("index",[
    "users"=>$users,
    "tasks"=>$tasks
]);
//functionထဲက viewဆိုတဲ့ helper function က view file ကိုထောက်ပေး

// function view()
// {
//     global $users;
//     var_dump($users);//php မှာ global variable တွေကို scope အတွင်းခေါ်ခွင့်မရှိ သုံးချင်ရင် global variable ကြေညာပြီးသုံးရ 

// }
?>
