<?php

// autoload_real.php @generated by Composer

class bwdabComposerAutoloaderInit47426fc70a8be5a04fad448b52533155
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('bwdabComposerAutoloaderInit47426fc70a8be5a04fad448b52533155', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('bwdabComposerAutoloaderInit47426fc70a8be5a04fad448b52533155', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\bwdabComposerStaticInit47426fc70a8be5a04fad448b52533155::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
