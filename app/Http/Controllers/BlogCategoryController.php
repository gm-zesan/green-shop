<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use Illuminate\Http\Request;
use DataTables;
class BlogCategoryController extends Controller
{
    public function index(){
        $categories = BlogCategory::get()->all();
        return view('admin.blog-categories.manage',['categories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
    */
    public function create()
    {
        return view('admin.blog-categories.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ],[
            'name.required' => 'The name field is required.',
        ]);
        $data = $request->all();
        BlogCategory::create($data);
        return redirect()->route('blog-category')->with('message','BlogCategory created successfully.');
    }

    
    public function edit($id)
    {
        $category = BlogCategory::find($id);
        return view('admin.blog-categories.edit',['category'=>$category]);
    }

    
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ],[
            'name.required' => 'The name field is required.',
        ]);
        $data = $request->all();
        $oldData = BlogCategory::find($id);
        $oldData->update($data);
        return redirect()->route('blog-category')->with('message','BlogCategory updated successfully.');
    }

    
    public function delete($id)
    {
        $category = BlogCategory::find($id);
        $category->delete();
        return redirect()->route('blog-category')->with('message','BlogCategory deleted successfully.');
    }

}
