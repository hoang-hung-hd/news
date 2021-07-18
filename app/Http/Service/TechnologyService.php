<?php


namespace App\Http\Service;


use App\Http\Repositories\TechnologyRepository;
use App\Technology;

class TechnologyService
{
    protected $technologyRepo;

    public function __construct(TechnologyRepository $technologyRepository)
    {
        $this->technologyRepo = $technologyRepository;
    }

    public function getAll()
    {
        return $this->technologyRepo->getAll();
    }

    public function findById($id)
    {
        return $this->technologyRepo->findById($id);
    }

    public function findByCategory($id)
    {
        return $this->technologyRepo->findByCategory($id);
    }

    public function store($data)
    {
        $technology = new Technology();
        $technology->fill($data);
        $technology->author = auth()->user()['name'];
        $this->technologyRepo->store($technology);
    }

}
