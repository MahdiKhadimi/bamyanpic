<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use auth;
use App\Models\Image;
use Illuminate\Http\Request;
use App\Http\Requests\FavoriteRequest;

class FavoriteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $favorites = Favorite::where([
            'user_id'=>auth::user()->id,
            'is_favorite'=>1
        ])->with(['image'])->paginate(15)->withQueryString();

        return view('image-favorite',compact('favorites'));
    }
    public function update(Image $image, FavoriteRequest $request)
    {
       return  $request->favoriteHandler($image);
    
    }

}