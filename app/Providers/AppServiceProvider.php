<?php

namespace App\Providers;

use Faker\Factory;
use Faker\Generator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //$this->app->bind(SmsGatewayContract::class, config('sms.active_gateway'));
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        $this->app->singleton(Generator::class, function () {
            return Factory::create('tr_TR');
        });
    }
}
