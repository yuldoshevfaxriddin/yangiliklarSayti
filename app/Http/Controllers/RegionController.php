<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Region;

class RegionController extends Controller
{
    public function index(Request $request){
        $regions = Region::all();
        if($request->id !== null){
            $delete_region = Region::find($request->id);
            $delete_region->delete();
            return redirect()->back()->with('status',$delete_region->name.' o\'chirildi');
        }
        return view('admin.region-add',['regions'=>$regions]);
    }
    public function filter(Region $region){
        // $news = Yangilik::where('region_id',$region->id)->get();
        $news = Yangilik::orderBy('id', 'DESC')->get();
        return view('home',['news'=>$news]);
    }

    public function store(Request $request){
        $region = new Region;
        $region->name = $request->region;
        $region->save();
        return redirect()->back()->with('status',$region->name.' qo\'shildi');
    }
    public function show(Request $request){
        $region = Region::find($request->id);
        return view('admin.region-edited',['region'=>$region]);
    }
    public function edit(Request $request){
        $region = Region::find($request->region_id);
        $old_name = $region->name;
        $region->name = $request->name;
        $region->update();
        return redirect()->route('admin-region')->with('status',$old_name.' '.$region->name.'ga  o\'zgartirildi');
    }
}
