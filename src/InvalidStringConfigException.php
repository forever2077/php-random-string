<?php

namespace Forever2077\RandomString;

use Exception;

class InvalidStringConfigException extends Exception
{
    public static function maxCombinationReached(): InvalidStringConfigException
    {
        return new self('Cannot generate string because there is no more possible combinations. Check your config.');
    }

    public static function invalidCharset(): InvalidStringConfigException
    {
        return new self('Invalid charset.');
    }

    public static function propertyNotPositiveNumber($property): InvalidStringConfigException
    {
        return new self(ucfirst($property) . ' must be positive number.');
    }
}
