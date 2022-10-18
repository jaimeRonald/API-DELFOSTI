<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
class categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $cate=new Category();
        $cate->name='cate1';
         

        $cate->save();

        $cate2=new Category();
        $cate2->name='cate2';
         

        $cate2->save();

    }
}
