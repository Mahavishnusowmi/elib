<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbb1e3d04f42d55d3a17febbd7db995ef
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbb1e3d04f42d55d3a17febbd7db995ef::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbb1e3d04f42d55d3a17febbd7db995ef::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
