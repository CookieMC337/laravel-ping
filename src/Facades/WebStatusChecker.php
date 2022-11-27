<?php

namespace CookieMC337\Checker\Facades;

use Illuminate\Support\Facades\Facade;

class WebStatusChecker extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'ping';
    }
}