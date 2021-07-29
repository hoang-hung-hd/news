<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    protected $categoryControll;
    protected $newControll;
    protected $techController;
    public function __construct(CategoryController $categoryController,NewsController $newsController,TechnologyController $technologyController)
    {
//        $this->middleware('auth');
        $this->categoryControll= $categoryController;
        $this->newControll = $newsController;
        $this->techController = $technologyController;
    }

    public function index()
    {
        $newFirst = $this->newControll->getFirst();
        $newsHot = $this->newControll->getHotNews();
        $news = $this->newControll->getNews();
        dd($newFirst);
        return view('home',compact('newFirst','newsHot','news'));
    }
}
