<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static setTestOne($name, $age, $male)
 * @method static getTestOneTypes()
 * @see \App\Services\TestBasicService
 */
class TestBasicServiceFacade  extends Facade    {
    protected static function getFacadeAccessor()    {
        return 'service.test_one';
    }
}
