<?php

namespace Farm\App;

class Config
{
    const HOST = "/opt/lampp/htdocs/";
    const METHODS_ALLOWED = ['get', 'post'];

    //roles
    const USER = 0;
    const PUBLISHER = 1;
    const ADMIN = 2;

    /**
     * array = ['route' => ['path', 'permission'];
     */
    const ROUTES_ALLOWED = 
    [
        'index' => ['Farm/views/index.html', 0],
        'article' => ['Farm/views/content.php', 0],
        '401' => ['Farm/views/401.html', 0],
        '405' => ['Farm/views/405.html', 0],
        'vampire' => ['Farm/views/vampire.php']
    ];

    /**
     * Cookies Params
     */
    const COOKIES_PARAMS =
    [
        'cookie_httponly' => 1, 
        'cookie_lifetime'  => 0
    ];
}