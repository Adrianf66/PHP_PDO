<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1e0b1d15213722f2cd0aa8ecb14d9c00
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alura\\Pdo\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alura\\Pdo\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1e0b1d15213722f2cd0aa8ecb14d9c00::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1e0b1d15213722f2cd0aa8ecb14d9c00::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1e0b1d15213722f2cd0aa8ecb14d9c00::$classMap;

        }, null, ClassLoader::class);
    }
}
