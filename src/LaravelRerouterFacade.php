<?php

namespace Thomasdominic\LaravelRerouter;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Thomasdominic\LaravelRerouter\Skeleton\SkeletonClass
 */
class LaravelRerouterFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-rerouter';
    }
}
