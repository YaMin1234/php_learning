<?php
class Request{
    public static function uri()
    {
      return parse_url(trim($_SERVER['REQUEST_URI'],'/'),PHP_URL_PATH);

      //parse_url=>uri(route) မှာ ပါလာတဲ့ input field မှာရိုက်ထည့်တဲ့ data တွေကို ဖျက်ပေး / url နဲ့ပတ်သတ်ပြီးစီမံပေး
       // trimက REQUEST_URI ပါလာတဲ့ / ကိုဖျက်ပေး
       //PHP_URL_PATH ကိုပါထည့်ပေးရ
       //parse_url မရေးရင် uri မှာ data တွေပါ ပါနေလိူ့ errorတက်

    }
}
?>