<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ShowImageController extends Controller
{
   
    public function __invoke(Image $image, Request $request)
    {
        $image->updateViewsCount();
        return view('image-show',compact('image'));
    }
}