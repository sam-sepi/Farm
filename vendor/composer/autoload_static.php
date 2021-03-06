<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfd17da459e906a45f925685637c4bca4
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Farm\\Libraries\\' => 15,
            'Farm\\Engines\\Storyteller\\' => 25,
            'Farm\\Engines\\' => 13,
            'Farm\\App\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Farm\\Libraries\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/libraries',
        ),
        'Farm\\Engines\\Storyteller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/engines/storyteller',
        ),
        'Farm\\Engines\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/engines',
        ),
        'Farm\\App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/app',
        ),
    );

    public static $classMap = array (
        'Farm\\App\\Config' => __DIR__ . '/../..' . '/src/app/Config.php',
        'Farm\\Engines\\CreationEngine' => __DIR__ . '/../..' . '/src/engines/CreationEngine.php',
        'Farm\\Engines\\Storyteller\\Clan' => __DIR__ . '/../..' . '/src/engines/storyteller/Clan.php',
        'Farm\\Libraries\\JsonHandling' => __DIR__ . '/../..' . '/src/libraries/JsonHandling.php',
        'Farm\\Libraries\\Request' => __DIR__ . '/../..' . '/src/libraries/Request.php',
        'Farm\\Libraries\\Response' => __DIR__ . '/../..' . '/src/libraries/Response.php',
        'Farm\\Libraries\\Router' => __DIR__ . '/../..' . '/src/libraries/Router.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfd17da459e906a45f925685637c4bca4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfd17da459e906a45f925685637c4bca4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfd17da459e906a45f925685637c4bca4::$classMap;

        }, null, ClassLoader::class);
    }
}
