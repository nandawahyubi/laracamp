<?php

namespace App\Http\Requests\Admin\Discount;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class Update extends FormRequest
{
    public function authorize()
    {
        return Auth::check() && Auth::user()->is_admin;
    }

    public function rules()
    {
        return [
            'name'        => 'required|string',
            'code'        => 'required|string|max:5|unique:discounts,code,'.$this->id.',id',
            'description' => 'nullable|string',
            'percentage'  => 'required|min:1|max:100|numeric'
        ];
    }
}
