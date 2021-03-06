<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit66a9f9b8af8d2e81b911971f5d59c1a5
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

    public static $prefixesPsr0 = array (
        'o' => 
        array (
            'org\\bovigo\\vfs' => 
            array (
                0 => __DIR__ . '/..' . '/mikey179/vfsStream/src/main/php',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit66a9f9b8af8d2e81b911971f5d59c1a5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit66a9f9b8af8d2e81b911971f5d59c1a5::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit66a9f9b8af8d2e81b911971f5d59c1a5::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
