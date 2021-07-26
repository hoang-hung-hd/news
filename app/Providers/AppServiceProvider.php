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
    public function register()
    {
    }

    public function boot()
    {
        $categories = Category::all();
        $newFirst = News::orderBy('id','DESC')->limit(1)->get();
        $newsHot = News::orderBy('views','DESC')->limit(5)->get();
        $news = News::orderBy('id','DESC')->offset(1)->limit(3)->get();
        $time = now();
        View::share('categories',$categories);
        View::share('newsHot',$newsHot);
        View::share('news',$news);
        View::share('newFirst',$newFirst);
        View::share('time',$time);

    }
}
