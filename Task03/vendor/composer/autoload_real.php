<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitc605267ec6e40b2d1137c19bc0e0ba3e
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

        spl_autoload_register(array('ComposerAutoloaderInitc605267ec6e40b2d1137c19bc0e0ba3e', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitc605267ec6e40b2d1137c19bc0e0ba3e', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitc605267ec6e40b2d1137c19bc0e0ba3e::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
