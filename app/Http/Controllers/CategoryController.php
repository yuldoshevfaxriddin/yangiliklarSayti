<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Yangilik;

class CategoryController extends Controller
{
    public function index(Request $request){
        $categorys = Category::all();
        if($request->id !== null){
            $delete_category = Category::find($request->id);
            $delete_category->delete();
            return redirect()->back()->with('status',$delete_category->name.' o\'chirildi');
        }
        return view('admin.category-add',['categorys'=>$categorys]);
    }
    
    public function store(Request $request){
        $category = new Category;
        $category->name = $request->category;
        $category->save();
        return redirect()->back()->with('status',$category->name.' qo\'shildi');
    }

    public function show(Request $request){
        $category = Category::find($request->id);
        
        return view('admin.category-edited',['category'=>$category]);
    }
    public function filter(Category $category){
        // $news = Yangilik::where('category_id',$category->id)->get();
        $news = Yangilik::orderBy('id', 'DESC')->get();
        return view('home',['news'=>$news]);
    }
    public function edit(Request $request){
        $category = Category::find($request->category_id);
        $old_name = $category->name;
        $category->name = $request->name;
        $category->update();
        return redirect()->route('admin-category')->with('status',$old_name.' '.$category->name.'ga  o\'zgartirildi');
    }

}
