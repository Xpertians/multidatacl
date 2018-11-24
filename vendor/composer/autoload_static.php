<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitabc0d7356e94fb32083aeb18c9a333a3
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Model\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
        'H' => 
        array (
            'Hybrid' => 
            array (
                0 => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitabc0d7356e94fb32083aeb18c9a333a3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitabc0d7356e94fb32083aeb18c9a333a3::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitabc0d7356e94fb32083aeb18c9a333a3::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}