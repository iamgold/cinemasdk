<?php

namespace cinemasdk;

/**
 * This class is used to store all basic config for Cinema API.
 *
 * @author Eric Huang <iamgold0105@gmail.com>
 * @version 1.0.0
 */
class Cinema
{
    /**
     * @var string $host
     */
    public static $host;

    /**
     * @var string $env
     */
    public static $env;

    /**
     * @var string $sessionId
     */
    public static $sessionId;

    /**
     * @var boolean $isInit
     */
    private static $isInit = false;

    /**
     * configuration
     */
    public static function configure(array $config)
    {
        if (!isset($config['host']))
            throw new Exception("Undefined host", 404);

        static::$host = $config['host'];
        static::$env = $config['env'] ?? 'dev';
        static::$isInit = true;
    }

    /**
     * is init
     */
    public static function isInit()
    {
        return static::$isInit;
    }
}
