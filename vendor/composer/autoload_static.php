<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6fd0a9eccf18bb81c8b4458c3e1074d4
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Router\\' => 7,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Router\\' => 
        array (
            0 => __DIR__ . '/../..' . '/routes',
        ),
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit6fd0a9eccf18bb81c8b4458c3e1074d4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6fd0a9eccf18bb81c8b4458c3e1074d4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6fd0a9eccf18bb81c8b4458c3e1074d4::$classMap;

        }, null, ClassLoader::class);
    }
}
