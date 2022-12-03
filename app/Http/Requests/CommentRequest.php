<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Mail\Message;

class CommentRequest extends FormRequest
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
            'title'=>'required'
        ];
    }
    
    public function message()
    {
        return [
            'title.required'=>'Please Enter The :attribute',
        ];
    }

    public function handleRequest()
    {
        $data = [
            'user_id'=>auth()->user()->id,
        ];
        $data+= $this->all();

        return $data;
    } 
}