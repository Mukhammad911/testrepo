<?php

namespace Teleglobal\Videowork;

use Illuminate\Support\ServiceProvider;

class VideoWorkServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/videowork.php' => config_path('videowork.php'),
        ], 'config');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('telegblobal.videowork.console.kernel', function($app) {
            $dispatcher = $app->make(\Illuminate\Contracts\Events\Dispatcher::class);
            return new \Teleglobal\Videowork\Console\Kernel($app, $dispatcher);
        });

        $this->app->make('telegblobal.videowork.console.kernel');
    }
}
