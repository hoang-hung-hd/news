<?php

namespace App\Http\Controllers;

use App\Http\Service\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    protected $categorySer;

    public function __construct(CategoryService $categoryService)
    {
        $this->categorySer = $categoryService;
    }

    public  function getAll()
    {
        return $categories = $this->categorySer->getAll();
//        return view('category.category',compact('categories'));
    }
    public  function store(Request $request)
    {
        $data = $request->all();
        $this->categorySer->store($data);
        if ($data) {
            return response()->json([
                'status' => 'success'
            ]);
        } else {
            return response()->json([
                'status' => 'error'
            ]);
        }
    }
    public function findById($id)
    {
        $data= $this->categorySer->findById($id);
        return response()->json($data);
    }

    public  function delete($id) {
        try {
            $this->categorySer->delete($id);
            return response()->json([
                'status' => 'success'
            ], 200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 404);
        }
    }
}
