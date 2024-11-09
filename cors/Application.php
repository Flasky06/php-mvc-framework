<?php

/**
 * Application Class
 * 
 * @author Bony
 * @package Namespace
 */

namespace MyApp;

class Application
{
    public Router $router;

    public function __construct()
    {
        $this->router = new Router();
    }
}
