<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Slider;

class SliderController extends Controller
{
    public function index(){
        $slider = Slider::all();
        $baseUrl =  asset('');
        foreach ($slider as $sliderItem){
            $sliderItem->image = $baseUrl.$sliderItem->image ;
        }
        return response()->json($slider);
    }
}
