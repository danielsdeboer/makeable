<?php

namespace Tests\Fixtures;

use Aviator\Makeable\Interfaces\Makeable;
use Aviator\Makeable\Traits\MakeableTrait;

class AbstractFixture implements Makeable
{
    use MakeableTrait;
}
