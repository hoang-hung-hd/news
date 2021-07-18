<?php

namespace App\Http\Repositories;

use App\Category;

class CategoryRepository {
    function getAll() {
        return  $categories = Category::all();
    }

    function findById($id) {
        return $category = Category::find($id);
    }

    function delete($category) {
        $category->delete();
    }

    function store($request)
    {
        $category = new Category();
        $category->name = $request['name'];
        $category->save();
    }
}
