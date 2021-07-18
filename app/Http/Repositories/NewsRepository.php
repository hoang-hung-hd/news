<?php

namespace App\Http\Repositories;

use App\News;


class NewsRepository {
    public  function getAll()
    {
       return  $news = News::all();
    }

    public  function getNews()
    {
         return $news = News::orderBy('id','DESC')->limit(3)->get();
    }

    public function getHotNews()
    {
        return $news = News::orderBy('views','DESC')->limit(5)->get();
    }

    public function store($new)
    {
        $new->save();
    }

    public  function findById($id)
    {
        $this->incrementView($id);
        $new = News::find($id);
        return $new;
    }

    public  function  delete($new)
    {
         $new->delete();
    }

    public  function search($data)
    {
        return DB::table('v_books')
            ->where('title', 'LIKE', "%$data%")
            ->orWhere('author', 'LIKE', "%$data%")
            ->orderBy('title', 'ASC')
            ->get();
    }

    public  function incrementView($id)
    {
        $new = News::find($id);
        $new->views +=1;
        $new->save();
    }
}
