<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7ce0ff1cd39c69cbc71a559e7b89cd09
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7ce0ff1cd39c69cbc71a559e7b89cd09::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7ce0ff1cd39c69cbc71a559e7b89cd09::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7ce0ff1cd39c69cbc71a559e7b89cd09::$classMap;

        }, null, ClassLoader::class);
    }
}
