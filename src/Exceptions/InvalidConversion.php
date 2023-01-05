<?php

namespace Shm379\Media\Exceptions;

use Exception;

class InvalidConversion extends Exception
{
    /**
     * @param string $name
     * @return InvalidConversion
     */
    public static function doesNotExist($name)
    {
        return new static("Conversion `{$name}` does not exist");
    }
}
