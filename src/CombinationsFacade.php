<?php

namespace PBDP\Combinations;

use Illuminate\Support\Facades\Facade;

/**
 * @see \PBDP\Combinations\Skeleton\SkeletonClass
 */
class CombinationsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'combinations';
    }
}
