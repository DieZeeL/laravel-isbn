<?php

namespace Diezeel\LaravelIsbn\Facades;

use Illuminate\Support\Facades\Facade;

class Isbn extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'isbn';
    }
}
