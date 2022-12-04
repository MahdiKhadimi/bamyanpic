<?php

namespace App\Http\Controllers;

use auth;
use App\Models\Image;
use Illuminate\Http\Request;
use App\Http\Requests\LikeRequest;

class LikeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function update(Image $image, LikeRequest $request)
    {
       return  $request->likeHandler($image);
    
   
    }
    
}