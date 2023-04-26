<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit93ab0adc69b12937b1dea260905628ce
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit93ab0adc69b12937b1dea260905628ce::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit93ab0adc69b12937b1dea260905628ce::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit93ab0adc69b12937b1dea260905628ce::$classMap;

        }, null, ClassLoader::class);
    }
}