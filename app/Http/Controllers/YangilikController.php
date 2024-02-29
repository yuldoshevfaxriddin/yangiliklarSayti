<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Yangilik;
use App\Models\Category;
use App\Models\Region;

class YangilikController extends Controller
{
    public function index(Request $request){
        $yangilik = Yangilik::all();
        $categorys = Category::all();
        $regions = Region::all();
        if($request->id !== null){
            $delete_Yangilik = Yangilik::find($request->id);
            $delete_Yangilik->delete();
            // delete file 
            Storage::delete($delete_Yangilik->photo);

            return redirect()->back()->with('status',$delete_Yangilik->name.' o\'chirildi');
        }
        return view('admin.news-add',['news'=>$yangilik,'categorys'=>$categorys,'regions'=>$regions]);
    }
    
    public function store(Request $request){
        $path = $request->file('image')->store('images');
        $category_name = Category::find($request->category);
        $region_name = Region::find($request->region);

        $Yangilik = new Yangilik;
        $Yangilik->photo = $path;
        $Yangilik->title = $request->title;
        $Yangilik->message = $request->message;
        $Yangilik->category_id = $category_name->name;
        $Yangilik->region_id = $region_name->name;
        $Yangilik->save();
        return redirect()->back()->with('status',$Yangilik->name.' qo\'shildi');
    }
    public function show(Request $request){
        $yangilik = Yangilik::find($request->id);
        // dd($yangilik);
        return view('admin.edited',['news'=>$yangilik,'categorys'=>Category::all(),'regions'=>Region::all()]);
    }
    public function edit(Request $request){
        $Yangilik = Yangilik::find($request->id);
        $old_name = $Yangilik->name;
        $Yangilik->name = $request->name;
        $Yangilik->update();
        return redirect()->route('admin-Yangilik')->with('status',$old_name.' '.$Yangilik->name.'ga  o\'zgartirildi');
    }
}
