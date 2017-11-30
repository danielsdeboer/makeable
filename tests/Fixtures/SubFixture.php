<?php

namespace Tests\Fixtures;

class SubFixture extends Fixture
{
    public $array;

    public function __construct (array $array)
    {
        $this->array = $array;
    }
}
