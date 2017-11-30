<?php

namespace Tests\Fixtures;

class Fixture extends AbstractFixture
{
    public $string;

    public function __construct (string $string)
    {
        $this->string = $string;
    }
}
