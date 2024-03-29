<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0e53dbca6913944eda80573b299ae1ce
{
    public static $files = array (
        '3a37ebac017bc098e9a86b35401e7a68' => __DIR__ . '/..' . '/mongodb/mongodb/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MongoDB\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MongoDB\\' => 
        array (
            0 => __DIR__ . '/..' . '/mongodb/mongodb/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0e53dbca6913944eda80573b299ae1ce::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0e53dbca6913944eda80573b299ae1ce::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0e53dbca6913944eda80573b299ae1ce::$classMap;

        }, null, ClassLoader::class);
    }
}
