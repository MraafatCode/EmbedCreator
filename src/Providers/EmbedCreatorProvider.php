<?php

namespace MraafatCode\EmbedCreator\Providers;

use Illuminate\Support\ServiceProvider;

class EmbedCreatorProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadViewsFrom(__DIR__ . '/../Views', 'MraafatCode');
    }
}
