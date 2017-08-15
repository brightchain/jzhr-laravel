<?php

namespace App\Providers;

use App\Model\Post;
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
        $jzhr=Post::where('columns','j')
        ->where('top','1')
        ->orderBy('order')
        ->orderBy('created_at','DESC')
        ->take('2')
        ->get();
        $title="首页";
        view()->share(compact('keyed','title','jzhr'));

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
