<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserPostController extends Controller
{
    public function listUPost() {
        return view('admin.userpost.list');
    }
}
