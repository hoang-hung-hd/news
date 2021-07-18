<?php


namespace App\Http\Repositories;


use App\Technology;

class TechnologyRepository
{
    public function getAll()
    {
       return $technologies = Technology::all();
    }

    public  function findByCategory($id)
    {
        return $technologies = Technology::where('category',$id)->get();
    }

    public  function findById($id)
    {
        return $technology = Technology::find($id);
    }

    public  function delete($id)
    {
        $technology = $this->findById($id);
        $technology->delete();
    }

    public function store($technology)
    {
        $technology->save();
    }



}
