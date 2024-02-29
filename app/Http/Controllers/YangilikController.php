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

        $Yangilik = new Yangilik;
        $Yangilik->photo = $path;
        $Yangilik->user_id = 3;
        $Yangilik->title = $request->title;
        $Yangilik->message = $request->message;
        $Yangilik->category_id = $request->category;
        $Yangilik->region_id =$request->region;
        $Yangilik->save();
        return redirect()->back()->with('status','Yangilik qo\'shildi');
    }
    public function show(Request $request){
        $news = Yangilik::find($request->id);
        // dd($yangilik);
        return view('admin.edited',['news'=>$news,'categorys'=>Category::all(),'regions'=>Region::all()]);
    }
    public function edit(Request $request){
        // dd($request);
        
        $Yangilik = Yangilik::find($request->news_id);
        
        if($request->file('image')){
            $path = $request->file('image')->store('images');
            // delete file 
            Storage::delete($Yangilik->photo);
        }

        $Yangilik->title = $request->title;
        $Yangilik->photo = $path ?? $Yangilik->photo;
        $Yangilik->category_id = $request->category;
        $Yangilik->region_id = $request->region;
        $Yangilik->message = $request->message;
        // dd($Yangilik);
        $Yangilik->update();
        return redirect()->route('admin-news')->with('status','Malumotlar yangilandi');
    }
}
