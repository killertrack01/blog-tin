<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Category;
class CategoryController extends Controller
{
    public function listCate() {
        $Cate = Category::all();
        return view('admin.category.list',['cate'=>$Cate]);
    }

    public function createCate() {
        return view('admin.category.create');
    }

    public function editCate() {
        return view('admin.category.edit');
    }
}
