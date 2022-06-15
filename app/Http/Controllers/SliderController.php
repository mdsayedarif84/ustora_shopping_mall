<?php

namespace App\Http\Controllers;
use App\Models\Slider;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class SliderController extends Controller
{
    public function index(){
        return view('admin.slider.add-slider');
    }
    protected function slideImageUpload($request ){
        $slideImage           =   $request->file('image');
        $filetype = $slideImage->getClientOriginalExtension();
        $imageName = time(). '.' . $filetype;
        $directory              =   'uploads/';
        $imageUrl               =   $imageName;
        Image::make($slideImage)->resize(500, 300)->save($imageUrl);
        return $imageUrl;
    }
    protected function savesliderImage($request,$imageUrl){
        $addSlider              =   new Slider();
        $addSlider->heading     =   $request->heading;
        $addSlider->description =   $request->description;
        $addSlider->link        =   $request->link;
        $addSlider->link_name   =   $request->link_name;
        $addSlider->image = $imageUrl;
        $addSlider->status      =   $request->status;
        $addSlider->save();
    }
    public function store(Request $request){
        $imageUrl   =   $this->slideImageUpload($request);
        $this->savesliderImage($request, $imageUrl);

        // if($request->hasfile('image')){
        //     $file       =   $request->file('image');
        //     $extension  =   $file->getClientOriginalExtension();
        //     $fileName   =   time().'.'.$extension;
        //     $file->move('uploads', $fileName); 
        //     $addSlider->image   =   $fileName;    
        // }
        
        return redirect('add-slider')->with('message','Slider Image Save Successfully');
    }
    public function manageSlider(){
        $sliderImages   =  Slider::all();
        return $sliderImages;
        return view('admin.slider.manage-slider',['sliderImages'=>$sliderImages]);
    }
    public function editSlider($id){
        $sliderImage   =   Slider::find($id);
        return view('admin.slider.edit-slider',compact('sliderImage'));
    }
    
    public function sliderBasicInfo($slider, $request, $imageUrl=NULL){
        $slider->heading             =   $request->heading;
        $slider->description         =   $request->description;
        $slider->link                =   $request->link;
        $slider->link_name     =   $request->link_name;
        if ($imageUrl) {
            $slider->image     =   $imageUrl;
        }
        $slider->status       =   $request->status;
        $slider->save();
    }
    public function updateSlider(Request $request){
            $slideImage   =   $request->file('image');
            return $slideImage;
            $slider                      =    Slider::find($request->slider_id);
            if ($slideImage){
                unlink($slider->image);
                $imageUrl                   =   $this->slideImageUpload($request);
                $this->sliderBasicInfo($slider, $request, $imageUrl);
            }else{
                $this->sliderBasicInfo($slider, $request);
            }

             return redirect('add-slider')->with('message','Slider  Update Successfully');
            
            // $destinaton     =  'uploads/slider/'.$sliderImage->image;
            // if(file::exist($destinaton)){
            //     file::delete($destinaton); 
            // if($request->hasfile('image')){
            //     $file       =   $request->file('image');
            //     $extension  =   $file->getClientOriginalExtension();
            //     $fileName   =   time().'.'.$extension;
            //     $file->move('uploads/slider/', $fileName); 
            //     $addSlider->image   =   $fileName;    
            // }
        
        // return redirect('add-slider')->with('message','Slider Image Update Successfully');
    }
}
