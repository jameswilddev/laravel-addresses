<?php

namespace DivineOmega\LaravelAddresses;

use DivineOmega\LaravelAddresses\Models\Address;
use DivineOmega\LaravelAddresses\Observers\AddressObserver;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        Address::observe(AddressObserver::class);
    }
}