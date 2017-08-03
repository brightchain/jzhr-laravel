<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use function Sodium\add;
use Spatie\Menu\Link;
use Spatie\Menu\Menu;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        
        $title='首页';

        view()->share(compact('menu','title'));

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
