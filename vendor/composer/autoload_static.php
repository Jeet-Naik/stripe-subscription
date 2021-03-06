<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcd9a45d8b547ea24b679f06613550599
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitcd9a45d8b547ea24b679f06613550599::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcd9a45d8b547ea24b679f06613550599::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcd9a45d8b547ea24b679f06613550599::$classMap;

        }, null, ClassLoader::class);
    }
}
