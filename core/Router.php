<?php
class Router{
    protected $routes = [];
    // ["" => "controllers/IndexController.php",
   // "about" => "controllers/AboutController.php",
    //"contact" => "controllers/ContactController.php"],

   
    public function register($routes)
    {
        $this->routes = $routes;
    }

    public static function load($filename)
    {
        $router = new Router;
        require $filename;
        return $router;
    }
    
    public function direct($uri)
    {
      if(array_key_exists($uri,$this->routes))
      {
        return  $this->routes[$uri];//controllers/$uriController.php
      }
    }
}
?>