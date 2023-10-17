<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit61b7c65fec555d7399b4f1f74fe889c9
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'WSAL_Vendor\\WP_Async_Request' => __DIR__ . '/..' . '/classes/wp-async-request.php',
        'WSAL_Vendor\\WP_Background_Process' => __DIR__ . '/..' . '/classes/wp-background-process.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit61b7c65fec555d7399b4f1f74fe889c9::$classMap;

        }, null, ClassLoader::class);
    }
}
