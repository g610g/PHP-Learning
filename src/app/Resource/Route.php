<?php

declare(strict_types=1);

namespace App\Resource;

class Route
{
    private $routeContainer = [];
    private function registerRoute(string $url, array|string $action, string $methodName)
    {
        $this->routeContainer[$methodName] = [$url => $action];
    }
    public function get(string $url, array|string $action)
    {
        $this->registerRoute($url, $action, 'get');
    }
    public function post(string $url, array|string $action)
    {
        $this->registerRoute($url, $action, 'post');
    }

    public function resolve(string $requestUrl, string $requestMethod)
    {
        phpinfo();
        $requestMethod = strtolower($requestMethod);
        if (!empty($this->routeContainer[$requestMethod][$requestUrl]))
        {
            
            if (is_array($this->routeContainer[$requestMethod][$requestUrl]))
            {
                
            }
            

        }
    }
}