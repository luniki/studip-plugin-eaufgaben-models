<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0d610f1fdb6f315b9d844c49e1c8cd83
{
    public static $prefixLengthsPsr4 = array (
        'e' => 
        array (
            'eAufgaben\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'eAufgaben\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0d610f1fdb6f315b9d844c49e1c8cd83::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0d610f1fdb6f315b9d844c49e1c8cd83::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
