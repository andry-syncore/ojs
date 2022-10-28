<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8b2a1b7e136792a6f80a8c388219d426
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        'd9e2a8c16442dde496ed7a052bc063c9' => __DIR__ . '/..' . '/seboettg/citeproc-php/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Seboettg\\Collection\\' => 20,
            'Seboettg\\CiteProc\\' => 18,
        ),
        'M' => 
        array (
            'MyCLabs\\Enum\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Seboettg\\Collection\\' => 
        array (
            0 => __DIR__ . '/..' . '/seboettg/collection/src',
        ),
        'Seboettg\\CiteProc\\' => 
        array (
            0 => __DIR__ . '/..' . '/seboettg/citeproc-php/src',
        ),
        'MyCLabs\\Enum\\' => 
        array (
            0 => __DIR__ . '/..' . '/myclabs/php-enum/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8b2a1b7e136792a6f80a8c388219d426::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8b2a1b7e136792a6f80a8c388219d426::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8b2a1b7e136792a6f80a8c388219d426::$classMap;

        }, null, ClassLoader::class);
    }
}