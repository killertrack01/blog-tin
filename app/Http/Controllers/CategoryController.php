<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function listCate() {
        return view('admin.category.list');
    }

    public function createCate() {
        return view('admin.category.create');
    }

    public function editCate() {
        return view('admin.category.edit');
    }
}
