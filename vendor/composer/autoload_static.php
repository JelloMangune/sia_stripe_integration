<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2ebc4fda4f04af0367814516ba1a5cf5
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2ebc4fda4f04af0367814516ba1a5cf5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2ebc4fda4f04af0367814516ba1a5cf5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2ebc4fda4f04af0367814516ba1a5cf5::$classMap;

        }, null, ClassLoader::class);
    }
}
