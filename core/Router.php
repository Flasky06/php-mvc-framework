<?php

namespace app\core;

/**
 * Class Router
 * 
 * @author Bony
 * @package app\core
 */
class Router
{
    protected Request $request; 
    protected array $routes = [];

    /**
     * Router Constructor
     * 
     * @param \app\core\Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }


    public function get($path,$callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    /**
     * Resolve the current request and call the appropriate callback
     */
    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false;

        if($callback === false){
            echo 'Not found';
            exit;
        }
        
        echo call_user_func($callback);        
    }
}
