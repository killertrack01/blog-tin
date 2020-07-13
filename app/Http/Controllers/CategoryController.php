<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Suppor\t\Collection;
use Illuminate\Http\Request;
use App\Category;
use App\Post;
use App\User;

class CategoryController extends Controller
{

    public function listCate()
    {
        $cate = Category::all();
        return view('admin.category.list', compact('cate'));
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
                'name' => 'required|min:2|max:100',
                'name'=>'unique:category,name,'.$cate->id,
                'description' => 'required',
            ],
            [
                'name.required' => 'Bạn chưa nhập tên thể loại cho bài viết',
                'name.min' => 'Tên thể loại phải đạt ít nhất 3 kí tự',
                'name.max' => 'Tên thể loại không được vượt quá 100 kí tự',
                'name.unique'=>'Tên đã tồn tại',
                'description.required' => 'Bạn chưa nhập mô tả',
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
                'cateName' => 'required|min:2|max:100',
                'cateName'=>'unique:category,name',
                'description' => 'required',
            ],
            [
                'cateName.required' => 'Bạn chưa nhập tên thể loại cho bài viết',
                'cateName.min' => 'Tên thể loại phải đạt ít nhất 3 kí tự',
                'cateName.max' => 'Tên thể loại không được vượt quá 100 kí tự',
                'cateName.unique'=>'Tên đã tồn tại',
                'description.required' => 'Bạn chưa nhập mô tả',
            ]
        );
        $Cate = new Category;
        $Cate->name = $request->cateName;
        $Cate->description = $request->description;
        $Cate->save();

        return redirect('admin/category/create')->with('alert', 'Thêm thành công');
    }

    public function cateDetail(Request $request,$id)
    {
        $catemain = Category::find($id);
        $post = Post::where('category_id', $id)->where('status',1)->paginate(5);
        $sort=$post->sortByDesc('id');
        return view('listcate.cate_detail', compact('catemain','post','sort'));
    }
}
