<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::with('category', 'createdBy')->get();
        return view('admin.blogs.manage',['blogs' => $blogs]);
    }

    public function create()
    {
        $categories = BlogCategory::all();
        return view('admin.blogs.index', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ],[
            'title.required' => 'The title field is required.',
            'description.required' => 'The description field is required.',
        ]);
        $data = $request->all();

        if($request->file('image')){
            $data['image'] = Blog::getImageUrl($request);
        }
        
        $data['created_by'] = auth()->user()->id;
        Blog::create($data);

        return redirect()->route('blogs')->with('message','Blog created successfully.');
    }

    public function show($id){
        return view('admin.blogs.detail', ['blog' => Blog::find($id)]);
    }

    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('admin.blogs.edit',[
            'blog' => $blog,
            'categories' => BlogCategory::all()
        ]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'title' => 'required',
        ]);
        $data = $request->all();
        $old_data = Blog::find($id);

        if($request->file('image')){
            if(file_exists($old_data->image)){
                unlink($old_data->image);
            }
            $data['image'] = Blog::getImageUrl($request);
        }else{
            $data['image'] = $old_data->image;
        }
        $old_data->update($data);

        return redirect()->route('blogs')->with('message','Blog updated successfully.');
    }

    public function delete($id){
        $blog = Blog::find($id);
        if($blog->image != "" && file_exists($blog->image)){
            unlink($blog->image);
        }
        $blog->delete();
        return redirect()->route('blogs')->with('message','Blog deleted successfully.');
    }
}
