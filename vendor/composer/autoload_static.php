<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit67a550d6d50c197d59e7ddf14f22ed88
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'System\\' => 7,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'System\\' => 
        array (
            0 => __DIR__ . '/../..' . '/System',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'App\\Controllers\\FirstController' => __DIR__ . '/../..' . '/App/Controllers/FirstController.php',
        'App\\Helper\\View' => __DIR__ . '/../..' . '/App/Helper/View.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'System\\Libraries\\StringHandle' => __DIR__ . '/../..' . '/System/Libraries/StringHandle.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit67a550d6d50c197d59e7ddf14f22ed88::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit67a550d6d50c197d59e7ddf14f22ed88::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit67a550d6d50c197d59e7ddf14f22ed88::$classMap;

        }, null, ClassLoader::class);
    }
}
