<?php

namespace App\Providers;

use App\Category;
use App\News;
use App\Technology;
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
        $data = [];
        for ($i =0;$i < count($categories); $i++){
                $cateId = $categories[$i]->id;
                $technologies= Technology::where('category',$cateId)->get();
                $data[$cateId]=$technologies;
        }
//        $data['category']=$categories;
//        dd($data["category"]);
        foreach ($data as $key=>$value )
//        for($j=0;$j< count($data);$j ++)
        {
//            echo "<pre>";
//            var_dump($value);
        }

        $time = now();
        View::share('categories',$categories);
        View::share('data',$data);
//        View::share('technologies',$technologies);
        View::share('time',$time);

    }
}
