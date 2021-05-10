<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Libraries\Hashing\Sha512Hasher;

class ShaHashingServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app['hash']->extend('sha512', function(){
            return new Sha512Hasher();
        });
    }
}
