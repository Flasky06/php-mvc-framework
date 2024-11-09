<?php

namespace app\core;

use app\core\Request;
use app\core\Router;

/**
 * Class Application
 * 
 * @author Bony
 * @package app\core
 */
class Application
{
    public Router $router;
    public Request $request;

    /**
     * Application Constructor
     * 
     * Initialize Request and Router objects.
     */
    public function __construct()
    {
        $this->request = new Request();
        $this->router = new Router($this->request);
    }

    /**
     * Run the application
     * 
     * Resolve the current request and match it with the routes
     */
    public function run()
    {
        $this->router->resolve();
    }
}
