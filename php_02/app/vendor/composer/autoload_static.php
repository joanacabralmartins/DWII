<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4d4eb713acc817019de43b7640d8c91c
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'atv\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'atv\\' => 
        array (
            0 => __DIR__ . '/../..' . '/atv',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'atv\\controllers\\StudentController' => __DIR__ . '/../..' . '/atv/controllers/StudentController.php',
        'atv\\database\\Connection' => __DIR__ . '/../..' . '/atv/database/Connection.php',
        'atv\\database\\models\\Model' => __DIR__ . '/../..' . '/atv/database/models/Model.php',
        'atv\\database\\models\\Student' => __DIR__ . '/../..' . '/atv/database/models/Student.php',
        'atv\\traits\\Connection' => __DIR__ . '/../..' . '/atv/traits/Connection.php',
        'atv\\traits\\Create' => __DIR__ . '/../..' . '/atv/traits/Create.php',
        'atv\\traits\\Read' => __DIR__ . '/../..' . '/atv/traits/Read.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4d4eb713acc817019de43b7640d8c91c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4d4eb713acc817019de43b7640d8c91c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4d4eb713acc817019de43b7640d8c91c::$classMap;

        }, null, ClassLoader::class);
    }
}
