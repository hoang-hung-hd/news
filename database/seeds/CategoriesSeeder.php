<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->name ="Công nghệ vật liệu";
        $category->save();

        $category = new Category();
        $category->name ="Công nghệ y học";
        $category->save();

        $category = new Category();
        $category->name ="Công nghệ robot";
        $category->save();

        $category = new Category();
        $category->name ="Công nghệ chế tạo";
        $category->save();
    }
}
