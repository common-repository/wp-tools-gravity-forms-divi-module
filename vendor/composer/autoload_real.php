<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitc1d033c8c73cf885171930f9c2fa93a9
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitc1d033c8c73cf885171930f9c2fa93a9', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitc1d033c8c73cf885171930f9c2fa93a9', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitc1d033c8c73cf885171930f9c2fa93a9::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
