<?php

namespace App\Models;

use App\Models\User;
use App\Models\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['title','user_id','image_id'];
 
    public function image()
    {
        return $this->belongsTo(Image::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function commentDate()
    {
       return $this->created_at->diffForHumans();
    }
    
    public function getUserName()
    {
        return $this->user->name;
    }

}