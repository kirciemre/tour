<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EducationAddRequest extends FormRequest
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
            "date"=>"required|max:255",
            "uni"=>"required|max:255",
            "branch"=>"required|max:255",
        ];
    }

    public function messages(){
        return [
            "date.required"=>"You have to fill Education date!",
            "date.max"=>"Maximum length was exceeded!",

            "uni.required"=>"You have to fill University name!",
            "uni.max"=>"Maximum length was exceeded!",

            "branch.required"=>"You have to fill branch!",
            "branch.max"=>"Maximum length was exceeded!",


        ];

    }
}
