<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6726a3ed5b02992829d1047d0ece33a6
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Container\\' => 14,
            'Projeto\\Gerenciamento\\' => 22,
        ),
        'A' => 
        array (
            'APP\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Projeto\\Gerenciamento\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'APP\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6726a3ed5b02992829d1047d0ece33a6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6726a3ed5b02992829d1047d0ece33a6::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit6726a3ed5b02992829d1047d0ece33a6::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
