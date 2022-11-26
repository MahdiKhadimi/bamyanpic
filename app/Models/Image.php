<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{

    use HasFactory;

    public static function makeDirectory(){

        $folder = 'images/'.date('Y/m/d');

        Storage::makeDirectory($folder);
        
        
    }
    public static function getDimention($image){
        
        [$width,$height] = \getimagesize(Storage::path($image));

        return $width."*".$height;
    }

    public static function scopePublished($query){
        
        return $query->where('is_published',true);
        
    }

    public function fileUrl(){
        
        return Storage::url($this->file);
    }

    public function link(){
        return route('images.show',$this->slug);
    }

}