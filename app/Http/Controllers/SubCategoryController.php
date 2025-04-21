<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index(){
        return view('admin.sub-category.index', ['categories'=>Category::all()]);
    }


    public function create(Request $request){
        SubCategory::newSubCategory($request);
        return back()->with('message','Category created successfully');
    }

    
    public function manage(){
        $sub_categories = SubCategory::with('category')->get();
        return view('admin.sub-category.manage',['sub_categories'=>$sub_categories]);
    }


    public function edit($id){
        $categories = Category::all();
        $sub_category = SubCategory::find($id);
        return view('admin.sub-category.edit',['categories'=>$categories, 'sub_category'=>$sub_category]);
    }

    public function update(Request $request, $id){
        SubCategory::updatedSubCategory($request, $id);
        return redirect('/sub-category/manage')->with('message','SubCategory Update Successfully');
    }


    public function delete($id){
        SubCategory::deletedSubCategory($id);
        return redirect('/sub-category/manage')->with('message','SubCategory Delete Successfully');
    }
}
