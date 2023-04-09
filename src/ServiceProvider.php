<?php

namespace NogorSolutionsLTD\Error;

use Illuminate\Support\Facades\File;

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
        $path = resource_path('views/errors');

        if (File::exists($path)) {
            File::deleteDirectory($path);
        }

        $this->publishes([
            __DIR__.'/publish/errors' => resource_path('views/errors'),
        ], 'nogor-solutions-ltd-error');
    }
}
