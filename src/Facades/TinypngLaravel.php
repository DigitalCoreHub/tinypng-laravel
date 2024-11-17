<?php

namespace DigitalCoreHub\TinypngLaravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \DigitalCoreHub\TinypngLaravel\TinypngLaravel
 */
class TinypngLaravel extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'tinypng';
    }
}
