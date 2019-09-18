<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6577800af360df1c76e16143f7835dea
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'anytizer\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'anytizer\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/anytizer',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6577800af360df1c76e16143f7835dea::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6577800af360df1c76e16143f7835dea::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
