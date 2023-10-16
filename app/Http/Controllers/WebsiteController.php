<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    private $blogs,$blog;
    public function index(){
        $this->blogs= Blog::orderBy('id','desc')->get();
        return view('website.home.index',['blogs'=> $this->blogs]);
    }
    public function category(){
        return view('website.category.index');
    }
    public function blog(){

        return view('website.blog.index');
    }
    public function single($id){
        $this->blog= Blog::find($id);
        return view('website.single.index',['blog'=>$this->blog]);
    }
}
