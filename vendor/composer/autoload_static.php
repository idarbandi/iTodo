<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit269f9b3c09bcdbab70a2e979bef49a5e
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Root\\ITodo\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Root\\ITodo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit269f9b3c09bcdbab70a2e979bef49a5e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit269f9b3c09bcdbab70a2e979bef49a5e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit269f9b3c09bcdbab70a2e979bef49a5e::$classMap;

        }, null, ClassLoader::class);
    }
}
