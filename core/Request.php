<?php

namespace app\core;

/**
 * Class Request
 * 
 * @author Bony
 * 
 * @package app\core
 */
class Request
{
    
    public function getPath()
    {
        // Get the full request URI, default to '/' if not available
        $path = $_SERVER['REQUEST_URI'] ?? '/';

        // Find the position of the query string (if any)
        $position = strpos($path, '?');

        // Return the part of the path before the query string, if any
        if ($position === false) {
            return $path;
        }

        return substr($path, 0, $position);
    }

    /**
     * Get the HTTP method of the request (e.g., GET, POST).
     *
     * @return string
     */
    public function getMethod(): string
    {
        // Return the HTTP method in lowercase
        return strtolower($_SERVER['REQUEST_METHOD']);
    }
}
