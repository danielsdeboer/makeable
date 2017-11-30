<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Tests\Fixtures\Fixture;
use Tests\Fixtures\SubFixture;

class MakeableTraitTest extends TestCase
{
    /** @test */
    public function it_returns_an_instance ()
    {
        $instance = Fixture::make('test');

        $this->assertInstanceOf(Fixture::class, $instance);
        $this->assertSame('test', $instance->string);
    }

    /** @test */
    public function it_returns_an_instance_of_the_child_class ()
    {
        $instance = SubFixture::make(['test']);

        $this->assertInstanceOf(SubFixture::class, $instance);
        $this->assertSame(['test'], $instance->array);
        $this->assertNull($instance->string);
    }
}
