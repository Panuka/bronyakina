<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite748bff48c43be74137bad962a392c7a
{
    public static $files = array (
        '2cffec82183ee1cea088009cef9a6fc3' => __DIR__ . '/..' . '/ezyang/htmlpurifier/library/HTMLPurifier.composer.php',
    );

    public static $prefixLengthsPsr4 = array (
        'y' => 
        array (
            'yii\\gii\\' => 8,
            'yii\\composer\\' => 13,
            'yii\\bootstrap\\' => 14,
            'yii\\' => 4,
        ),
        'c' => 
        array (
            'cebe\\markdown\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'yii\\gii\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-gii/src',
        ),
        'yii\\composer\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-composer',
        ),
        'yii\\bootstrap\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-bootstrap/src',
        ),
        'yii\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2',
        ),
        'cebe\\markdown\\' => 
        array (
            0 => __DIR__ . '/..' . '/cebe/markdown',
        ),
    );

    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HTMLPurifier' => 
            array (
                0 => __DIR__ . '/..' . '/ezyang/htmlpurifier/library',
            ),
        ),
        'D' => 
        array (
            'Diff' => 
            array (
                0 => __DIR__ . '/..' . '/phpspec/php-diff/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite748bff48c43be74137bad962a392c7a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite748bff48c43be74137bad962a392c7a::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInite748bff48c43be74137bad962a392c7a::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
