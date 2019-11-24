<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\TestBasicService;
use App\TestOne;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(TestBasicService::class, function ()   {
        	return new TestBasicService(new TestOne());
        });
        $this->app->alias(TestBasicService::class, 'service.test_one');

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
