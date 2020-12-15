<?php
class Router{
    protected $routes = [
      "GET"=>[
        //"about"=>"contollers/...."
      ],
    "POST"=>[
      //"name"=>"contollers/...."
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
      if(array_key_exists($uri,$this->routes[$method]))
      {
        return  $this->routes[$method][$uri];//controllers/$uriController.php
      }
      die("404 Page");
    }
}
?>