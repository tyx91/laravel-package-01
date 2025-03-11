<?php

namespace Tian\TestLaravelPackage\Tests;

use Orchestra\Testbench\TestCase;
use Tian\TestLaravelPackage\Facades\Study;
use Tian\TestLaravelPackage\StudyServiceProvider;

class StudyTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [StudyServiceProvider::class];
    }

    protected function getPackageAliases($app)
    {
        return [
            'Study' => Study::class,
        ];
    }

    /** @test */
    public function it_can_say_hello()
    {
        $this->assertEquals('Hello, World!', Study::hello());
        $this->assertEquals('Hello, Laravel!', Study::hello('Laravel'));
    }
}