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
    
    public function store(Request $request){
        $region = new Region;
        $region->name = $request->region;
        $region->save();
        return redirect()->back()->with('status',$region->name.' qo\'shildi');
    }
    public function show(Request $request){
        $region = Region::find($request->id);
        return view('admin.edited',['edit_form_name'=>'Region ni o\'zgartirish','edit_adress'=>route('admin-region-edit'),'edit_type'=>'Region','region'=>$region]);
    }
    public function edit(Request $request){
        $region = Region::find($request->id);
        $old_name = $region->name;
        $region->name = $request->name;
        $region->update();
        return redirect()->route('admin-region')->with('status',$old_name.' '.$region->name.'ga  o\'zgartirildi');
    }
}
