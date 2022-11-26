<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function index(){
        $images = Image::published()->latest()->paginate(10);
        
        
        return view('image.index',compact('images'));
    }
}