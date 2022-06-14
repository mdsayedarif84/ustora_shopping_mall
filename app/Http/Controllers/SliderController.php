<?php

namespace App\Http\Controllers;
use App\Models\Slider;

use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index(){
        return view('admin.slider.add-slider');
    }
    public function store(Request $request){
        $addSlider                           =   new Slider();
        $addSlider->heading            =   $request->heading;
        $addSlider->description     =   $request->description;
        $addSlider->link     =   $request->link;
        $addSlider->link_name     =   $request->link_name;
        if($request->hasfile('image')){
            $file       =   $request->file('image');
            $extension  =   $file->getClientOriginalExtension();
            $fileName   =   time().'.'.$extension;
            $file->move('uploads/slider/', $fileName); 
            $addSlider->image   =   $fileName;    
        }
        $addSlider->status       =   $request->status;
        $addSlider->save();
        return redirect('add-slider')->with('message','Slider Image Save Successfully');
    }
    public function manageSlider(){
        $sliderImages   =  Slider::all();
        return view('admin.slider.manage-slider',['sliderImages'=>$sliderImages]);
    }
    public function editSlider($id){
        $sliderImage   =   Slider::find($id);
        return view('admin.slider.edit-slider',compact('sliderImage'));
    }
}
