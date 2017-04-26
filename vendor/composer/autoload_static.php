<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit731c3f4aa78a39b6fdd309226c1b8be1
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Codecourse\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Codecourse\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/Codecourse',
        ),
    );

    public static $classMap = array (
        'Codecourse\\Filters\\AutoFilter' => __DIR__ . '/../..' . '/app/Codecourse/Filters/AutoFilter.php',
        'Codecourse\\Repositories\\UserRepository' => __DIR__ . '/../..' . '/app/Codecourse/Repositories/UserRepository.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit731c3f4aa78a39b6fdd309226c1b8be1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit731c3f4aa78a39b6fdd309226c1b8be1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit731c3f4aa78a39b6fdd309226c1b8be1::$classMap;

        }, null, ClassLoader::class);
    }
}
