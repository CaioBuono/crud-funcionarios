<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7a0b9a4707165c52f42891a7bcc9492c
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Apple\\Projeto\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Apple\\Projeto\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit7a0b9a4707165c52f42891a7bcc9492c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7a0b9a4707165c52f42891a7bcc9492c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7a0b9a4707165c52f42891a7bcc9492c::$classMap;

        }, null, ClassLoader::class);
    }
}
