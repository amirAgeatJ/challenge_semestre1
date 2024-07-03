<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbe9ccf3b5129542c617d8397bc410502
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'A' => 
        array (
            'App\\Core\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'App\\Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Core',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbe9ccf3b5129542c617d8397bc410502::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbe9ccf3b5129542c617d8397bc410502::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbe9ccf3b5129542c617d8397bc410502::$classMap;

        }, null, ClassLoader::class);
    }
}
