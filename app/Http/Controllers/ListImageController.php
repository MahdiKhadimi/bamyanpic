<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ListImageController extends Controller
{
    
    public function __invoke(Request $request)
    {
        $images = Image::published()->latest()->paginate(15)->withQueryString();
        
        return view('image-list',compact('images'));
    
    }
}