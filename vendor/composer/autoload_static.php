<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit348ecbb0ca1872fe527c10d77d3ebcb1
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit348ecbb0ca1872fe527c10d77d3ebcb1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit348ecbb0ca1872fe527c10d77d3ebcb1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit348ecbb0ca1872fe527c10d77d3ebcb1::$classMap;

        }, null, ClassLoader::class);
    }
}
