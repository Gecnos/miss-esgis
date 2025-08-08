<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMediaFilterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'id'=>'required_without:idmiss|exists:medias,id',
            'idmiss'=>'required_without:id|exists:misses,id',
            'photo' => 'image|mimes:jpg,jpeg,png,gif|max:2048',
            'video' => 'mimes:mp4,avi,mov|max:100000'
        ];
    }
}
