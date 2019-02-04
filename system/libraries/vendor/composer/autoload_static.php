<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit95d357440f66bb839cf5bcb2b324843d
{
    public static $prefixLengthsPsr4 = array (
        'b' => 
        array (
            'bakeiro\\' => 8,
        ),
        'Z' => 
        array (
            'ZxcvbnPhp\\' => 10,
        ),
        'W' => 
        array (
            'Whoops\\' => 7,
        ),
        'R' => 
        array (
            'ReCaptcha\\' => 10,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'PHPMailer\\PHPMailer\\' => 20,
            'PHPAuth\\' => 8,
        ),
        'F' => 
        array (
            'Faker\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'bakeiro\\' => 
        array (
            0 => __DIR__ . '/..' . '/bakeiro/micro_php_template_engine/src',
        ),
        'ZxcvbnPhp\\' => 
        array (
            0 => __DIR__ . '/..' . '/bjeavons/zxcvbn-php/src',
        ),
        'Whoops\\' => 
        array (
            0 => __DIR__ . '/..' . '/filp/whoops/src/Whoops',
        ),
        'ReCaptcha\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/recaptcha/src/ReCaptcha',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'PHPAuth\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpauth/phpauth',
        ),
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit95d357440f66bb839cf5bcb2b324843d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit95d357440f66bb839cf5bcb2b324843d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}