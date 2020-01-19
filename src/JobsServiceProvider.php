<?php

namespace Codekidney\Jobs;

use Illuminate\Support\ServiceProvider;
use Codekidney\Jobs\Jobs;

class JobsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Codekidney\Jobs\JobsController'); 
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind('JobsService', Jobs::class);
        include __DIR__.'/routes/web.php';
    }
}
