<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            
              'slug'=>'required |unique:users,slug',
              'name'          => 'required | min:4 | max:64',
              'title_job'     => 'required | min:5 | max:64',
              'tel'           => '  max:15',
              'address'       => 'min:10 | max:128',
              'file'          => 'image:jpg | dimensions:min_width=100,min_height=200 ',
              'mensaje'=> '  max:64',
              'image'=> 'image:jpg | dimensions:min_width=100,min_height=200 ',
              'address'=> ' min:5 | max:64',
              'email'=> 'required |min:5 | max:64',
              'about'=> 'min:5 | max:64',
              'about_title'=> ' max:64',
              'about_image'=> 'image:jpg | dimensions:min_width=100,min_height=200 ',
              'about_button'=> ' required |min:5 | max:64',
              'what_title'=> ' max:64',
              'techskill_title'=> 'max:64',
              'profskill_title'=> 'max:64',
              'education_title'=> 'max:64',
              'work_title'=> 'max:64',
        ];
    }
}
