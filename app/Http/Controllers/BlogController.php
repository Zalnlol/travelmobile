<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{

    //Mở trang blog
    public function blog()
    {

        $data = Blog::OrderBy("created_at", "DESC")->paginate(6);

        return view("blog", compact("data"));
    }

    public function get()
    {

        $ds = Blog::OrderBy("created_at", "DESC")->paginate(6);

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
        if ($request->hasFile('blog_pic')) {
            $file = $request->file('blog_pic');
            $extension = $file->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect('admin/blog/create')->with('loi', 'Bạn chỉ được chọn file có đuôi jpg,png,jpeg');
            }
            $imageName = $file->getClientOriginalName();
            $file->move("img/Blog", $imageName);
        } else {
            $imageName = null;
        }
        $p = new Blog($blog);
        $p->blog_pic = $imageName;
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
        if ($request->hasFile('blog_pic')) {
            $file = $request->file('blog_pic');
            $extension = $file->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect('admin/blog/editBlog')->with('loi', 'Bạn chỉ được chọn file có đuôi jpg,png,jpeg');
            }
            $imageName = $file->getClientOriginalName();
            $file->move("img/Blog", $imageName);
        } else {
            $b = Blog::find($request->blog_id);
            $imageName = $b->blog_pic;
        }
        $b = new Blog($blog);

        $b->blog_pic = $imageName;
        // dd($b);
        $b->exists = true;
        $b->save(); //insert $b vo bang tbbook

        return redirect('/admin/blog'); //quay ve trang book index
    }

    public function DetailBlog($blog_id)
    {
        $blog = Blog::find($blog_id);
        //dd($blog);
        return view("Admin-Blog.blog-view", compact('blog'));
    }

    public function DetailPostLog(Request $request)
    {
        $blog = $request->all();

        $imageName = '';
        if ($request->hasFile('blog_pic')) {
            $file = $request->file('blog_pic');
            $extension = $file->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect('admin/blog/DetailsBlog')->with('loi', 'Bạn chỉ được chọn file có đuôi jpg,png,jpeg');
            }
            $imageName = $file->getClientOriginalName();
            $file->move("img/Blog", $imageName);
        } else {
            $b = Blog::find($request->blog_id);
            $imageName = $b->blog_pic;
        }
        $b = new Blog($blog);

        $b->blog_pic = $imageName;
        // dd($b);
        $b->exists = true;
        $b->save(); //insert $b vo bang tbbook

        return redirect('/admin/blog'); //quay ve trang book index
    }
}
