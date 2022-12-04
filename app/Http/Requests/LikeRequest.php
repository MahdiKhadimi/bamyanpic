<?php

namespace App\Http\Requests;

use auth;
use App\Models\Like;
use Illuminate\Foundation\Http\FormRequest;

class LikeRequest extends FormRequest
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

    public function likeHandler($image)
    {
        $image_id = $image->id;
        $user_id = auth::user()->id;

       
        $result = Like::where([
            'image_id'=>$image_id,
            'user_id'=>$user_id
        ]
        )->first();

        
        if($result){
            Like::where([
                'image_id'=>$image_id,
                'user_id'=>$user_id
            ])->update([
                'is_like'=>$this->is_like
            ]);
        }else{
            Like::insert([
                'image_id'=>$image_id,
                'user_id'=>$user_id,
                'is_like'=>$this->is_like
            ]);
        }
        
       return redirect()->back();
    }
}