<?php

namespace Shm379\Media\Facades;

use Illuminate\Support\Facades\Facade;
use Shm379\Media\ConversionRegistry;

class Conversion extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return ConversionRegistry::class;
    }
}
