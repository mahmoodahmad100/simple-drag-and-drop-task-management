<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
        switch ($this->method())  {
            case 'GET':
            case 'DELETE': {
                return [];
            }
            case 'POST': {
                return [
                    'name'        => 'required|max:200',
                    'description' => 'nullable'
                ];
            }
            case 'PUT': {
                return [
                    'name'        => 'nullable|max:200',
                    'description' => 'nullable'
                ];
            }
            case 'PATCH': {
                return [];
            }
        }
    }
}