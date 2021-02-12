<?php

namespace Diezeel\LaravelIsbn\Tests;

use Diezeel\LaravelIsbn\Facades\Isbn;
use Diezeel\LaravelIsbn\LaravelIsbnServiceProvider;
use Orchestra\Testbench\TestCase;

class LaravelIsbnTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [LaravelIsbnServiceProvider::class];
    }

    protected function getPackageAliases($app)
    {
        return [
            'laravel-isbn' => Isbn::class,
        ];
    }

    public function testExample()
    {
        $this->assertEquals(1, 1);
    }
}
