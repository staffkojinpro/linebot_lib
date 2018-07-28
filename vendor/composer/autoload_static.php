<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita143f4f37e5342811352c9b95e98415b
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LINE\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LINE\\' => 
        array (
            0 => __DIR__ . '/..' . '/linecorp/line-bot-sdk/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita143f4f37e5342811352c9b95e98415b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita143f4f37e5342811352c9b95e98415b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}