<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{

    use HasFactory;

    protected $fillable = [ 'file','slug','title','dimention','user_id','is_published','downloads_count','views_count',];
    public static function makeDirectory(){

        $folder = 'images/'.date('Y/m/d');
        Storage::makeDirectory($folder);  
              
        return $folder;
        
    }
    public static function getDimention($image){
        
        [$width,$height] = \getimagesize(Storage::path($image));

        return $width."*".$height;
    }

    public static function scopePublished($query){
        
        return $query->where('is_published',true);
        
    }

    public function fileUrl(){
        
        return 'storage/'.$this->file;
    }

    public function link(){
        return route('images.show',$this->slug);
    }

}