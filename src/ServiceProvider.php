<?php

namespace NogorSolutionsLTD\Error;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/publish/errors' => resource_path('views/errors'),
        ], 'nogor-solutions-ltd-error');
    }
}
