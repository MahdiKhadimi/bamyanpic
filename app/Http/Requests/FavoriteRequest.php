<?php

namespace App\Http\Requests;

use auth;
use App\Models\Favorite;
use Illuminate\Foundation\Http\FormRequest;

class FavoriteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
        ];
    }

    public function favoriteHandler($image)
    {
        $image_id = $image->id;
        $user_id = auth::user()->id;
     
       
        $result = Favorite::where([
            'image_id'=>$image_id,
            'user_id'=>$user_id
        ]
        )->first();

        
        if($result){
            Favorite::where([
                'image_id'=>$image_id,
                'user_id'=>$user_id
            ])->update([
                'is_favorite'=>$this->is_favorite
            ]);
        }else{
            Favorite::insert([
                'image_id'=>$image_id,
                'user_id'=>$user_id,
                'is_Favorite'=>$this->is_favorite
            ]);
        }
        
       return redirect()->back();
    }

    
}