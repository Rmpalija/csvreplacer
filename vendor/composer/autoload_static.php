<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc6b0b1e1299929c72e4e7f5da573ae4b
{
    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'PHPExcel' => 
            array (
                0 => __DIR__ . '/..' . '/phpoffice/phpexcel/Classes',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitc6b0b1e1299929c72e4e7f5da573ae4b::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
