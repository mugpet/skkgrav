<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitef6e9937a63bd796f32542b02941ee0e
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Semver\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Semver\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/semver/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'Z' => 
        array (
            'ZendXml\\' => 
            array (
                0 => __DIR__ . '/..' . '/zendframework/zendxml/library',
            ),
        ),
        'P' => 
        array (
            'PicoFeed' => 
            array (
                0 => __DIR__ . '/..' . '/fguillot/picofeed/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitef6e9937a63bd796f32542b02941ee0e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitef6e9937a63bd796f32542b02941ee0e::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitef6e9937a63bd796f32542b02941ee0e::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
