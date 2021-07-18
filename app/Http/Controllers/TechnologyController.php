<?php

namespace App\Http\Controllers;

use App\Http\Service\TechnologyService;
use http\Env\Response;
use Illuminate\Http\Request;

class TechnologyController extends Controller
{
    protected  $technologySer;

    public function __construct(TechnologyService $technologyService)
    {
        $this->technologySer = $technologyService;
    }

    public function getAll()
    {
        $technologies = $this->technologySer->getAll();
        return response()->json($technologies);
    }

    public function findById($id)
    {
        $technology = $this->technologySer->findById($id);
        return response()->json($technology);
    }

    public function findByCategory($id)
    {
        $technologies = $this->technologySer->findByCategory($id);
        return response()->json($technologies);
    }

    public function store(Request $request)
    {
        try {
            $data = $request->all();
            $this->technologySer->store($data);
            return  response()->json([
                'status'=>"create successfully!",
                'data'=>$data
            ]);
        }catch (\Exception $exception) {
            return response()->json($exception->getMessage());
        }
    }
}
