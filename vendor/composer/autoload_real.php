<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit196705938a58671e2991fcb9b4aceb00
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

        spl_autoload_register(array('ComposerAutoloaderInit196705938a58671e2991fcb9b4aceb00', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit196705938a58671e2991fcb9b4aceb00', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit196705938a58671e2991fcb9b4aceb00::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
