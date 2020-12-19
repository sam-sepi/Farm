<?php

include('vendor/autoload.php');

$router = new Farm\Libraries\Router(Farm\Libraries\Request::getParsedURL(), function($route, $params)
{    
    //methods allowed
    if(!in_array(Farm\Libraries\Request::getMethod(), Farm\App\Config::METHODS_ALLOWED)) 
    { 
        $route = '405';
    }

    //permission
    /*$session = new Router\Session;

    if((Router\Config::ROUTES_ALLOWED[$route][1] > 0) && ($session->role < Router\Config::ROUTES_ALLOWED[$route][1]))
    {
        $route = '401';
    }*/

    $response = new Farm\Libraries\Response($route, $params);
    
    echo $response->getContent();
});