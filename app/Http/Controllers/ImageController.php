<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use App\Http\Requests\ImageRequest;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function index(){
        $images = Image::published()->latest()->paginate(10);
        
        
        return view('image.index',compact('images'));
    }

    public function show(Image $image){
        return view('image.show',compact('image'));
    }

    public function create(){
        return view('image.create');
        
    }

    public function store(ImageRequest $request){
        Image::create($request->handleRequest());

        return \redirect()->route('images.index')->with('message','Image has been uploaded successfully');
    }

    public function edit(Image $image){
       
        return view('image.edit',compact('image'));
    }

    public function update(Image $image,ImageRequest $request){
        $image->update($request->handleRequest());

        return \redirect()->route('images.index')->with('message','Image has been updated successfully');
    }
}