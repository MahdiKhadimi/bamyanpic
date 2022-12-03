<?php

namespace App\Models;

use auth;
use App\Models\User;
use App\Models\Comment;
use App\Models\Scopes\ImageSearchScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{

    use HasFactory;

    protected $fillable = [ 'file','slug','title','dimention','user_id','is_published','downloads_count','views_count',];
   
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    
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
    
    public function scopeVisibleFor($query,User $user)
    {
        if($user->role==='Admin'||$user->role==='Editor'){
            return;
        }

        return $query->where('user_id',$user->id);
    }

    public function fileUrl(){
        
        return 'storage/'.$this->file;
    }

    public function link(){
        return route('images.show',$this->slug);
    }

    public static function booted()
    {

        static::deleted(function($image){
            
            Storage::delete($image->file);
            
        });
        
        static::addGlobalScope(new ImageSearchScope);
    }

   public function uploadDate()
   {
       return $this->created_at->diffForHumans();
   }
 
   public function updateViewsCount()
   {
       $viewsCount = $this->views_count;
       if(auth::check()){
        request()->user()->id!==$this->user_id?$viewsCount++: $viewsCount;
       }else{
           $viewsCount++;
       }

       $this->update([
           'views_count'=>$viewsCount
        ]);

   }

   public function updateDownloadsCount()
   {
       
      $downloadsCount = $this->downloads_count;
    
        $downloadsCount++;
      
    
      $this->update([
        'downloads_count'=>$downloadsCount
      ]);
   
    }

    
}