<?php

namespace App\Providers;

use App\Category;
use App\News;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public function boot()
    {
        $categories = Category::all();
        $newAll = News::all();
//        echo "<pre>";
//        dd($newAll);
        View::share('categories',$categories);
        View::share('newAll',$newAll);
    }
}
