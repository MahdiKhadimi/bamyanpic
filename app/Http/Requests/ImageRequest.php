<?php

namespace App\Http\Requests;

use App\Models\Image;
use Illuminate\Foundation\Http\FormRequest;

class ImageRequest extends FormRequest
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
        if($this->method()=='PUT'){
           return [

           'title'=>'required'
            ];
        }
        
        return [
            'file'=>'required|image',
            'title'=>'required'            
        ];
    }


    public function handleRequest()
    {
        $data = $this->validated()+[
            'user_id'=>1,//$this->user()->id
            'is_published'=>1,
            

        ];

        if($this->hasFile('file')){
            
            $directory = Image::makeDirectory();
              
            $data['file']=$this->file->store($directory);
            $data['dimention'] = Image::getDimention($data['file']);

        }

        if($title=$data['title']){

            $data['slug'] = str()->slug($title).'-'.time();
        }
        
        return $data;
    }
    
}