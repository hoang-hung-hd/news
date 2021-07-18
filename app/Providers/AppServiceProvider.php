<?php

namespace App\Providers;

use App\Category;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;
use App\News;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{


    public function __construct()
    {
    }

    public function register()
    {
    }

    public function boot()
    {
        $categories = Category::all();
        $newsAll = News::all();
        View::share('categories',$categories);
        View::share('newsAll',$newsAll);

    }
}
