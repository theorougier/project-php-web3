<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit64b30f5dd62f3d2d6f38fa80a8e2848a
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit64b30f5dd62f3d2d6f38fa80a8e2848a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit64b30f5dd62f3d2d6f38fa80a8e2848a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
