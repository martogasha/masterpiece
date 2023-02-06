<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    public function test(){
        return view('test');
    }
    public function gallery(){
        return view('gallery');
    }
    public function digital(){
        return view('digital');
    }
    public function large(){
        return view('large');
    }
    public function offsetPrinting(){
        return view('offset');
    }
    public function designLayout(){
        return view('designLayout');
    }
    public function outdoor(){
        return view('outdoor');
    }
    public function publication(){
        return view('publication');
    }
    public function brandingPromotion(){
        return view('brandingPromotion');
    }
    public function Packaging(){
        return view('packaging');
    }
    public function corporate(){
        return view('corporate');
    }
    public function infographics(){
        return view('infographics');
    }
    public function onlineAdvertising(){
        return view('onlineAdvert');
    }
    public function services(){
        return view('service');
    }
    public function aboutUs(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function client(){
        return view('client');
    }
    public function preview(){
        $pathToFile ="images/prof.pdf";
        return response()->file($pathToFile);

    }
    public function email(){

    }
}
