<?php


namespace App\Http\Service;


use App\Http\Repositories\NewsRepository;
use App\News;

class NewsService
{
    protected $newsRepo;
    public function __construct(NewsRepository $newsRepository)
    {
        $this->newsRepo = $newsRepository;
    }

    public function getAll()
    {
         return  $this->newsRepo->getAll();
    }

    public  function getNews()
    {
        return $this->newsRepo->getNews();
    }
    public function getFirst()
    {
        return $this->newsRepo->getFirst();
    }

    public function getHotNews()
    {
        return $this->newsRepo->getHotNews();
    }

    public  function findById($id)
    {
        return $this->newsRepo->findById($id);
    }

    public function store($data)
    {
        $author = auth()->user()['name'];
        $new = new News();
        $new->fill($data);
        $new->author = $author;
        $this->newsRepo->store($new);
    }

    public function delete($id)
    {
        $new = $this->newsRepo->findById($id);
        $this->newsRepo->delete($new);
    }

}
