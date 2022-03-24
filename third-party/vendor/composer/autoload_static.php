<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb9d672d234a3d43fa8ace493e8708e77
{
    public static $classMap = array (
        'WSAL_Vendor\\MirazMac\\Requirements\\Checker' => __DIR__ . '/..' . '/mirazmac/php-requirements-checker/src/Checker.php',
        'WSAL_Vendor\\WP_Async_Request' => __DIR__ . '/..' . '/deliciousbrains/wp-background-processing/classes/wp-async-request.php',
        'WSAL_Vendor\\WP_Background_Process' => __DIR__ . '/..' . '/deliciousbrains/wp-background-processing/classes/wp-background-process.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitb9d672d234a3d43fa8ace493e8708e77::$classMap;

        }, null, ClassLoader::class);
    }
}
