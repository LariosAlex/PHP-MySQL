<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitee7a282c3515e86134ab05585b7f86c6
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitee7a282c3515e86134ab05585b7f86c6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitee7a282c3515e86134ab05585b7f86c6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitee7a282c3515e86134ab05585b7f86c6::$classMap;

        }, null, ClassLoader::class);
    }
}