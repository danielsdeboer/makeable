<?php

namespace Aviator\Makeable\Traits;

trait MakeableTrait
{
    /**
     * Static constructor.
     * @param array ...$args
     * @return static
     */
    public static function make (...$args)
    {
        return new static(...$args);
    }
}
