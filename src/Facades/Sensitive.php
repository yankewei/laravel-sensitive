<?php

namespace Yankewei\LaravelSensitive\Facades;

use Illuminate\Support\Facades\Facade;
use Yankewei\LaravelSensitive\Sensitive as Accessor;

class Sensitive extends Facade
{
    protected static function getFacadeAccessor()
    {
        return Accessor::class;
    }
}