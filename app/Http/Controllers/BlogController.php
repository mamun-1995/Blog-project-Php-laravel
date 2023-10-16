<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $categories,$blogs,$blog;

    public function add()
    {
        $this->categories= Category::all();
        return view('admin.blog.add',['categories'=>$this->categories]);
    }
    public function store(Request $request)
    {
      Blog::newBlog($request);
        return back()->with('message','Blog info created successfully');
    }
    public function manage()
    {
        $this->blogs= Blog::all();
        return view('admin.blog.manage',['blogs'=>$this->blogs]);
    }
}
