<?php

namespace ElusiveDocks\Mailer\Exception;

use ElusiveDocks\Mailer\Contract\ExceptionInterface;

/**
 * Class AbstractException
 * @package ElusiveDocks\Mailer\Exception
 */
abstract class AbstractException extends \Exception implements ExceptionInterface
{
    /**
     * @return string
     */
    public function __toString()
    {
        return parent::__toString();
    }
}
