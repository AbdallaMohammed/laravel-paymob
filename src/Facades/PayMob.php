<?php

namespace  Laravel\PayMob\Facades;

use Illuminate\Support\Facades\Facade;

class PayMob extends Facade
{
    protected static  function getFacadeAccessor()
    {
        return 'PayMob';
    }
}