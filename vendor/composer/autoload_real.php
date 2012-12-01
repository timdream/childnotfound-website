<?php

// autoload_real.php generated by Composer

class ComposerAutoloaderInita31da57ae71e3e95b37dca34c0a96850
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    public static function getLoader()
    {
        if (null !== static::$loader) {
            return static::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInita31da57ae71e3e95b37dca34c0a96850', 'loadClassLoader'));
        static::$loader = $loader = new \Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInita31da57ae71e3e95b37dca34c0a96850', 'loadClassLoader'));

        $vendorDir = dirname(__DIR__);
        $baseDir = dirname($vendorDir);

        $map = require __DIR__ . '/autoload_namespaces.php';
        foreach ($map as $namespace => $path) {
            $loader->add($namespace, $path);
        }

        $classMap = require __DIR__ . '/autoload_classmap.php';
        if ($classMap) {
            $loader->addClassMap($classMap);
        }

        $loader->register();

        return $loader;
    }
}
