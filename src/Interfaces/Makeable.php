<?php

namespace Aviator\Makeable\Interfaces;

interface Makeable
{
    /**
     * Static constructor.
     * @param array ...$args
     * @return static
     */
    public static function make (...$args);
}
