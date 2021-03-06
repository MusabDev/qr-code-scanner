<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite2fe61decbad1f2ff060a6a97bd0f0ae
{
    public static $files = array (
        'a9ed0d27b5a698798a89181429f162c5' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Common/customFunctions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Zxing\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zxing\\' => 
        array (
            0 => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite2fe61decbad1f2ff060a6a97bd0f0ae::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite2fe61decbad1f2ff060a6a97bd0f0ae::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite2fe61decbad1f2ff060a6a97bd0f0ae::$classMap;

        }, null, ClassLoader::class);
    }
}
