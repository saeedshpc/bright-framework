<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite85fe81fbdfcd6b29cf39e8906ee0b5b
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite85fe81fbdfcd6b29cf39e8906ee0b5b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite85fe81fbdfcd6b29cf39e8906ee0b5b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
