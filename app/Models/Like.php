<?php

namespace App\Models;

use App\Models\User;
use App\Models\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Like extends Model
{
    use HasFactory;

  
    protected $fillable = ['image_id','user_id','is_like'];

    const LIKE = 1;
    const NOT_LIKE = 0;

  public function user()
  {
      return $this->belongsTo(User::class);
  }

  public function image()
  {
      return $this->belongsTo(Image::class);
  }
  
}