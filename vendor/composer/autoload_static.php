<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5c2170eaa7ad545386b1d1a7b84cfb0d
{
    public static $prefixLengthsPsr4 = array (
        'Y' => 
        array (
            'YuanZP\\myComposer\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'YuanZP\\myComposer\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5c2170eaa7ad545386b1d1a7b84cfb0d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5c2170eaa7ad545386b1d1a7b84cfb0d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
