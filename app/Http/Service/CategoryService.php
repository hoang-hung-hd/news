<?php
namespace App\Http\Service;

use App\Http\Repositories\CategoryRepository;

class CategoryService {

    protected $categoryRepo;
    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepo = $categoryRepository;

    }
    public  function getAll() {
        return $categories = $this->categoryRepo->getAll();
    }

    public  function findById($id)
    {
        return $this->categoryRepo->findById($id);
    }

    public  function delete($id)
    {
        $category = $this->categoryRepo->findById($id);
        $this->categoryRepo->delete($category);
    }

    public function store($request)
    {
        $this->categoryRepo->store($request);

    }
}
