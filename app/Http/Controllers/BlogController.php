<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //Mở trang blog
    public function blog()
    {
        $data = Blog::all();

        return view("blog", compact("data"));
    }

    public function get()
    {
        $ds = Blog::all();
        return view('Admin-Blog.blog-index', compact('ds'));
    }


    //ham tao
    public function createBlog()
    {
        return view('Admin-Blog.blog-create');
    }

    public function postCreateBlog(Request $request)
    {
        // nhận tất cả tham số vào mảng product
        $blog = $request->all();
        // xử lý upload hình vào thư mục
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $extension = $file->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect('admin/blog/create')->with('loi', 'Bạn chỉ được chọn file có đuôi jpg,png,jpeg');
            }
            $imageName = $file->getClientOriginalName();
            $file->move("images", $imageName);
        } else {
            $imageName = null;
        }
        $p = new Blog($blog);
        $p->image = $imageName;
        $p->save();

        return redirect("/admin/blog");
    }


    //ham xoa
    public function deleteBlog($blog_id)
    {
        $blog = Blog::find($blog_id);
        $blog->delete();
        return redirect("/admin/blog");
    }


    //ham cap nhat
    public function editBlog($blog_id)
    {
        $blog = Blog::find($blog_id);


        return view('Admin-Blog.blog-edit', compact('blog'));
    }

     
    public function editPostBlog(Request $request)
    {
        $blog = $request->all();

        $imageName = '';
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $extension = $file->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect('admin/blog/editBlog')->with('loi', 'Bạn chỉ được chọn file có đuôi jpg,png,jpeg');
            }
            $imageName = $file->getClientOriginalName();
            $file->move("img", $imageName);
        } else {
            $b = Blog::find($request->id);
            $imageName = $b->blog_pic;
        }
        $b = new Blog($blog);

        $b->picture = $imageName;
        $b->exists = true;
        $b->save(); //insert $b vo bang tbbook

        return redirect('/admin/book'); //quay ve trang book index
    }
}
