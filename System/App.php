<?php

namespace System;

/**
 * This App class provides a way to make the Container class a Singleton
 * from the protected static $container property that is returned from the
 * container() method.
 */

class App
{
    // maked the container class availabe anywhere in the application
    protected static $container;

    public static function setContainer($container)
    {
        static::$container = $container;
    }

    public static function container()
    {
        return static::$container;
    }

    public static function bind($key, $resolver)
    {
        static::$container->bind($key, $resolver);
    }

    public static function resolve($key)
    {
        return static::$container->resolve($key);
    }
}