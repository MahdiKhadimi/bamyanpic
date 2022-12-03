<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;

class CommentController extends Controller
{

   
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function store(CommentRequest $request)
     {
         Comment::create($request->handleRequest());   
         return back();  
    }
   
}