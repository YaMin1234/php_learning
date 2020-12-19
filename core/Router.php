<?php
class Router{
    protected $routes = [
      "GET"=>[
        
      ],
    "POST"=>[
      
    ]//associative array, key=>uri,value=>controller
               
    ];
   
    

   
    public function register($routes)
    {
        $this->routes = $routes;
    }
    
    public function get($uri,$controller)
    {
       $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri,$controller)
    {
       $this->routes['POST'][$uri] = $controller;
    }
    public static function load($filename)
    {
        $router = new Router;
        require $filename;
        return $router;
    }
    
    public function direct($uri,$method)//about,GET or POST
    {
      if(!array_key_exists($uri,$this->routes[$method]))
      {
        die("404 Page");
      }
     
      //dd($this->routes[$method][$uri])=>Pagescotroller@home
      //dd(explode("@",$this->routes[$method][$uri]))=>၀င်လာတဲ့string @တွေ့တာနဲ့တစ်ပိုင်းဆီပိုင်းပြီး array တစ်ခုဖြစ်လာ 
        $explosion = explode("@",$this->routes[$method][$uri]);
        $this->callMethod($explosion[0],$explosion[1]);
    }
 
    public function callMethod($class,$method)
    {
      //dd($class)=>PagesController
        $class = new $class;//overwrite=>$class = new PagesController;
        $class->$method();
    }
}
?>