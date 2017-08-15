<?php

namespace App\Providers;

use App\Webinfo;
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

        
        $webinfo=Webinfo::all();
        $keyed = $webinfo->pluck('values','title');
        $keyed->all();

        $title="首页";
        view()->share(compact('keyed','title'));

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
