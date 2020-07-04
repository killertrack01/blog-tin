<?php

use Illuminate\Database\Seeder;

class Category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            ['id'=>1,'name'=>'mobile','description'=>'Các tin tức về điện thoại mới nhất'],
            ['id'=>2,'name'=>'laptop','description'=>'Các tin tức về laptop mới nhất'],
            ['id'=>3,'name'=>'pc','description'=>'Các tin tức về pc mới nhất'],
            ['id'=>4,'name'=>'phụ kiện','description'=>'Các tin tức về phụ kiện mới nhất'],
        ]);
    }
}
