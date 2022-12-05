<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use App\Models\Scopes\FavoriteSearchScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Favorite extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id','image_id','is_favorite'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function image()
    {
        return $this->belongsTo(Image::class);
    }
 
    

}