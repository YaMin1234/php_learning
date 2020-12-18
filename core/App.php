<?php
 class App{

    protected static $datas = []; //declare static property
    public static function bind($key,$value)//static function ထဲမှာ static propertyကိုပြန်ခေါ်ပုံ 
    {
       static::$datas[$key] = $value ;//or self::$datas
    }
    public static function get($key)
    {
        return static::$datas[$key];
    }
 }
?>