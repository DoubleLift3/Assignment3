<?php

namespace Quwi\framework;
class Route{
    protected $routes = array();


public function route($action, string $command)
{
     
    $action = trim($action, '/');
    if ($action == null){
        $action = "index";
    }
    $this->routes[$action] = array("command" => $command);
    
}


public function dispatch(string $action)
{
    
    $action = trim($action, '/');
    if ($action == "")
    $callback = $routes[$action];
    
}
}
