<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Category;

class CategoryController extends Controller
{

    public function listCate()
    {
        $Cate = Category::all();
        return view('admin.category.list', ['cate' => $Cate]);
    }

    public function createCate()
    {
        return view('admin.category.create');
    }

    public function editCate($id)
    {
        $cate = Category::find($id);
        return view('admin.category.edit', ['cate' => $cate]);
    }
    public function postEditCate(Request $request, $id)
    {

        $cate = Category::find($id);
        $this->validate(
            $request,
            [
                'name' => 'required|min:2|max:100'
            ],
            [
                'name.required' => 'Bạn chưa nhập tên thể loại cho bài viết',
                'name.min' => 'Tên thể loại phải đạt ít nhất 3 kí tự',
                'name.max' => 'Tên thể loại không được vượt quá 100 kí tự'
            ]
        );
        $cate->name = $request->name;
        $cate->description = $request->description;
        $cate->save();

        return redirect('admin/category/edit/' . $id)->with('alert', 'Sửa tên loại bài thành công ');
    }

    public function cateDelete($id)
    {
        $cate = Category::find($id);
        $cate->delete();
        return redirect('admin/category/list')->with('alert', 'xóa thành công');
    }

    public function postCate(Request $request)
    {
        $this->validate(
            $request,
            [
                'cateName' => 'required|min:2|max:100'
            ],
            [
                'cateName.required' => 'Bạn chưa nhập tên thể loại cho bài viết',
                'cateName.min' => 'Tên thể loại phải đạt ít nhất 3 kí tự',
                'cateName.max' => 'Tên thể loại không được vượt quá 100 kí tự'
            ]
        );
        $Cate = new Category;
        $Cate->name = $request->cateName;
        $Cate->description = $request->description;
        $Cate->save();

        return redirect('admin/category/create')->with('alert', 'Thêm thành công');
    }
}
