<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    protected $categoryControll;
    protected $newControll;
    public function __construct(CategoryController $categoryController,NewsController $newsController)
    {
//        $this->middleware('auth');
        $this->categoryControll= $categoryController;
        $this->newControll = $newsController;
    }

    public function index()
    {
        $categories = $this->categoryControll->getAll();
        $allNews = $this->newControll->getAll();
        return view('layouts.app');
    }
}
