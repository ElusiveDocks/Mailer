<?php

namespace ElusiveDocks\Mailer\Source;

/**
 * Class Mailer
 * @package ElusiveDocks\Mailer\Source
 */
class Mailer
{
    private static $Self = null;
    private static $Singleton = null;

    /**
     * Mailer constructor.
     */
    final private function __construct()
    {


    }


    /**
     * @return Mailer
     */
    private static function useSelf()
    {
        if (self::$Self === null) {
            self::$Self = new self;
        }
        return self::$Self;
    }

    /**
     * @return GenericMailer
     */
    private static function useSingleton()
    {
        if (self::$Singleton === null) {
            self::$Singleton = new GenericMailer();
        }
        return self::$Singleton;
    }
}
