<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSoldAddressRequest extends FormRequest
{

    public function authorize(): bool
    {
        return false;
    }

    public function rules(): array
    {
        return [
            //
        ];
    }

    public function messages(){
    return [

    ];
    }

    public function bodyParameters(){
        return [

        ];
        }
}
