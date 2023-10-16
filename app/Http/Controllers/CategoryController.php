<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $categories,$category;
    public function add()
    {
        return view('admin.category.add');
    }
    public function store(Request $request)
    {
        Category::newCategory($request);
        return back()->with('message','Category info created succesfully');
    }
    public function manage()
    {

        $this->categories= Category::all();
        return view('admin.category.manage',['categories'=>$this->categories]);
    }
}
