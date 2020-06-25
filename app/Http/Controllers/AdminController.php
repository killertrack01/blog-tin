<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ProductRequest;

class AdminController extends Controller
{
    public function index() {
        return view('admin.index');
    }
    public function listAdmin() {
        return view('admin.control-admin.list');
    }
    public function createAdmin() {
        return view('admin.control-admin.create');
    }

    public function editAdmin() {
        return view('admin.control-admin.edit');
    }
}


