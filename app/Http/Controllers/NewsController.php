<?php

namespace App\Http\Controllers;

use App\Http\Service\NewsService;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    protected $newsSer;
    public function __construct(NewsService $newsService)
    {
        $this->newsSer = $newsService;
    }

    public  function getAll()
    {
        return $allNews = $this->newsSer->getAll();
        return view('new.new',compact('allNews'));

    }

    public  function getNews()
    {
        $news = $this->newsSer->getNews();
        return response()->json($news);
    }

    public function getHotNews()
    {
        $hotNews = $this->newsSer->getHotNews();
        return response()->json($hotNews);
    }

    public  function findById($id)
    {
        $new = $this->newsSer->findById($id);
        return response()->json($new);
    }

    public  function store(Request $request)
    {
        $data = $request->all();
        try {
            $this->newsSer->store($data);
            return  response()->json([
                'status'=>'success',
                'data'=>$data
            ]);
        }catch (\Exception $exception) {
            return response()->json($exception->getMessage());
        }

    }

    public function delete($id)
    {
        try {
            $this->newsSer->delete($id);
        }catch (\Exception $exception) {
            return response()->json($exception->getMessage());
        }
    }
}
